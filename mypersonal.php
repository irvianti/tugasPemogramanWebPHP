<?php

$nama = $_POST['nama'] ?? NULL;
$nim = $_POST['nim'] ?? NULL;
$prodi = $_POST['prodi'] ?? NULL;
$no_hp = $_POST['no_hp'] ?? NULL;
$kota = $_POST['kota'] ?? NULL;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My personal</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container flex-col">
        <h1 class="center margin">Data Diri Anda</h1>
        <div class="content flex-col">
        <section class="flex-row">
        <h3 class="title">Nama</h3>
        <h3>: <?php echo $nama;?></h3>
        </section>
        <hr>
        <section class="flex-row">
        <h3 class="title">NIM</h3>
        <h3>: <?php echo $nim;?></h3>
        </section>
        <hr>
        <section class="flex-row">
        <h3 class="title">Prodi</h3>
        <h3>: <?php echo $prodi;?></h3>
        </section>
        <hr>
        <section class="flex-row">
        <h3 class="title">No. HP</h3>
        <h3>: <?php echo $no_hp;?></h3>
        </section>
        <hr>
        <section class="flex-row">
        <h3 class="title">Asal Kota</h3>
        <h3>: <?php echo $kota;?></h3>
        </section>
        <hr>
        </div>
        <a href="./" class="center padding">
        <button class=""><< Back</button>
        </a>
    </div>
</body>
</html>