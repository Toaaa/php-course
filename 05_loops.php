<?php

/* -------- Schleifen & Wiederholungen ------- */

/* ------------ For-Schleife ------------ */

/*
** For-Schleife Syntax
  for (beginnen; bedingung; erhöhen) {
  // Code, der ausgeführt wird.
  }
*/

for ($x = 0; $x <= 10; $x++) {
  echo "Nummer: $x <br>";
}

/* ------------ While-Schleife ------------ */

/*
** While-Schleife Syntax
  while (Bedingung) {
  // Code, der ausgeführt wird.
  }
*/

$x = 1;

while ($x <= 5) {
  echo "Nummer: $x <br>";
  $x++;
}

/* ---------- Do-While Schleife --------- */

/*
** Do-While Schleife Syntax
  do {
  // Code, der ausgeführt wird.
  } while (Bedingung);
Die do...while-Schleife führt den Codeblock immer einmal aus, auch wenn die Bedingung falsch ist.
*/

do {
  echo "Nummer: $x <br>";
  $x++;
} while ($x <= 5);

/* ---------- Foreach-Schleife ---------- */

/*
** Foreach-Schleifen Syntax
  foreach ($array as $value) {
  // Code, der ausgeführt wird.
  }
*/

// Schleife durch ein Array

$nummern = [1, 2, 3, 4, 5];

foreach ($nummern as $x) {
  echo "Nummer: $x <br>";
}

// Verwende die Indikatoren innerhalb der Schleife

$posts = ['Post Eins', 'Post Zwei', 'Post Drei'];

foreach ($posts as $index => $post) {
  echo "${index} - ${post} <br>";
}


// Verwende die Schlüssel innerhalb der Schleife für ein zugehöriges Array

$ritak = [
  'first_name' => 'Erik',
  'last_name' => 'Lich',
  'email' => 'raphael@michaelthier.de',
];

// Get Keys
foreach ($ritak as $key => $val) {
  echo "${key} - ${val} <br>";
}