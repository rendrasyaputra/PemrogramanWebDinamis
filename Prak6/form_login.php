<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login User</title>
</head>
<body>
<?php
echo "<h2>Login</h2>
<form method=post action=cek_login.php>
<table>
<tr><td>Username</td><td> : <input name='id_user' type='text'></td></tr>
<tr><td>Password</td><td> : <input name='password' type='password'></td></tr>
<tr><td>Konfirmasi Password</td><td> : <input name='konfir_password' type='password'></td></tr>
<tr><td>Captcha<br>
<img src='captcha.php' /></td><td> : <input name='captcha_code' type='text'></td></tr>
<tr><td colspan=2><input type='submit' value='LOGIN'></td></tr>
</table>
</form>";
?>
</body>
</html>