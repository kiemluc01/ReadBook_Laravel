@extends('..template.main-layout')
@section('content')
@php
    $book = App\Http\Controllers\Bookcontroller::CurrentBook($_REQUEST['id']);
    $idCat ='';
@endphp
<div class="row">
    @foreach($book as $b)
        @php
            $idCat = $b->idDanhmuc;
        @endphp
    <div class="book-detail">
        <div class="main">
            <div class="img-book">
                <img src="img/book.jpg" alt="ảnh của cuốn sách nè">
            </div>
            <div class="news-book">
                <h1> {{ $b->Tensach }} </h1>
                <p><strong>{{ $b->Tacgia }}</strong></p>
                <i class="icon fa fa-eye">1000</i>
                <hr>
                <span>{{ $b->TomtatND }}</span>
            </div>
        </div>
        <div class="container-btn">
            <a href="/Book/Read?id=<?php echo $_REQUEST['id']; ?>"><strong>Đọc</strong></a>
        </div>
    </div>
        @break;
    @endforeach
    <hr>
    <!-- Books relate to cur book -->
    <h1>SÁCH LIÊN QUAN</h1>
    @php
        $books = App\Http\Controllers\Bookcontroller::BookRelate($idCat,$_REQUEST['id']);
        $i=0;
    @endphp
    <div class="item-row">
        @foreach($books as $bookRL)
            @php
                $i++;
            @endphp
            <a href="/Book?id={{ $bookRL->idSach }}" class="item">
                <div class="img">
                    <img src="{{ $bookRL->imgSach }}" alt="ảnh">
                </div>
                <h5>{{ $bookRL->Tensach }}</h5>
                <h6>{{ $bookRL->Tacgia }}</h6>
                <center><p>{{ $bookRL->TomtatND }}</p></center>
            </a>
            @if($i == 5)
                @break;
            @endif
        @endforeach
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
            @php $i =0; @endphp
            @foreach($book as $cmt)
            @php $i++; @endphp
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