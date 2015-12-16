<?php
// Exercice qui permet de rechercher les villes qui commencent par les caractères saisis
// et de les afficher pour sélection


// Ouverture du fichier
$villes = unserialize(file_get_contents('towns.txt'));

// Recherche du nombre de villes (longueur du tableau)
$nbre_villes = count($villes);

// tri du tableau
sort($villes);

// déclaration du tableau qui va recevoir les resultats 
$resultat =array();

// Stockage de 5 résultats maxi dans le tableau
for ($i=0; $i<$nbre_villes && count($resultat)<5;$i++) {
    if (stripos($villes[$i],$_GET['s']) === 0) {
        echo ($villes[$i]);
        array_push($resultat,$villes[$i]);
    }
}
// on ajoute une barre entre chaque réponse
echo implode('|', $resultat); 
?>
