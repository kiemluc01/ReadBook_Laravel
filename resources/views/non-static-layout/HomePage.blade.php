@extends('.template.main-layout')
@section('content')

<div class="content-container">
    <!-- row  -->
    @php
        $cats = App\Http\Controllers\BookController::getCat();
    @endphp
    @foreach($cats as $cat)
    @php
    $check = App\Http\Controllers\BookController::check($cat->idDanhmuc);
    @endphp
        @if($check)
            <div class="row">
                <h1>{{ $cat->Tendanhmuc }}</h1>
                <div class="item-row">
                @php
                    $books = App\Http\Controllers\BookController::getBookCat($cat->idDanhmuc);
                    $i = 0;
                @endphp
                    @foreach($books as $book)
                        <a href="/Book?id={{ $book->idSach; }}" class="item">
                                <div class="img">
                                    <img src="{{ $book->imgSach; }}" alt="ảnh">
                                </div>
                                <h5>{{ $book->Tensach; }}</h5>
                                <h6> {{ $book->Tacgia; }} </h5>
                                <center><p>{{ $book->TomtatND; }}</p></center>
                        </a>
                        @php $i++; @endphp
                        @if($i % 5 ==0)
                </div>
                <div class="item-row">
                        @endif
                    @endforeach
                </div>
            </div>
        @endif
    @endforeach
    <!-- end row  -->
</div>

@endsection