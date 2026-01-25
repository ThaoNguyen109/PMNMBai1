<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng ký</title>

    <style>
        body {
            height: 100vh;
            margin: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #ffd1dc, #ffe4ec);
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .register-box {
            background: #ffffff;
            padding: 30px 35px;
            border-radius: 18px;
            width: 350px;
            box-shadow: 0 10px 30px rgba(255, 182, 193, 0.4);
            text-align: center;
        }

        .register-box h2 {
            margin-bottom: 20px;
            color: #ff6f91;
        }

        .register-box input {
            width: 90%;
            padding: 10px 12px;
            margin-bottom: 14px;
            border-radius: 12px;
            border: 1px solid #ffd1dc;
            outline: none;
            font-size: 14px;
        }

        .register-box input:focus {
            border-color: #ff9aa2;
        }

        .register-box button {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 14px;
            background: #ff9aa2;
            color: white;
            font-size: 15px;
            cursor: pointer;
            transition: 0.3s;
        }

        .register-box button:hover {
            background: #ff6f91;
        }

        .login-link {
            margin-top: 15px;
            font-size: 14px;
        }

        .login-link a {
            color: #ff6f91;
            text-decoration: none;
            font-weight: 500;
        }

        .login-link a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

    <div class="register-box">
        <h2>Đăng ký</h2>

        <form action="/auth/checkRegister" method="POST">
            @csrf

            <input type="email" name="email" placeholder="Email">
            <input type="text" name="username" placeholder="Tên đăng nhập">
            <input type="password" name="password" placeholder="Mật khẩu">
            <input type="password" name="password_confirm" placeholder="Nhập lại mật khẩu">

            <button type="submit">Đăng ký</button>
        </form>

        <div class="login-link">
            Đã có tài khoản?
            <a href="/auth/login">Đăng nhập</a>
        </div>
    </div>

</body>
</html>
