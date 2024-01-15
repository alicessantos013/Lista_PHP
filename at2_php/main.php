<?php
$l = 0;
$c = 0;
$area = 0;
$P = 0;

echo "Digite o valor da Largura:";
$l = (double)readLine();
echo "Digite o valor do comprimento:";
$c = (double)readLine();

$area = $l * $c;
$P = ($l * $c) * 2;

echo " \n";

echo "A área é:";
echo $area;
echo " \n";

echo "A perimetro é:";
echo $P;
echo " \n";


