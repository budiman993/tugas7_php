<!DOCTYPE html>
<head><title>Tugas Weekend Nomor 5</title></head>
<body>
<?php
function luas($jari){
    return ((22/7)*pow($jari,2));
}
?>

<h2><u>Menghitung Luas Lingkaran</u></h2>

<p>5. Sebuah lingkaran memiliki jari-jari sebesar 14 cm. Tentukan luas lingkaran tersebut?</p>

<p><b>Luasnya adalah <?php echo luas(14);?> cm<sup>2</sup>.</b></p>


</body>
</html>