<?php   

require "../../APP_LISTA_TAREFAS/tarefa_model.php";

require "../../APP_LISTA_TAREFAS/tarefa_service.php";

require "../../APP_LISTA_TAREFAS/conexao_PHP.php";


echo "<pre>";
print_r($_POST);
echo "<pre/>";


$tarefa = new Tarefa();

$tarefa->__set('tarefa',$_POST['tarefa']);

$conexao = new Conexao();


$tarefaService = new TarefaService($conexao,$tarefa);
$tarefaService->inserir();

header('location: nova_tarefa.php?inclusao=1');

?>