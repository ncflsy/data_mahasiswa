<?php
include('config.php');
$id = $_GET['id'];
$query = "DELETE FROM `biodata` WHERE id='$id'";
$result = mysqli_query($koneksi, $query);
if ($result) {
    header("Location: index.php");
}
