<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Welcome to Travle Pro</title>
    <link rel="stylesheet" href="/resources/css/style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
</head>

<body>
    <div class="container" id="container">
        <div class="form-container register-container">
            <form action="{{route('register')}}" method="post" >
                <h1>Đăng Ký</h1>
                <div class="form-control">
                    <input type="text" id="username" placeholder="Tên đăng nhập" name="username" required/>
                    <small id="username-error"></small>
                    <span></span>
                </div>
                <div class="form-control">
                    <input type="email" id="email" placeholder="Email" name="email" required/>
                    <small id="email-error"></small>
                    <span></span>
                </div>
                <div class="form-control">
                    <input type="password" id="password" placeholder="Mật khẩu" name="password" required/>
                    <small id="password-error"></small>
                    <span></span>
                </div>
                <button type="submit" value="submit">Đăng Ký</button>
                <span>Đăng nhập bằng tài khoản</span>
                <div class="social-container">
                    <a href="#" class="social"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" class="social"><i class="fa-brands fa-google"></i></a>
                    <a href="#" class="social"><i class="fa-brands fa-tiktok"></i></a>
                </div>
            </form>
        </div>

        <div class="form-container login-container">
            <form class="form-lg" action="{{route('auth')}}" method="post">
                @csrf
                <h1>Đăng Nhập</h1>
                <div class="form-control2">
                    <input type="text" class="email-2" placeholder="Tên đăng nhập" name="username" required/>
                    <small class="username-error"></small>
                    <span></span>
                </div>
                <div class="form-control2">
                    <input type="password" class="password-2" placeholder="Mật khẩu" name="password" required/>
                    <small class="password-error-2"></small>
                    <span></span>
                </div>

                <div class="content">
                    <div class="checkbox">
                        <input type="checkbox" name="checkbox" id="checkbox" />
                        <label for="">Ghi nhớ</label>
                    </div>
                    <div class="pass-link">
                        <a href="#">Quên mật khẩu?</a>
                    </div>
                </div>
                <button type="submit" value="submit">Đăng Nhập</button>
                <span>Đăng nhập bằng tài khoản</span>
                <div class="social-container">
                    <a href="#" class="social"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" class "social"><i class="fa-brands fa-google"></i></a>
                    <a href="#" class="social"><i class="fa-brands fa-tiktok"></i></a>
                </div>
            </form>
        </div>

        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1 class="title">
                        Chào mừng đến với <br /> TravlePro
                    </h1>
                    <p>Nếu bạn đã có tài khoản hãy đăng nhập và bắt đầu trải nghiệm.</p>
                    <button class="ghost" id="login">
                        Đăng Nhập
                        <i class="fa-solid fa-arrow-left"></i>
                    </button>
                </div>

                <div class="overlay-panel overlay-right">
                    <h1 class="title">
                        Bắt đầu hành trình của bạn
                    </h1>
                    <p>
                    Nếu bạn chưa có tài khoản, hãy tham gia cùng chúng tôi và bắt đầu hành trình của mình.
                    </p>
                    <button class="ghost" id="register">
                        Đăng Ký
                        <i class="fa-solid fa-arrow-right"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="/resources/js/main.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
</html>