<?php

if(isset($_POST['submit'])){
    $name = $_POST['fname'];
    $jk = $_POST['jk'];
    $alamat = $_POST['falamat'];
    $hoby = $_POST['hoby'];
    $data_hoby = "";
    foreach ($hoby as $hobi) {
        $data_hoby .= $hobi . ",";
    }
  
    include_once("connect.php");

    $simpan = mysqli_query($conn,"INSERT INTO biodata VALUES(null,'$name','$jk','$data_hoby','$alamat')");

    if($simpan){
        echo "<script>alert('Berhasil Di simpan')</script>";
        echo "<meta http-equiv='refresh' content='1 url=../index.php'>";
    }else{
        echo "<script>alert('Berhasil Di simpan')</script>";
        echo "<meta http-equiv='refresh' content='1 url=../index.php'>";
    }
    
}



?>
