<?php
//buat koneksi dengan MySQL
$con = mysqli_connect("127.0.0.1:3307","root","","fakultas");

// Cek konekksi dengan mySQL
if(mysqli_connect_errno()){
    echo "Koneksi gagal ". mysqli_connect_error();
}else{
    echo "Koneksi berhasil";
}

// membaca data dari tabel mysql.
$query = "SELECT * FROM mahasiswa";

// tampilkan data dengan menjalankan sql query
$result = mysqli_query($con,$query);
$mahasiswa = [];
if ($result){
    // tampilkan data satu per satu
    while($row = mysqli_fetch_assoc($result)){
        $mahasiswa[] = $row;
    }
    mysqli_free_result($result);
}

// tutup koneksi sql
mysqli_close($con);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
</head>
<body>
    <h1>Data Mahasiswa</h1>
    <a href="insert.php">Tambah Data</a>
    <table border="1" style="width: 100%;">
        <tr>
            <th>NIM</th>
            <th>Nama</th>
            <th>Tempat Lahir</th>
            <th>Tanggal Lahir</th>
            <th>Alamat</th>
            <th>Action</th>
        </tr>
        <?php foreach($mahasiswa as $row): ?>
        <tr>
            <td><?php echo $row ['nim']; ?></td>
            <td><?php echo $row ['nama']; ?></td>
            <td><?php echo $row ['tempat_lahir']; ?></td>
            <td><?php echo $row ['tanggal_lahir']; ?></td>
            <td><?php echo $row ['alamat']; ?></td>
            <td>
                <a href="update.php?id=<?= $row['id'] ?>" >Edit</a> | 
                <a href="delete.php?id=<?= $row['id'] ?>" >Delete</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>