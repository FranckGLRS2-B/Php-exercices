<?php

/**genere trois nombres puis les trie dans l'ordre croissant et apres dans l'ordre decroissant
 */
define("MIN",-100);
define("MAX",100);
$a=rand(MIN,MAX);
$b=rand(MIN,MAX);
$c=rand(MIN,MAX);

echo("les valeurs générées:$a;$b;$c<br> <br>");

print("ordre croissant:<br>");
if($a<$b && $b<$c){
    echo("$a<$b<$c<br>");
}elseif($b<$c && $c<$a){
    echo("$b<$c<$a<br>");
}elseif($c<$a && $a<$b){
    echo("$c<$a<$b<br>");
}elseif($c<$a && $a<$b){
    echo("$c<$a<$b<br>");
}elseif($a<$c && $c<$b){
    echo("$a<$c<$b<br>");
}elseif($b<$a && $a<$c){
    echo("$b<$a<$c<br>");
}elseif($c<$b && $b<$a){
    echo("$c<$b<$a<br>");
}
print("ordre decroissant<br>");
if($a>$b && $b>$c){
    echo("$a>$b>$c<br>");
}elseif($b>$c && $c>$a){
    echo("$b>$c>$a<br>");
}elseif($c>$a && $a>$b){
    echo("$c>$a>$b<br>");
}elseif($c>$a && $a>$b){
    echo("$c>$a>$b<br>");
}elseif($a>$c && $c>$b){
    echo("$a>$c>$b<br>");
}elseif($b>$a && $a>$c){
    echo("$b>$a>$c<br>");
}elseif($c>$b && $b>$a){
    echo("$c>$b>$a<br>");
}

