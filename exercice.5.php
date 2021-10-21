<?php

/**ecrire un script qui genere un jours un mois et une année
 * puis verifie si la date générée est valide ou pas
 */
define("min_m",1); 
define("max_m",20);
define("min_j",1);
define("max_j",50);
define("min_an",1900);
define("max_an",2030);
$jours=rand(min_j,max_j);
$mois=rand(min_m,max_m);
$an=rand(min_an,max_an);
switch($mois){
    case 1:
        if($jours>=1 && $jours<=31){
            $validite="valide";
        }
        else{
            $validite="non valide";
        }
    break;
    case 2:
        if(($an%4==0 && $an%100!==0) || ($an%100==0 && $an%400==0)){
            if($jours>=1 && $jours<=29){
                $validite="valide";
            }else{
                $validite="non valide";
            }  
        }else{
            if($jours>=1 && $jours<=28){
                $validite="valide";
            }else{
                $validite="non valide";
            }  
        }
        break;
    case 3:
         if($jours >= 1 && $jours<=31){
            $validite="valide";
         }else{
            $validite="non valide";
        }  
        break;
    case 4:
        if($jours >= 1 && $jours<=30){
            $validite="valide";
         }else{
            $validite="non valide";
        }  
        break;
    case 5:
        if($jours >= 1 && $jours<=31){
            $validite="valide";
         }else{
            $validite="non valide";
        }  
        break;
    case 6:
        if($jours >= 1 && $jours<=30){
            $validite="valide";
         }else{
            $validite="non valide";
        }  
        break;
    case 7:
        if($jours >= 1 && $jours<=31){
            $validite="valide";
         }else{
            $validite="non valide";
        }  
        break;
    case 8:
        if($jours >= 1 && $jours<=31){
            $validite="valide";
         }else{
            $validite="non valide";
        }  
        break;
    case 9:
        if($jours >= 1 && $jours<=30){
            $validite="valide";
         }else{
            $validite="non valide";
        }  
        break;
    case 10:
        if($jours >= 1 && $jours<=31){
            $validite="valide";
         }else{
            $validite="non valide";
        }  
        break;
    case 11:
        if($jours >= 1 && $jours<=30){
            $validite="valide";
         }else{
            $validite="non valide";
        }  
        break;
    case 12:
        if($jours >= 1 && $jours<=31){
            $validite="valide";
         }else{
            $validite="non valide";
        }  
        break;
    default:
        $validite="non valide";
}
echo("la date $jours/$mois/$an est $validite");

    