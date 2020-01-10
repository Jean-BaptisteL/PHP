<?php
include_once 'indexCtrl.php';
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, user-scalable=no" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="asset/style.css" />
        <title>TP 2</title>
    </head>
    <body>
        <h1>TP3</h1>
        <h2>Sélectionnez un personnage célèbre !</h2>
        <div class="formContainer row justify-content-center text-center">
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" class="col-lg-4 col-sd-4 col-sm-12">
                <div class="form-group">
                    <label for="personality">Personnage célèbre : </label><select name="personality" id="personality" class="form-control <?= (isset($_POST['personality']) ? (!isset($formError['personality']) ? 'is-valid' : 'is-invalid') : '') ?>">
                        <option disabled <?= !isset($_POST['personality']) ? 'selected' : '' ?>>...</option>
                        <option value="1" <?= isset($_POST['personality']) && $_POST['personality'] == '1' ? 'selected' : '' ?>>Victor Hugo</option>
                        <option value="2" <?= isset($_POST['personality']) && $_POST['personality'] == '2' ? 'selected' : '' ?>>Jean de la Fontaine</option>
                        <option value="3" <?= isset($_POST['personality']) && $_POST['personality'] == '3' ? 'selected' : '' ?>>Pierre Corneille</option>
                        <option value="4" <?= isset($_POST['personality']) && $_POST['personality'] == '4' ? 'selected' : '' ?>>Jean Racine</option>
                    </select>
                    <p class="text-danger"><?= isset($formError) ? $formError : '' ?></p>
                    <input type="submit" name="showPortrait" id="showPortrait" class="btn btn-primary" />
                </div>
            </form>
        </div>
        <div class="text-center">
            <?= isset($personality) ? portrait($personality) : ''?>
        </div>
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>
</html>