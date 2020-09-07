<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Html Dasar</title>
    <link rel="stylesheet" href="css/style.css">
    <style>
        table, td,th{
    border:1px solid #ddd;
    text-align: center;
}
table{
    border-collapse: collapse;
    width: 100%;
}
th,td{
    padding: 15px;
}
    </style>
</head>

<body>
    <ul class="topnav">
        <li><a href="index.php" class="active">Tampilkan Data</a></li>
        <li><a href="biodata.html">Biodata</a></li>
        <li class="right"><a href="#about">About</a></li>
    </ul>
    <br>
    <br>
    <table class="center" border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Jenis Kelamin</th>
                <th>Hobby</th>
                <th>Alamat</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include 'php/connect.php';
            $query = mysqli_query($conn,"SELECT * FROM biodata");
            if(mysqli_num_rows($query) == 0){
                echo '
                <tr>
                <td colspan="6"> Tidak ada data !</td>
                </tr>
                ';
            }else{
                $no = 1;
                while ($data = mysqli_fetch_array($query)){
                    echo '
                    <tr>
                    <td>'.$no.'</td>
                    <td>'.$data['nama'].'</td>
                    <td>'.$data['jk'].'</td>
                    <td>'.$data['hoby'].'</td>
                    <td>'.$data['alamat'].'</td>
                    </tr>
                    ';
                    $no++; //increment
                }
            }
            
            ?>
        </tbody>
    </table>
    
</body>

</html>