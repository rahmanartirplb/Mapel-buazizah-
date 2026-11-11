<?php

// 1. Fungsi Tampil Data
function select($query)
{
    global $db;
    $result = mysqli_query($db, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

// 2. Fungsi Tambah Barang (buat file tambah-barang.php)
function create_barang($post)
{
    global $db;

    $nama   = $post['nama'];
    $jumlah = $post['jumlah'];
    $harga  = $post['harga'];

    $query = "INSERT INTO barang VALUES(null, '$nama', '$jumlah', '$harga', CURRENT_TIMESTAMP())";
    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}

// 3. Fungsi Ubah Barang (buat file ubah-barang.php)
function update_barang($post)
{
    global $db;

    $id_barang = $post['id_barang'];
    $nama      = $post['nama'];
    $jumlah    = $post['jumlah'];
    $harga     = $post['harga'];

    $query = "UPDATE barang SET nama = '$nama', jumlah = '$jumlah', harga = '$harga' WHERE id_barang = $id_barang";
    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}

// fungsi menghapus data barang
function delete_barang($id_barang)
{
    global $db;

    //Query hapus data barang
    $query = "DELETE FROM barang WHERE id_barang = $id_barang";

    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}
