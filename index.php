<?php

// exercice 1 //
$months = [
    'janvier',
    'février',
    'mars',
    'avril',
    'mai',
    'juin',
    'juillet',
    'aout',
    'septembre',
    'octobre',
    'novembre',
    'décembre'
];

// exercice 2 //
echo $months[2].'<br>';

// exercice 3 //
echo $months[5].'<br>';

// exercice 4 //
$monts[7] = 'août';

// exercice 5 //
$hautDeFrance = [
    2 => 'Aisne',
    59 => 'Nord',
    60 => 'Oise',
    62 => 'Pas-de-Calais',
    80 => 'Somme'
];

// exercice 6 //
echo $hautDeFrance[59];

// exercice 7 //
$hautDeFrance[51] = 'Marne';

// exercice 8 //
foreach($months as $month){
    echo $month.'<br>';
}

// exercice 9 //
foreach($hautDeFrance as $departement){
    echo $departement.'<br>';
}


// exercice 10 //
foreach($hautDeFrance as $numeroDepartement => $nomDepartement){
    echo 'le departement '.$nomDepartement.' a le numéro '.$numeroDepartement;
}

?>