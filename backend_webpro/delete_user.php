<?php
require "connect_db.php";
// delete record from tabel 'user' at database 'webpro'
// query for delete a record
$sql = "DELETE FROM user WHERE email = '$_GET[email]'";

if ($conn->query($sql) === TRUE) {
    // echo "<h1>Record deleted successfully</h1>";
    header('Location: tables_user.php');
} else {
    echo "Error deleting record: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>