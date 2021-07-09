<?php 
// $conn = mysqli_connect("localhost", "root", "qwerty21", "db_crypto");


$plain = $_POST['plain'];
$key = $_POST['key'];

// $qInsert =  "INSERT INTO kriptografi  (id, plain_text, kunci) VALUES ('', '$plain', '$key')";
// $query = mysqli_query($conn, $qInsert);



$p = str_split($plain);
// $pNull = "";

// $k = str_split($key);
// $kInt = count($k);

// echo $kInt;

for ($i=0; $i < count($p) ; $i++) { 
    $ascii = ord($p[$i]);
    $rumus = ($ascii + $key) % 127;
    $pNull = chr($rumus);
    echo $pNull;
    
}


// echo $pNull;


?>