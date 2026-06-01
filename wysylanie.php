<?php

$marka = $_GET['marka'];

echo $marka;
 $conn = mysqli_connect("localhost","root","","samochody");
 $sql = "INSERT INTO pojazdy VALUES (NULL,'$marka','ardxvdfg',44)";

 mysqli_query($conn,$sql);
 




?>