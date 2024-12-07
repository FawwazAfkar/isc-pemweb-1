<?php
include 'koneksi.php';
if (isset($_POST['tambah'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $role = $_POST['role'];
    $sql = "INSERT INTO user (username, password, kode) VALUES ('$username', '$password', '$role')";
    if (mysqli_query($conn, $sql)) {
        echo "Data berhasil ditambahkan.";
    } else {
        echo "Data gagal ditambahkan: " . $sql . "<br>" . mysqli_error($conn);
    }
}
mysqli_close($conn);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Insert</title>
</head>
<body>
    <h1> Insert User </h1>
    <form method="POST" action="insert.php">
        <table>
            <tr>
                <td><label for="username">Username</label></td>
                <td>:</td>
                <td><input type="text" id="username" name="username" required></td>
            </tr>
            <tr>
                <td><label for="password">Password</label></td>
                <td>:</td>
                <td><input type="password" id="password" name="password" required></td>
            </tr>
            <tr>
                <td><label for="role">Role</label></td>
                <td>:</td>
                <td><select id="role" name="role">
                    <?php
                        include 'koneksi.php';
                        $sql = "SELECT * FROM roles";
                        $query = mysqli_query($conn, $sql);
                        if (mysqli_num_rows($query) > 0) {
                            while ($row = mysqli_fetch_assoc($query)) {
                                echo '<option value="' . $row['kode'] . '">' . $row['nama_role'] . '</option>';
                            }
                        } else {
                            echo 'Tidak ada data roles.';
                        }
                    ?>
                </select></td>
            </tr>
            <tr>
                <td><input type="submit" name="tambah" id="tambah" value="Tambah"></td>
            </tr>
        </table>
    </form>
    
</body>
</html>