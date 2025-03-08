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
        <p>วันหมดอายุการใช้งาน: 10/05/2025 (364 วัน)</p>
    </div>
</div>

@endsection


</body>
</html>
