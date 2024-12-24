<!DOCTYPE html>
<html lang="en">

<head>
  <title>TravelPro</title>
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
            <h1 class="text-white font-weight-light">ĐẶT TOUR</h1>
            <div><a href="/resources/views/home.blade.php">Trang chủ</a> <span class="mx-2 text-white">&bullet;
              </span> <span class="text-white">Đặt Tour</span></div>

          </div>
        </div>
      </div>
    </div>



    <div class="site-section bg-light">
      <div class="container">
        <div class="row">
          <div class="col-md-7 mb-5">



            <form action="{{route('checkOutPayment',$destination->id)}}" method="post" class="p-5 bg-white">
              @csrf
              <input type="hidden" name="destination_id" value="{{ $destination->id }}">
              <div class="row form-group">
                <div class="col-md-6 mb-3 mb-md-0">
                  <label class="text-black" for="date">Ngày bắt đầu</label>
                  <input type="date" id="start_date" name="start_date" placeholder="Ngày bắt đầu" required>

                </div>
                <div class="col-md-6">
                  <label class="text-black" for="email">Ngày kết thúc</label>
                  <input type="date" id="end_date" name="end_date" placeholder="Ngày kết thúc" required>
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12">
                  <label class="text-black" for="service">Chọn dịch vụ</label>
                  <select name="service_id" id="service" class="form-control" required>
                    <option value=""></option>
                    @foreach($services as $service)
                    <option value="{{ $service->id }}">{{ $service->name }}</option>
                    @endforeach
                  </select>
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12">
                  <label class="text-black" for="treatment">Có bao nhiêu người</label>
                  <input type="number" id="number_of_people" name="number_of_people" value="{{ old('number_of_people') }}" min="1" required>
                  </select>
                </div>
              </div>



              <div class="row form-group">
                <div class="col-md-12">
                  <label class="text-black" for="note">Ghi chú</label>
                  <textarea name="note" id="note" cols="30" rows="5" class="form-control" placeholder="Viết ghi chú của bạn vào đây..."></textarea>
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12">
                  <label class="text-black" for="treatment">
                    <h2>Giá tour: {{ $destination->price }} $</h2>
                  </label>
                </div>
              </div>
              <div class="row form-group">
                <div style="padding-left: 250px; ">
                  <input type="submit" value="Thanh toán" class="btn btn-primary text-white" style="margin-right: 10px;">
                </div>
              </div>
            </form>
          </div>
          <div class="col-md-5">



            <div class="p-4 mb-3 bg-white">
              <img src="/resources/image/hero_bg_1.jpg" alt="Image" class="img-fluid mb-4 rounded">
              @if(isset($destination))
              <div class="row form-group">
                <div class="col-md-12">
                  <label class="text-black" for="treatment">
                    <h3 class="h5 text-black mb-3" style="margin-left: 20px;">Điểm đến: {{ $destination->location }}</h3>
                    <h3 class="h5 text-black mb-3" style="margin-left: 20px;">Tên tour: {{ $destination->name }}</h3>
                  </label>
                </div>
              </div>
              <div class="col-md-12">
                <label class="text-black" for="treatment">
                  <h3 class="h5 text-black mb-3">Ngày đặt: {{ $current_date }}</h3>
                </label>
              </div>
              <div class="col-md-12">
                <label class="text-black" for="treatment">
                  <h3 class="h5 text-black mb-3">Mô tả: {{ $destination->description }}</h3>
                </label>
                @else
                <p>Thông tin điểm đến không khả dụng.</p>
                @endif
              </div>
              <p><a href="#" class="btn btn-primary px-4 py-2 text-white">Tìm hiểu thêm</a></p>
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
  <script src="/resources/js/jquery.magnific-popup.min.js"></script>
  <script src="/resources/js/bootstrap-datepicker.min.js"></script>
  <script src="/resources/js/aos.js"></script>
  <script src="/resources/js/mainhome.js"></script>
</body>

</html>