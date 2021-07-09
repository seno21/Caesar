<?php 

$code = $_POST['code'];
$sub = $_POST['sub'];



$p = str_split($code);
$pNull = "";

// $k = str_split($key);
// $kInt = count($k);

// echo $kInt;

for ($i=0; $i < count($p) ; $i++) { 
    $ascii = ord($p[$i]);
    $rumus = ($ascii - $sub) % 127;
    $pNull .= chr($rumus);
    
}


echo $pNull;


?>