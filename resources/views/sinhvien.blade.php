<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Thông tin sinh viên</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            background: #ffe6ef;
            font-family: Arial, Helvetica, sans-serif;
        }

        .container {
            max-width: 500px;
            margin: 80px auto;
            background: #fff;
            border-radius: 16px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
            padding: 30px;
        }

        .title {
            text-align: center;
            color: #d63384;
            margin-bottom: 25px;
        }

        .info {
            background: #fff0f6;
            border-radius: 12px;
            padding: 20px;
        }

        .info-item {
            margin-bottom: 15px;
        }

        .label {
            font-weight: bold;
            color: #ad1457;
        }

        .value {
            margin-top: 5px;
            font-size: 16px;
            color: #333;
        }

        .footer {
            text-align: center;
            margin-top: 25px;
            font-size: 14px;
            color: #888;
        }
    </style>
</head>
<body>

<div class="container">
    <h2 class="title">Thông tin sinh viên</h2>

    <div class="info">
        <div class="info-item">
            <div class="label">Họ và tên</div>
            <div class="value">{{ $name }}</div>
        </div>

        <div class="info-item">
            <div class="label">MSSV</div>
            <div class="value">{{ $mssv }}</div>
        </div>
    </div>

</div>

</body>
</html>
