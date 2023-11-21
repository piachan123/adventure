<?php
include "koneksi.php";
$hapus = mysqli_query($koneksi, "delete from user where username='$_GET[id]'");
header("location:user.php");
?>