<?php
/* ---------- String-Funktionen -------- */

/*
  https://www.php.net/manual/de/ref.strings.php
*/

$string = 'Hello World';

// Ermittelt die Länge eines String
echo strlen($string);

// Finde die Position des ersten Vorkommens einer Teilzeichenkette in eines Strings
echo strpos($string, 'o');

// Finde die Position des letzten Vorkommens einer Teilzeichenkette in einer Strings
echo strrpos($string, 'o');

// Umkehrung einer String
echo strrev($string);

// Alle Zeichen in Kleinbuchstaben umwandeln
echo strtolower($string);

// Alle Zeichen in Großbuchstaben umwandeln
echo strtoupper($string);

// Alle Zeichen in Großbuchstaben umwandeln
echo ucwords($string);

// String ersetzen
echo str_replace('World', 'Everyone', $string);

// Rückgabe des Teils einer Zeichenkette, der durch den Offset und die Länge angegeben wird
echo substr($string, 0, 5);
echo substr($string, 5);

// Starts with
if (str_starts_with($string, 'Hello')) {
  echo 'YES';
}

// Ends with
if (str_ends_with($string, 'ld')) {
  echo 'YES';
}

// HTML Entities
$string2 = '<h1>Hello World</h1>';
echo htmlentities($string2);

// Formatierte Zeichenketten - nützlich, wenn du externe Daten hast
// Verschiedene Bezeichner für verschiedene Datentypen
printf('%s is a %s', 'Brad', 'nice guy');
printf('1 + 1 = %f', 1 + 1); // float
