<?php
/* ------------ Funktionen ----------- */

/*
** Funktionssyntax
  function functionName($arg1, $arg2, ...) {
    // Auszuführender Code
  }

  - Funktionen haben ihren eigenen lokalen Bereich im Gegensatz zum globalen Bereich
*/

function registerUser()
{
  echo 'Ein Nutzer hat sich registriert';
}

// Ausführen einer Funktion
registerUser();

// Parameter hinzufügen
function registerUser2($username)
{
  echo "Der Nutzer: ${username} hat sich registriert";
}

// Ein Argument angeben
registerUser2('Erik');

// Werte zurückgeben
function add($num1, $num2)
{
  return $num1 + $num2;
}

$sum = add(5, 5);
echo $sum;

// Standardwerte hinzufügen
function subtract($num1 = 10, $num2 = 5)
{
  return $num1 - $num2;
}

echo subtract();

// Zuweisung von anonymen Funktionen an Variablen. Wird oft für Closures und Callback-Funktionen verwendet
$add = function ($num1, $num2) {
  return $num1 + $num2;
};

echo $add(5, 5);

// Arrow-Funktionen
$multiply = fn($num1, $num2) => $num1 * $num2;

echo $multiply(5, 5);