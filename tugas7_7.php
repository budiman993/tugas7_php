<!DOCTYPE html>
<head><title>Tugas Weekend Nomor 7</title></head>
<body>
<?php

function jarak($jari, $putaran){
   
    return (2*(22/7)*$jari)*$putaran;
}



?>

<h2><u>Menghitung Jarak Tempuh</u></h2>

<p>7. Pak Andi memilik sebuah mobil yang panjang jari-jari ban mobil tersebut sebesar 21 cm. Saat mobil tersebut berjalan, ban mobil tersebut berputar sebanyak 200 kali. Berapakah jarak yang ditempuh mobil tersebut?</p>

<p><b>Jarak tempuhnya adalah <?php echo jarak(21, 200);?> cm atau <?php echo jarak(21, 200)/100;?> meter.</b></p>


</body>
</html>