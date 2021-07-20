<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
        <title>php</title>
    <script>
      

    </script>
</head>

<body>
<?php        




echo date('d/M/Y H:i');
echo "<br/>";


$data_inicial = '2021-04-24';
$data_final = '2018-05-21';

$time_inicial = strtotime($data_inicial);
$time_final = strtotime($data_final);

echo $time_inicial . ' - ' . $data_inicial;
echo "<br/>";
echo $time_final . '-' . $data_final ;
echo "<br/>";

$diferenca = $time_inicial - $time_final;
echo $diferenca;
echo "<br/>";

$segundosEmDia = 24 * 60 * 60;
echo $segundosEmDia;
echo "</br>";

$diferencaEntreDatas = $diferenca / $segundosEmDia;
echo $diferencaEntreDatas;



?>


</body>

</html>