<?php
include 'koneksi.php';
$sql = "SELECT * FROM pegawai";
$query = mysqli_query($conn, $sql);
if (mysqli_num_rows($query) > 0) {
while ($row = mysqli_fetch_assoc($query)) {
echo '<tr>';echo '<td>' . $row['NIP'] . '</td>';
echo '<td>' . $row['nama'] . '</td>';
echo '<td>' . $row['tanggal_lahir'] . '</td>';
echo '<td>' . $row['alamat'] . '</td>';
echo '<td>' . $row['divisi'] . '</td>';
echo '<td><img src="' . $row['foto'] . '"
width="100"></td>';
echo '<td><a href="delete.php?nip=' . $row['NIP'] .
'">Hapus</a></td>';
echo '</tr>';
}
} else {
echo 'Tidak ada data pegawai.';
}
mysqli_close($conn);
?>