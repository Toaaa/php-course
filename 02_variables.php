<?php

/* ----- Variablen & Datentypen ----- */

/* --------- PHP-Datentypen --------- */
/*
- String - Ein String ist eine Reihe von Zeichen, die von Anführungszeichen umgeben sind.
- Integer - Ganze Zahlen
- Float - Dezimalzahlen
- Boolean - wahr oder falsch
- Array - Ein Array ist eine spezielle Variable, die mehr als einen Wert enthalten kann.
- Object - Eine Klasse
- NULL - Leere Variable
- Ressource - Eine spezielle Variable, die eine Ressource enthält
*/

/* --------- Variable Regeln --------- */
/*
- Variablen müssen mit dem Präfix '$' beginnen werden.
- Variablen müssen mit einem Buchstaben oder dem Unterstrich beginnen
- Variablen können nicht mit einer Zahl beginnen
- Variablen dürfen nur alphanumerische Zeichen und Unterstriche enthalten (A-z, 0-9 und _ )
- Variablen unterscheiden Groß- und Kleinschreibung ($name und $NAME sind zwei verschiedene Variablen)
*/

$name = 'Rainer'; // String - Kann aus einfachen oder doppelten Anführungszeichen bestehen
$age = 33; // Integer
$hasKids = false; // Boolean
$cashOnHand = 10.5; //Float

var_dump($cashOnHand);

/* --- Variablen zu Strings hinzufügen --- */

// Doppelte Anführungszeichen können verwendet werden, um Variablen zu Zeichenketten hinzuzufügen
echo "$name ist $age Jahre alt.";

// Besser ist es, folgendes zu tun:
echo "${name} ist ${age} Jahre alt.";

// Verkettung von Strings

echo '<h3>' . $name . ' ist ' . $age . ' Jahre alt.</h3>';

// Arithmetische Operatoren

echo 5 + 5;
echo 10 - 6;
echo 5 * 10;
echo 10 / 2;

// Konstanten - können nicht geändert werden
define('HOST', 'localhost');
define('USER', 'root');

var_dump(HOST);