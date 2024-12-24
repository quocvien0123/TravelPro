<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thông Tin Đặt Vé Tour Du Lịch - TravelPro</title>
</head>

<body style="font-family: Arial, sans-serif; line-height: 1.6; color: #333; max-width: 800px; margin: 0 auto; padding: 20px; background-color: #f4f4f4;background-image: url(https://images.unsplash.com/photo-1476514525535-07fb3b4ae5f1?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D); background-size: 100%;">
    <h1 style="color: #2c3e50; text-align: center;">Thông Tin Đặt Vé Tour Du Lịch - TravelPro</h1>

    <div style="background-color: #fff; padding: 20px; border-radius: 8px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">

        <div style="margin-bottom: 15px;">
            <div style="font-weight: bold; color: #2c3e50;">Người dùng:</div>
            <div style="margin-top: 5px;">{{$user->username}}</div>
        </div>
        <div style="margin-bottom: 15px;">
            <div style="font-weight: bold; color: #2c3e50;">Tên tour:</div>
            <div style="margin-top: 5px;">{{$destination->name}}</div>
        </div>
        <div style="margin-bottom: 15px;">
            <div style="font-weight: bold; color: #2c3e50;">Mô tả:</div>
            <div style="margin-top: 5px;">{{$destination->description}}</div>
        </div>
        <div style="margin-bottom: 15px;">
            <div style="font-weight: bold; color: #2c3e50;">Vị trí:</div>
            <div style="margin-top: 5px;">{{$destination->location}}</div>
        </div>
        <div style="margin-bottom: 15px;">
            <div style="font-weight: bold; color: #2c3e50;">Ngày đặt:</div>
            <div style="margin-top: 5px;">{{$transaction->booking_date}}</div>
        </div>
        <div style="margin-bottom: 15px;">
            <div style="font-weight: bold; color: #2c3e50;">Ngày bắt đầu tour:</div>
            <div style="margin-top: 5px;">{{$transaction->start_date}}</div>
        </div>
        <div style="margin-bottom: 15px;">
            <div style="font-weight: bold; color: #2c3e50;">Ngày kết thúc tour:</div>
            <div style="margin-top: 5px;">{{$transaction->end_date}}</div>
        </div>
        <div style="margin-bottom: 15px;">
            <div style="font-weight: bold; color: #2c3e50;">Số người:</div>
            <div style="margin-top: 5px;">{{$transaction->number_of_people}}</div>
        </div>
        <div style="margin-bottom: 15px;">
            <div style="font-weight: bold; color: #2c3e50;">Tổng tiền:</div>
            <div style="margin-top: 5px;">{{$transaction->total_price}}$</div>
        </div>
        <div style="margin-bottom: 15px;">
            <div style="font-weight: bold; color: #2c3e50;">Mã giao dịch:</div>
            <div style="margin-top: 5px;">{{$transaction->order_code}}</div>
        </div>
        <div style="margin-bottom: 15px;">
            <div style="font-weight: bold; color: #2c3e50;">Ghi chú:</div>
            <div style="margin-top: 5px;">{{$transaction->note}}</div>
        </div>
    </div>
    <h2 style="color: white; text-align: center;">Cảm ơn bạn đã sử dụng dịch vụ của chúng tôi! Chúc bạn có một kỳ nghỉ tuyệt vời!</h2>
</body>

</html>