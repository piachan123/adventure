<?php
include "koneksi.php";
$ambildata = mysqli_query($koneksi, "select * from peminjaman where id_peminjaman='$_GET[id]'");
if (is_iterable($ambildata)) {
foreach ($ambildata as $k) {
    $id_peminjaman = $k['id_peminjaman'];
    $jumlah_barang = $k['jumlah_barang'];
    $tanggal_pinjam = $k['tanggal_pinjam'];
    $tanggal_kembali = strtotime($k['tanggal_kembali']);
    $nama_user = $k['nama_user'];
    $nama_admin = $k['nama_admin'];
    $id_barang = $k['id_barang'];
    $status = $k['status'];
    
    $selSto = mysqli_query($koneksi, "SELECT * FROM barang WHERE id_barang = '$id_barang'");
    $sto = mysqli_fetch_array($selSto);
    $stok = $sto['jumlah'];
    $sisa = $stok + $jumlah;

    $upstok = mysqli_query($koneksi, "UPDATE barang SET jumlah = '$sisa' WHERE id_barang = '$id_barang'");

    $tgl_hari_ini = date('Y-m-d');
    $tanggal = strtotime($tgl_hari_ini);
    $selisih = $tanggal - $tanggal_kembali;
    $terlambat = $selisih / 60 / 60 / 24;
    $denda = $terlambat * 1000;


    $kembali = mysqli_query($koneksi, "insert into pengembalian set
    id_peminjaman = '$id_peminjaman',
    id_barang = '$id_barang',
    jumlah_barang = '$jumlah_barang',
    tanggal_pinjam = '$tanggal_pinjam',
    tanggal_kembali = '$tgl_hari_ini',
    status = '$status',
    terlambat = '$terlambat',
    denda = '$denda'");

    $hapus_peminjaman = mysqli_query($koneksi, "delete from peminjaman where id_peminjaman='$_GET[id]'");
    header("location:pengembalian.php"); 
} 
}
?>