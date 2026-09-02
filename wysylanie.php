<?php
//Pobieramy dane z formularza do tablicy $_GET, stosujemy takie same nazwy jak w formluarzu czyli marka, model, cena.
//Dane przypisujemy do zmienych $marka, $model, $cena po to aby można było je użyc w zapytaniu
$marka = $_GET['marka'];
$model = $_GET['model'];
$cena = $_GET['cena'];


 $conn = mysqli_connect("localhost","root","","samochody");

 //Wszyskie pola typu string (VARCHAR) dajemy w cudzysłowiu  ' ' , pola typu INT dajemy bez.
 $sql = "INSERT INTO pojazdy VALUES (NULL,'$marka','$model',$cena)";

 mysqli_query($conn,$sql);

 mysqli_close($conn);
 




?>