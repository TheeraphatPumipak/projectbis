<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>F FLOW</title>
   <link rel="stylesheet" href="{{ asset('css/style.css') }}">
   <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">

</head>

<body>
   <div class="container">
      <div class="logo">
         <img src="{{ asset('img/FFLOW LOGO.jpg') }}" alt="FFLOW LOGO">
      </div>
      <div class="title">
         <h1>F FLOW</h1>
      </div>

      <!-- ส่วนปุ่ม -->
      <div class="buttons">
         <button type="button" onclick="goToPage('{{ route('Login') }}')">เข้าสู่ระบบ</button>
         <button type="button" onclick="goToPage('{{ route('Register') }}')">ลงทะเบียน</button>
      </div>
   </div>

   <script>
      function goToPage(url) {
          document.body.style.opacity = 0; 
          setTimeout(function() {
              window.location.href = url; 
          }, 300); 
      }
  </script>
</body>

</html>