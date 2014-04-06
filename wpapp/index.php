 <?php
// Caso ser imagem.
if (preg_match('/\.(?:png|jpg|jpeg|gif)$/', $_SERVER["REQUEST_URI"])) {
return false; // redireciona para o arquivo requisitado
} else {
echo "<p>Welcome to Projeto Freenõs - Initial Steps</p>";
}
?>