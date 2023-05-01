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

# SQL Query untuk menampilkan jumlah user dalam database
$sql2 = "SELECT * from users";

if ($res2 = mysqli_query($conn, $sql2)) {

    // Return the number of rows in result set
    $jumlah = mysqli_num_rows($res2);
    
    // Display result
    printf("Jumlah user dalam database :  %d\n", $jumlah);
 }

$conn->close();
?>

</body>
</html>
