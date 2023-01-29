<?php
  /* ----------- Datei-Upload ---------- */


  $allowed_ext = array('png', 'jpg', 'jpeg', 'gif');

 if(isset($_POST['submit'])) {
   // Prüfen, ob Datei hochgeladen wurde
   if(!empty($_FILES['upload']['name'])) {
    $file_name = $_FILES['upload']['name'];
    $file_size = $_FILES['upload']['size'];
    $file_tmp = $_FILES['upload']['tmp_name'];
    $target_dir = "uploads/${file_name}";
    // Dateierweiterung abrufen
    $file_ext = explode('.', $file_name);
    $file_ext = strtolower(end($file_ext));
    // echo $file_ext;

    // Dateityp/Erweiterung validieren
    if(in_array($file_ext, $allowed_ext)) {
      // Überprüfen der Dateigröße
      if($file_size <= 1000000) { // 1000000 bytes = 1MB
        // Datei hochladen
        move_uploaded_file($file_tmp, $target_dir);

        // Erfolgsmeldung
        echo '<p style="color: green;">Datei hochgeladen!</p>';
      } else {
        echo '<p style="color: red;">Datei ist zu groß!</p>';
      }
    } else {
      $message = '<p style="color: red;">Ungültiger Dateityp!</p>';
    }
   } else {
     $message = '<p style="color: red;">Bitte wähle eine Datei</p>';
   }
 }
  ?>

  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload</title>
  </head>
  <body>
    <?php echo $message ?? null; ?>
  <form action="<?php echo htmlspecialchars(
    $_SERVER['PHP_SELF']
  ); ?>" method="post" enctype="multipart/form-data">
    Bild zum Hochladen auswählen:
  <input type="file" name="upload">
  <input type="submit" value="Submit" name="submit">
</form>
  </body>
  </html>