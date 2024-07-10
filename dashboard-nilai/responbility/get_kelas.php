<?php
include "../../config/config.php";

$query1 = "SELECT * FROM kelas";
$result1 = mysqli_query($conn, $query1);
$categories_kelas = array();
if (mysqli_num_rows($result1)) {
    while ($data = mysqli_fetch_assoc($result1)) {
        $categories_kelas[] = $data;
    }
}
$categories = json_encode($categories_kelas);
$conn->close();

echo $categories;
?>