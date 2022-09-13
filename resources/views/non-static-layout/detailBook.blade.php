@extends('..template.main-layout')
@section('content')
<div class="row">
    <div class="book-detail">
        <div class="main">
            <div class="img-book">
                <img src="img/book.jpg" alt="ảnh của cuốn sách nè">
            </div>
            <div class="news-book">
                <h1>Tên sách</h1>
                <p><strong>tên tác giả</strong></p>
                <i class="icon fa fa-eye">1000</i>
                <hr>
                <span>Cảm ơn bạn. Mình muốn nó trên tất cả các url của web nên mình dùng view share trong appProvider Cảm ơn bạn. Mình muốn nó trên tất cả các url của web nên mình dùng view share trong appProvider Cảm ơn bạn. Mình muốn nó trên tất cả các url của web nên mình dùng view share trong appProvider Cảm ơn bạn. Mình muốn nó trên tất cả các url của web nên mình dùng view share trong appProvider Cảm ơn bạn. Mình muốn nó trên tất cả các url của web nên mình dùng view share trong appProvider Cảm ơn bạn. Mình muốn nó trên tất cả các url của web nên mình dùng view share trong appProvider Cảm ơn bạn. Mình muốn nó trên tất cả các url của web nên mình dùng view share trong appProvider Cảm ơn bạn. Mình muốn nó trên tất cả các url của web nên mình dùng view share trong appProvider</span>
            </div>
        </div>
        <div class="container-btn">
            <a href="/Book/Read?id=<?php echo $_REQUEST['id']; ?>"><strong>Đọc</strong></a>
        </div>
    </div>
    <hr>
    <h1>SÁCH LIÊN QUAN</h1>
    <div class="item-row">
        @for($i =1;$i<=5;$i++)
        <a href="/Book?id=1" class="item">
            <center><img src="img/book.jpg" alt="ảnh"></center>
            <h2>Tên Sách</h2>
            <h4>Tên tác giả</h4>
            <center><p>Mô tả</p></center>
        </a>
        @endfor
    </div>
    <hr>
    <h1>ĐÁNH GIÁ</h1>
    <div class="rate-container">
        <div class="my-rate">
            <form action="/Rate" method="post">
                <h2>Đánh giá </h2>
                <textarea name="rateText" id="rataeText" cols="35" rows="10" placeholder="nhập đánh giá của bạn..."></textarea>
                <br>
                <input type="submit" value="Gửi" id="btnRate" class="btnRate">
            </form>
        </div>
        <hr>
        <div class="all-rate">
            @for($i=1;$i<=10;$i++)
            <div class="row-rate" id="cmt{{ $i }}">
                <div class="main">
                    <div class="img">
                        <img src="img/live-search.png" alt="" class="avt">
                    </div>
                    <div class="main-rate">
                        <h2>Nguyễn Kiêm Lực</h2>
                        <span>hđỉnh của chóp :D</span>
                        <center>
                            <div class="tool">
                                <label class="like">
                                    <i class="icon fa fa-thumbs-up"></i>
                                    <a href="#cmt{{ $i }}">like</a>
                                </label>
                                <label class="comment" id="">
                                    <i class="icon fa fa-comment"></i>
                                    <a href="#cmt{{ $i }}" class="reply" rep="reply{{ $i }}">reply</a>
                                </label>
                                <label class="delete" id="">
                                    <i class="icon fa fa-trash"></i>
                                    <a href="#cmt{{ $i }}">delete</a>
                                </label>
                            </div>
                        </center>
                    </div>
                </div>
                <form method="post" class="rowReply" id="reply{{ $i }}">
                    <div class="avt-rep">
                        <img src="img/live-search.png" alt="avt reply">
                    </div>
                    <div class="content-reply">
                        <input type="text" name="rep{{ $i }}" id="" placeholder="nhập câu trả lời của bạn">
                        <input type="submit" value="gữi">
                    </div>
                </form>
                <div class="row-rep">
                    
                </div>
            </div>
            
            @endfor
        </div>
    </div>
</div>
@endsection