<?php
    // $nama = "Tiana";

    // echo $nama;

    // perulangan

    // $no = 10;

    // for ($i=0; $i<$no; $i++) { 
    //     $n = $i + 1;
    //     echo $n.". ".$nama."<br/>";
    // }

    // $i = 0;

    /* while ($i < $no) {
        $n = $i + 1;
        echo $n.". ".$nama."<br/>";
        $i++;
    } */

    /* do {
        $n = $i + 1;
        echo $n.". ".$nama."<br/>";
        $i++;
    } while ($i < $no); */

    // $data = array('Avanza', 'Lamborghini', 'Xenia', 'Tesla', 'XPander', 'Rubicon');

    // for ($i=0; $i<count($data); $i++) {
    //     echo $data[$i]."<br/>";
    // }

    // $i = 0;
    // while ($i < count($data)) {
    //     echo $data[$i]."<br/>";
    //     $i++;
    // }

    // echo $data[5];

    /* foreach ($data as $value) {
        echo $value."<br/>";
    } */

    // percabangan

    // if ($nama == "Tiana") {
    //     echo $nama." adalah perempuan.";
    // } else if ($nama == "Vian"){
    //     echo $nama." perempuan berusia 20 tahun.";
    // } else {
    //     echo $nama." seorang perempuan";
    // }

    // switch ($nama) {
    //     case "Tiana":
    //         $pesan = $nama." adalah mahasiswa";
    //     break;
    //     case "Viana":
    //         $pesan = $nama." perempuan berusia 20 tahun.";
    //     break;
    //     default;
    //         $pesan = $nama." seorang perempuan";
    // }
    //     echo $pesan;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>Input Nama dan Diulang</h1>
    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
        <label>Nama</label>
        <input type="text" name="nama">
        <label>Jumlah</label>
        <input type="text" name="no">
        <input type="submit" name="submit" value="Submit">
    </form>

    <?php
        if(!empty($_POST['submit'])) {

            switch ($_POST['nama']) {
                case "Tiana":
                    $pesan = $_POST['nama']." adalah mahasiswa";
                break;
                case "Viana":
                    $pesan = $_POST['nama']." perempuan berusia 20 tahun.";
                break;
                default;
                    $pesan = $_POST['nama']." seorang perempuan";
            }

            for ($i=0; $i<$_POST['no'];$i++) { 
                echo $pesan."<br/>";
            }
            
        } else {
            echo "Anda belum input nama dan jumlah";
        }
    ?>
</body>
</html>