<?php

include "../function.php";

$nopol = $_POST['nopol'];
$pemilik = $_POST['pemilik'];
$merk_kdr = $_POST['merk_kdr'];
$jenis_kdr = $_POST['jenis_kdr'];

$simpan = mysqli_query($konek, "insert into kendaraan values('$nopol', '$pemilik', '$merk_kdr', '$jenis_kdr')");

if($simpan){
    header("Location:tampil.php");
}
else{
    echo"data gagal disimpan";
    if($nopol == $nopol){
        echo"no polisi tidak boleh sama";
    }
}