<?php
include 'koneksi.php';
echo "<h1>View User</h1>";
$sql = "SELECT * FROM user join roles on user.kode = roles.kode";
$query = mysqli_query($conn, $sql);
if (mysqli_num_rows($query) > 0) {
    echo '<table border="1">';
    echo '<tr>';
    echo '<th>Username</th>';
    echo '<th>Role</th>';
    echo '</tr>';
    while ($row = mysqli_fetch_assoc($query)) {
        echo '<tr>';echo '<td>' . $row['username'] . '</td>';
        echo '<td>' . $row['nama_role'] . '</td></tr>';
    }
    echo '</table>';
} else {
    echo 'Tidak ada data pegawai.';
}
mysqli_close($conn);
?>
<br>
<a href="insert.php">Insert User Disini</a>