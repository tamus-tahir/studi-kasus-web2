<?php

$base_url = 'http://localhost/unitama/';

$koneksi = mysqli_connect('localhost', 'root', '', 'unitama');

session_start();

function redirectTo($url = null)
{
    global $base_url;
    if ($url) {
        echo "<script>window.location.href = '$base_url/$url';</script>";
    } else {
        echo "<script>window.location.href = '$base_url';</script>";
    }

    exit;
}

function upload($fileName, $allowType, $maxSize, $move)
{
    $name = $_FILES[$fileName]['name'];
    $size = $_FILES[$fileName]['size'];
    // bit ke kb
    $size  = round($size / 1000, 2);
    $tmp_name = $_FILES[$fileName]['tmp_name'];
    $error = $_FILES[$fileName]['error'];

    if ($error != 0) {
        $_SESSION['gagal'] = 'File Gagal Diupload';
        return false;
    }

    // verifikasi type file
    $typeName = explode('.', $name);
    $typeName = strtolower(end($typeName));

    // lakukan pemeriksaan
    if (!in_array($typeName, $allowType)) {
        $_SESSION['gagal'] = 'Tipe file tidak diizinkan';
        return false;
    }

    // verifikasi ukuran file
    if ($size > $maxSize) {
        $_SESSION['gagal'] = 'Ukuran File terlalu besar';
        return false;
    }

    $newName = time() . '.' . $typeName;

    move_uploaded_file($tmp_name, $move . $newName);

    return $newName;
}

function get($query)
{
    global $koneksi;
    $result = mysqli_query($koneksi, $query);

    $row = [];

    while ($data = mysqli_fetch_assoc($result)) {
        $row[] = $data;
    }

    return $row;
}

function getWhere($query)
{
    global $koneksi;
    return mysqli_fetch_assoc(mysqli_query($koneksi, $query));
}

function getRole($param)
{
    if ($param == 1) {
        return 'Superadmin';
    }

    return 'Admin';
}


function cekLogin()
{
    if (!$_SESSION['id_user']) {
        redirectTo();
    }
}

function cekSuperadmin()
{
    if ($_SESSION['role'] != 1) {
        $_SESSION['gagal'] = 'Anda tidak memiliki akses';
        redirectTo('admin/dashboard');
    }
}
