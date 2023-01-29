<?php
/* ---------- Superglobals ---------- */
//Eingebaute Variablen, die immer in allen Bereichen verfügbar sind

/*
  $GLOBALS - Eine superglobale Variable, die Informationen über alle Variablen im globalen Bereich enthält.
  $_GET - Enthält Informationen über Variablen, die über eine URL oder ein Formular übergeben werden.
  $_POST - Enthält Informationen über Variablen, die über ein Formular übergeben werden.
  $_COOKIE - Enthält Informationen über Variablen, die über ein Cookie übergeben werden.
  $_SESSION - Enthält Informationen über Variablen, die über eine Sitzung übergeben wurden.
  $_SERVER - Enthält Informationen über die Serverumgebung.
  $_ENV - Enthält Informationen über die Umgebungsvariablen.
  $_FILES - Enthält Informationen über Dateien, die in das Skript hochgeladen wurden.
  $_REQUEST - Enthält Informationen über Variablen, die über das Formular oder die URL übergeben wurden.
*/

// var_dump($GLOBALS);
// var_dump($_GET);
// var_dump($_REQUEST);

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <ul>
    <li>Host: <?php echo $_SERVER['HTTP_HOST']; ?></li>
    <li>Dokument Root: <?php echo $_SERVER['DOCUMENT_ROOT']; ?></li>
    <li>System Root: <?php echo $_SERVER['SystemRoot']; ?></li>
    <li>Server Name: <?php echo $_SERVER['SERVER_NAME']; ?></li>
    <li>Server Port: <?php echo $_SERVER['SERVER_PORT']; ?></li>
    <li>Aktuelles Dateiverzeichnis: <?php echo $_SERVER['PHP_SELF']; ?></li>
    <li>Request URI: <?php echo $_SERVER['REQUEST_URI']; ?></li>
    <li>Server Software: <?php echo $_SERVER['SERVER_SOFTWARE']; ?></li>
    <li>Client Info: <?php echo $_SERVER['HTTP_USER_AGENT']; ?></li>
    <li>Remote Address: <?php echo $_SERVER['REMOTE_ADDR']; ?></li>
    <li>Remote Port: <?php echo $_SERVER['REMOTE_PORT']; ?></li>
  </ul>
</body>
</html>