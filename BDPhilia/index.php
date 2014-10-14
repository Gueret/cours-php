<?php
$xmlVersion = '1.0';
$xmlEncoding = 'UTF-8';
$lang = 'fr';
$projet = 'BDPhilia';
$proprietaire = 'Inexine';
$auteur = 'Daniel';
$css = 'css.css';

$footer = "&copy;2009 - $proprietaire";
$titre = 'Bienvenue sur ' . $projet;

echo '<?xml version="' . $xmlVersion . '" encoding="' . $xmlEncoding . '"?>';
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $lang; ?>" lang="<?php echo $lang; ?>">
    <head>
       	<title>Titre BDPhilia</title>
        <meta name="author" content="<?php echo $auteur; ?>"/>
        <meta http-equiv="content-type" content="application/xhtml+xml; charset=<?php echo $xmlEncoding; ?>"/>
        <link href="<?php echo $css; ?>" rel="stylesheet" type="text/css" media="screen"/>
    </head> 
    <body>
        <div id="Btop">
            <div id="topMenu">
                <ul>
                    <li><a href="index.php">Index</a></li>
                    <li><a href="connexion.php">Connexion</a></li>
                    <li><a href="rechercheBd.php">RechercheBd</a></li>
                    <li><a href="panier.php">Panier</a></li> 
                </ul>
            </div>
        </div>
        <div id="Bmiddle">
            <h1><?= $titre ?></h1>
        </div>
        <div id="Bbottom">
            <?php echo $footer; ?>
        </div>
    </body>
</html> 