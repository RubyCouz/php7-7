<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8" />
        <title>Exercice 7</title>
    </head>
    <body>
        <?php
        if (!empty($_POST['lastname']) && !empty($_POST['firstname']) && !empty($_POST['civility']) && !empty($_FILES['file']['name'])) {
            echo 'Bonjour ' . $_POST['civility'] . ' ' . $_POST['lastname'] . ' ' . $_POST['firstname'] . ', fichier sélectionné : ' . $_FILES['file']['name'];
        } else {
            ?>
        <form class="form" action="index.php" method="POST" enctype="multipart/form-data">
                <label for='civility'></label>
                <select class="select" name="civility">
                    <option selected disabled>cVeuillez selectionner une option</option>
                    <option value="Monsieur">Mr</option>
                    <option value="Madame">Mme</option>
                </select>
                <!--<input type="hidden" name="MAX_FILE_SIZE" value="8485760" />-->
                <label for='folder'></label> 
                <input type="file" id="folder" name="file" placeholder="Sélectionnez un fichier" />
                <label for='lastname'></label> 
                <input id="lastname" type="text" name="lastname" placeholder="Nom" />
                <label for='firstname'></label>
                <input id="firstname" type="text" name="firstname" placeholder="Prénom" />
                <input type="submit" name="valider" value="Valider">
            </form>
            <?php
        }
        ?>
    </body>
</html>
