<?php
//b64 code crypt
$sen_base64 = "freenos";
$codificacao_base64= base64_encode($sen_base64);
echo "BASE64 CODE: ". $codificacao_base64;
 
echo "<br /><br />";
 
$original= base64_decode($codificacao_base64);
echo "$sen_base64  TEXTO ORIGINAL "."$original";
//Aqui vai um texto qualquer
?>