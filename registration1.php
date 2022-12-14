<?php
require_once('top.php');
require_once('nav_poziom.php');
require_once('aside.php');
?>
<article>
<form id="rejestracja" method="post" action="wstawianie.php">
  <fieldset>
  <legend>Formularz rejestracyjny:</legend>
  
  Podaj e-mail: <input type="email" name="email" placeholder="E-mail"><br />
  Podaj login: <input type="text" name="login" placeholder="Login"><br />
  Podaj hasło: <input type="password" name="password" placeholder="Password"><br />
  Podaj imię: <input type="text" name="imie" placeholder="Imię"><br />
  Podaj nazwisko: <input type="text" name="nazwisko" placeholder="Nazwisko"><br />
  Podaj miejscowość: <input type="text" name="miejscowosc" placeholder="Miejscowość"><br />
  Podaj kod: <input type="text" name="kod" placeholder="Kod pocztowy"><br />

  <div id="plec">
  Zaznacz płeć: <br />
  <input type="ratio" name="plec" value="m"><label for="m"> - mężczyzna</label><br />
  <input type="ratio" name="plec" value="k"><label for="k"> - kobieta</label><br />
  <input type="ratio" name="plec" value="n"><label for="n"> - nie chcę ujawniać</label><br /><br />
</div>
  <button type="submit" name="register">Zarejestruj</button>
  </fieldset>
</form>
</article>
<?php
require_once('bottom.php');
?>