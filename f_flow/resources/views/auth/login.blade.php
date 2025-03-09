<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">


</head>

<body>

<div class="wrapper">
    <div class="welcome">
        <h1>สวัสดี ยินดีต้อนรับ</h1>
        <p>ยังไม่มีบัญชี?</p><br><br><br>
        <a href="{{ route('register') }}" class="btn">ลงทะเบียน</a>
    </div>
    <div class="container">
        <h1>เข้าสู่ระบบ</h1>
        <div class="form">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="input-container">
                    <i class="fa-solid fa-user"></i>
                    <input type="text" name="email" placeholder="อีเมล" value="{{ old('email') }}" required autofocus>
                </div>
                <br>
                <div class="input-container">
                    <i class="fa-solid fa-lock"></i>
                    <input type="password" name="password" placeholder="รหัสผ่าน" required>
                </div>
                <br>
                <a href="{{ route('password.request') }}">ลืมรหัสผ่าน?</a>
                <button type="submit" class="btn">เข้าสู่ระบบ</button>
            </form>
        </div>
    </div>
</div>

