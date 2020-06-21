<?php
// Pengulangan
/*
1. For
2. While
3. do.. while
4. foreach : pengulangan khusus array

Array Pada PHP itu dimulai dari 0
*/

//for
/*
for($i=0; $i<5; $i++){
    echo "Hello World!<br>";
}
*/

//while
/*
$i = 0;
while($i < 5){
    echo "Hello World!<br>";
$i++; //klo ga ditambah, maka akan mengalami looping forever
}
*/

//do.. while -> yang membedakan dengan statement while, disini print hello world akan dijalankan lebih dahulu, sebelum di check validitasnya.
/*
$i = 0;
do{
    echo "Hello World! <br>";
$i++;
}while($i<5);
*/


?>
