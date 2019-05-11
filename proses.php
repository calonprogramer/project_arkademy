<?php
$link = mysqli_connect("localhost", "root", "", "arcademy");

if ( isset($_POST['tambah_user']) ) {
    $nama = $_POST['user'];

    $query = mysqli_query($link, "INSERT INTO users VALUES ('', '$nama')");
    if ( $query ) {
        echo "<script>alert('Data berhasil di tambahkan!');window.location='index.php';</script>";
    }
}

if ( isset($_POST['tambah_skil']) ) {
    $user_id = $_POST['user_id'];
    $nama_skil = $_POST['skil'];

    $query = mysqli_query($link, "INSERT INTO skils VALUES ('', '$nama_skil', '$user_id')");
    if ( $query ) {
        echo "<script>alert('Data berhasil di tambahkan!');window.location='index.php';</script>";
    }
}