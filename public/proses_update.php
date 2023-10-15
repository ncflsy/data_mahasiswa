<?php
include('config.php');
$id = $_GET['id'];
echo $id;
$nama = $_POST['name'];
$nim = $_POST['nim'];
$prodi = $_POST['prodi'];
$query = "UPDATE `biodata` SET `nama`='$nama',`nim`='$nim',`prodi`='$prodi' WHERE `id`='$id'";
$result = mysqli_query($koneksi, $query);
if ($result) {
    header("Location: index.php");
} else {
    echo "gagal diupdate";
}
