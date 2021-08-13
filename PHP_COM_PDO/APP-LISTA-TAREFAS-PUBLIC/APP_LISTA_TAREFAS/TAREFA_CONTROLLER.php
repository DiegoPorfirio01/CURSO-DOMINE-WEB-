<?php   

require "../../APP_LISTA_TAREFAS/tarefa_model.php";

require "../../APP_LISTA_TAREFAS/tarefa_service.php";

require "../../APP_LISTA_TAREFAS/conexao_PHP.php";

echo "<pre>";
print_r($_POST);
echo "<pre/>";


$tarefa = new Tarefa();
$tarefa->__set('tarefa',$_POST['novaTarefa']);

$conexao = new Conexao();


$tarefaService = new TarefaService($conexao,$tarefa);

print_r($tarefaService);





?>