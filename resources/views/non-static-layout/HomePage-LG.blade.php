@extends('.template.main-layout')
@section('content')
<div class="content-container">
    <!-- row  -->
    @for($a =1;$a<=5;$a++)
    <div class="row">
        <h1>Danh mục sách</h1>
        <div class="item-row">
            @for($i =1;$i<=5;$i++)
            <div class="item">
                <center><img src="img/book.jpg" alt="ảnh"></center>
                <h2>Tên Sách</h2>
                <h4>Tên tác giả</h4>
                <p>mô tảmô tảmô tảmô tảmô tảmô tảmô tảmô tảmô tảmô tảmô tảmô tảmô tảmô tảmô tảmô tảmô tảmô tảmô tảmô tảmô tảmô tảmô tảmô tảmô tảmô tảmô tảmô tảmô tảmô tảmô tảmô tảmô tảmô tảmô tảmô tảmô tảmô tảmô tả</p>
            </div>
            @endfor
        </div>
        <div class="item-row">
            @for($i =1;$i<=2;$i++)
            <div class="item">
                <center><img src="img/book.jpg" alt="ảnh"></center>
                <h2>Tên Sách</h2>
                <h4>Tên tác giả</h4>
                <p>mô tảmô tảmô tảmô tảmô tảmô tảmô tảmô tảmô tảmô tảmô tảmô tảmô tảmô tảmô tảmô tảmô tảmô tảmô tảmô tảmô tảmô tảmô tảmô tảmô tảmô tảmô tảmô tảmô tảmô tảmô tảmô tảmô tảmô tảmô tảmô tảmô tảmô tảmô tả</p>
            </div>
            @endfor
        </div>
    </div>
    @endfor 
    <!-- end row  -->
</div>

@endsection