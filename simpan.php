<?php
    include "koneksi.php";
    
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $alamat = $_POST['alamat'];

    $sql = "insert into data(nama, kelas, alamat) values('$nama', '$kelas', '$alamat')";
    $add = $conn->query($sql);


    if($add) {
        $conn->close();
        header("location:index.php");
        exit();
    } else {
        echo"Error : ".$conn->error;
        $conn->close();
        exit();
    }
 ?>

