    <!DOCTYPE html>
    <html lang="en">

    <head>
        <title>Travalers &mdash; Colorlib Website Template</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link rel="stylesheet"
            href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,700,900|Display+Playfair:200,300,400,700">
        <link rel="stylesheet" href="/resources/fonts/icomoon/style.css">

        <link rel="stylesheet" href="/resources/css/bootstrap.min.css">
        <link rel="stylesheet" href="/resources/css/magnific-popup.css">
        <link rel="stylesheet" href="/resources/css/jquery-ui.css">
        <link rel="stylesheet" href="/resources/css/owl.carousel.min.css">
        <link rel="stylesheet" href="/resources/css/owl.theme.default.min.css">

        <link rel="stylesheet" href="/resources/css/bootstrap-datepicker.css">

        <link rel="stylesheet" href="/resources/fonts/flaticon/font/flaticon.css">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/mediaelement@4.2.7/build/mediaelementplayer.min.css">


        <link rel="stylesheet" href="/resources/css/aos.css">

        <link rel="stylesheet" href="/resources/css/stylehome.css">

    </head>

    <body>

        <div class="site-wrap">

            <div class="site-mobile-menu">
                <div class="site-mobile-menu-header">
                    <div class="site-mobile-menu-close mt-3">
                        <span class="icon-close2 js-menu-toggle"></span>
                    </div>
                </div>
                <div class="site-mobile-menu-body"></div>
            </div>

            <header class="site-navbar py-1" role="banner">

                <div class="container">
                    <div class="row align-items-center">

                        <div class="col-6 col-xl-2">
                            <h1 class="mb-0"><a href="{{ route('home') }}" class="text-black h2 mb-0">TravelPro</a></h1>
                        </div>
                        <div class="col-10 col-md-8 d-none d-xl-block">
                            <nav class="site-navigation position-relative text-right text-lg-center" role="navigation">

                                <ul class="site-menu js-clone-nav mx-auto d-none d-lg-block">
                                    <li class="active">
                                        <a href="{{ route('home') }}">Trang chủ</a>
                                    </li>
                                    <li class="has-children">
                                        <a href="{{ route('destination') }}">Điểm đến</a>
                                        <ul class="dropdown">
                                            <li><a href="#">Miền Bắc</a></li>
                                            <li><a href="#">Miền Trung</a></li>
                                            <li><a href="#">Miền Nam</a></li>
                                        </ul>
                                    </li>

                                    <li><a href="{{ route('about') }}">Giới thiệu</a></li>
                                    <li><a href="{{ route('blog') }}">Blog</a></li>

                                    <li><a href="{{ route('contact') }}">Liên hệ </a></li>
                                    <!-- <li><a href="booking.html">Book Online</a></li> -->
                                </ul>
                            </nav>
                        </div>

                        <div class="col-6 col-xl-2 text-right">
                            <div class="d-none d-xl-inline-block">
                                <ul class="site-menu js-clone-nav ml-auto list-unstyled d-flex text-right mb-0"
                                    data-class="social">

                                    <li class="li_nav">
                                        <a href="#" class="pl-3 pr-3 text-black"><span class="icon-facebook"></span></a>
                                    </li>
                                    <li class="li_nav">
                                        <a href="#" class="pl-3 pr-3 text-black"><span class="icon-instagram"></span></a>
                                    </li>
                                    <li class="li_nav">
                                        <a href="#" class="pl-3 pr-3 text-black"><span class="icon-google"></span></a>
                                    </li>
                                    <li class="li_nav">
                                        <a href="http://zaloapp.com/qr/p/18ae9qdynewf3" class="pl-3 pr-3 text-black"><span class="icon-phone"></span></a>
                                    </li>
                                    <li>
                                        <a href=""><img class="rounded-circle me-lg-2" src="/resources/admin/img/user.jpg" alt="" style="width: 40px; height: 40px;" </a>
                                        
                                    </li>
                                    <li style="width: 100px; margin-top: 2%;">
                                        <a href="">John Doe</a>
                                    </li>
                                </ul>

                            </div>

                        </div>
                        <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"> <a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a> </div>

                    </div>
                </div>

            </header>


            <div class="slide-one-item home-slider owl-carousel">
                <div class="site-blocks-cover overlay" style="background-image: url(/resources/image/hero_bg_1.jpg);"
                    data-aos="fade" data-stellar-background-ratio="0.5">
                    <div class="container">
                        <div class="row align-items-center justify-content-center text-center">
                            <div class="col-md-8" data-aos="fade-up" data-aos-delay="400">


                                <h1 class="text-white font-weight-light" style="font-family: cursive;">Welcome to</h1>
                                <h1 class="font-weight-light" style="font-family: cursive; color: coral;">TravelPro</h1>
                                <p class="mb-5" style="color: aqua;">Khám phá địa điểm du lịch yêu thích của bạn với chúng
                                    tôi!
                                </p>
                                <p><a href="{{ route('booking') }}" class="btn btn-primary py-3 px-5 text-white">Đặt Ngay!</a></p>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="site-blocks-cover overlay" style="background-image: url(/resources/image/hero_bg_2.jpg);"
                    data-aos="fade" data-stellar-background-ratio="0.5">
                    <div class="container">
                        <div class="row align-items-center justify-content-center text-center">

                            <div class="col-md-8" data-aos="fade-up" data-aos-delay="400">
                                <h1 class="text-white font-weight-light"
                                    style="font-family:'Courier New', Courier, monospace ;">Đi để trải nghiệm
                                </h1>
                                <p class="mb-5" style="color: aqua;">Bay xa,mơ lớn - Hành trình của bạn bắt đầu từ đây
                                </p>
                                <p><a href="{{ route('booking') }}" class="btn btn-primary py-3 px-5 text-white">Đặt Ngay!</a></p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>


            <div class="site-section">

                <div class="container overlap-section">
                    <div class="row">
                        <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
                            <a href="#" class="unit-1 text-center">
                                <img src="/resources/image/img_2.jpg" alt="Image" class="img-fluid">
                                <div class="unit-1-text">
                                    <h3 class="unit-1-heading">Khám phá miền Bắc</h3>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
                            <a href="#" class="unit-1 text-center">
                                <img src="/resources/image/img_1.jpg" alt="Image" class="img-fluid">
                                <div class="unit-1-text">
                                    <h3 class="unit-1-heading">Khám phá miền Trung</h3>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
                            <a href="#" class="unit-1 text-center">
                                <img src="/resources/image/img_3.jpg" alt="Image" class="img-fluid">
                                <div class="unit-1-text">
                                    <h3 class="unit-1-heading">Khám phá miền Nam</h3>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

            </div>


            <div class="site-section">
                <div class="container">
                    <div class="row align-items-stretch">
                        <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
                            <div class="unit-4 d-flex">
                                <div class="unit-4-icon mr-4"><span class="text-primary flaticon-airplane"></span></div>
                                <div>
                                    <h3 style="font-weight: bold;">Vé máy bay</h3>
                                    <p>Cung cấp vé máy bay giá rẻ, dịch vụ đặt vé nhanh chóng
                                        và tiện lợi với mạng lưới các hãng hàng không uy tín.
                                        Đảm bảo phù hợp nhu cầu và ngân sách của bạn.
                                    </p>
                                    <p><a href="#">Tìm hiểu thêm</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
                            <div class="unit-4 d-flex">
                                <div class="unit-4-icon mr-4"><span class="text-primary flaticon-ship"></span></div>
                                <div>
                                    <h3 style="font-weight: bold;">Du thuyền</h3>
                                    <p>Đuợc trải nghiệm các tour du thuyền đẳng cấp khám phá vẻ đẹp biển đảo Việt Nam.
                                        Đa dạng lựa chọn từ tiêu chuẩn đến cao cấp, phù hợp cho mọi nhu cầu thư giãn.
                                    </p>
                                    <p><a href="#">Tìm hiểu thêm</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
                            <div class="unit-4 d-flex">
                                <div class="unit-4-icon mr-4"><span class="text-primary flaticon-route"></span></div>
                                <div>
                                    <h3 style="font-weight: bold;">Du lịch trọn gói</h3>
                                    <p>Du lịch tiện lợi gồm vé máy bay, khách sạn, giải trí, di chuyển và hướng dẫn viên.
                                        Chỉ cần lên đường, tận hưởng chuyến đi không lo nghĩ.
                                    </p>
                                    <p><a href="#">Tìm hiểu thêm</a></p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>






            <div class="site-section block-13 bg-light">


                <div class="container">
                    <div class="row justify-content-center mb-5">
                        <div class="col-md-7">
                            <h2 class="font-weight-light text-black text-center">Đánh giá từ khách hàng</h2>
                        </div>
                    </div>

                    <div class="nonloop-block-13 owl-carousel">

                        <div class="item">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-6 mb-5">
                                        <img src="/resources/image/img_7.jpg" alt="Image" class="img-md-fluid">
                                    </div>
                                    <div class="overlap-left col-lg-6 bg-white p-md-5 align-self-center">
                                        <p class="text-black lead">&ldquo;Mình rất ấn tượng với dịch vụ của TravelPro!
                                            Chuyến du lịch Đà Nẵng - Hội An vừa rồi thật đáng nhớ nhờ sự tổ chức chuyên
                                            nghiệp và tận tâm của đội ngũ. Khách sạn thoải mái, các điểm tham quan được sắp
                                            xếp hợp
                                            lý, và hướng dẫn viên rất thân thiện, luôn chia sẻ nhiều thông tin thú vị. Đặt
                                            tour nhanh gọn, không có phát sinh thêm chi phí nào. Đây thực sự là lựa chọn
                                            hàng đầu cho những ai muốn có một kỳ nghỉ trọn vẹn mà không
                                            phải lo lắng gì! &rdquo;
                                        </p>
                                        <p class="">&mdash; <em>Khách hàng c</em>, <a href="#">TravePro</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-6 mb-5">
                                        <img src="/resources/image/img_6.jpg" alt="Image" class="img-md-fluid">
                                    </div>
                                    <div class="overlap-left col-lg-6 bg-white p-md-5 align-self-center">
                                        <p class="text-black lead">&ldquo;Chuyến du lịch cùng TravelPro thật tuyệt vời! Mình
                                            đã có một trải nghiệm đáng nhớ tại Phú Quốc với dịch vụ trọn gói, từ vé máy bay
                                            đến khách sạn đều được chuẩn bị chu đáo. Hướng dẫn viên nhiệt tình, am hiểu và
                                            luôn hỗ trợ chúng mình suốt hành trình. Đây thực sự là một kỳ nghỉ hoàn hảo mà
                                            mình muốn giới thiệu đến bạn bè. Cảm ơn TravelPro vì chuyến đi tuyệt vời
                                            này!"&ldquo;
                                        </p>
                                        <p class="">&mdash; <em>Khác hàng a</em>, <a href="#">TravePro</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-6 mb-5">
                                        <img src="/resources/image/img_4.jpg" alt="Image" class="img-md-fluid">
                                    </div>
                                    <div class="overlap-left col-lg-6 bg-white p-md-5 align-self-center">
                                        <p class="text-black lead">&ldquo;Đặt tour qua TravelPro là một trải nghiệm rất hài
                                            lòng! Mình và gia đình đã chọn tour du thuyền khám phá vịnh Hạ Long, và mọi thứ
                                            đều diễn ra đúng như mong đợi. Lịch trình hợp lý, du thuyền sang trọng, và các
                                            bữa ăn rất ngon miệng. Đặc biệt, nhân viên hỗ trợ rất nhanh chóng và nhiệt tình,
                                            giúp mình yên tâm suốt chuyến đi. Chắc chắn mình sẽ quay lại TravelPro cho những
                                            chuyến du lịch tiếp theo! &ldquo;
                                        </p>
                                        <p class="">&mdash; <em>Khác hàng b</em>, <a href="#">TravelPro</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>



            <div class="site-section">

                <div class="container">
                    <div class="row justify-content-center mb-5">
                        <div class="col-md-7 text-center">
                            <h2 class="font-weight-light text-black">Điểm đến của chúng tôi</h2>
                            <p class="color-black-opacity-5">Chọn điểm đến tiếp theo của bạn</p>
                        </div>
                        <div class="row">
                            @foreach ($destinations as $destination)
                            <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
                                <a href="#" class="unit-1 text-center"> <img src="{{ $destination->image_url }}" alt="Image" class="img-fluid">
                                    <div class="unit-1-text"> <strong class="text-primary mb-2 d-block">${{ $destination->price }}</strong>
                                        <h3 class="unit-1-heading">{{ $destination->location }}</h3>
                                    </div>
                                </a>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>

            </div>

        </div>


        </div>


        <div class="site-blocks-cover overlay inner-page-cover"
            style="background-image: url(/resources/image/hero_bg_2.jpg); background-attachment: fixed;">
            <div class="container">
                <div class="row align-items-center justify-content-center text-center">

                    <div class="col-md-7" data-aos="fade-up" data-aos-delay="400">
                        <a href="https://vimeo.com/channels/staffpicks/93951774"
                            class="play-single-big mb-4 d-inline-block popup-vimeo"><span class="icon-play"></span></a>
                        <h2 class="text-white font-weight-light mb-5 h1">Trải nghiệm dịch vụ nổi bật của chúng tôi</h2>

                    </div>
                </div>
            </div>
        </div>

        <div class="site-section bg-light">
            <div class="container">
                <div class="row justify-content-center mb-5">
                    <div class="col-md-7 text-center">
                        <h2 class="font-weight-light text-black">Dịch vụ của chúng tôi</h2>
                        <p class="color-black-opacity-5">Chúng tôi cung cấp các dịch vụ sau</p>
                    </div>
                </div>
                <div class="row align-items-stretch">
                    <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
                        <div class="unit-4 d-flex">
                            <div class="unit-4-icon mr-4"><span class="text-primary flaticon-airplane"></span></div>
                            <div>
                                <h3 style="font-weight: bold;">Vé máy bay</h3>
                                <p>Giúp bạn tìm và đặt vé máy bay với giá tốt nhất. Đội ngũ của chúng tôi sẽ hỗ trợ bạn từ khâu chọn chuyến bay đến khi hoàn tất đặt vé.
                                </p>
                                <p><a href="#">Tìm hiểu thêm</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
                        <div class="unit-4 d-flex">
                            <div class="unit-4-icon mr-4"><span class="text-primary flaticon-ship"></span></div>
                            <div>
                                <h3 style="font-weight: bold;">Du thuyền</h3>
                                <p>Trải nghiệm các tour du thuyền sang trọng với dịch vụ đẳng cấp, mang đến cho bạn những hành trình đáng nhớ trên biển.
                                </p>
                                <p><a href="#">Tìm hiểu thêm</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
                        <div class="unit-4 d-flex">
                            <div class="unit-4-icon mr-4"><span class="text-primary flaticon-route"></span></div>
                            <div>
                                <h3 style="font-weight: bold;">Du lịch trọn gói</h3>
                                <p>Chúng tôi cung cấp các gói du lịch trọn gói phù hợp với nhu cầu của từng khách hàng, từ nghỉ dưỡng, tham quan đến khám phá.
                                </p>
                                <p><a href="#">Tìm hiểu thêm</a></p>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
                        <div class="unit-4 d-flex">
                            <div class="unit-4-icon mr-4"><span class="text-primary flaticon-hotel"></span></div>
                            <div>
                                <h3 style="font-weight: bold;">Chỗ ở khách sạn</h3>
                                <p>Chúng tôi cung cấp nhiều lựa chọn khách sạn chất lượng, từ tiêu chuẩn đến cao cấp, giúp bạn dễ dàng lựa chọn nơi lưu trú phù hợp.
                                </p>
                                <p><a href="#">Tìm hiểu thêm</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
                        <div class="unit-4 d-flex">
                            <div class="unit-4-icon mr-4"><span class="text-primary flaticon-sailboat"></span></div>
                            <div>
                                <h3 style="font-weight: bold;">Thám hiểm biển</h3>
                                <p>Trải nghiệm thám hiểm dưới lòng đại dương, khám phá những kỳ quan thiên nhiên cùng các chuyên gia.
                                </p>
                                <p><a href="#">Tìm hiểu thêm</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
                        <div class="unit-4 d-flex">
                            <div class="unit-4-icon mr-4"><span class="text-primary flaticon-ski"></span></div>
                            <div>
                                <h3 style="font-weight: bold;">Trải nghiệm lướt sóng</h3>
                                <p>Thử thách bản thân với các khóa học lướt sóng từ cơ bản đến nâng cao. Hòa mình vào làn sóng và cảm nhận sự tự do.
                                </p>
                                <p><a href="#">Tìm hiểu thêm</a></p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>


        <div class="site-section">
            <div class="container">
                <div class="row justify-content-center mb-5">
                    <div class="col-md-7 text-center">
                        <h2 class="font-weight-light text-black">Blog của chúng tôi</h2>
                        <p class="color-black-opacity-5">Xem tin tức hàng ngày của chúng tôi &amp; cập nhật</p>
                    </div>
                </div>
                <div class="row mb-3 align-items-stretch">
                    <div class="col-md-6 col-lg-6 mb-4 mb-lg-4">
                        <div class="h-entry">
                            <img src="/resources/image/hero_bg_1.jpg" alt="Image" class="img-fluid">
                            <h2 class="font-size-regular"><a href="#">Cách lên kế hoạch cho kỳ nghỉ của bạn</a></h2>
                            <div class="meta mb-4">by Quốc Viễn <span class="mx-2">&bullet;</span> Dec 11, 2024 at
                                2:00 pm <span class="mx-2">&bullet;</span> <a href="#">Tin tức</a></div>
                            <p>Ứng dụng của chúng tôi mang đến cho bạn trải nghiệm du lịch tiện lợi và thoải mái nhất. Với các package tour được thiết kế chi tiết và linh hoạt,
                                khách hàng chỉ cần chọn điểm đến yêu thích, mọi khâu từ lên lịch trình, đặt vé, chỗ ở đến các hoạt động đều đã được chúng tôi chuẩn bị chu đáo.
                                Chỉ vài thao tác đơn giản, bạn sẽ có ngay một kỳ nghỉ hoàn hảo mà không cần lo lắng về việc lên kế hoạch.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 mb-4 mb-lg-4">
                        <div class="h-entry">
                            <img src="/resources/image/hero_bg_2.jpg" alt="Image" class="img-fluid">
                            <h2 class="font-size-regular"><a href="#">Cập nhật hệ thống<table></table></a></h2>
                            <div class="meta mb-4">by Phan Hoàng <span class="mx-2">&bullet;</span> Dec 11, 2024 at
                                7:00 pm <span class="mx-2">&bullet;</span> <a href="#">Cập nhật</a></div>
                            <p>Chúng tôi thường xuyên cập nhật hệ thống để mang đến cho bạn trải nghiệm mượt mà và ổn định hơn.
                                Những bản cập nhật này bao gồm tối ưu hóa hiệu suất,
                                nâng cao tốc độ xử lý, và cải thiện bảo mật để bảo vệ thông tin cá nhân của bạn.
                                Chúng tôi cũng sửa lỗi, bổ sung các tính năng mới, và cập nhật giao diện người dùng để giúp bạn dễ dàng thao tác và sử dụng ứng dụng.
                                Mục tiêu của chúng tôi là cung cấp một hệ thống đáng tin cậy, giúp bạn đặt tour và trải nghiệm dịch vụ một cách thuận tiện và an tâm nhất.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 text-center">
                        <a href="#" class="btn btn-outline-primary border-2 py-3 px-5">Xem tất cả các bài đăng trên blog</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="site-section border-top">
            <div class="container">
                <div class="row text-center">
                    <div class="col-md-12">
                        <h2 class="mb-5 text-black">Bạn muốn đi du lịch với chúng tôi?</h2>
                        <p class="mb-0"><a href="{{ route('booking') }}"
                                class="btn btn-primary py-3 px-5 text-white">Đặt ngay!</a></p>
                    </div>
                </div>
            </div>
        </div>

        <footer class="site-footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="mb-5">
                            <h3 class="footer-heading mb-4">Về TravePro</h3>
                            <p>TravelPro là nền tảng đặt tour du lịch trọn gói, giúp khách hàng dễ dàng chọn
                                lựa các gói tour chi tiết và tận hưởng kỳ nghỉ mà không cần bận tâm về lịch trình.
                                Với TravelPro, chỉ cần đặt chỗ và sẵn sàng cho những trải nghiệm thú vị!</p>
                        </div>



                    </div>
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <div class="row mb-5">
                            <div class="col-md-12">
                                <h3 class="footer-heading mb-4">Điều hướng</h3>
                            </div>
                            <div class="col-md-6 col-lg-6">
                                <ul class="list-unstyled">
                                    <li><a href="{{ route('home') }}">Trang chủ</a></li>
                                    <li><a href="{{ route(name: 'destination') }}">Điểm đến</a></li>
                                    <li><a href="{{ route('blog') }}">Blog</a></li>
                                </ul>
                            </div>
                            <div class="col-md-6 col-lg-6">
                                <ul class="list-unstyled">
                                    <li><a href="#">Dịch Vụ</a></li>
                                    <li><a href="/resources/views/about.blade.php">Giới thiệu</a></li>
                                    <li><a href="/resources/views/contact.blade.php">Liên hệ</a></li>
                                    <li><a href="#">Bảo mật</a></li>
                                </ul>
                            </div>
                        </div>



                    </div>

                    <div class="col-lg-4 mb-5 mb-lg-0">


                        <div class="mb-5">
                            <h3 class="footer-heading mb-2">Đăng ký nhận bảng tin</h3>
                            <p>
                                Đăng ký nhận bản tin từ TravelPro để cập nhật nhanh nhất về các gói tour mới,
                                ưu đãi đặc biệt và mẹo du lịch hữu ích – giúp bạn không bỏ lỡ cơ hội khám phá tuyệt vời!
                            </p>

                            <form action="#" method="post">
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control border-secondary text-white bg-transparent"
                                        placeholder="Nhập Email" aria-label="Enter Email"
                                        aria-describedby="button-addon2">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary text-white" type="button"
                                            id="button-addon2">Gửi</button>
                                    </div>
                                </div>
                            </form>

                        </div>

                    </div>

                </div>
                <div class="row pt-5 mt-5 text-center">
                    <div class="col-md-12">
                        <div class="mb-5">
                            <a href="#" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
                            <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                            <a href="#" class="pl-3 pr-3"><span class="icon-google"></span></a>
                            <a href="#" class="pl-3 pr-3"><span class="icon-phone"></span></a>

                        </div>
                    </div>
        </footer>
        </div>

        <script src="/resources/js/jquery-3.3.1.min.js"></script>
        <script src="/resources/js/jquery-migrate-3.0.1.min.js"></script>
        <script src="/resources/js/jquery-ui.js"></script>
        <script src="/resources/js/popper.min.js"></script>
        <script src="/resources/js/bootstrap.min.js"></script>
        <script src="/resources/js/owl.carousel.min.js"></script>
        <script src="/resources/js/jquery.stellar.min.js"></script>
        <script src="/resources/js/jquery.countdown.min.js"></script>
        <script src="/resources/js/jquery.magnific-popup.min.js"></script>
        <script src="/resources/js/bootstrap-datepicker.min.js"></script>
        <script src="/resources/js/aos.js"></script>

        <script src="/resources/js/mainhome.js"></script>

    </body>

    </html>