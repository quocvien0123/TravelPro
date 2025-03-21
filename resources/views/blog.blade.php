<!DOCTYPE html>
<html lang="en">

<head>
  <title>Travelpro</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,700,900|Display+Playfair:200,300,400,700">
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
                <li>
                  <a href="{{ route('destination') }}">Điểm đến</a>
                </li>

                <li><a href="{{ route('about') }}">Giới thiệu</a></li>
                <li class="active"><a href="{{ route('blog') }}">Blog</a></li>

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
            <h1 class="text-white font-weight-light">BÀI ĐĂNG</h1>
            <div><a href="home.blade.php">Home</a> <span class="mx-2 text-white">&bullet;</span> <span class="text-white">Blog</span></div>

          </div>
        </div>
      </div>
    </div>



    <div class="site-section">
      <div class="container">

        <div class="row mb-3 align-items-stretch">
          <div class="col-md-6 col-lg-6 mb-4 mb-lg-4">
            <div class="h-entry">
              <img src="/resources/image/hero_bg_1.jpg" alt="Image" class="img-fluid">
              <h2 class="font-size-regular"><a href="#">How to Plan Your Vacation</a></h2>
              <div class="meta mb-4">by TravelPPro <span class="mx-2">&bullet;</span> {{ now()->format('M d, Y \a\t h:i A') }} <span class="mx-2">&bullet;</span> <a href="#">News</a></div>
              <p>Vịnh Hạ Long, nằm ở phía Bắc Việt Nam, được UNESCO công nhận là di sản thiên nhiên thế giới. Với hơn 1.600 hòn đảo đá vôi lớn nhỏ, vịnh Hạ Long là một trong những cảnh quan thiên nhiên tuyệt đẹp, thu hút du khách trong và ngoài nước. Đây là một điểm đến không thể bỏ qua nếu bạn yêu thích khám phá vẻ đẹp kỳ vĩ của thiên nhiên.</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-6 mb-4 mb-lg-4">
            <div class="h-entry">
              <img src="/resources/image/img_pq.jpg" alt="Image" class="img-fluid">
              <h2 class="font-size-regular"><a href="#">How to Plan Your Vacation</a></h2>
              <div class="meta mb-4">by TravelPro <span class="mx-2">&bullet;</span> {{ now()->format('M d, Y \a\t h:i A') }} <span class="mx-2">&bullet;</span> <a href="#">News</a></div>
              <p>Phú Quốc, hòn đảo lớn nhất Việt Nam, nằm ở phía Tây Nam của Tổ quốc, được mệnh danh là "Thiên Đường Biển Cả" nhờ vẻ đẹp hoang sơ, bãi biển dài trắng mịn và các khu nghỉ dưỡng cao cấp. Đây là điểm đến lý tưởng cho những ai muốn tránh xa sự ồn ào, tận hưởng không khí trong lành và thư giãn tuyệt đối. Đặc biệt, Phú Quốc còn nổi bật với các hoạt động vui chơi, giải trí phong phú và cảnh quan thiên nhiên tuyệt đẹp.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-6 mb-4 mb-lg-4">
            <div class="h-entry">
              <img src="/resources/image/hero_bg_2.jpg" alt="Image" class="img-fluid">
              <h2 class="font-size-regular"><a href="#">How to Plan Your Vacation</a></h2>
              <div class="meta mb-4">by TravelPro <span class="mx-2">&bullet;</span> {{ now()->format('M d, Y \a\t h:i A') }}<span class="mx-2">&bullet;</span> <a href="#">News</a></div>
              <p>Phong Nha - Kẻ Bàng, một trong những kỳ quan thiên nhiên tuyệt vời của Việt Nam, nằm tại tỉnh Quảng Bình, được UNESCO công nhận là Di sản Thiên nhiên Thế giới. Nơi đây nổi tiếng với hệ thống hang động phong phú, những cánh rừng nguyên sinh rộng lớn và cảnh quan thiên nhiên hùng vĩ. Nếu bạn yêu thích khám phá thiên nhiên và muốn trải nghiệm những điều kỳ diệu của mẹ thiên nhiên, Phong Nha - Kẻ Bàng chắc chắn là điểm đến không thể bỏ qua.</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-6 mb-4 mb-lg-4">
            <div class="h-entry">
              <img src="/resources/image/img_bd.jpg" alt="Image" class="img-fluid">
              <h2 class="font-size-regular"><a href="#">How to Plan Your Vacation</a></h2>
              <div class="meta mb-4">by TravelPro <span class="mx-2">&bullet;</span>{{ now()->format('M d, Y \a\t h:i A') }}<span class="mx-2">&bullet;</span> <a href="#">News</a></div>
              <p>Bản Đôn, nằm ở huyện Buôn Đôn, tỉnh Đắk Lắk, là một trong những điểm đến không thể bỏ qua đối với những ai yêu thích khám phá văn hóa dân tộc và tìm hiểu về truyền thống nuôi voi độc đáo của người Tây Nguyên. Nơi đây không chỉ nổi bật với những câu chuyện về những chú voi huyền thoại mà còn có những cảnh quan thiên nhiên tươi đẹp, các ngôi nhà sàn truyền thống, và những nét văn hóa đặc sắc mà bạn khó có thể tìm thấy ở bất kỳ nơi nào khác.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-6 mb-4 mb-lg-4">
            <div class="h-entry">
              <img src="/resources/image/violac.jpg" alt="Image" class="img-fluid">
              <h2 class="font-size-regular"><a href="#">How to Plan Your Vacation</a></h2>
              <div class="meta mb-4">by TravelPro <span class="mx-2">&bullet;</span> {{ now()->format('M d, Y \a\t h:i A') }} <span class="mx-2">&bullet;</span> <a href="#">News</a></div>
              <p>Quảng Ngãi là một tỉnh miền Trung, Việt Nam, nơi hội tụ những giá trị văn hóa đặc sắc và thiên nhiên hùng vĩ. Nơi đây nổi bật với những ngôi làng dân tộc truyền thống, cảnh quan thiên nhiên hoang sơ và những di tích lịch sử đậm đà bản sắc. Nếu bạn yêu thích sự bình yên và khám phá vẻ đẹp tiềm ẩn của thiên nhiên, Quảng Ngãi là điểm đến lý tưởng.</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-6 mb-4 mb-lg-4">
            <div class="h-entry">
              <img src="/resources/image/vanmieu.jpg" alt="Image" class="img-fluid">
              <h2 class="font-size-regular"><a href="#">How to Plan Your Vacation</a></h2>
              <div class="meta mb-4">by TravelPro <span class="mx-2">&bullet;</span> {{ now()->format('M d, Y \a\t h:i A') }} <span class="mx-2">&bullet;</span> <a href="#">News</a></div>
              <p>Văn Miếu - Quốc Tử Giám, tọa lạc tại trung tâm Hà Nội, là một trong những di tích lịch sử, văn hóa quan trọng và nổi tiếng nhất của Việt Nam. Được xây dựng vào năm 1070 dưới triều đại Lý, Văn Miếu không chỉ là nơi thờ Khổng Tử, mà còn là trung tâm giáo dục đầu tiên của đất nước, nơi đào tạo những nhân tài cho đất nước qua các thế hệ.</p>
            </div>
          </div>

        </div>
        <div class="row">
          <div class="col-12 text-center">
            <a href="#" class="btn btn-outline-primary border-2 py-3 px-5">Load More Posts...</a>
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
                  <li><a href="home.blade.php">Trang chủ</a></li>
                  <li><a href="destination.blade.php">Điểm đến</a></li>
                  <li><a href="blog.blade.php">Blog</a></li>
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
                  <div style="padding-top: 7px;" class="input-group-append">
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