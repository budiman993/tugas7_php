<!DOCTYPE html>
<head><title>Tugas Weekend Nomor 3</title></head>
<body>
<?php
function volume($jari, $tinggi){
    return (3.14*pow($jari,2)*$tinggi);
}
?>

<h2><u>Menghitung Volume Tabung</u></h2>

<p>3. Sebuah tabung memiliki jari-jari dan tinggi masing-masing 10 cm dan 30 cm, lalu tentukanlah berapa volume dari tabung terebut?</p>

<p><b>Volume dari tabung tersebut adalah <?php echo volume(10, 30);?> cm<sup>3</sup>.</b></p>


</body>
</html>