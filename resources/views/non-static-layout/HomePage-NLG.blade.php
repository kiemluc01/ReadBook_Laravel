@extends('.template.main-layout')
@section('content')
<div class="content-container">
    <!-- row  -->
    @for($a =1;$a<=5;$a++)
    <div class="row">
        <h1>Danh mục sách</h1>
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
        <div class="item-row">
            @for($i =1;$i<=2;$i++)
            <a href="/Book?id=1" class="item">
                <center><img src="img/book.jpg" alt="ảnh"></center>
                <h2>Tên Sách</h2>
                <h4>Tên tác giả</h4>
                <center><p>Mô tả</p></center>
            </a>
            @endfor
        </div>
    </div>
    @endfor 
    <!-- end row  -->
</div>
@endsection