<?php

/* ---------- File Handling --------- */

/*
  Dateiverarbeitung ist die Fähigkeit, Dateien auf dem Server zu lesen und zu schreiben.
  PHP verfügt über eingebaute Funktionen zum Lesen und Schreiben von Dateien.
*/

$file = 'extras/users.txt';

// if(file_exists($file)) {
//   // Gibt im Erfolgsfall den Inhalt und die Anzahl der aus der Datei gelesenen Bytes zurück, im Fehlerfall FALSE.
//   echo readfile('extras/users.txt');
// }

// Datei öffnen, lesen, schreiben, schließen
if (file_exists($file)) {
    // fopen() gibt dir mehr Kontrolle über die Datei.
    // Modi: r, w, a, x, r+, w+, a+, x+ Siehe unten für Details
    $handle = fopen($file, 'r');
    // fread() liest die Datei und gibt bei Erfolg den Inhalt als String zurück oder FALSE bei einem Fehler.
    $Inhalt = fread($handle, filesize($file));
    // fclose() schließt die Dateiressource bei Erfolg oder FALSE bei einem Fehler.
    fclose($handle);
    echo $Inhalt;
  } else {
    // Erstelle die Datei
    $handle = fopen($file, 'w');
    // PHP_EOL ist eine Konstante, die das Zeichen für das Zeilenende darstellt.
    $Inhalt = 'Erik' .  PHP_EOL . 'Atrax' .  PHP_EOL . 'Leon' .  PHP_EOL . 'Rita';
    // fwrite() schreibt den Inhalt in die Datei und gibt im Erfolgsfall die Anzahl der geschriebenen Bytes zurück, im Fehlerfall FALSE.
    fwrite($handle, $contents);
    fclose($handle);
  }

  /*
  r - Öffnet eine Datei nur zum Lesen. Der Dateizeiger beginnt am Anfang der Datei
  w - Öffnet eine Datei nur zum Schreiben. Löscht den Inhalt der Datei oder erstellt eine neue Datei, wenn sie nicht existiert. Der Dateizeiger beginnt am Anfang der Datei
  a - Öffnet eine Datei nur zum Schreiben. Die vorhandenen Daten in der Datei werden beibehalten. Der Dateizeiger beginnt am Ende der Datei. Erzeugt eine neue Datei, wenn die Datei nicht existiert
  x - Erzeugt eine neue Datei, die nur geschrieben werden kann. Gibt FALSE und einen Fehler zurück, wenn die Datei bereits existiert.
  r+ - Öffnet eine Datei zum Lesen/Schreiben. Der Dateizeiger beginnt am Anfang der Datei
  w+ - Öffnet eine Datei zum Lesen/Schreiben. Löscht den Inhalt der Datei oder erstellt eine neue Datei, wenn sie nicht existiert. Der Dateizeiger beginnt am Anfang der Datei
  a+ - Öffnet eine Datei zum Lesen/Schreiben. Die vorhandenen Daten in der Datei werden beibehalten. Der Dateizeiger beginnt am Ende der Datei. Erzeugt eine neue Datei, wenn die Datei nicht existiert
  x+ - Erzeugt eine neue Datei zum Lesen/Schreiben. Gibt FALSE und einen Fehler zurück, wenn die Datei bereits existiert.
  */