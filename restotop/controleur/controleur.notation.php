<?php
include_once "$racine/modele/bd.resto.inc.php";
$listeRestos = getRestosNotation();
// appel du script de vue qui permet de gerer l'affichage des donnees
$titre = "Notation des restaurants";
include "$racine/vue/entete.html.php";
include "$racine/vue/vueNotation.php"; //vue à coder
include "$racine/vue/pied.html.php"; 



?>