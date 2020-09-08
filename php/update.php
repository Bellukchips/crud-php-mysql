<?php
if(isset($_POST['submit'])){
    include 'connect.php';
    $id = $_POST['id'];
    $nama = $_POST['fname'];
    $jk = $_POST['jk'];
    $hoby = $_POST['hoby'];
    $data_hoby = "";
    foreach ($hoby as $hobi) {
        $data_hoby .= $hobi . ",";
    }
    $alamat = $_POST['falamat'];
    $update = mysqli_query($conn,"UPDATE biodata SET nama='$nama',jk='$jk',hoby='$data_hoby',alamat='$alamat' WHERE id='$id'");
    if($update){
        echo "<script>alert('Berhasil Di update')</script>";
        echo "<meta http-equiv='refresh' content='1 url=../index.php'>";
    }else{
        echo "<script>alert('Gagal Di update')</script>";
        echo "<meta http-equiv='refresh' content='1 url=../index.php'>";
    }
}

?>