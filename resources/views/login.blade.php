<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

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

        .login-box {
            background: #fff;
            padding: 30px 35px;
            border-radius: 18px;
            width: 320px;
            box-shadow: 0 10px 30px rgba(255, 182, 193, 0.4);
            text-align: center;
        }

        .login-box h2 {
            margin-bottom: 20px;
            color: #ff6f91;
        }

        .login-box input {
            width: 90%;
            padding: 10px 12px;
            margin-bottom: 15px;
            border-radius: 12px;
            border: 1px solid #ffd1dc;
            outline: none;
            font-size: 14px;
        }

        .login-box input:focus {
            border-color: #ff9aa2;
        }

        .login-box button {
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

        .login-box button:hover {
            background: #ff6f91;
        }

        .register-link {
            margin-top: 15px;
            font-size: 14px;
        }

        .register-link a {
            color: #ff6f91;
            text-decoration: none;
            font-weight: 500;
        }

        .register-link a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

    <div class="login-box">
        <h2>Đăng nhập</h2>

        <form action="/auth/checkLogin" method="POST">
            @csrf

            <input type="text" name="username" placeholder="Tên đăng nhập">
            <input type="password" name="password" placeholder="Mật khẩu">

            <button type="submit">Đăng nhập</button>
        </form>

        <div class="register-link">
            <a href="/auth/register">Đăng ký ngay</a>
        </div>
    </div>

</body>
</html>
