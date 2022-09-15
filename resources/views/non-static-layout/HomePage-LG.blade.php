@extends('.template.main-layout')
@section('content')
<?php
    if(empty($user)){
        echo '
            <script>
                alert("bạn phải đăng nhập trước")
                location.href = "/Login"
            </script>
        ';
    }
?>
<div class="content-container">
    <!-- row  -->
    @php
        $cats = App\Http\Controllers\BookController::getCat();
    @endphp
    @foreach($cats as $cat)
        @php
            $books = App\Http\Controllers\BookController::getBookCat($cat->idDanhmuc);
        @endphp
        @foreach($books as $bookcheck)
            @if($bookcheck->Tensach != NULL)
                <div class="row">
                    <h1>{{ $cat->Tendanhmuc }}</h1>
                    <div class="item-row">
                    @php
                        $i = 1;
                    @endphp 
                        @foreach($books as $book)
                            <a href="/Book?id=1" class="item">
                                    <div class="img">
                                        <img src="{{ $book->imgSach; }}" alt="ảnh">
                                    </div>
                                    <h5>{{ $book->Tensach; }}</h5>
                                    <h6> {{ $book->Tacgia; }} </h5>
                                    <center><p>{{ $book->TomtatND; }}</p></center>
                            </a>
                            @php $i++; @endphp
                            @if($i > 5)
                    </div>
                    <div class="item-row">
                            @endif
                        @endforeach
                    </div>
                </div>
            @endif
            @break;
        @endforeach
    @endforeach
    <!-- end row  -->
</div>

@endsection