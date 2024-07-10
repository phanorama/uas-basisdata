<?php
include "../config/config.php";

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: ../index.php");
    exit();
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard - SDN 3 Yuru Yuru</title>
    <link rel="stylesheet" href="../assets/compiled/css/app.css" />
    <link rel="stylesheet" href="../assets/compiled/css/app-dark.css" />
    <link rel="stylesheet" href="../assets/compiled/css/iconly.css" />
    <link rel="stylesheet" href="../assets/extensions/flatpickr/flatpickr.min.css" />
</head>

<body class="text-sm">