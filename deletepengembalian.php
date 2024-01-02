<?php
include "koneksi.php";
$hapus = mysqli_query($koneksi, "delete from pengembalian where id_peminjaman='$_GET[id]'");
header("location:pengembalian.php");
?>