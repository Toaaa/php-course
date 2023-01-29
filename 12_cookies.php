<?php
/* ------------- Cookies ------------ */

/*
  Cookies sind ein Mechanismus, um Daten im externen Browser zu speichern und so wiederkehrende Nutzer zu verfolgen oder zu identifizieren. Du kannst festlegen, dass bestimmte Daten im Browser gespeichert werden, und sie dann abrufen, wenn der/die Nutzer/in die Seite erneut besucht.
*/

// Da Cookies auf dem Client gespeichert werden, solltest du keine sensiblen Daten in ihnen speichern. Sessions sind eine bessere Wahl für die Speicherung sensibler Daten.

// Ein Cookie setzen
setcookie('name', 'Erik', time() + 86400 * 30); // 86400 = 1 day

// echo time();

// Ein Cookie holen
if (isset($_COOKIE['name'])) {
  echo $_COOKIE['name'];
}

// Ein Cookie löschen
setcookie('name', '', time() - 86400);
