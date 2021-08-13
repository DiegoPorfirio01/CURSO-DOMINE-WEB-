<?php

if (!empty($_POST['USUARIO']) && !empty($_POST['SENHA'])) {
	

try {

$conexao = new PDO('mysql:host=localhost;dbname=db_usuarios','root','');




$query = "select * from tb_usuarios where '{$_POST['USUARIO']}' = :usuario AND '{$_POST['SENHA']}' = :senha ";


 $sttmt = $conexao->prepare($query);

//bindValue, evitando SQL INJETION
 $sttmt->bindValue(':usuario',$_POST['USUARIO']);
 $sttmt->bindValue(':senha',$_POST['SENHA']);

 $sttmt->execute();

 $usuario = $sttmt->fetch();
 
 echo "<pre>";
 print_r($usuario);
 echo "<pre/>";


 



}catch(PDOExecption $e){
	echo 'erro '. $e->getcode() . 'mensagem: ' . getMessage();

}

}


?>


<<!DOCTYPE html>
<html>
<head>
	<title>login</title>
</head>
<body>

<form method="post" action='index.php'>

<input type="text" name="USUARIO"  placeholder="usuario">
<input type="password" name="SENHA" placeholder="senha">
<button type="submit"> enviar </button>

</form>

</body>
</html>


