<?php

// primeiro a gente declara as variaveis

$salario1 = 1700.00;
$hextras1 = 10;
$salario2 = 2500.00;
$hextras2 = 6;
$bonus1 = 0;
$bonus2 = 1;

echo "O 1° salario é: R$$salario1 , e suas horas extras são: $hextras1 horas.<br/>";
if ($hextras1 >= 10) {
     $bonus = ($salario1)+($salario1*0.2);
    echo "Seu salario desse mês é: $bonus <br/>";
}else{
    echo "Seu salario desse mês é: $salario1 <br/>";
}

echo "O 2° salario é: R$$salario2 , e suas horas extras são: $hextras2 horas.<br/>";
if ($hextras2 >= 5) {
     $bonus2 = ($salario2)+($salario2*0.1);
    echo "Seu salario desse mês é: $bonus2 <br/>";
}else{
    echo "Seu salario desse mês é: $salario2 <br/>";
}






?>