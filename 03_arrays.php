<?php
/* ----------- Arrays ----------- */

/*
  Wenn du mehrere Werte speichern musst, kannst du Arrays verwenden. Arrays enthalten "Elemente"
*/

// Einfaches Array von Zahlen
$nummern = [1, 2, 3, 4, 5];

// Einfaches Array von Strings
$colors = ['red', 'blue', 'green'];

// Verwenden der Array-Funktion zum Erstellen eines Zahlenfelds
$nummern = [1, 2, 3, 4, 5];

// Werte von einem Array ausgeben
echo $nummern[0];
echo $nummern[3] + $nummern[4];

// Wir können print_r oder var_dump verwenden, um den Inhalt eines Arrays zu sehen
var_dump($nummern);

/* ------ Assoziative Arrays ----- */

/*
  Mithilfe von assoziativen Arrays können wir benannte Keys verwenden, um Werte zu identifizieren.
*/

$colors = [
  1 => 'red',
  2 => 'green',
  3 => 'blue',
];

// echo $colors[1];

// Strings als Keys
$hex = [
  'red' => '#f00',
  'green' => '#0f0',
  'blue' => '#00f',
];

echo $hex['red'];
var_dump($hex);

/* ---- Mehrdimensionale Arrays ---- */

/*
  Multidimensionale Arrays werden oft verwendet, um Daten in einem Tabellenformat zu speichern.
*/

// Einzelperson
$person1 = [
  'first_name' => 'Erik',
  'last_name' => 'Lich',
  'email' => 'raphael@michaelthier.de',
];

// Array aus Personen
$people = [
  $person1, //   [...$person1]
  [
    'first_name' => 'Atrax',
    'last_name' => 'Messina',
    'email' => 'atraxmessina69@suchtbunker.de',
  ],
  [
    'first_name' => 'Amon',
    'last_name' => 'Gustavo',
    'email' => 'amogus@rollenspiel.de',
  ],
];

var_dump($people);

// Zugriff auf Werte in einem mehrdimensionalen Array
echo $people[0]['first_name'];
echo $people[2]['email'];

// Verschlüsen in JSON
var_dump(json_encode($people));

// Entschlüsseln von JSON
$jsonobj = '{"first_name":"Erik","last_name": "Lich","email":"raphael@michaelthier.de"}';
var_dump(json_decode($jsonobj));