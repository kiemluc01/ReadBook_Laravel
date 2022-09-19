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
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/emojionearea/3.2.8/emojionearea.min.js"></script>
        <script src="js/click.js"></script>
        <script src="js/auto-add.js"></script>
    </head>
    <body >
    
        @if(strpos(url()->current(),'Login'))
            @php 
                \App\Http\Controllers\CookieController::delete('user');
            @endphp
        @elseif(strpos(url()->current(),'Register'))
            @php 
                \App\Http\Controllers\CookieController::delete('url');
            @endphp
        @else
        @php $id =''; @endphp
            @if(isset($_REQUEST['id']))
                @php $id = "?id=".$_REQUEST['id']; @endphp
            @endif
            @php 
                \App\Http\Controllers\CookieController::set('url',url()->current().$id);
            @endphp
        @endif
        @if(empty($user))
            @php $href = '/'; @endphp
        @else
            @php 
                $href = '/Home';
                \App\Http\Controllers\CookieController::setUser($user);
            @endphp
        @endif
        <!-- header -->
        <div class="header" id="header">
            <img src="img/book.jpg" alt="logo" class="logo">
            <nav class="menu">
                <li><a href="<?php echo $href ?>">Trang chủ</a></li>
                <li><a href="">Danh mục</a></li>
                <li><a href=""></a>Ngôn ngữ</li>
                <li><a href=""></a>Trợ giúp</li>
            </nav>
            
            @if(isset($user))
            @php
                $mem = App\Http\Controllers\UserController::getMem($user);
            @endphp
            <ul class="member">
                <li>
                    <a href="" style="display:flex">
                        <img src="img/book.jpg" alt="">
                        <span style="line-height:10vh;display:inline-block;margin-left:5px;">
                            @foreach($mem as $name)  
                                @if($name->MemberName != NULL) 
                                    {{$name->MemberName;}}  
                                @else 
                                    {{ "chưa đặt tên"; }} 
                                @endif  
                            @endforeach
                        </span>
                    </a>
                    <ul class="submenu">
                        <li><a href="/Logout">Đăng xuất</a></li>
                    </ul>
                </li>
            </ul>
            @elseif(url()->current() == 'http://127.0.0.1:8000/Login')
            <style>
                .header .menu{
                    width: 50%;
                }
            </style>
            <ul class="login">
                <li style="margin-right:20px;"><a href="/Register">Đăng Ký</a></li>
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
        <div class="row">
            <p></p>
        </div>
        <!-- end foooter -->

        
    </body>
</html>
