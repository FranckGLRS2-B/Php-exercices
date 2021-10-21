<?php

/**ecrirer un script qui genere un jours un mois et une année puis 
 * determine et affiche la date suivante et la date precedente 
 */
define("MIN",1);
define("MAX",12);
$jours=rand(1,31);
$mois=rand(MIN,MAX);
$an=rand(2000,2030);
$precedente=$jours-1;
$suivante=$jours+1;
/*$month=$mois-1;
$debut=1;
$fin1=31;
$bis=29;
$nbis=28;*/
echo("la date actuelle est : $jours/$mois/$an <br>");
switch($mois){
    case 1:
        if($jours==1){
            $fin=31;
            $_an=$an-1;
            $_mois=12;
            echo("la date precedente est : $fin/$_mois/$_an<br>");
        }else{
            echo("la date precedente est :$precedente/$mois/$an<br>");
        }
        if($jours==31 ){
            $debut=1;
            $_mois=$mois+1;
            echo("la date suivante est : $debut/$_mois/$an<br>");
        }else{
            echo("la date suivante est :$suivante/$mois/$an<br>");
        }
    break;
    case 2:
        if(($an%4==0 && $an%100!==0) || ($an%100==0 && $an%400==0)){
            if($jours==1){
                $fin=31;
                $_mois=$mois-1;
                echo("la date precedente est : $fin/$_mois/$an<br>");
            }else{
                echo("la date precedente est :$precedente/$mois/$an<br>");
            }if($jours==29){
                $debut=1;
                $_mois=$mois+1;
                echo("la date suivante est : $debut/$_mois/$an<br>");
            }else{
                echo("la date suivante est :$suivante/$mois/$an<br>");
            }   
        }else{
            if($jours==1){
                $fin=31;
                $_mois=$mois-1;
                echo("la date precedente est : $fin/$_mois/$an<br>");
            }else{
                echo("la date precedente est :$precedente/$mois/$an<br>");
            }if($jours==28){
                $debut=1;
                $_mois=$mois+1;
                echo("la date suivante est : $debut/$_mois/$an<br>");
            }else{
                echo("la date suivante est :$suivante/$mois/$an<br>");
            }  
        } 
    break;
    case 3:
        if(($an%4==0 && $an%100!==0) || ($an%100==0 && $an%400==0)){
            if($jours==1){
                $fin=29;
                $_mois=$mois-1;
                echo("la date precedente est : $fin/$_mois/$an<br>");
            }else{
                echo("la date precedente est :$precedente/$mois/$an<br>");
            }if($jours==31){
                $debut=1;
                $_mois=$mois+1;
                echo("la date suivante est : $debut/$_mois/$an<br>");
            }else{
                echo("la date suivante est :$suivante/$mois/$an<br>");
            }
        }else{
            if($jours==1){
                $fin=28;
                $_mois=$mois-1;
                echo("la date precedente est : $fin/$_mois/$an<br>");
            }else{
                echo("la date precedente est :$precedente/$mois/$an<br>");
            }       if($jours==31){
                $debut=1;
                $_mois=$mois+1;
                echo("la date suivante est : $debut/$_mois/$an<br>");
            }else{
                echo("la date suivante est :$suivante/$mois/$an<br>");
            }
        }

    break;
    case 4:
        if($jours==1){
            $fin=30;
            $_mois=$mois-1;
            echo("la date precedente est : $fin/$_mois/$an<br>");
        }else{
            echo("la date precedente est :$precedente/$mois/$an<br>");
        }
        if($jours==30){
            $debut=1;
            $_mois=$mois+1;
            echo("la date suivante est : $debut/$_mois/$an<br>");
        }else{
            echo("la date suivante est :$suivante/$mois/$an<br>");
        }
    break;
    case 5:
        if($jours==1){
            $fin=31;
            $_mois=12;
            echo("la date precedente est : $fin/$_mois/$an<br>");
        }else{
            echo("la date precedente est :$precedente/$mois/$an<br>");
        }
        if($jours==31 ){
            $debut=1;
            $_mois=$mois+1;
            echo("la date suivante est : $debut/$_mois/$an<br>");
        }else{
            echo("la date suivante est :$suivante/$mois/$an<br>");
        }
    break;
    case 6:
        if($jours==1){
            $fin=31;
            $_mois=$mois-1;
            echo("la date precedente est : $fin/$_mois/$an<br>");
        }else{
            echo("la date precedente est :$precedente/$mois/$an<br>");
        }
        if($jours==30){
            $debut=1;
            $_mois=$mois+1;
            echo("la date suivante est : $debut/$_mois/$an<br>");
        }else{
            echo("la date suivante est :$suivante/$mois/$an<br>");
        }
    break;
    case 7:
        if($jours==1){
            $fin=31;
            $_mois=$mois-1;
            echo("la date precedente est : $fin/$_mois/$an<br>");
        }else{
            echo("la date precedente est :$precedente/$mois/$an<br>");
        }
        if($jours==31 ){
            $debut=1;
            $_mois=$mois+1;
            echo("la date suivante est : $debut/$_mois/$an<br>");
        }else{
            echo("la date suivante est :$suivante/$mois/$an<br>");
        }
    break;
    case 8:
        if($jours==1){
            $fin=31;
            $_mois=12;
            echo("la date precedente est : $fin/$_mois/$an<br>");
        }else{
            echo("la date precedente est :$precedente/$mois/$an<br>");
        }
        if($jours==31 ){
            $debut=1;
            $_mois=$mois+1;
            echo("la date suivante est : $debut/$_mois/$an<br>");
        }else{
            echo("la date suivante est :$suivante/$mois/$an<br>");
        } 
    break;
    case 9:
        if($jours==1){
            $fin=31;
            $_mois=12;
            echo("la date precedente est : $fin/$_mois/$an<br>");
        }else{
            echo("la date precedente est :$precedente/$mois/$an<br>");
        }
        if($jours==30 ){
            $debut=1;
            $_mois=$mois+1;
            echo("la date suivante est : $debut/$_mois/$an<br>");
        }else{
            echo("la date suivante est :$suivante/$mois/$an<br>");
        }
    break;
    case 10:
        if($jours==1){
            $fin=31;
            $_mois=12;
            echo("la date precedente est : $fin/$_mois/$an<br>");
        }else{
            echo("la date precedente est :$precedente/$mois/$an<br>");
        }
        if($jours==31 ){
            $debut=1;
            $_mois=$mois+1;
            echo("la date suivante est : $debut/$_mois/$an<br>");
        }else{
            echo("la date suivante est :$suivante/$mois/$an<br>");
        }
    break;
    case 11:
        if($jours==1){
            $fin=31;
            $_mois=12;
            echo("la date precedente est : $fin/$_mois/$an<br>");
        }else{
            echo("la date precedente est :$precedente/$mois/$an<br>");
        }
        if($jours==30 ){
            $debut=1;
            $_mois=$mois+1;
            echo("la date suivante est : $debut/$_mois/$an<br>");
        }else{
            echo("la date suivante est :$suivante/$mois/$an<br>");
        }
    break;
    case 12:
        if($jours==1){
            $fin=31;
            $_mois=$mois-1;
            echo("la date precedente est : $fin/$_mois/$an<br>");
        }else{
            echo("la date precedente est :$precedente/$mois/$an<br>");
        }
        if($jours==31 ){
            $debut=1;
            $_an=$an+1;
            $_mois=1;
            echo("la date suivante est : $debut/$_mois/$_an<br>");
        }else{
            echo("la date suivante est :$suivante/$mois/$an<br>");
        }
    break;
}  
    



















