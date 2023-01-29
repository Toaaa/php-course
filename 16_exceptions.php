<?php

/* ----------- Exceptions ----------- */

/*
  PHP hat ein Ausnahmemodell, das dem anderer Programmiersprachen ähnelt. Eine Ausnahme kann in PHP ausgelöst und abgefangen ("catched") werden. Der Code kann in einen Try-Block eingeschlossen werden, um das Abfangen möglicher Ausnahmen zu erleichtern. Jeder try-Block muss mindestens einen entsprechenden catch- oder finally-Block haben.
*/

function inverse($x) {
  if (!$x) {
    throw new Exception('Teilung durch Null.');
  }
  return 1/$x;
}

// echo inverse(0); // Verursacht eine Ausnahme und stoppt die Skriptausführung

// Behandelt die Ausnahme
// try {
// echo inverse(5) . ' ';
// echo inverse(0) . ' '";
// } catch (Exception $e) {
// echo 'Gefangene Ausnahme: ', $e->getMessage(), ' ';
// }

// Der Abschlussblock wird unabhängig davon ausgeführt, ob eine Ausnahme ausgelöst wird oder nicht

try {
  echo inverse(5) . ' ';
} catch (Exception $e) {
  echo 'Caught exception: ',  $e->getMessage(), ' ';
} finally {
  echo 'First finally ';
}

try {
  echo inverse(0) . ' ';
} catch (Exception $e) {
  echo 'Caught exception: ',  $e->getMessage(), ' ';
} finally {
  echo "Second finally ";
}


echo 'Hello World';