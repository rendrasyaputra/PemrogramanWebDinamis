<?php 
include 'koneksi.php';
?>
<h3>Form Pencarian DATA KHS Dengan PHP </h3>
<form action="" method="get">
    <label>Cari :</label>
    <input type="text" name="cari">
    <input type="submit" value="Cari">
</form>
<?php 
if(isset($_GET['cari'])){
    $cari = $_GET['cari'];
    echo "<b>Hasil pencarian : ".$cari."</b>";
}
?>
<table border="1">
<tr>
    <th>No</th>
    <th>NIM</th>
    <th>Nama MHS</th>
    <th>Kode MK</th>
    <th>Nama MK</th>
    <th>Nilai</th>
</tr>
<?php 
if(isset($_GET['cari'])){
    $cari = $_GET['cari'];
    $sql="select mahasiswa.nim, mahasiswa.nama, matakuliah.kodeMK, matakuliah.namaMK, khs.nilai 
    from mahasiswa inner join khs on mahasiswa.nim=khs.nim inner join matakuliah on 
    matakuliah.kodeMK=khs.kodeMK where mahasiswa.nim like'%".$cari."%'";
    $tampil = mysqli_query($con,$sql);
}else{
    $sql="select mahasiswa.nim, mahasiswa.nama, matakuliah.kodeMK, matakuliah.namaMK, khs.nilai 
    from mahasiswa inner join khs on mahasiswa.nim=khs.nim inner join matakuliah on 
    matakuliah.kodeMK=khs.kodeMK";
    $tampil = mysqli_query($con,$sql);
}
$no = 1;
while($r = mysqli_fetch_array($tampil)){
?>
<tr>
    <td><?php echo $no++; ?></td>
    <td><?php echo $r['nim']; ?></td>
    <td><?php echo $r['nama']; ?></td>
    <td><?php echo $r['kodeMK']; ?></td>
    <td><?php echo $r['namaMK']; ?></td>
    <td><?php echo $r['nilai']; ?></td>
</tr>
<?php } ?>
</table>