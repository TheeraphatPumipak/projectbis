<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/sidebar.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>
<body>
    <div class="sidebar">
        <img src="{{ asset('img/FFLOW LOGO.jpg') }}" alt="">
        <ul>
            <li>Menu</li>
            <li><a href="#"><i class="fas fa-home"></i> หน้าแรก</a></li>
            <li><a href="#"><i class="fas fa-globe"></i> เชื่อมต่อร้านค้า</a></li>
            <li><a href="#"><i class="fas fa-shopping-cart"></i> ขาย</a></li>
            <li><a href="#"><i class="fas fa-list"></i> รายการสั่งซื้อ</a></li>
            <li><a href="#"><i class="fas fa-check-circle"></i> เช็คยอด</a></li>
            <li><a href="#"><i class="fas fa-truck"></i> รับพัสดุ</a></li>
            <li><a href="#"><i class="fas fa-comments"></i> แชท</a></li>
            <li><a href="#"><i class="fas fa-search"></i> ค้นหาลูกค้า</a></li>
            <li><a href="#"><i class="fas fa-chart-line"></i> รายงาน</a></li>
            <li><a href="#"><i class="fas fa-warehouse"></i> คลังสินค้า</a></li>
        </ul>
    </div>

    <div class="content">
        @yield('content') <!-- แสดงเนื้อหาของแต่ละหน้า -->
    </div>
</body>
</html>
