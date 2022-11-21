<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "uas_presensi_tari";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$tgl_presensi = date("Y-m-d");
// insert data into table
$sql = "INSERT INTO presensi (tgl_presensi, makul, kelas, nim, status_presensi) 
VALUES ('$tgl_presensi', '$makul', '$kelas', '$nim', '$status_presensi')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
echo "<br>";
$conn->close();
// me-redirect ke file : read_data.php untuk menampilkan hasilnya
// header('Location: read_data.php');
?>