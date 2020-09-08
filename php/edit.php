<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
<?php
include 'connect.php';

$id = $_GET['id'];
$query = mysqli_query($conn,"SELECT * FROM biodata WHERE id='$id'");
while ($data = mysqli_fetch_array($query)){
    $datahobi = explode(',',$data['hoby']);
?>
<!--Disini form edit-->
<form action="update.php" method="post">
        <br>
        <h1>Isi Biodata</h1>
        <table class="center">
            <input type="hidden" name="id" value="<?php echo $data['id']?>">
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type="text" name="fname" value="<?php echo $data['nama']?>"></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td><input type="radio" name="jk" value="Laki-Laki" <?php if($data['jk'] == 'Laki-Laki') echo 'checked';?>>Laki-Laki <input type="radio" value="Perempuan"
                        name="jk" <?php if($data['jk'] == 'Perempuan') echo 'checked';?>>Perempuan </td>
            </tr>
            <tr>
                <td>Hoby</td>
                <td>:</td>
                <td><input type="checkbox" name="hoby[]" value="Masak" <?php if (in_array("Masak", $datahobi)) echo "checked";?>>Masak <br>
                    <input type="checkbox" value="Sepak Bola" name="hoby[]" <?php if (in_array("Sepak Bola", $datahobi)) echo "checked";?>>Sepak Bola <br>
                    <input type="checkbox" name="hoby[]" value="Bermain Game" <?php if (in_array("Bermain Game", $datahobi)) echo "checked";?>>Bermain Game <br>
                    <input type="checkbox" name="hoby[]" value="Badminton" <?php if (in_array("Badminton", $datahobi)) echo "checked";?>> Badminton <br>
                </td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td><textarea name="falamat" cols="30" rows="10"><?php echo $data['alamat']?></textarea></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" value="Kirim" name="submit"></td>
            </tr>
        </table>
    </form>
    <?php if (in_array("Menulis", $datahobi)) echo "checked";?>
   

<?php }?>
</body>
</html>