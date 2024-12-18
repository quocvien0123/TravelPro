<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thanh toán thành công</title>
    <link rel="stylesheet" href="/resources/css/success_cancel.css">
</head>

<body>
    <div class="card">
        <div class="icon_success"></div>
        <h1>Thanh toán thành công</h1>
        <p class="amount">Chúc bạn có một chuyến đi thật tuyệt vời.</p>
        <p>Nếu có bất kỳ câu hỏi nào, hãy gửi email tới</p>
        <p> <a href="mailto:viennq.23it@vku.udn.vn">viennq.23it@vku.udn.vn</a>
        <p>Bạn sẽ được chuyển hướng đến trang chủ sau <span class="countdown" id="countdown">10</span> giây.</p>
        <a href="{{route("home")}}"><button class="button" id="redirect-btn">Trở về trang chủ</button></a>
    </div>
    <script>
        const trangchuUrl = "{{ route('home') }}";
    </script>
    <script src="/resources/js/success_cancel.js"></script>
</body>

</html>