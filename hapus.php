<?php
include "../function.php";
if(isset($_GET['nopol'])){
    $nopol = $_GET['nopol'];

    $hapus = mysqli_query($konek, "delete from kendaraan where nopol=$nopol");

    if($hapus){
        header("Location:tampil.php");
    }
    else{
        echo"data gagal dihapus";
        
    }
}