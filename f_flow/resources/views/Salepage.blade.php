<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sale</title>
    <link rel="stylesheet" href="{{ asset('css/sale.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>
<body>
@extends('layouts.app')

@section('content')

<div class="container">

    
    <!-- ด้านซ้าย: ตาราง -->
    <div class="table-wrapper" style="margin-top: -50px;">
    
    <div class="table-container">
    <button class="add-button">เพิ่มสินค้า</button>
        <table>
            <thead>
                <tr>
                    <th>รหัสสินค้า</th>
                    <th>รายละเอียด</th>
                    <th>ราคา</th>
                    <th>ขายไป/เหลือ</th>
                    <th>จัดการ</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>A001</td>
                    <td>เสื้อเชิ้ตสีเขียว M</td>
                    <td>150</td>
                    <td>3/5</td>
                    <td>
                        <i class="material-icons">person_add</i>
                        <i class="material-icons">edit</i>
                    </td>
                </tr>
                <tr>
                    <td>A003</td>
                    <td>เสื้อเชิ้ตสีฟ้า L</td>
                    <td>200</td>
                    <td>2/4</td>
                    <td>
                        <i class="material-icons">person_add</i>
                        <i class="material-icons">edit</i>
                    </td>
                </tr>
                <tr>
                    <td>A004</td>
                    <td>เสื้อเชิ้ตสีฟ้า M</td>
                    <td>200</td>
                    <td>2/4</td>
                    <td>
                        <i class="material-icons">person_add</i>
                        <i class="material-icons">edit</i>
                    </td>
                </tr>
                <tr>
                    <td>A005</td>
                    <td>เสื้อเชิ้ตแดง L</td>
                    <td>200</td>
                    <td>2/4</td>
                    <td>
                        <i class="material-icons">person_add</i>
                        <i class="material-icons">edit</i>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    </div>

    <!-- ด้านขวา: Live Video -->
    <div class="live">
        <!-- แถบหัวข้อด้านบน -->
        <div class="live-header">
            <p>Live</p>
            <p>Inbox</p>
            <p>Post</p>
        </div>
        
        <!-- เนื้อหาด้านล่าง -->
        <div class="live-content">
            <div class="comment-box">
                <div class="comment">
                    <span class="username">สมศักดิ์:</span> สนใจสินค้าครับ
                </div>
                <div class="comment">
                    <span class="username">อารยา:</span> มีไซส์ L ไหมคะ?
                </div>
                <div class="comment">
                    <span class="username">ธีรภัทร์:</span> โอนเงินแล้วนะครับ
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
</body>
</html>