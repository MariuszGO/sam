<?php


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
 while($tablica = mysqli_fetch_array($wynik)){

 echo $tablica['marka']. " ";
 echo $tablica['model']. "<br>";
 }


 mysqli_close($conn);


 $dane = "ADAM";
 $dane1 = "KOWAL";


 echo "Moje imie to: " . $dane . " a nazwisko to: " . $dane1;

