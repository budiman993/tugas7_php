<!DOCTYPE html>
<head><title>Tugas Weekend Nomor 2</title></head>
<body>
<?php
function panjangsisi($luas){
    return sqrt($luas/6);
}
?>

<h2><u>Mencari Panjang Sisi</u></h2>

<p>2. Sebuah kotak kayu berbentuk kubus memiliki luas permukaan 3.750 cm<sup>2</sup>. Hitunglah panjang sisi kotak kayu tersebut?</p>

<p><b>Jadi Panjang sisi kotak kayu tersebut adalah <?php echo panjangsisi(3750);?> cm.</b></p>


</body>
</html>