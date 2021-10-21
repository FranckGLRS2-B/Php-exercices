<?php

/**ecrire un script qui genere une annee et un mois
 * puis determine et affiche le nombre de jours de ce mois dans cette année
 */
define("MIN",1);
define("MAX",12);
define("MINAN",1900);
define("MAXAN",2021);
$an=rand(MINAN,MAXAN);
$mois=rand(MIN,MAX);
$boite="";
$jours="";
switch($mois){
    case 1:
        $boite="janvier";
        $jours=31;
    break;
    case 2:
        $boite="fevrier";
        if($an%100==0 && $an%400==0){
            $jours=29;
        }elseif($an%4==0 && $an%100!=0)
            $jours=29;
        else{
            $jours=28;
        }   
    break;
    case 3:
        $boite="mars";
        $jours=31;
    break;
    case 4:
        $boite="avril";
        $jours=30;
    break;
    case 5:
        $boite="mai";
        $jours=31;
    break;
    case 6:
        $boite="juin";
        $jours=30;
    break;
    case 7:
        $boite="juillet";
        $jours=31;
    break;
    case 8:
        $boite="août";
        $jours=31;
    break;
    case 9:
        $boite="septembre";
        $jours=30;
    break;
    case 10:
        $boite="octobre";
        $jours=31;
    break;
    case 11:
        $boite="novembre";
        $jours=30;
    break;
    case 12:
        $boite="décembre";
        $jours=31;
    break;
}
echo("le nombre de jours en $boite est de $jours jours en $an ");