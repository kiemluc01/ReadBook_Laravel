@extends('.template.main-layout')
@section('content')
<div class="row">
    <form action="Register" method="post">
        <table class="register">
            <tr>
                <th colspan="2"><h2>Đăng kí</h2></th>
            </tr>
            <tr>
                <td>Họ tên:</td>
                <td>
                    <input type="text" name="name" id="name" placeholder="Họ và tên...">
                </td>
            </tr>
            <tr>
                <td>Email:</td>
                <td>
                    <input type="text" name="email" id="email" placeholder="nhập email của bạn..">
                </td>
            </tr>
            <tr>
                <td>Tên đăng nhập:</td>
                <td>
                    <input type="text" name="user" id="user" placeholder="nhập tên đăng nhập...">
                </td>
            </tr>
            <tr>
                <td>Mật khẩu:</td>
                <td>
                    <input type="password" name="pw" id="pw" placeholder="nhập mật khẩu...">
                </td>
            </tr>
            <tr>
                <td>Xác nhận mật khẩu:</td>
                <td>
                    <input type="password" name="cfpw" id="cfpw" placeholder="nhập lại mật khẩu...">
                </td>
            </tr>
            <input type="hidden" name="_token"  value="<?php echo csrf_token(); ?>">
            <tr>
                <td colspan="2">
                    <center><input type="submit" name="btnregister" id="btnregister" value="Đăng kí"></center>
                </td>
            </tr>
            <tr>
                <center>
                <td colspan="2">
                    Bạn đã có tài khoản? <a href="/Login">Đăng nhập</a>
                </td>
                </center>
            </tr>
        </table>
    </form>
</div>
@endsection