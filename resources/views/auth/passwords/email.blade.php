<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quên Mật Khẩu</title>
    <style>
        /* General Body Styles */
        body {
            font-family: 'Arial', sans-serif;
            background-image: url(https://images.unsplash.com/photo-1476514525535-07fb3b4ae5f1?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D);
            background-size: 100%;
            margin: 0;
            padding: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        /* Form Container Styles */
        .container {
            background-color: white;
            border-radius: 10px;
            padding: 40px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
            text-align: center;
        }

        h2 {
            color: #4CAF50;
            margin-bottom: 20px;
        }

        /* Input and Button Styles */
        input[type="email"] {
            width: 100%;
            padding: 12px;
            margin: 10px 0;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 16px;
            box-sizing: border-box;
        }

        button[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            width: 100%;
            transition: background-color 0.3s ease;
        }

        button[type="submit"]:hover {
            background-color: #45a049;
        }

        /* Status message styles */
        .status-message {
            margin-top: 20px;
            font-weight: bold;
            font-size: 16px;
        }

        .status-message.green {
            color: #4CAF50;
        }

        .status-message.red {
            color: #f44336;
        }
    </style>
</head>

<body>

    <div class="container">
        <h2>Quên Mật Khẩu</h2>
        <form action="{{ route('password.sendResetLink') }}" method="POST">
            @csrf
            <div>
                <label for="email" style="font-weight: bold;">Nhập Email mà bạn đăng ký tài khoản trên hệ thống:</label>
                <input type="email" id="email" name="email" required placeholder="Nhập email của bạn">
            </div>
            <button type="submit">
                Gửi Email
            </button>
        </form>

        @if(session('status'))
        <div class="status-message green">
            <strong>{{ session('status') }}</strong>
        </div>
        @endif

        @if($errors->any())
        <div class="status-message red">
            <strong>{{ $errors->first() }}</strong>
        </div>
        @endif
    </div>

</body>

</html>