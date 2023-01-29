<?php
/* --- Eingaben Bereinigen-- */

/*
  Daten, die über ein Formular übermittelt werden, werden standardmäßig nicht bereinigt. Wir haben Methoden, um Daten manuell zu bereinigen.
*/

if (isset($_POST['submit'])) {
  // $name = $_POST['email'];
  // $email = $_POST['email'];

  // htmlspecialchars() - Sonderzeichen in HTML-Entities umwandeln
  // $name = htmlspecialchars($_POST['name']);
  // $email = htmlspecialchars($_POST['email']);

  // filter_var() - Daten bereinigen
  // $name = filter_var($_POST['name'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  // $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);

  // filter_input() - Sanitize inputs
  $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);

  // FILTER_SANITIZE_STRING - String in einen String mit nur alphanumerischen Zeichen, Leerzeichen und den folgenden Zeichen umwandeln - _.:/
  // FILTER_SANITIZE_EMAIL - String in eine gültige E-Mail-Adresse umwandeln
  // FILTER_SANITIZE_URL - String in eine gültige URL umwandeln
  // FILTER_SANITIZE_NUMBER_INT - String in eine ganze Zahl umwandeln
  // FILTER_SANITIZE_NUMBER_FLOAT - String in einen Float umwandeln
  // FILTER_SANITIZE_FULL_SPECIAL_CHARS - HTML kodiert Sonderzeichen, behält Leerzeichen und die meisten anderen Zeichen bei
} ?>

<!-- Daten durch ein Formular übergeben -->
<!-- php_self kann für xss verwendet werden -->
<form action="<?php echo htmlspecialchars(
  $_SERVER['PHP_SELF']
); ?>" method="POST">
<div>
  <label>Name: </label>
  <input type="text" name="name">
</div>
<br>
<?php echo $email; ?>
<div>
<label>Email: </label>
  <input type="email" name="email">
</div>
<br>
  <input type="submit" name="submit" value="Submit">
</form>