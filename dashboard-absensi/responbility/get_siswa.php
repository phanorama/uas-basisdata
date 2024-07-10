<?php
include "../../config/config.php";

$category_id = intval($_GET['kelas_id']);
$query2 = "SELECT siswa_id, nama FROM siswa WHERE kelas_id = $category_id";
$result2 = mysqli_query($conn, $query2);
$categories_siswa = array();
if (mysqli_num_rows($result2)) {
    while ($row = mysqli_fetch_assoc($result2)) {
        $categories_siswa[] = $row;
    }
}
$subcategories = json_encode($categories_siswa);
$conn->close();

echo $subcategories;
?>