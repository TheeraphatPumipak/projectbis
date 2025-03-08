<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">


</head>

<body>
    <div class="wrapper">
    <div class="welcome">
        <h1>ยินดีต้อนรับกลับ</h1>
        <p>มีบัญชีแล้ว</p><br><br><br>
        <button type="button" onclick="goToPage('Login.html')">เข้าสู่ระบบ</button>

    </div>
    <div class="container">
        <h1>ลงทะเบียน</h1>
        <div class="form">
            <form action="" method="post">
                <div class="input-container"></div>
                <i class="fa-solid fa-user"></i>
                <input type="text" id="username" placeholder="ชื่อผู้ใช้"><br>
                <i class="fa-solid fa-envelope"></i>
                <input type="email" id="password" placeholder="อีเมลล์"></i><br>
                <i class="fa-solid fa-phone"></i>
                <input type="number" id="phone" placeholder="โทรศัพท์"></i><br>
                <i class="fa-solid fa-lock"></i>
                <input type="text" id="password" placeholder="รหัสผ่าน"></i><br>
                <i class="fa-solid fa-check-circle"></i>
                <input type="text" id="comfirmpassword" placeholder="ยืนยันรหัสผ่าน"><br>
            </div>
            <button type="button" onclick="goToPage('Login.html')">ลงทะเบียน</button>


            </form>
        </div>
    </div>

    <script>
      function goToPage(url) {
    document.body.style.transform = "translateX(-100%)"; // เลื่อนออกทางซ้าย
    setTimeout(function() {
        window.location.href = url;
    }, 500); // ทำให้การเลื่อนเกิดขึ้นใน 0.5 วินาที
}
    </script>
</body>

</html>