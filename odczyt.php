<?php
require_once('top.php');
require_once('nav_poziom.php');
require_once('aside.php');
require_once('dane_bazy.php');

$baza = mysqli_connect($dbhost,$dbuser,$dbpass);
if (mysqli_connect_errno()) {
    exit();
}
mysqli_select_db($baza, $dbname);
mysqli_query($baza, "SET CHARACTER SET UTF8");
 
$sql = "SELECT * FROM uczen ";
$wynik = mysqli_query($baza, $sql);
$i=1;
echo '<article><table style="width:100%;font-size:small;border: 5px solid #000;background-color: teal;>"'; 
echo '<tr><td>L.p.</td><td> Imię </td><td> Nazwisko </td><td> e-mail </td><td> kod </td><td> miejscowość </td><td> płeć </td><td> login </td><td> data_rejestracji </td></tr>';
if (mysqli_num_rows($wynik) > 0) {
    while($wiersz = mysqli_fetch_assoc($wynik)) {
        echo "<tr><td>" . $i++ . "</td><td>" . $wiersz["imie"]. "</td><td>" . $wiersz["nazwisko"]. "</td><td>" . $wiersz["email"]
        . "</td><td>" . $wiersz["kod"]. "</td><td>" . $wiersz["miejscowosc"]. "</td><td>" . $wiersz["plec"]. "</td><td>" . $wiersz["login"]. "</td><td>" .$wiersz["data_rejestracji"]. "</td></tr>";
    }
} else {
    echo "Brak wyników";
}
echo '</table></article>'; 
mysqli_close($baza);
require_once('bottom.php');

?>