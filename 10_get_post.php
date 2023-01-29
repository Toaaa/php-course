<?php
/* --- $_GET & $_POST Superglobals -- */

/*
  Mit den Superglobalen $_GET und $_POST können wir Daten über Urls und Formulare übergeben.
*/

if (isset($_POST['submit'])) {
  // echo '<h3>' . $GET['username'] . '</h3>';
  echo '<h3>' . $_POST['username'] . '</h3>';
} ?>

<!-- Daten über eine Verbindung weitergeben -->
<a href="<?php echo $_SERVER['PHP_SELF']; ?>?username=Erik">Link</a>


<br><br>

<!-- Übergabe von Daten durch ein Formular -->
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
<div>
  <label>Name: </label>
  <input type="text" name="name">
</div>
<br>
<div>
<label>Password: </label>
  <input type="password" name="password">
</div>
<br>
  <input type="submit" name="submit" value="Submit">
</form>