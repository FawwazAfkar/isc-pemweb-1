<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,
initial-scale=1.0">
<title>Website Data Pegawai</title>
</head>
<body>
<h1>Data Pegawai</h1>
<!-- Form Input -->
<form action="insert.php" method="POST"
enctype="multipart/form-data">
<table>
<tr>
<td><label for="nip">NIP</label></td>
<td>:</td>
<td><input type="text" id="nip" name="nip" maxlength="11"
required></td>
</tr>
<tr>
<td><label for="nama">Nama</label></td>
<td>:</td>
<td><input type="text" id="nama" name="nama"
required></td>
</tr>
<tr>
<td><label for="tanggal_lahir">Tanggal
Lahir</label></td>
<td>:</td>
<td><input type="date" id="tanggal_lahir"
name="tanggal_lahir" required></td>
</tr>
<tr><td><label for="alamat">Alamat</label></td>
<td>:</td>
<td><textarea id="alamat" name="alamat"
required></textarea></td>
</tr>
<tr>
<td><label for="divisi">Divisi</label></td>
<td>:</td>
<td><select id="divisi" name="divisi">
<option value="IT">IT</option>
<option value="HRD">HRD</option>
<option value="Umum">Umum</option>
</select>
</td>
</tr>
<tr>
<td><label for="foto">Foto (JPG atau
PNG)</label></td>
<td>:</td>
<td><input type="file" id="foto" name="foto"
accept=".jpg, .png" required></td>
</tr>
<tr>
<td><input type="submit" name="tambah"
id="tambah" value="Tambah"></td>
</tr>
</table>
<br>
</form>
<!-- View Data Pegawai -->
<h2>Tabel Data Pegawai</h2>
<table border="1">
<tr>
<th>NIP</th>
<th>Nama</th>
<th>Tanggal Lahir</th>
<th>Alamat</th>
<th>Divisi</th>
<th>Foto</th><th>Aksi</th>
</tr>
<?php
include 'view.php';
?>
</table>
</body>
</html>