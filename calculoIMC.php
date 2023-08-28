<?php
function classificacaoIMC($IMC) {
 $classificacao = ["Magreza", "Saudável", "Sobrepeso", "Obesidade Grau 
I", "Obesidade Grau II", "Obesidade Grau III"];
 if ($IMC < 18.5) {
 return $classificacao[0];
 } elseif ($IMC >= 18.5 && $IMC < 24.9) {
 return $classificacao[1];
 } elseif ($IMC >= 25 && $IMC < 29.9) {
 return $classificacao[2];
 } elseif ($IMC >= 30 && $IMC < 34.9) {
 return $classificacao[3];
 } elseif ($IMC >= 35 && $IMC < 39.9) {
 return $classificacao[4];
 } else {
 return $classificacao[5];
 }
}
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
 $num1 = $_POST["num1"];
 $num2 = $_POST["num2"];
 $soma = $num1 * $num1;
 $divisao = $num2 / $soma;
 $valorFinal = number_format($divisao, 2);
 $classificacaoResultado = classificacaoIMC($divisao); 
 
echo "<script type='text/javascript'>alert('Atenção, seu IMC é: $valorFinal e 
você está classificado como: $classificacaoResultado');</script>";
 }
?>