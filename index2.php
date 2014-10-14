<html>
    <head>
        <title>Titre de l'onglet</title>
        <meta charset="windows-1252">
        <meta name="viewport" content="width=device-width">
    </head>
    <body>
        <h1>Titre de la page 2</h1>

        <?php
        // D�claration des variables
        $vil1 = 'Tokyo';
        $vil2 = 'Paris';
        $vil3 = 'Kobe';
        $no = 2;
        // Variable Dynamique
        echo ${"vil$no"} . " <br>";
        var_dump($_POST);
        echo "<br>";
        var_dump(filter_input(INPUT_GET, 'nom'));
        ?>
        <form action="index2.php" method="POST">
            <span>Nom: </span>
            <input type="text" name="nom" value="Guéret" /><br>
            <span>Prénom:</span>
            <input type="text" name="prenom" value="Daniel" /><br>
            <input type="submit" value="Valider" />
        </form>
    </body>
</html>