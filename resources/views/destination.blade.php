  <!DOCTYPE html>
  <html lang="en">

  <head>
    <title>TravelPro</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,700,900|Display+Playfair:200,300,400,700">
    <link rel="stylesheet" href="/resources/fonts/icomoon/style.css">

    <link href="/resources/admin/css/bootstrap.min.css" rel="stylesheet">
    <link href="/resources/admin/css/style.css" rel="stylesheet">

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
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
      <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
        <span class="sr-only">Loading...</span>
      </div>
    </div>
    <!-- Spinner End -->

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
          <div class="row align-items-center" style="width: 1300px;">

            <div class="col-6 col-xl-2">
              <h1 class="mb-0"><a href="{{ route('home') }}" class="text-black h2 mb-0">TravelPro</a></h1>
            </div>
            <div class="col-6 col-xl-10 d-none d-xl-block">
              <nav class="site-navigation position-relative text-right text-lg-center" role="navigation">

                <ul class="site-menu js-clone-nav mx-auto d-none d-lg-block">
                  <li>
                    <a href="{{ route('home') }}">Trang chủ</a>
                  </li>
                  <li class="has-children active">
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
                  <li>
                    <a href="#" class="pl-3 pr-3 text-black"><span class="icon-facebook"></span></a>
                  </li>
                  <li>
                    <a href="#" class="pl-3 pr-3 text-black"><span class="icon-instagram"></span></a>
                  </li>
                  <li>
                    <a href="#" class="pl-3 pr-3 text-black"><span class="icon-google"></span></a>
                  </li>
                  <li>
                    <a href="http://zaloapp.com/qr/p/18ae9qdynewf3" class="pl-3 pr-3 text-black"><span class="icon-phone"></span></a>
                  </li>
                  <li class="has-children">
                    <a href=""><img class="rounded-circle me-lg-2" src="/resources/admin/img/user.jpg" alt="" style="width: 40px; height: 40px; margin-left: 60px;"> </a>
                    <ul class="dropdown">
                      <li><a href="#">My Profile</a></li>
                      <li><a href="#">Seting</a></li>
                      <li><a href="{{route('logout')}}">Log Out</a></li>
                    </ul>

                  </li>
                </ul>
              </nav>
            </div>

            <!-- <div class="col-6 col-xl-2 text-right">
              

          </div> -->
            <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"> <a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a> </div>

          </div>
        </div>

      </header>





      <div class="site-blocks-cover inner-page-cover" style="background-image: url(/resources/image/hero_bg_2.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center justify-content-center text-center">

            <div class="col-md-8" data-aos="fade-up" data-aos-delay="400">
              <h1 class="text-white font-weight-light">Điểm Đến</h1>
              <div><a href="/resources/views/home.blade.php">Trang chủ</a> <span class="mx-2 text-white">&bullet;</span> <span class="text-white">Điểm đến</span></div>

            </div>
          </div>
        </div>
      </div>




      <div class="site-section">

        <div class="container">
          <div class="row">
            @foreach ($destinations as $destination)
            <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
              <a href="{{ route('booking.show',$destination->id) }}" class="unit-1 text-center"> <img src="{{ $destination->image_url }}" alt="Image" class="img-fluid">
                <div class="unit-1-text"> <strong class="text-primary mb-2 d-block">${{ $destination->price }}</strong>
                  <h3 class="unit-1-heading">{{ $destination->location }}</h3>
                </div>
              </a>
            </div>
            @endforeach
          </div>
          {{ $destinations->links() }}
        </div>

        <div class="site-section block-13 bg-light">


          <div class="container">
            <div class="row justify-content-center mb-5">
              <div class="col-md-7">
                <h2 class="font-weight-light text-black text-center">What People Says</h2>
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
                      <li><a href="{{ route('destination') }}">Điểm đến</a></li>
                      <li><a href="{{ route('blog') }}">Blog</a></li>
                    </ul>
                  </div>
                  <div class="col-md-6 col-lg-6">
                    <ul class="list-unstyled">
                      <li><a href="#">Dịch Vụ</a></li>
                      <li><a href="about.blade.php">Giới thiệu</a></li>
                      <li><a href="contact.blade.php">Liên hệ</a></li>
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
      <script src="/resources/js/jquery.magnific-popup.min.js"></script>/resources/
      <script src="/resources/js/bootstrap-datepicker.min.js"></script>
      <script src="/resources/js/aos.js"></script>

      <script src="/resources/js/mainhome.js"></script>

      <script src="/resources/admin/js/main.js"></script>


  </body>

  </html>