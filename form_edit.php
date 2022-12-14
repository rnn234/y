<?php
include "../function.php";
if(!isset($_GET['nopol'])){
    header("Location: tampil.php");
}
$nopol = $_GET['nopol'];
$sql = mysqli_query($konek, "SELECT * FROM kendaraan where nopol=$nopol");
$kendaraan = mysqli_fetch_assoc($sql);
if (mysqli_num_rows($sql) < 1){
    die("data tidak ditemukan");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="edit.php" method="post">
        <fieldset align="center">
            <h1>form edit </h1>
            <table border="0px" align="center">
                <tr>
                    <label>nomor polisi :</label>
                    <br>
                    <input type="text" name="nopol" value="<?= $kendaraan['nopol']; ?>">
                    <br>
                </tr>
                <tr>
                    <label>nama pemilik</label>
                    <br>
                    <input type="text" name="pemilik" value="<?= $kendaraan['pemilik']; ?>">
                    <br>
                </tr>
                <tr>
                    <label>merk</label>
                    <br>
                    <input type="text" name="merk_kdr" value="<?= $kendaraan['merk_kdr'];?>">
                    <br>
                </tr>
                <tr>
                    <label>jenis</label>
                    <br>
                    <input type="text" name="jenis_kdr" value="<?= $kendaraan['jenis_kdr'];?>">
                    <br>
                </tr>
                <br>
                <input type="submit" name="simpan" id="">
                
                <button type="reset" name="reset"> riset</button>
            </table>
        </fieldset>
    </form>
</body>
</html>