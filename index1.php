<html>
    <head>
        <title>Titre de l'onglet</title>
        <meta charset="windows-1252">
        <meta name="viewport" content="width=device-width">
    </head>
    <body>
        <h1>Titre de la page 1</h1>
        <?php

        // Déclaration des variables
        $nom = 'Braive';
        $prenom = 'Xavier';
        $rue = 'rue de la Sir�ne';
        $no = 2;
        $cp = 40000;
        $ville = 'Li�ge';
        $fTotalHt = 457;

        // Tableau full PHP
        echo '<table border = "1">';
        echo '<tbody>';
        echo '<tr>';
        echo '<th>Client</th>';
        echo "<td>$prenom $nom</td>";
        echo '</tr>';
        echo '<tr>';
        echo '<th>Adresse</th>';
        echo "<td>$no, $rue<br>$cp $ville</td>";
        echo '</tr>';
        echo '<tr>';
        echo '<th>Montant de la commande HT</th>';
        echo "<td>$fTotalHt �</td>";
        echo '</tr>';
        echo '</tbody>';
        echo '</table>';
        echo '--------------------------------------------------------------';
        ?>
        <br>
        <!-- Tableau avec du PHP -->
        <table border = "1">
            <tbody>
                <tr>
                    <th>Client</th>
                    <td><?php echo "$prenom $nom"; ?></td>
                </tr>
                <tr>
                    <th>Adresse</th>
                    <td><?php echo "$no, $rue<br>$cp $ville" ?></td>
                </tr>
                <tr>
                    <th>Montant de la commande HT</th>
                    <td><?php echo "$fTotalHt �"; ?></td>
                </tr>
            </tbody>
        </table>
    </body>
</html>