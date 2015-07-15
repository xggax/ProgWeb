<?php
$conexao = mysql_connect("localhost", "root", "xampp@2015", 3306);
if (!$conexao) die("<p>Nao eh possivel se conectar ao banco.</p>"
. "<p>Codigo de Erro " . mysql_connect_errno()
. ": " . mysql_connect_error()) . "</p>";
$banco = mysql_select_db("progweb_bd", $conexao);
if (!$banco) die("<p>Banco de Dados não disponível.</p>");
echo "<p>Banco de dados aberto com sucesso.</p>";

$fnome = $_POST["nome"];
$fopcao = $_POST["opcao"];
$fmensagem = $_POST["mensagem"];

$sql = "INSERT INTO formulario (nome,sexo,mensagem) VALUES('$fnome','$fopcao','$fmensagem')";
$resultado = mysql_query($sql);
echo "<p>Formulário enviado com sucesso e cadastrado no banco de dados!</p>";

echo $fnome;
echo "<br>";
echo $fopcao;
echo "<br>";
echo $fmensagem;
echo "<br>";

mysql_close($conexao);
?>