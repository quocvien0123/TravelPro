<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hủy thanh toán</title>
    <link rel="stylesheet" href="/resources/css/success_cancel.css">
</head>

<body>
    <div class="card">
        <div class="icon_cancel"></div>
        <h1>Đã hủy đơn thanh toán</h1>
        <p>Nếu có bất kỳ câu hỏi nào, hãy gửi email tới</p>
        <p> <a href="mailto:viennq.23it@vku.udn.vn">viennq.23it@vku.udn.vn</a>
        <p>Bạn sẽ được chuyển hướng đến trang đặt tour sau <span class="countdown" id="countdown">10</span> giây.</p>
        </p><a href="{{route("destination")}}"><button class="button" id="redirect-btn">Trở về trang đặt tour</button></a>
    </div>
    <script>
        const trangchuUrl = "{{ route('destination') }}";
    </script>
    <script src="/resources/js/success_cancel.js"></script>
</body>

</html>