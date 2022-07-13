<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">  
<html xmlns="http://www.w3.org/1999/xhtml">  
<head>  
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />  
<title>Aplikasi Penggajian</title>  
<style type="text/css">  
body,td,th {  
 font-family: "Courier New", Courier, monospace;  
}  
</style>  
</head>  
<body>  
<p>  
<?php  
include("config.php");  
$nip = $_POST['nip'];   
$nama = $_POST['nama'];  
$blnthn = $_POST['blnthn']; 
$status = $_POST['status'];   
$jabatan = $_POST['jabatan'];   
  
$sql = "SELECT * FROM db_gaji WHERE nip = '$nip' AND nama = '$nama'";  
  
$hasil = mysql_query($sql, $koneksi);  
$record = mysql_fetch_array($hasil);  
  
//kondisi jika nip / nama kosong, maka akan disuruh input lagi  
if(($nip == "") || ($nama == "")) {  
 echo "<center><h1>Maaf NIP / Nama masih kosong.</h1>   
Anda akan kembali ke halaman utama dalam 10 detik. </center>";  
 header('refresh:10;url=index.php');  
 }  
//jika nip / nama sudah ada isinya maka lanjut ke  kondisi berikutnya  
else {   
  
//kondisi jika nip dan blnthn telah digunakan / telah tersimpan di database  
if(($nip == $record['nip']) and ($blnthn == $record['blnthn'])){  
   
 echo "<center><h1>Maaf NIP $nip dan $blnthm telah digunakan oleh user lain.</h1>   
Anda akan kembali ke halaman utama dalam 10 detik. </center>";  
 header('refresh:10;url=index.php');  
 }   
  
//jika belum tersimpan / belum digunakan maka data siap diproses dan disimpan ke database   
else {  
   
//menghitung gaji pokok  
if ($jabatan == "Direktur"){  
 $gaji_pokok = 4000000;  
 }  
else if ($jabatan == "Sekretaris"){  
 $gaji_pokok = 3000000;  
 }  
else if ($jabatan == "Manajer"){  
 $gaji_pokok = 350000;  
 }  
else if ($jabatan == "Keuangan"){  
 $gaji_pokok = 320000;  
 }  
  
//Menghitung Tunjangan  
if ($status == "Menikah"){  
 $tunjangan = 0.1  * $gaji_pokok;  
 }  
else {  
 $tunjangan = 0.05 * $gaji_pokok;  
 }  
  
//Menghitung Gaji Bersih  
$gaji_bersih = $gaji_pokok + $tunjangan;  
  
  
  
//Menyimpan data ke database  
  
$sql = "INSERT INTO db_gaji (nip, nama, blnthn, status, jabatan, gaji_pokok, tunjangan, gaji_bersih) VALUES ('$nip', '$nama', '$status', '$blnthn','$jabatan', '$gaji_pokok', '$tunjangan', '$gaji_bersih')";  
  
$hasil = mysql_query($sql, $koneksi);  
  
if($hasil){  
 $pesan = "Data berhasil disimpan.";  
  
 }  
else {  
 echo "Data gagal disimpan   
";  
 }  
?>  
</p>  
  
  <div align="center">  
<table width="395" border="1">  
<tr>  
<td bgcolor="#00FFFF"><table width="395" border="0">  
<tr>  
<td colspan="2"><div align="center"><strong>DAFTAR GAJI PEGAWAI</strong></div></td>  
</tr>  
<tr>  
<td height="10" colspan="2"><hr /></td>  
</tr>  
<tr>  
<td width="156">&nbsp;NIP</td>  
<td width="229">: <?php echo "$nip"; ?></td>  
</tr>  
<tr>  
<td>&nbsp;Nama</td>  
<td>: <?php echo "$nama"; ?></td>  
</tr> 
<tr>  
<td>&nbsp;Bln Thn Gaji</td>  
<td>: <?php echo "$blnthn"; ?></td>  
</tr> 
<tr>  
<td>&nbsp;Status</td>  
<td>: <?php echo "$status"; ?></td>  
</tr>  
<tr>  
<td>&nbsp;Jabatan</td>  
<td>: <?php echo "$jabatan"; ?></td>  
</tr>  
<tr>  
<td>&nbsp;GajiPokok</td>  
<td>: <?php echo "Rp. " .number_format($gaji_pokok); ?></td>  
</tr>  
<tr>  
<td>&nbsp;Tunjangan Gaji</td>  
<td>: <?php echo "Rp. " .number_format($tunjangan); ?></td>  
</tr>  
<tr>  
<td colspan="2">____________________________________ +</td>  
</tr>  
<tr>  
<td>&nbsp;Gaji Bersih</td>  
<td>: <?php echo "Rp. " .number_format($gaji_bersih); ?></td>  
</tr>  
<tr>  
<td colspan="2">&nbsp;<b><?php echo "$pesan" ?></b></td>  
</tr>  
<tr>  
<td colspan="2"><a href="javascript:history.back()">Kembali</a></td>  
</tr>  
</table></td>  
</tr>  
</table>  
</div>  
  
  
<?php   
}  
}  
?>  
</body>  
</html>  
