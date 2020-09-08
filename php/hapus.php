<?php
    include 'connect.php';
    $id = $_GET['id'];// menampung id dari data yang kita ingin hapus
    $hapus = mysqli_query($conn,"DELETE FROM biodata WHERE id='$id'");
    if($hapus){
        echo "<script>alert('Berhasil Di hapus')</script>";
        echo "<meta http-equiv='refresh' content='1 url=../index.php'>";
    }else{
        echo "<script>alert('Gagal Di update')</script>";
        echo "<meta http-equiv='refresh' content='1 url=../index.php'>";
    }
?>