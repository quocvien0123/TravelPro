<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;

class PasswordController extends Controller
{
    // Hiển thị form quên mật khẩu
    public function showForgotForm()
    {
        return view('auth.passwords.email'); // Tạo view email.blade.php cho form
    }

    // Gửi link reset mật khẩu qua email
    public function sendResetLink(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
        ]);

        $user = User::where('email', $request->email)->first();

        if ($user) {
            $token = Str::random(60);

            // Lưu token vào cơ sở dữ liệu
            DB::table('password_resets')->updateOrInsert(
                ['email' => $request->email],
                ['token' => $token, 'created_at' => now()]
            );

            // Gửi email
            if (!$this->sendResetEmail($request->email, $token)) {
                // return back()->withErrors(['email' => 'Gửi email thất bại. Vui lòng thử lại sau.']);
                toastr()->error("Gửi Email thất bại! Vui lòng thử lại");
                return back();
            }
            toastr()->success("Đã gửi email reset mật khẩu.");
            return back();
        }
        toastr()->error("Email không tồn tại!");
        return back();
    }



    // Hàm gửi email
    protected function sendResetEmail($email, $token)
    {
        try {
            $mail = new PHPMailer(true);

            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = env('MAIL_USERNAME');
            $mail->Password = env('MAIL_PASSWORD');
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
            $mail->Port = 465;

            $mail->setFrom(env('MAIL_FROM_ADDRESS'), env('MAIL_FROM_NAME'));
            $mail->addAddress($email);
            $mail->CharSet = 'UTF-8';
            $mail->Subject = 'Đặt lại mật khẩu của bạn';

            $resetLink = route('password.reset', ['token' => $token]);


            $body = view('emails.reset_password', [
                'resetLink' => $resetLink,

            ])->render();

            $mail->isHTML(true);
            $mail->Body = $body;

            $mail->send();
            return true;
        } catch (Exception $e) {
            Log::error("Email sending failed: {$e->getMessage()}");
            return false;
        }
    }

    public function showResetForm($token)
    {
        return view('auth.passwords.reset', ['token' => $token]);
    }
    public function resetPassword(Request $request)
    {

        if ($request->password !== $request->password_confirmation) {
            toastr()->error('Mật khẩu và xác nhận mật khẩu không khớp!');
            return redirect()->back();
        }
        // Kiểm tra token có hợp lệ không
        $reset = DB::table('password_resets')->where([
            'email' => $request->email,
            'token' => $request->token,
        ])->first();

        if (!$reset) {
            toastr()->error("Email nhập không chính xác!");
            return back();
        }

        // Cập nhật mật khẩu người dùng
        $user = User::where('email', $request->email)->first();
        if (!$user) {
            return back()->withErrors(['email' => 'Email không tồn tại.']);
        }
        $user->update(['password' => bcrypt($request->password)]);

        // Xóa thông tin token đã được sử dụng
        DB::table('password_resets')->where(column: ['email' => $request->email])->delete();
        toastr()->success("Mật khẩu của bạn đã được cập nhật lại!");
        return redirect()->route('login');
    }
}
