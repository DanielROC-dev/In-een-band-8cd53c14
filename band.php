<?php
$albums = array( 
"Citizen of Glass" => 4.5,
"Night" => 9,
"New Eyes" =>5,
"Strange Trails" => 10
);
foreach ($albums as $nummers => $prijs){
    echo "> $nummers kost $$prijs" . PHP_EOL;
    $totaal = $totaal + $prijs;
    $aantalnummers = $aantalnummers + 1;
}
echo "> het totaal van alle albums is $$totaal" . PHP_EOL;
$gemiddelde = $totaal / $aantalnummers;
echo "> het gemiddelde van alle albums is $$gemiddelde";
exit();
