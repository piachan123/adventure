<?php
include "koneksi.php";
$hapus = mysqli_query($koneksi, "delete from barang where id_barang='$_GET[id]'");
header("location:barang.php");
?>