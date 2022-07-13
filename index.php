<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">  
<html xmlns="http://www.w3.org/1999/xhtml">  
<head>  
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />  
<title>Aplikasi Penggajian</title>  
</head>  
<body>  
<div align="center">  
<form id="form1" name="form1" method="post" action="proses.php">  
<table width="395" border="1">  
<tr>  
<td bgcolor="#CCCCCC"><table width="450" border="0">  
<tr>  
<td colspan="2"><div align="center"><strong>ENTRY DATA PENGGAJIAN</strong></div></td>  
</tr>  
<tr>  
</tr>
<tr>  
<td>NIP</td>  
<td> :  
<input name="nip" type="text" />   
* Maksimal 6 karakter</td>  
</tr> 
<tr>  
<td>Nama </td>  
<td>:  
<input name="nama" type="text" />   
* Maksimal 40 karakter</td>  
</tr>  
<tr>  
<td>Bulan Tahun Gaji</td>  
<td>:  
<input name="blnthn" type="text" />   
* Maksimal 6 karakter</td>  
</tr>  
<tr>  
<td>Status</td>  
<td>:  
<input name="status" type="radio" value="Menikah" checked="checked" />  
Menikah  
<input name="status" type="radio" value="Belum Menikah" />  
Belum Menikah</td>  
</tr>  
<tr>  
<td>Jabatan</td>  
<td>:  
<select name="jabatan">  
<option value="Direktur">Direktur</option>  
<option value="Sekretaris">Sekretaris</option>  
<option value="Manager">Manager</option>  
<option value="Keuangan">Keuangan</option>  
</select></td>  
</tr> 
 
<tr>  
<td>&nbsp;</td>  
<td>&nbsp;  
<input name="input" type="submit" />  
<input name="input" type="reset" /></td>  
</tr>  
</table></td>  
</tr>  
</table>  
</form>  
</div>  
</body>  
</html>  
