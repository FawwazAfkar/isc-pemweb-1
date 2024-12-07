<?php
include 'koneksi.php';
if (isset($_GET['nip'])) {
$nip = $_GET['nip'];
//Hapus Foto
$row = mysqli_fetch_array(mysqli_query($conn, "SELECT foto
FROM Pegawai WHERE NIP='$nip'" ));
$Uploadfoto = $row['foto'];
unlink($Uploadfoto);
// Hapus data pegawai
$sql = "DELETE FROM Pegawai WHERE NIP='$nip'";
$query = mysqli_query($conn, $sql);
if($query){
header('Location: index.php');
} else {
echo 'Error: ' . mysqli_error($conn);
}
}mysqli_close($conn);
?>