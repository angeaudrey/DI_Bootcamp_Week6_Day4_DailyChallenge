<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

if (isset($_POST['submit'])) {
    if (!empty($_POST['color'])) {
        // Compter le nombre de cases cochées.
        $checked_count = count($_POST['color']);
        $name = $_POST['nom'];
        echo $name . " 's favourite colors are " . $checked_count . " option(s): <br/>";
        // Boucle pour stocker et afficher les valeurs de chaque case cochée.
        foreach ($_POST['color'] as $selected) {
            echo "<p>" . $selected . "</p>";
        }
    } else {
        echo "<b>Veuillez faire une sélection</b>";
    }
}

</body>
</html>
