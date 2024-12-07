<?php
include 'koneksi.php';
if (isset($_POST['tambah'])) {
    //ambil data dari form
    $nip = $_POST['nip'];
    $nama = $_POST['nama'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $alamat = $_POST['alamat'];
    $divisi = $_POST['divisi'];
    $fotoName = $_FILES['foto']['name'];
    $fotoType = $_FILES['foto']['type'];

    //upload foto ke folder images
    if($fotoName!=''){
        $Uploadfoto = 'images/'. $fotoName;
        move_uploaded_file($_FILES['foto']['tmp_name'], $Uploadfoto);
    }

    //insert data ke database
    $insert = "INSERT INTO Pegawai (NIP, nama, tanggal_lahir, alamat, divisi, foto) VALUES ('$nip', '$nama', '$tanggal_lahir', '$alamat', '$divisi', '$Uploadfoto')";
    $query = mysqli_query($conn, $insert);
    if ($query) {
        header('Location: index.php');
    } else {
        echo 'Error: ' . mysqli_error($conn);
    }
}
mysqli_close($conn);
?>