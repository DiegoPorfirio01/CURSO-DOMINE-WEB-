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
$valor = 0;
while($valor < 10 ){

    $valor+=1;
    if ($valor == 1 || $valor == 4) {
       continue;
    }

echo "$valor";  


}

echo "---final loop---";

?>

</body>

</html>