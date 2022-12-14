<?php

/*
 * Opdracht 1: DONE
 * Maak de $weekdagen array af zodat alle dagen van de week erin staan
 * Voor de key en value gebruik je kleine letters, geen hoofdletters
 */

/*
 * Opdracht 2: DONE
 * Gebruik een loop om van alle elementen van je array de waarde te tonen op het scherm
 * Gebruik hiervoor een echo statement dus geen print_r of var_dump.
 */

/*
 * Opdracht 3: DONE
 * Wijzig alle waardes in je array met behulp van een loop en een switch
 * Alle waardes moeten beginnen met een hoofdletter. Bij 'za' en 'zo' moeten de waardes
 * van de dagen geheel uit hoofdletters bestaan.
 * Gebruik hiervoor de juiste functies
 */

/*
 * Opdracht 4: DONE
 * Maak een nieuwe array en noem deze $omgekeerd.
 * De inhoud van deze array bestaat uit de elementen van de weekdagen array.
 * Gebruik hiervoor een for loop en array_push() om deze elementen te kopieren naar de nieuwe array
 * HINT: de grootte van een array kun je met sizeof() en count() bepalen
 */

/*
 * Opdracht 5: DONE
 * Gebruik de functie array_reverse om hetzelfde resultaat als in opdracht 4 te verkrijgen.
 */

$weekdagen = array(
    'ma' => 'maandag',
    'di' => 'dinsdag',
    'wo' => 'woensdag',
    'do' => 'donderdag',
    'vr' => 'vrijdag',
    'za' => 'zaterdag',
    'zo' => 'zondag'
    );


foreach($weekdagen as $value) {
    switch($value) {
        case 'maandag';
        case 'dinsdag';
        case 'woensdag';
        case 'donderdag';
        case 'vrijdag';
        echo ucfirst($value); echo '<br>'; break;
        case 'zaterdag';
        case 'zondag';
        echo strtoupper($value); echo '<br>'; break;
    }
}

$omgekeerd = array();

$dagen = array_keys($weekdagen);

for($i=count($weekdagen)-1;$i>-1;$i--){
    $to_push = array($dagen[$i] => $weekdagen[$dagen[$i]] );
    array_push($omgekeerd,  $to_push);
    echo '<br>';
}
var_dump($omgekeerd);
echo '<br>';
echo '<br>';
$andereOmgekeerd = array_reverse($weekdagen);
var_dump($andereOmgekeerd);