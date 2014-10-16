<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$fichier = fopen("BDPhilia/bd.csv", "r");
$tab = array();
if ($fichier !== FALSE) {
    while (($data = fgetcsv($fichier, 1000, ",")) !== FALSE) {
        $num = count($data);
        for ($c = 0; $c < $num; $c++) {
            $data[$c] = iconv("UTF-8", "ISO-8859-1//IGNORE", $data[$c]);
            $ligne = explode(";", $data[$c]);
//            if (substr($ligne, 0, 1) == '"')
//                    $ligne = substr($ligne, 1, -1);
            $tab[] = $ligne;
            //echo $data[$c] . "<br>\n";
        }
    }
    fclose($fichier);
}
//print_r($tab);


$cnx = mysqli_connect("localhost", "dev", "dev", "bd");

mysqli_error($cnx);

foreach ($tab as $key => $ligne) {
    $max = count($ligne);
    $sql = "INSERT INTO `bd`.`livres` (`id`, `titre`, `auteur`, `editeur`, `prix`, `stock`, `sortie`) VALUES(";
    for ($a = 0; $a < $max; $a++) {
        if (substr($ligne[$a], 0, 1) == '"')
             $ligne[$a] = substr($ligne[$a], 1, -1);
        $ligne[$a] = htmlentities($ligne[$a]);
        $sql .= "'".$ligne[$a]."',";        
    }
    $sql = substr($sql, 0, -1);
    $sql.= ");";
    $res = mysqli_query($cnx, $sql);
    if (!$res) {
        $message = 'INVALId query: ' . mysql_error() . "<br>\n";
        $message .= 'whole query: ' . $sql;
        die($message);
    }
    //var_dump($sql);  
}


