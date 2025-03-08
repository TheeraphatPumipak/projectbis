<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Inter&display=swap" rel="stylesheet" />
    <title>Login</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body,
        html {
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
            border-radius: 0;
            /* ไม่ต้องใช้ border-radius ในแบบเต็มจอ */
            box-shadow: none;
            /* เอาเงาออก */
        }

        .left-box {
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
            background-color: #5490de;
            border-top-left-radius: 300px;
            border-bottom-left-radius: 300px;
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
            max-width: 700px;
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
            <span class="login-text">ลงทะเบียน</span>
            <form action="/users" method="POST">
                @csrf
                <div class="input-container">
                    <input type="text" id="name" name="name" placeholder="ชื่อผู้ใช้" required />
                    @if ($errors->has('username'))
                        <div class="alert alert-danger">{{ $errors->first('username') }}</div>
                    @endif
                </div>

                <div class="input-container">
                    <input type="text" id="email" name="email" placeholder="อีเมล" required />
                    @if ($errors->has('username'))
                        <div class="alert alert-danger">{{ $errors->first('username') }}</div>
                    @endif
                </div>

                <div class="input-container">
                    <input type="text" id="phone" name="phone" placeholder="โทรศัพท์">
                    @if (@isset($errors))
                        @if ($errors->has('name'))
                            <div class="text-danger">{{ $errors->first('name') }}</div>
                        @endif
                    @endif
                </div>
                <div class="mt-3"></div>
                <input type="text" class="input-container" id="password " name="password"
                    placeholder="รหัสผ่าน">
                @if (@isset($errors))
                    @if ($errors->has('password'))
                        <div class="text-danger">{{ $errors->first('password') }}</div>
                    @endif
                @endif


                <div class="input-container">
                    <input type="password" id="password" name="password" placeholder="ยืนยันรหัสผ่าน" required />
                    @if ($errors->has('password'))
                        <div class="alert alert-danger">{{ $errors->first('password') }}</div>
                    @endif
                </div>
                <button type="submit" class="login-btn">ลงทะเบียน</button>
            </form>
        </div>
        <div class="right-box">
            <span class="welcome-text">ยินดีต้อนรับ</span>
            <span class="no-account">มีบัญชีแล้ว</span>
            <a href="/user/signInProcess">
                <button class="signup-btn">เข้าสู่ระบบ</button>
            </a>
           
        </div>
    </div>
</body>

</html>
