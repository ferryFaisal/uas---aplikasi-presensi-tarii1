<?php
require "connect_db.php";
// delete record from tabel 'user' at database 'webpro'
// query for delete a record
$sql = "DELETE FROM mahasiswa WHERE nim = '$_GET[nim]'";

if ($conn->query($sql) === TRUE) {
    echo "<h1>Record deleted successfully</h1>";
    header('Location: tables_mahasiswa.php');
} else {
    echo "Error deleting record: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>