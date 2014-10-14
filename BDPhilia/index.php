<?php
$xmlVersion = '1.0';
$xmlEncoding = 'UTF-8';
$lang = 'en';
$projet = 'BDPhilia';
$proprietaire = 'Inexine';
$auteur = 'Daniel';
$css = 'css.css';

$footer = "&copy;2009 - $proprietaire";
$titre = 'Bienvenue sur ' . $projet;

setcookie('monCook', 'Valeur Cookie');

$menu = array();
$menu['index.php']['fr'] = array('desc' => 'Accueil', 'title' => 'Accueil');
$menu['index.php']['en'] = array('desc' => 'Homepage', 'title' => 'Homepage');
$menu['connexion.php']['fr'] = array('desc' => 'Connexion', 'title' => 'Connexion à la base de données');
$menu['connexion.php']['en'] = array('desc' => 'Connexion', 'title' => 'Connection to the database');
$menu['rechercheBd.php']['fr'] = array('desc' => 'RechercheBD', 'title' => 'Recherche dans la base de données');
$menu['rechercheBd.php']['en'] = array('desc' => 'SearchDB', 'title' => 'Search in the database');
$menu['panier.php']['fr'] = array('desc' => 'Panier', 'title' => 'Panier d\'achat');
$menu['panier.php']['en'] = array('desc' => 'Cart', 'title' => 'Shopping Cart');

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
                    <li><a href="index.php" title="<?php echo $menu['index.php'][$lang]['title']; ?>"><?php echo $menu['index.php'][$lang]['desc']; ?></a></li>
                    <li><a href="connexion.php" title="<?php echo $menu['connexion.php'][$lang]['title']; ?>"><?php echo $menu['connexion.php'][$lang]['desc']; ?></a></li>
                    <li><a href="rechercheBd.php" title="<?php echo $menu['rechercheBd.php'][$lang]['title']; ?>"><?php echo $menu['rechercheBd.php'][$lang]['desc']; ?></a></li>
                    <li><a href="panier.php" title="<?php echo $menu['panier.php'][$lang]['title']; ?>"><?php echo $menu['panier.php'][$lang]['desc']; ?></a></li> 
                </ul>
            </div>
        </div>
        <div id="Bmiddle">
            <h1><?= $titre ?></h1>
            <?php echo $_COOKIE['monCook'] ?>
        </div>
        <div id="Bbottom">
            <?php echo $footer; ?>
        </div>
    </body>
</html> 