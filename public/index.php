<?php
require('config.php');
$query = "select * from biodata";
$result = mysqli_query($koneksi, $query);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <section id="mahasiswa" class="p-[100px]">
        <div class="container p-8 border mx-auto">
            <div class="text-center">
                <h1 class="font-semibold text-3xl mx-auto mb-10">Data Mahasiswa</h1>

            </div>
            <div>
                <a href="input.php" class="bg-green-600 px-4 py-2 rounded-lg">Tambah</a>
                <table class="w-full mt-4">
                    <thead>
                        <tr class="bg-green-400">
                            <th class="border border-gray-500 py-2">ID</th>
                            <th class="border border-gray-500 py-2">Nama</th>
                            <th class="border border-gray-500 py-2">NIM</th>
                            <th class="border border-gray-500 py-2">Prodi</th>
                            <th class="border border-gray-500 py-2">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                            <tr>
                                <th class="border border-gray-500 py-2"><?php echo $row['id'] ?></th>
                                <th class="border border-gray-500 py-2"><?php echo $row['nama'] ?></th>
                                <th class="border border-gray-500 py-2"><?php echo $row['nim'] ?></th>
                                <th class="border border-gray-500 py-2"><?php echo $row['prodi'] ?></th>
                                <th class="border border-gray-500 py-2">
                                    <a href="edit.php?id=<?php echo $row['id']; ?>" class="bg-green-200 px-4 py-2 rounded-lg">Edit</a>
                                    <a href="proses_delete.php?id=<?php echo $row['id']; ?>" class="bg-red-200 px-4 py-2 rounded-lg">Hapus</a>
                                </th>

                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</body>

</html>