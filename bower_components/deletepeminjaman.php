<?php
include "koneksi.php";
$hapus = mysqli_query($koneksi, "delete from peminjaman where id_peminjaman='$_GET[id]'");
header("location:peminjaman.php");
?>