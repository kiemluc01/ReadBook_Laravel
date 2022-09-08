@extends('.template.main-layout')
@section('content')
<div class="row">
    <form action="Login" method="post">
        <table class="login">
            <tr>
                <th colspan="2"><h2>Đăng nhập</h2></th>
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
            <input type="hidden" name="_token"  value="<?php echo csrf_token(); ?>">
            <tr>
                <td colspan="2">
                    <center><input type="submit" value="Đăng nhập" name="btnlogin" id="btnlogin"></center>
                </td>
            </tr>
            <tr>
                <center><td colspan="2">
                    Bạn chưa có tài khoản? <a href="/Register">Đăng kí</a>
                </td></center>
            </tr>
        </table>
    </form>
</div>
@endsection