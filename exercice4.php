<?php

/**ecrire un script qui génère deux points a(xa,ya)
 * et b(xb,yb)  
 * le script affcihe les deux points puis determinbe et afffcihe la distances qui separent ces deux points
 */
define("MIN",100);
define("MAX",100);
$xa=rand(MIN,MAX);
$xb=rand(MIN,MAX);
$yb=rand(MIN,MAX);
$ya=rand(MIN,MAX);
$distance=sqrt(($xb-$xa)**2 +($yb-$ya)**2);
echo("la distance entre le  point A($xa,$ya) et le point B($xb,$yb) est $distance");
