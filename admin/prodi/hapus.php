<?php

require '../template/header.php';
$id = $_GET['id'];

$prodi = getWhere("SELECT * FROM prodi WHERE id_prodi = $id ");

mysqli_query($koneksi, "DELETE FROM prodi WHERE  id_prodi = $id");

if (mysqli_affected_rows($koneksi) > 0) {
    $_SESSION['berhasil'] = 'Data Berhasil Dihapus';
    redirectTo('admin/prodi');
} else {
    $_SESSION['gagal'] = 'Data Gagal Dihapus';
    redirectTo('admin/prodi');
}
