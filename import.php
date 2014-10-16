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
            $tab[] = $ligne;
            //echo $data[$c] . "<br>\n";
        }
    }
    fclose($fichier);
}
print_r($tab);

