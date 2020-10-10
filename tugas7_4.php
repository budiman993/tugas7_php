<!DOCTYPE html>
<head><title>Tugas Weekend Nomor 4</title></head>
<body>
<?php
function luas($jari, $tinggi){
    return (2*3.14*(pow($jari,2)))+(2*3.14*$jari*$tinggi);
}
?>

<h2><u>Menghitung Luas Permukaan Tabung</u></h2>

<p>4. Sebuah tabung memiliki jari-jari 14 cm dan tingginya 10 cm, maka tentukan lah luasnya?</p>

<p><b>Jadi, Luas permukaan tabung tersebut adalah <?php echo luas(14, 10);?> cm<sup>2</sup>.</b></p>


</body>
</html>