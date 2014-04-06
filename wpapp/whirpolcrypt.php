<?php
//Exemplo de Whirlpool
$sen_Whirlpool = "freenos";
$codificacao_Whirlpool = hash('whirlpool', $sen_sha512);
 
echo "Whirlpool Code: ". $codificacao_Whirlpool;
/*
Quebrei em algumas linhas para ficar legível
 
d2276094e7e3b11ce53ec83a753c4ca855eacd6
cee7cb5d3677081c0625a435abb4b5bb3ae7cc447
b0219d927c47fb96d21a1fe3a79e216dd22bb4633fac73f9
*/
?>
