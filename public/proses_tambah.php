<?php
include('config.php');
if (isset($_POST['tambah'])) {
    $name = $_POST['name'];
    $nim = $_POST['nim'];
    $prodi = $_POST['prodi'];
    $query = "INSERT INTO `biodata`(`nama`, `nim`, `prodi`) VALUES ('$name', '$nim', '$prodi')";
    $result = mysqli_query($koneksi, $query);
    if ($result) {
        header("Location: index.php");
    } else {
        echo "gagal ditambahkan";
    }
} else {
    echo "data tidak terkirim";
}
