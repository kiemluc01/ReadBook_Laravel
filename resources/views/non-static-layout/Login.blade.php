<div class="row">
    <form action="Login" method="post">
        <table class="login">
            <tr>
                <th>ĐĂng nhập</th>
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
                <td>
                    <input type="submit" value="Đăng nhập" name="btnlogin" id="btnlogin">
                </td>
            </tr>
            <tr>
                <td>
                    Bạn chưa có tài khoản? <a href="/Register">Đăng kí</a>
                </td>
            </tr>
        </table>
    </form>
</div>