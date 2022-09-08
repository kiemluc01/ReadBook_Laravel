<!DOCTYPE html>
<html lang="vi">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Đọc sách</title>
        <link rel="stylesheet" href="css/app.css">
        <link rel="stylesheet" href="css/book.css">
        <link rel="stylesheet" href="css/header.css">
        <link rel="stylesheet" href="css/login.css">
        <link rel="stylesheet" href="css/header.css">
        <link rel="stylesheet" href="css/header.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/emojionearea/3.2.8/emojionearea.min.js"></script>
    </head>
    <body >
        <!-- header -->
        <div class="header">
            <img src="img/book.jpg" alt="logo" class="logo">
            <nav class="menu">
                <li><a href="">Trang chủ</a></li>
                <li><a href="">Danh mục</a></li>
                <li><a href=""></a>Ngôn ngữ</li>
                <li><a href=""></a>Trợ giúp</li>
            </nav>
            @if(url()->current() != 'http://127.0.0.1:8000' && url()->current() != 'http://127.0.0.1:8000/Login' && url()->current() != 'http://127.0.0.1:8000/Register' )
            <ul class="member">
                <li><a href="" style="display:flex"><img src="img/book.jpg" alt=""><span style="line-height:10vh;display:inline-block;margin-left:5px;">Tên người dùng</span></a>
                    <ul class="submenu">
                        <li><a href="/">Đăng xuất</a></li>
                    </ul>
                </li>
            </ul>
            @else
            <style>
                .header .menu{
                    width: 50%;
                }
            </style>
            <ul class="login">
                <li style="margin-right:20px;"><a href="/Login">Đăng nhập</a></li>
            </ul>
            @endif
        </div>
        <!-- end header  -->

        <!-- content  -->
        @yield('content')
        <!-- end content  -->

        <!-- foooter -->

        <!-- end foooter -->

        
    </body>
</html>
