<?php
require_once "functionluas.php"
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

    <form name="formLingkaran" action="" method="POST">
        <input type="number" name="r" required min=0 placeholder="Masukan r"/>
        <input type="submit" name="hitungLuasLingkaranBtn" value="Hitung Luas"/>
        <input type="submit" name="hitungKelLingkaranBtn" value="Hitung Keliling"/><br/>

        <?php
            if(isset($_POST['hitungLuasLingkaranBtn'])){
                echo "Luas Lingkaran dengan jari-jari ".$_POST['r']." adalah : ".hitungLuasLingkaran($_POST['r']);
            }
            if(isset($_POST['hitungKelLingkaranBtn'])){
                echo "Keliling Lingkaran dengan jari-jari ".$_POST['r']." adalah : ".hitungKelLingkaran($_POST['r']);
            }
        ?>
    </form><br><br>

    <form name="formSegitiga" action="" method="POST">
        <input type="number" name="alas"  min=0 placeholder="Masukan Nilai Alas"/>
        <input type="number" name="tinggi"  min=0 placeholder="Masukan Nilai Tinggi"/><br>
        <input type="number" name="sisi_a"  min=0 placeholder="Masukan Sisi Pertama"/>
        <input type="number" name="sisi_b"  min=0 placeholder="Masukan Sisi Kedua"/>
        <input type="number" name="sisi_c" min=0 placeholder="Masukan Sisi Ketiga"/>
        <input type="submit" name="hitungLuasSegitigaBtn" value="Hitung Luas"/>
        <input type="submit" name="hitungKelSegitigaBtn" value="Hitung Keliling"/><br/>

        <?php
            if(isset($_POST['hitungLuasSegitigaBtn'])){
                echo "Luas Segitiga dengan alas dan tinggi  ".$_POST['alas'].$_POST['tinggi']." adalah : ".hitungLuasSegitiga($_POST['alas'],$_POST['tinggi']);
            }
            if(isset($_POST['hitungKelSegitigaBtn'])){
                echo "Keliling Segitiga dengan Sisi Pertama, Kedua, dan Ketiga ".$_POST['sisi_a'].$_POST['sisi_b'].$_POST['sisi_c']." adalah : ".hitungKelSegitiga($_POST['sisi_a'],$_POST['sisi_b'],$_POST['sisi_c']);
            }
        ?>
    </form><br><br>

    <form name="formJajar" action="" method="POST">
        <input type="number" name="alas"  min=0 placeholder="Masukan Nilai Alas"/>
        <input type="number" name="tinggi"  min=0 placeholder="Masukan Nilai Tinggi"/><br>
        <input type="number" name="sisi_a"  min=0 placeholder="Masukan  Sisi Pertama"/>
        <input type="number" name="sisi_b"  min=0 placeholder="Masukan Sisi Kedua"/>
        <input type="submit" name="hitungLuasJajarBtn" value="Hitung Luas"/>
        <input type="submit" name="hitungKelJajarBtn" value="Hitung Keliling"/><br/>

        <?php
            if(isset($_POST['hitungLuasJajarBtn'])){
                echo "Luas Jajar dengan alas dan tinggi ".$_POST['alas'].$_POST['tinggi']." adalah : ".hitungLuasJajar($_POST['alas'],$_POST['tinggi']);
            }
            if(isset($_POST['hitungKelJajarBtn'])){
                echo "Keliling Jajar dengan Sisi Pertama dan Kedua ".$_POST['sisi_a'].$_POST['sisi_b']." adalah : ".hitungKelJajar($_POST['sisi_a'],$_POST['sisi_b']);
            }
        ?>
    </form><br><br>

</body>
</html>