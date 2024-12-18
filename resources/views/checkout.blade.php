<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tạo Link thanh toán</title>
    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <div class="main-box">
        <div class="checkout">
            <div class="product">
                <p><strong>Tên sản phẩm:</strong> Mì tôm Hảo Hảo ly</p>
                <p><strong>Giá tiền:</strong> 2000 VNĐ</p>
                <p><strong>Số lượng:</strong> 1</p>
            </div>
            <form action="{{ route('checkOutPayment') }}" method="post">
                @csrf
                <button type="submit" id="create-payment-link-btn">Tạo Link thanh toán</button>
            </form>

            </form>
        </div>
    </div>
</body>

</html>