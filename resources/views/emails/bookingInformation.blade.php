<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thông Tin Đặt Vé Tour Du Lịch - TravelPro</title>
</head>
<body style="font-family: Arial, sans-serif; line-height: 1.6; color: #333; max-width: 800px; margin: 0 auto; padding: 20px; background-color: #f4f4f4;">
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
            <div style="margin-top: 5px;">{{$transaction->total_price}}</div>
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
</body>
</html>
