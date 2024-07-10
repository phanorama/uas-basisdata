<?php
include "../../config/config.php";

$query1 = "SELECT * FROM mata_pelajaran";
$result1 = mysqli_query($conn, $query1);
$categories_mapel = array();
if (mysqli_num_rows($result1)) {
    while ($data = mysqli_fetch_assoc($result1)) {
        $categories_mapel[] = $data;
    }
}
$categories = json_encode($categories_mapel);
$conn->close();

echo $categories;
?>