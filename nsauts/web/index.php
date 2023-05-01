<!DOCTYPE html>
<html>
<body>

<?php
# Initialisasi credentials untuk database
$server = 'redlock-db';
$username = 'user';
$password = 'pass';
$db = 'redlock';

# Buat connection baru ke database
$conn = new mysqli($server, $username, $password, $db);

# Cek koneksi gagal atau tidak
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

# SQL query untuk memanggil data
$sql = "SELECT ID, Nama, Alamat, Jabatan FROM users";
$res = $conn->query($sql);

# Print database
if ($res->num_rows > 0) {
    while($row = $res->fetch_assoc()) {
        echo "ID: ". $row["ID"]. " - Nama: ". $row["Nama"]. " - Alamat " . $row["Alamat"]. " - Jabatan " . $row["Jabatan"]. "<br>";
    }
} else {
    echo "0 results";
}

$conn->close();
?>

</body>
</html>
