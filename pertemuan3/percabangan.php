<?php
//Created By Ivan Chandra Sutanto
// Pengkondisian / Percabangan
/*
1. if else
2. if else.. else if (2 kondisi atau lebih)
3. ternary
4. switch case
*/

//if else.. else if
/*
$x = 10;
if($x < 10){ //selama kondisinya kurang dari 10
    echo "True";
} else if($x == 10){ //kondisi dimana dia pass di nomor 10
    echo "Match";
}else{ //jika lebih dari 10
    echo "False";
}
*/

//ternary
/*
$nilai = 9;
echo $nilai > 8 ? 'Sangat Baik' : 'Baik';
*/

//ternary Nested if else
/*
$nilai = 6;
$predikat = $nilai > 8 
			? 'Sangat Baik' 
			: ( $nilai >= 7 && $nilai <= 8 
				? 'Baik' 
				: ( $nilai <= 6 && $nilai > 5 
					? 'Sedang' 
					: 'Kurang'
				   ) 
			  );
echo $predikat; // Sedang
*/

//switch case
/*
$favcolor = "red";

switch ($favcolor) {
  case "red": //ketika memilih red
    echo "Your favorite color is red!";
    break;
  case "blue": //ketika memilih blue
    echo "Your favorite color is blue!";
    break;
  case "green": //ketika memilih green
    echo "Your favorite color is green!";
    break;
  default: //pilihan ketika tidak ada ketiganya
    echo "Your favorite color is neither red, blue, nor green!";
}
*/

?>
