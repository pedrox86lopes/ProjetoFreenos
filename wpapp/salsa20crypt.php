<?php
//Exemplo de Salsa20
$str_Salsa20 = "freenos";
$codificacao_Salsa20 = hash('salsa20', $str_Salsa20);
 
echo "Aqui está o resultado: ". $codificacao_Salsa20;
/*
Quebrei em algumas linhas para ficar legível
 
0014b06af587198213034b4051268af73769521
fc2e6a029d5dc9bec350b537d241e66ae597692c35ff7c5410b
01c4fec8b48359c2e692202cc6c70d90b6588a
*/
?>