<?php

function comparar($nro){
    if($nro%2==0)
    {echo "$nro es Par";}
    else
    {echo "$nro es Impar";}
}
comparar(5);
echo "<br>";
echo "<br>";
function Mayor(){
    $n1=15;
    $n2=20;
    if($n1>$n2)
    {   echo "numero1 ($n1) es mayor que: $n2";}
    else
    {   echo "numero2 ($n2) es mayor que: $n1";}
}
Mayor();
echo "<br>";
echo "<br>";
function Cuadrado($n1){
    $resp=$n1*$n1;
    echo "el cuadrado de $n1 es: $resp";
}
Cuadrado(10);

?>