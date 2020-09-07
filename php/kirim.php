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

    echo "Data Berhasil Di input . <a href='../biodata.html'>Kembali</a>";
    
}



?>
