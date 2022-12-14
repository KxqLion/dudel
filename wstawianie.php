<?php
$dbhost = "localhost"; //adres serwera mysql
$dbname = "uczen"; //nazwa bazy
$dbuser = "root"; //nazwa użytkownika bazy
$dbpass = ""; //hasło użytkownika bazy
 
$baza = mysqli_connect($dbhost,$dbuser,$dbpass); //wykonanie połączenia z bazą
//sprawdzenie poprawności połączenia
if (mysqli_connect_errno()) {
    exit();
}

mysqli_select_db($baza, $dbname);// wybór bazy na serwerze
mysqli_query($baza, "SET CHARACTER SET UTF8"); //przesłanie informacji o stronie kodowej danych

$email = $_POST['email']; //pobranie e-maila z formularza
$password = $_POST['password'];
$imie = $_POST['imie'];
$nazwisko = $_POST['nazwisko'];
$kod = $_POST['kod'];
$miejscowosc = $_POST['miejscowosc'];
$plec = $_POST['plec'];
$login = $_POST['login'];
//$sql = "INSERT INTO 
//`uczen` (`id`, `email`, `password`, `imie`, `nazwisko`, `kod`, `miejscowosc`, `plec`, `login`, 'data_aktualizacji') 
//VALUES (NULL, '$email', '$password', '$imie', '$nazwisko', '$kod', '$miejscowosc', '$plec', '$login' );";

$sql = "INSERT INTO `uczen` VALUES (null, '$email' , '$password', '$imie', '$nazwisko', '$kod', '$miejscowosc', '$plec', '$login', CURRENT_TIMESTAMP())";
if (mysqli_query($baza, $sql)) {
    echo "Nowy rekord utworzony prawidłowo.";
    header("location: odczyt.php");
} else {
    echo "Błąd: " . $sql . "
" . mysqli_error($baza);
}
//INSERT INTO `uczen` VALUES (NULL, 'aab@gmail.com', '123', 'a', 'aaaaa', '34-400', 'aa', 'a', 'a', current_timestamp());
?>