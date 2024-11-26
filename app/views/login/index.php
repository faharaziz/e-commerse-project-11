<h2>Login</h2>

<form action="<?php echo URL; ?>/login/proses" method="post">
    <table>
        <tr>
            <td>EMAIL</td>
            <td><input type="text" name="user_email"></td>
        </tr>
        <tr>
            <td>PASSWORD</td>
            <td><input type="password" name="user_password"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_proses" value="LOGIN"></td>
        </tr>
    </table>
</form>