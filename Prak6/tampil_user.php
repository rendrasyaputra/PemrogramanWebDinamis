<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data User</title>
</head>
<body>
<?php
echo "<h2>User</h2>
<form method=POST action=form_user.php>
<input type=submit value='Tambah User'>
</form><br>
<form method=POST action=form_login.php>
<input type=submit value='Login User'>
</form>
<table>
<tr><th>No</th><th>Username</th><th>NamaLengkap</th><th>Email</th><th>Aksi</th></tr>";
include "koneksi.php";
$sql="select * from user order by id_user";
$tampil = mysqli_query($con,$sql);
if (mysqli_num_rows($tampil) > 0) {
$no=1;
while ($r = mysqli_fetch_array($tampil))
{
echo "<tr><td>$no</td><td>$r[id_user]</td>
<td>$r[nama_lengkap]</td>
<td>$r[email]</td>
<td><a href='hapus_user.php?id=$r[id_user]'>Hapus</a></td>
</tr>";
$no++;
}
echo "</table>";
} else {
echo "0 results";
}
mysqli_close($con);
?>
</body>
</html>
