<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Inter&display=swap" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="{{ url('CSS/login.css') }}">
    <title>Login</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body, html {
            font-family: 'Inter', sans-serif;
            height: 100%;
            background-color: #333;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .container {
            display: flex;
            width: 100vw;
            height: 100vh;
            background-color: #fff;
            border-radius: 0; /* ไม่ต้องใช้ border-radius ในแบบเต็มจอ */
            box-shadow: none; /* เอาเงาออก */
        }

        .left-box {
            background-color: #5490de;
            width: 50%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            border-top-right-radius: 400px;
            border-bottom-right-radius: 400px;
            align-items: center;
            padding: 20px;
            text-align: center;
        }

        .welcome-text {
            font-size: 36px;
            color: #fff;
            margin-bottom: 15px;
        }

        .no-account {
            font-size: 18px;
            color: #fff;
        }

        .signup-btn {
            margin-top: 15px;
            padding: 12px 24px;
            background-color: #fff;
            color: #5490de;
            font-size: 18px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .signup-btn:hover {
            background-color: #d4e2f1;
        }

        .right-box {
            width: 50%;
            padding: 50px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .login-text {
            font-size: 36px;
            color: #000;
            margin-bottom: 20px;
        }

        .input-container {
            width: 100%;
            max-width: 400px;
            margin-bottom: 20px;
        }

        label {
            font-size: 18px;
            color: #000;
            display: block;
            margin-bottom: 5px;
        }

        input {
            width: 100%;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 18px;
        }

        .login-btn {
            padding: 12px 24px;
            background-color: #5490de;
            color: #fff;
            font-size: 18px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
            max-width: 400px;
        }

        .login-btn:hover {
            background-color: #4068a7;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="left-box">
            <span class="welcome-text">สวัสดี ยินดีต้อนรับ</span>
            <span class="no-account">ยังไม่มีบัญชี?</span>
            <a href="{{ route('register') }}">
                <button class="signup-btn">ลงทะเบียน</button>
            </a>
        </div>
        <div class="right-box">
            <span class="login-text">เข้าสู่ระบบ</span>
            <form action="{{ route('login') }}" method="POST">
                @csrf
                <div class="input-container">
                    <label for="username">ชื่อผู้ใช้</label>
                    <input type="text" id="username" name="username" placeholder="ชื่อผู้ใช้" required />
                </div>
                <div class="input-container">
                    <label for="password">รหัสผ่าน</label>
                    <input type="password" id="password" name="password" placeholder="รหัสผ่าน" required />
                </div>
                <button type="submit" class="login-btn">เข้าสู่ระบบ</button>
            </form>
        </div>
    </div>
</body>

</html>
