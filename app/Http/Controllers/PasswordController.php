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
                return back()->withErrors(['email' => 'Gửi email thất bại. Vui lòng thử lại sau.']);
            }

            return back()->with('status', 'Đã gửi email reset mật khẩu.');
        }

        return back()->withErrors(['email' => 'Email không tồn tại.']);
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
            $mail->Subject = 'Đặt lại mật khẩu tài khoản của bạn';



            $resetLink = route('password.reset', ['token' => $token]);

            $mail->isHTML(true);
            $mail->Body = "<p>Nhấp vào liên kết để tiến hành đặt lại mật khẩu của bạn:</p><a href='$resetLink'>$resetLink</a>";


            $mail->send();
            return true;
        } catch (Exception $e) {
            dd(env('MAIL_FROM_ADDRESS'), env('MAIL_FROM_NAME'));
            return false;
        }
    }
    public function showResetForm($token)
    {
        return view('auth.passwords.reset', ['token' => $token]);
    }
    public function resetPassword(Request $request)
    {
        // Validate dữ liệu từ form
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|confirmed',
            'token' => 'required',
        ]);

        // Kiểm tra token có hợp lệ không
        $reset = DB::table('password_resets')->where([
            'email' => $request->email,
            'token' => $request->token,
        ])->first();

        if (!$reset) {
            return back()->withErrors(['email' => 'Email nhập không chính xác']);
        }

        // Cập nhật mật khẩu người dùng
        $user = User::where('email', $request->email)->first();
        if (!$user) {
            return back()->withErrors(['email' => 'Email không tồn tại.']);
        }


        $user->update(['password' => bcrypt($request->password)]);

        // Xóa thông tin token đã được sử dụng
        DB::table('password_resets')->where(['email' => $request->email])->delete();

        return redirect()->route('login')->with('status', 'Mật khẩu của bạn đã được cập nhật lại.');
    }
}
