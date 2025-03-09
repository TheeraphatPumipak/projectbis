<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/sidebar.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>
<body>
    <div class="sidebar">
        <img src="{{ asset('img/FFLOW LOGO.jpg') }}" alt="">
        <ul>
            <li>Menu</li>
            <li><a href="{{ route('Home') }}"><i class="fas fa-home"></i> หน้าแรก</a></li>
            <li><a href="#"><i class="fas fa-globe"></i> เชื่อมต่อร้านค้า</a></li>
            <li><a href="{{ route('Sale') }}"><i class="fas fa-shopping-cart"></i> ขาย</a></li>
            <li><a href="#"><i class="fas fa-list"></i> รายการสั่งซื้อ</a></li>
            <li><a href="#"><i class="fas fa-check-circle"></i> เช็คยอด</a></li>
            <li><a href="#"><i class="fas fa-truck"></i> รับพัสดุ</a></li>
            <li><a href="#"><i class="fas fa-comments"></i> แชท</a></li>
            <li><a href="#"><i class="fas fa-search"></i> ค้นหาลูกค้า</a></li>
            <li><a href="#"><i class="fas fa-chart-line"></i> รายงาน</a></li>
            <li><a href="/wharehouse" class="btn btn-primary"><i class="fas fa-warehouse"></i> คลังสินค้า</a></li>
        </ul>
    </div>
    <div class="header-container">
    <p class="header-title">F FLOW | หน้าแรก</p>
    <div class="profile-info">
        <div class="profile-icon">
        <i class="fas fa-user"></i>
        </div>
        <p>ถึงแล้วหนองบัวลำภู</p>
        <p id="date">วันหมดอายุการใช้งาน: 10/05/2025 (364 วัน)</p>
    </div>
</div>

    <div class="content">
        @yield('content') <!-- แสดงเนื้อหาของแต่ละหน้า -->
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>
