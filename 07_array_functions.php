<?php
/* --------- Array-Funktionen -------- */

/*
  https://www.php.net/manual/de/ref.array.php
*/

$fruits = ['Apfel', 'Banane', 'Orange'];

// Array-Länge abrufen
echo count($fruits);

// Array durchsuchen
echo in_array('banane', $fruits);

// Hinzufügen zu einem Array
$fruits[] = 'Weintraube';
array_push($fruits, 'mango', 'raspberry');
array_unshift($fruits, 'kiwi'); // Fügt am Anfang hinzu

// Aus Array entfernen
array_pop($fruits); // Entfernt das letzte
array_shift($fruits); // Entfernt erstes
// Bestimmtes Element entfernen
unset($fruits[2]);

// Aufteilen in 2er-Blöcke
$chunkedArray = array_chunk($fruits, 2);
var_dump($chunkedArray);

// Arrays verketten
$arr1 = [1, 2, 3];
$arr2 = [4, 5, 6];
$arr3 = array_merge($arr1, $arr2);
var_dump($arr3);
$arr4 = [...$arr1, ...$arr2]; // Spread verwenden
var_dump($arr4);

// Arrays kombinieren (Keys & Werte)
$a = ['grün', 'rot', 'gelb'];
$b = ['Avocado', 'Apfel', 'Banane'];
$c = array_combine($a, $b);

// Array der Keys
$keys = array_keys($c);

// Keys mit Werten spiegeln
$flipped = array_flip($c);
var_dump($flipped);

// Array von Zahlen mit range() erstellen
$nummer = range(1, 20);

// Array durchmustern und ein neues Array erstellen
$newNumbers = array_map(function ($nummer) {
  return "Zahl ${nummer}";
}, $nummer);

// Array filtern
$lessThan10 = array_filter($nummer, fn($nummer) => $nummer < 10);

// Array Reduce
// "carry" enthält den Rückgabewert der vorherigen Iteration
$sum = array_reduce($nummer, fn($carry, $nummer) => $carry + $nummer);
var_dump($sum);
