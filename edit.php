<?php

include "../function.php";

$nopol = $_POST['nopol'];
$pemilik = $_POST['pemilik'];
$merk_kdr = $_POST['merk_kdr'];
$jenis_kdr = $_POST['jenis_kdr'];

$edit = mysqli_query($konek, "UPDATE kendaraan SET nopol='$nopol', pemilik='$pemilik', merk_kdr='$merk_kdr', jenis_kdr='$jenis_kdr' WHERE nopol='$nopol'");

if($edit){
    header("Location:tampil.php");
}
else{
    echo"data gagal diedit";
    
}