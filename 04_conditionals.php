<?php

/* ---- Bedingungen & Operatoren ---- */

/* ------------ Operatoren ----------- */

/*
  < Kleiner als
  > Größer als
  <= Kleiner als oder gleich
  >= Größer als oder gleich
  == Gleich
  === Identisch mit
  != Nicht gleich zu
  !== Nicht identisch mit
*/

/* ---------- If Statements --------- */

/*
** If-Statement Syntax
if (Bedingung) {
  // Code, der ausgeführt wird, wenn die Bedingung wahr ist
}
*/

$alter = 20;

if ($alter >= 18) {
  echo 'Sie sind alt genug, um zu wählen!';
} else {
  echo 'Sie sind leider zu jung, um zu wählen.';
}

// Daten
// $today = date("F j, Y, g:i a");

$t = date('H');

if ($t < 12) {
  echo 'Schönen guten Morgen!';
} elseif ($t < 17) {
  echo 'Schönen Nachmittag!';
} else {
  echo 'Schönen Abend noch!';
}

// Prüfen, ob ein Array leer ist
// Die Funktion isset() erzeugt eine Warnung oder eine e-notice, wenn die Variable nicht existiert. Die Funktion empty() erzeugt keine Warnung oder e-notice, wenn die Variable nicht existiert.

$posts = [];

if (!empty($posts[0])) {
  echo $posts[0];
} else {
  echo 'Es sind keine Beiträge vorhanden';
}

/* -------- Binärer Operator -------- */
/*
  Der Binäre Operator ist eine Kurzform der if-Statement.
  Binary Syntax:
    condition ? true : false;
*/

// Echo basierend auf einer Bedingung (wie oben)
echo !empty($posts[0]) ? $posts[0] : 'Es gibt keine Beiträge';

// Zuweisung einer Variablen basierend auf einer Bedingung
$firstPost = !empty($posts[0]) ? $posts[0] : 'Es gibt keine Beiträge';

$firstPost = !empty($posts[0]) ? $posts[0] : null;

// Null-Koaleszenz-Operator ?? (PHP 7.4)
// Gibt null zurück, wenn $posts leer ist
// Gibt immer den ersten Parameter zurück, es sei denn, der erste Parameter ist zufällig NULL
$firstPost = $posts[0] ?? null;

var_dump($firstPost);

/* -------- Switch-Statementen ------- */

$favcolor = 'red';

switch ($favcolor) {
  case 'red':
    echo 'Deine Lieblingsfarbe ist rot!';
    break;
  case 'blue':
    echo 'Deine Lieblingsfarbe ist blau!';
    break;
  case 'green':
    echo 'Deine Lieblingsfarbe ist grün!';
    break;
  default:
    echo 'Deine Lieblingsfarbe ist weder rot, blau noch grün!';
}