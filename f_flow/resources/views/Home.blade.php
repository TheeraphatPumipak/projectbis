<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
</head>
<body>
<!-- resources/views/home.blade.php -->
@extends('layouts.app') <!-- ใช้ layout หลักที่สร้างไว้ -->

@section('content') <!-- กำหนดเนื้อหาใน section content -->
<p>ยอดขาย</p>
<div class="container">
        <!-- ส่วนหัว -->
        <div class="header">
            <div>
                <h2>ยอดขายวันนี้</h2>
                <p>25 กุมภาพันธ์ 2568</p>
            </div>
            <button class="export-btn">📤 Export</button>
        </div>

        <!-- ส่วนการ์ด -->
        <div class="cards">
            <div class="card red">
                <div class="icon">🏦</div>
                <div class="value">100,000</div>
                <div class="label">ยอดขายรวม</div>
                <div class="change">+8% จากเดือนก่อน</div>
            </div>

            <div class="card orange">
                <div class="icon">📜</div>
                <div class="value">300</div>
                <div class="label">คำสั่งซื้อรวม</div>
                <div class="change">+5% จากเดือนก่อน</div>
            </div>

            <div class="card green">
                <div class="icon">✅</div>
                <div class="value">500</div>
                <div class="label">ยอดขาย</div>
                <div class="change">+12% จากเดือนก่อน</div>
            </div>

            <div class="card purple">
                <div class="icon">👤</div>
                <div class="value">8</div>
                <div class="label">ลูกค้าใหม่</div>
                <div class="change">0.5% จากเดือนก่อน</div>
            </div>
            <div class="card white">
            <h3>เวลาในการขาย</h3>
    <ul>
    <li><span>ประเภท</span><time>ช่วงเวลา</time></li>
    <li><span>เสื้อ</span><time>11:00 - 12:00</time></li>
        <li><span>กางเกง</span><time>12:00 - 13:00</time></li>
        <li><span>หมวก</span><time>13:00 - 14:00</time></li>
        <li><span>รองเท้า</span><time>14:00 - 15:00</time></li>
        <li><span>อุปกรณ์</span><time>15:00 - 16:00</time></li>
        <li><span>กระเป๋า</span><time>16:00 - 17:00</time></li>
    </ul>
            </div>
        </div>                                                                                                                                                      
<b>ทางลัด</b>
 <!-- ส่วนการ์ดทางลัด -->
<div class="shortcut-cards">
            <div class="shortcut-card">
                <div class="shortcut-icon">🛒</div>
                <div class="shortcut-label">ขาย</div>
            </div>

            <div class="shortcut-card">
                <div class="shortcut-icon">📜</div>
                <div class="shortcut-label">รายการสั่งซื้อ</div>
            </div>

            <div class="shortcut-card">
                <div class="shortcut-icon">✅</div>
                <div class="shortcut-label">เช็คยอด</div>
            </div>

            <div class="shortcut-card">
                <div class="shortcut-icon">📊</div>
                <div class="shortcut-label">รายงาน</div>
            </div>
        </div>
    </div>


@endsection


</body>
</html>
