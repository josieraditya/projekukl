<?php
require 'koneksi.php';
$nama = $_POST['nama'];
$nama_barang = $_POST['nama_barang'];
$nomor_wa = $_POST['nomor_wa'];
$warna= $_POST['warna'];
$ukuran= $_POST['ukuran'];
$model = $_POST['model'];

$query_sql = "INSERT INTO shop (nama,nama_barang,nomor_wa,warna,ukuran,model)
 VALUES ('$nama', '$nama_barang', '$nomor_wa','$warna','$ukuran','$model')";

    if(mysqli_query($mysqli, $query_sql)) {
        header("location:tempatmembeli.html");
    } else {
        echo "Pendaftaran Gagal: " . mysqli_error($mysqli);
    }