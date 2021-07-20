<?php 

session_start();




// remover indices de arrays -   unset()

unset($_SESSION['autenticado']);
header('Location: index.php');

/*
echo "<pre>";
print_r($_SESSION);
echo "</pre>";
*/





// destruir a variavel de sessão

/*
session_destroy();
header('Location: index.php');
*/

?>