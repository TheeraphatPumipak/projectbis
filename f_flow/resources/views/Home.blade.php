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
<div class="header-container">
    <p class="header-title">F FLOW | หน้าแรก</p>
    <div class="profile-info">
        <p>ถึงแล้วหนองบัวลำภู</p>
        <p id="date">วันหมดอายุการใช้งาน: 10/05/2025 (364 วัน)</p>
    </div>
</div>
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
        <li>เสื้อ - 11:00 - 12:00</li>
        <li>กางเกง - 12:00 - 13:00</li>
        <li>หมวก - 13:00 - 14:00</li>
        <li>รองเท้า - 14:00 - 15:00</li>
        <li>อุปกรณ์ - 15:00 - 16:00</li>
        <li>กระเป๋า - 16:00 - 17:00</li>
    </ul>
            </div>
            <!-- <div class="card time-card">
    <h3>เวลาในการขาย</h3>
    <ul>
        <li>เสื้อ - 11:00 - 12:00</li>
        <li>กางเกง - 12:00 - 13:00</li>
        <li>หมวก - 13:00 - 14:00</li>
        <li>รองเท้า - 14:00 - 15:00</li>
        <li>อุปกรณ์ - 15:00 - 16:00</li>
        <li>กระเป๋า - 16:00 - 17:00</li>
    </ul>
</div> -->
        </div>
    </div>
 <!-- ส่วนการ์ดเวลาในการขาย -->
 <!-- <div class="card time-card">
    <h3>เวลาในการขาย</h3>
    <ul>
        <li>เสื้อ - 11:00 - 12:00</li>
        <li>กางเกง - 12:00 - 13:00</li>
        <li>หมวก - 13:00 - 14:00</li>
        <li>รองเท้า - 14:00 - 15:00</li>
        <li>อุปกรณ์ - 15:00 - 16:00</li>
        <li>กระเป๋า - 16:00 - 17:00</li>
    </ul>
</div> -->
<p>ทางลัด</p>
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
