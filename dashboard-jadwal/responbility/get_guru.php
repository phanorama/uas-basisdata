<?php
include "../../config/config.php";

$category_id = intval($_GET['mata_pelajaran_id']);
$query2 = "SELECT guru_id, nama FROM guru WHERE mata_pelajaran_id = $category_id";
$result2 = mysqli_query($conn, $query2);
$categories_guru = array();
if (mysqli_num_rows($result2)) {
    while ($row = mysqli_fetch_assoc($result2)) {
        $categories_guru[] = $row;
    }
}
$subcategories = json_encode($categories_guru);
$conn->close();

echo $subcategories;
?>