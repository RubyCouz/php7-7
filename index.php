<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <title>Exercice 7</title>
</head>
<body>
  <?php
  if (isset($_POST['lastname']) && isset($_POST['firstname']) && isset($_POST['gender']) && isset($_POST['textField']))
  {
    echo 'Bonjour ' . $_POST['gender'] . ' ' . $_POST['lastname'] . ' ' . $_POST['firstname'] . ', fichier sélectionné : ' . $_POST['textField'];
  } else {
    ?>
    <form class="form" action="index.php" method="POST" >
      <select class="select" name="gender">
        <option value="Monsieur">Mr</option>
        <option value="Madame">Mme</option>
      </select>
      <!--<input type="hidden" name="MAX_FILE_SIZE" value="8485760" />-->
      <input type="file" name="textField" placeholder="Sélectionnez un fichier" />
      <input type="text" name="lastname" placeholder="Nom" />
      <input type="text" name="firstname" placeholder="Prénom" />
      <input type="submit" name="valider" value="Valider">
    </form>
    <?php
  }

  ?>
</body>
</html>
