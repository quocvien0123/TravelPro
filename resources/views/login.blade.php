<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Welcome to Travle Pro</title>
    <link rel="stylesheet" href="/resources/css/style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer"
    />
</head>

<body>
    <div class="container" id="container">
        <div class="form-container register-container">
            <form>
                <h1>SIGN UP</h1>
                <div class="form-control">
                    <input type="text" id="username" placeholder="Username" />
                    <small id="username-error"></small>
                    <span></span>
                </div>
                <div class="form-control">
                    <input type="email" id="email" placeholder="Email" />
                    <small id="email-error"></small>
                    <span></span>
                </div>
                <div class="form-control">
                    <input type="password" id="password" placeholder="Password" />
                    <small id="password-error"></small>
                    <span></span>
                </div>
                <button type="submit" value="submit">Register</button>
                <span>Use your account</span>
                <div class="social-container">
                    <a href="#" class="social"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" class="social"><i class="fa-brands fa-google"></i></a>
                    <a href="#" class="social"><i class="fa-brands fa-tiktok"></i></a>
                </div>
            </form>
        </div>

        <div class="form-container login-container">
            <form class="form-lg">
                <h1>WELCOME </h1>
                <div class="form-control2">
                    <input type="text" class="email-2" placeholder="UserName" />
                    <small class="username-error"></small>
                    <span></span>
                </div>
                <div class="form-control2">
                    <input type="password" class="password-2" placeholder="Password     " />
                    <small class="password-error-2"></small>
                    <span></span>
                </div>

                <div class="content">
                    <div class="checkbox">
                        <input type="checkbox" name="checkbox" id="checkbox" />
                        <label for="">Remember</label>
                    </div>
                    <div class="pass-link">
                        <a href="#">Forgot Password?</a>
                    </div>
                </div>
                <button type="submit" value="submit">Login</button>
                <span>Use your account</span>
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
                        Welcome to <br /> TravlePro
                    </h1>
                    <p>If you already have an account, please login and start experiencing.</p>
                    <button class="ghost" id="login">
                        Login
                        <i class="fa-solid fa-arrow-left"></i>
                    </button>
                </div>

                <div class="overlay-panel overlay-right">
                    <h1 class="title">
                        Start your trip now
                    </h1>
                    <p>
                        If you don't have an account yet, join us and start your journey.
                    </p>
                    <button class="ghost" id="register">
                        Register
                        <i class="fa-solid fa-arrow-right"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="/resources/js/main.js"></script>

</html>