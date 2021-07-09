<?php 
// $plain = $_POST['plain'];
// $chiper = $_POST['chiper'];

$plain = "aku ganteng opo ya";
$chiper = 7;



// Enkripsi caesar
$pisah = str_split($plain); //Pisah string jadi array
$encstr = " ";

for ($i=0; $i < count($pisah); $i++) { 
    $ascii = ord($pisah[$i]); //Convert ke ascii
    $caesar = ($ascii + $chiper) % 256; //Rumus algoritma caesar
    $encstr .= chr($caesar); //Convert lagi ke string 
}

echo $encstr;
echo $ascii;

$anu = str_split($encstr);
$tampil = "";
for ($a=0; $a < count($anu); $a++) { 
    $convert = ord($anu[$a]);
    $cesar = ($convert - $chiper) % 127;
    $tampil .= chr($cesar);
}

echo "<br><br>";
echo $tampil;
// print_r($anu);


?>