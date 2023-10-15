<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <section id="input">
        <div class="container border max-w-[1000px] mx-auto h-[100vh] flex flex-col justify-center items-center">
            <h1 class="font-bold text-3xl mb-8">Input Data Mahasiswa</h1>
            <form action="proses_tambah.php" method="POST" class="flex flex-col gap-4">
                <div>
                    <label for="nama">Nama: </label>
                    <br>
                    <input type="text" name="name" placeholder="Masukan nama" class="border border-black px-4 py-2 w-[300px] rounded-md bg-gray-100">
                </div>
                <div>
                    <label for="nama">NIM : </label>
                    <br>
                    <input type="text" name="nim" placeholder="Masukan nim" class="border border-black px-4 py-2 w-[300px] rounded-md bg-gray-100">
                </div>
                <div>
                    <label for="nama">Prodi: </label>
                    <br>
                    <input type="text" name="prodi" placeholder="Masukan prodi" class="border border-black px-4 py-2 w-[300px] rounded-md bg-gray-100">
                </div>
                <button type="submit" name='tambah' class="px-4 py-2 bg-green-600 rounded-lg text-white">Tambah Data</button>
            </form>
        </div>
    </section>
</body>

</html>