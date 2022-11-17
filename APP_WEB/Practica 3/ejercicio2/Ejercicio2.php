<?php
$suma1=array();
$suma2=array();
print "<h1>Jugador 1</h1>";
for ($i=0; $i <6 ; $i++) { 
    $cont=rand(1,6);
    print"<img src='./img/$cont.jpg' width='150px'>";
    array_push($suma1,$cont);
} 
print "<h1>Jugador 2</h1>";
for ($i=0; $i <6 ; $i++) { 
    $cont=rand(1,6);
    print"<img src='./img/$cont.jpg' width='150px'>";
    array_push($suma2,$cont);
}
print "<br>"; 
$total1=array_sum($suma1);
$total2=array_sum($suma2);
if ($total1>$total2) {
    print "El ganador fue el Jugador uno con un puntaje de $total1\n";
}
else{
    print "El ganador fue el Jugador dos con un puntaje de $total2";
}
?>