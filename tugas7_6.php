<!DOCTYPE html>
<head><title>Tugas Weekend Nomor 6</title></head>
<body>
<?php
function luas($dia){
    $jari = $dia/2;
    return ((22/7)*pow($jari,2));
}
function keliling($dia){
    $jari = $dia/2;
    return (2*(22/7)*$jari);
}

?>

<h2><u>Menghitung Luas dan Keliling Lingkaran</u></h2>

<p>6. Sebuah roda sepeda berbentuk lingkaran memiliki diameter sebesar 14 cm. Maka luas dan keliling roda tersebut adalah?</p>

<p><b>Luasnya adalah <?php echo luas(14);?> cm<sup>2</sup>.</b></p>
<p><b>Kelilingnya adalah <?php echo keliling(14);?> cm.</b></p>

</body>
</html>