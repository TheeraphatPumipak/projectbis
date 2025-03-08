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
        <button type="button" onclick="goToPage('Register.html')">ลงทะเบียน</button>

    </div>
    <div class="container">
        <h1>เข้าสู่ระแบบ</h1>
        <div class="form">
            <form action="" method="post">
                <div class="input-container"></div>
                <i class="fa-solid fa-user"></i>
                <input type="text" id="username" placeholder="ชื่อผู้ใช้"><br>
                <br>
                <i class="fa-solid fa-lock"></i>
                <input type="text" id="password" placeholder="รหัสผ่าน"></i><br>
            </div>
                <a href="#">ลืมรหัสผ่าน?</a>
                <button type="button" onclick="goToPage('Home.html')">เข้าสู่ระบบ</button>

            </form>
        </div>
    </div>
    <script>
       function goToPage(url) {
    document.body.style.transform = "translateX(100%)"; // เลื่อนหน้าหลุดออกทางขวา
    setTimeout(function() {
        window.location.href = url;
    }, 500); // รอให้การเลื่อนจบก่อนที่จะเปลี่ยนหน้า
}
    </script>
</body>

</html>