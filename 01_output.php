<?php // Dies ist ein php-Tag. Wenn sich unter dem php kein HTML oder anderer Inhalt befindet, brauchen wir das php-Tag nicht zu schließen.

/* ------- Ausgabe von Inhalten ------- */

// Echo - Ausgabe von Strings, Zahlen, HTML, etc.
echo 'Hallo';
echo 123;
echo '<h1>Hallo</h1>';

// print - Ähnlich wie echo, aber ein bisschen langsamer
print 'Hallo';

// print_r - Gibt ein bisschen mehr Informationen. Kann verwendet werden, um Arrays auszugeben.
print_r('Hallo');
print_r([1, 2, 3]);

// var_dump - Noch mehr Infos wie Datentyp und Länge
var_dump('Hallo');
var_dump([1, 2, 3]);

// Zeichen mit einem Backslash ausklammern
echo "Ist dein Name S\'laulie?";

/* ------------ Comments ------------ */

// Dies ist ein einzeiliger Kommentar

/*
      * Dies ist ein mehrzeiliger Kommentar
      *
      * Er kann verwendet werden, um einen Codeblock auszukommentieren.
*/

// Wenn nach dem PHP noch weitere Inhalte folgen, wie z.B. diese Datei, brauchst du den Endtag. Ansonsten brauchst du es nicht.
?>

<!-- Du kannst jedes beliebige HTML innerhalb einer .php-Datei ausgeben -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Meine PHP Webseite</title>
</head>
<body>
  <!-- Du kannst PHP inklusive Variablen etc. ausgeben -->
  <h1>Hallo <?php echo 'Slaulie'; ?></h1>
  <!-- Du darfst das Semikolon nach einer Anweisung nur weglassen, wenn auf die Anweisung unmittelbar ein abschließender PHP-Tag ?> folgt. -->
  <h1>Hallo <?= 'Slaulie' ?></h1>
</body>
</html>


<?php
    echo 'Hallo Welt!';
    print_r([1,2,3])
?>