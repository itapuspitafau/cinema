<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>view output cinema</title>
</head>
<body>
    <h1>Pesanan Tiket Cinema 99</h1>
    <p>Nama Pemesan : <?= $nama ?></p>
    <p>Judul Film   : <?= $judul ?></p>
    <p>Pukul        : <?= $pukul ?> WIB</p>
    <p>Tipe Studio  : <?= $tipe ?></p>
    <p>jumlah Pesan : <?= $jumlah ?></p> 
    <p>Harga tiket  : <?= $harga ?></p>
    <p>Total        : <?= $total ?></p>

    <p><a href="<?= base_url('') ?>">Input Data Lagi</a></p>
    
</body>
</html>