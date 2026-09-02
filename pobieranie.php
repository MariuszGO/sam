<?php
echo "<a href='wysylanie.html'>Formularz wysyłania</a>";

//Przygotowanie połączenia
//Używamy funkcji mysqli_connect(nazwa_hosta, nazwa_użytkownika, hasło, nazwa bazy danych)
//Funkcja zwaraca uchwyt do połączenia
 $conn = mysqli_connect("localhost","root","","samochody");

 if($conn == true){
   // echo "Połączyło nas";
 }else{
    echo "Brak połączenia";
 }

 //$sql - przygotowanie zapytania (zmienna która zawiera zapytanie)
 $sql = "Select * from pojazdy";

 //wysłanie zapytania do bazy danych
 $wynik = mysqli_query($conn,$sql);

//zamiana otrzymanego wyniku na tablicę przy użyciu funkcji mysqli_fetch_array oraz wyświetalanie
//danych w pętli

echo "<table>";
echo "<tr> <th>Marka</th> <th>Model</th> <th>Cena</th> </tr>";
while($tablica = mysqli_fetch_array($wynik)){

$marka = $tablica['marka'];
$model = $tablica['model'];
$cena = $tablica['cena'];

echo "<tr><td> $marka  </td> <td>  $model </td> <td> $cena </td> </tr> ";
//echo "<tr><td>" . $tablica['marka'] . "  </td> <td>" .  $tablica['model'] . " </td> <td>" . $tablica['cena'] ." </td> </tr> ";


 }

 echo "</table>";


 mysqli_close($conn);


 $dane = "ADAM";
 $dane1 = "KOWAL";


 echo "Moje imie to: " . $dane . " a nazwisko to: " . $dane1;

