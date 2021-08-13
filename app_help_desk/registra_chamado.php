<?php 
session_start();

echo "<pre>";
print_r($_POST);
echo "</pre>";

//montagem do texto
$titulo = str_replace('#','-', $_POST['titulo']);
$categoria = str_replace('#','-', $_POST['categoria']);
$descricao = str_replace('#','-', $_POST['descriçao']);

$texto = $_SESSION['id'] . '#' . $categoria . '#' . $titulo . '#' . $descricao . PHP_EOL;

//abrindo arquivo
$arquivo = fopen('arquivo.hd', 'a');

//implode('#',$_POST);

fwrite($arquivo, $texto);

fclose($arquivo);

header('Location: abrir_chamado.php');	

?>