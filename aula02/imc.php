<?php

$peso = 666;
$altura = 1.85;

$imc = $peso/($altura*$altura);

echo "Seu peso é de ", $peso, "Kg";
echo "<br>";
echo "Sua altura é de ", $altura, "m";
echo "<br>";
echo "Seu imc é de ", $imc;

if ($imc < 18.5) {
echo " Você está no estado de magreza";
} elseif ( $imc < 25) {
    echo " Você está perfeitamente normal";
} elseif ($imc < 30) {
    echo " Você está com sobrepeso. Tome cuidado!";
} elseif ($imc < 40) {
    echo " Você está obeso. Procure um médico!";
} else {
    echo " Procure um médico imediatamente, você está com obesidade morbida!";
}
