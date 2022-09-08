<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Đăng Nhập</h1>
    <form action=" dangnhap_xuly.php" method="post">
        <table>
            <tr>
                <td><label for="name">Username:</label></td>
                <td><input type="text" name="username" id="name"></td>
            </tr>
            <tr>
                <td><label for="pass">Password</label></td>
                <td><input type="password" name="password" id="pass"></td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="checkbox" name="remember"><span>Remember</span>
                </td>
            </tr>
            <tr>
                <td><input type="submit" value="login" name="login"></td>
                <td><input type="submit" value="cancel" name="cancel"></td>
            </tr>
        </table>
    </form>

</body>

</html>