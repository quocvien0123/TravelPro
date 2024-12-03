<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .email-container {
            max-width: 600px;
            margin: 20px auto;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        .email-header {
            background-color: #4caf50;
            color: #ffffff;
            text-align: center;
            padding: 20px;
            font-size: 24px;
        }

        .email-body {
            padding: 20px;
            line-height: 1.6;
            color: #333333;
        }

        .email-body p {
            margin-bottom: 15px;
        }



        .btn-reset {
            display: inline-block;
            background-color: #4caf50;
            text-decoration: none;
            padding: 10px 20px;
            border-radius: 5px;
            font-size: 16px;
            margin-top: 20px;
            text-align: center;
        }

        .btn-reset:hover {
            background-color: #45a049;
        }

        .btn-wrapper {
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="email-container">
        <div class="email-header">
            Reset Your Password
        </div>
        <div class="email-body">
            <p>Xin chào!</p>
            <p>Chúng tôi nhận được yêu cầu đặt lại mật khẩu của bạn! Hãy nhấn vào nút bên dưới để tiến hành đặt lại mật khẩu của bạn.</p>
            <div class="btn-wrapper">

                <p>
                    <a href="{{ $resetLink }}" class="btn-reset" style="color: #ffffff;">Reset Password</a>
                </p>
            </div>
            <p>Nếu bạn không có yêu cầu đặt lại mật khẩu hãy bỏ qua Email này hoặc liên hệ với chúng tôi nếu có thắc mắc !</p>
            <p>Thank you <br> The TravelPro team
        </div>

    </div>
</body>

</html>