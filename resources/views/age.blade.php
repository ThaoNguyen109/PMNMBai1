<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Nhập tuổi</title>
</head>
<body>
    <h3>Nhập tuổi của bạn</h3>

    <form method="POST" action="/save-age">
        @csrf
        <input type="text" name="age" placeholder="Nhập tuổi">
        <button type="submit">Gửi</button>
    </form>
</body>
</html>
