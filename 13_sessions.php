<?php
/* ------------ Sessions ------------ */

/*
  Sitzungen sind eine Möglichkeit, Informationen (in Variablen) zu speichern, die über mehrere Seiten hinweg verwendet werden können.
  Im Gegensatz zu Cookies werden Sessions auf dem Server gespeichert.
*/

session_start(); // Muss vor dem Zugriff auf Sitzungsdaten aufgerufen werden

if (isset($_POST['submit'])) {
  $username = filter_input(
    INPUT_POST,
    'username',
    FILTER_SANITIZE_FULL_SPECIAL_CHARS
  );
  $password = filter_input(
    INPUT_POST,
    'password',
    FILTER_SANITIZE_FULL_SPECIAL_CHARS
  );

  if ($username == 'erik' && $password == 'password') {
    // Sitzungsvariable setzen
    $_SESSION['username'] = $username;
    // Den Benutzer auf eine andere Seite umleiten
    header('Location: /php-crash/extras/dashboard.php');
  } else {
    echo 'Falscher Benutzername oder falsches Passwort';
  }
}
?>

  <form action="<?php echo htmlspecialchars(
    $_SERVER['PHP_SELF']
  ); ?>" method="POST">
    <div>
      <label>Username: </label>
      <input type="text" name="username">
    </div>
    <br>
    <div>
      <label>Password: </label>
      <input type="password" name="password">
    </div>
    <br>
    <input type="submit" name="submit" value="Submit">
  </form>
