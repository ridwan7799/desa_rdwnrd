<?php
    
    $data = mysqli_connect("localhost","root","","desa cieurih");

    if (!$data){
        echo'gagal';
    }else{
        echo'berhasil';
    }
?>