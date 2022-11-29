<?php

if (isset($_GET['id'])){
    // ambil id dari get
    $id = $_GET['id'];

    //buat koneksi dengan mysql
    $con = mysqli_connect("127.0.0.1:3307","root","","fakultas");

    // cek koneksi
    if (mysqli_connect_errno()) {
        echo "Koneksi gagal: " . mysqli_connect_error();
        exit();
    }else{
        echo 'Koneksi berhasil';
    }

    $sql = "DELETE FROM mahasiswa WHERE id='$id' ";

    if (mysqli_query($con, $sql)) {
        echo "Data berhasil dihapus";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_connect_error($con);
    }
    
    mysqli_close($con);
}

?>