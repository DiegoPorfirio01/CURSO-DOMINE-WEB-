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

/*
$conteudo = array(
array('titulo' => 'titulo1','resumo' => 'resumo1','texto' => 'texto1'),
array('titulo' => 'titulo2','resumo' => 'resumo2','texto' => 'texto2'),
array('titulo' => 'titulo3','resumo' => 'resumo3','texto' => 'texto3'),
array('titulo' => 'titulo4','resumo' => 'resumo4','texto' => 'texto4'),
array('titulo' => 'titulo5','resumo' => 'resumo5','texto' => 'texto5'),
array('titulo' => 'titulo6','resumo' => 'resumo6','texto' => 'texto6'),
array('titulo' => 'titulo7','resumo' => 'resumo7','texto' => 'texto7'),
array('titulo' => 'titulo8','resumo' => 'resumo8','texto' => 'texto8')  
);

echo "<pre>";
echo print_r($conteudo);
echo "</pre>";
echo "<br/>";


$contador = 0;
$numero = 0;
$numero2 = 0;

/*

while ($contador < count($conteudo)) {
    
    echo '<h3>' . $conteudo[$contador]['titulo'] . '</h3>';
    echo "<p>" . $conteudo[$contador]['resumo'] . "</p>";
    $contador++;
}
*/

/*
do {
    echo '<h3>' . $conteudo[$contador]['titulo'] . '</h3>';
    echo "<p>" . $conteudo[$contador]['resumo'] . "</p>";
    $contador++;

} while ($contador < count($conteudo)) 



for ($contador = 0; $contador < count($conteudo); $contador++){

echo '<h3>' . $conteudo[$contador]['texto'] . '</h3>';
echo "<p>" . $conteudo[$contador]['resumo'] . '</p>';
};


$itens = array('sofa','geladeira','bife','geleia','mesa');

echo "<pre>";
print_r ($itens);
echo "</pre>";


foreach($itens as $item ) {
    echo "$item <br/>";

    if ($item == 'mesa') {
        echo "compre uma mesa e ganhe desconto de 25%";
    }
    echo "<br/>";

}
*/

$comidas = array(
  array('Item' => 'Feijão', 'Preço' => 10, 'data_da_compra' => '20-06-2020','quantidade' => 5),
  array('Item' => 'Arroz', 'Preço' => 5, 'data_da_compra' => '20-05-2020','quantidade' => 0),
  array('Item' =>'Banana', 'Preço' => 2, 'data_da_compra' => '20-08-2020','quantidade' => 6),
  array('Item' =>'Couve', 'Preço' => 1, 'data_da_compra' => '20-10-2021','quantidade' => 2),
);
$contador = 0;
/*
echo "<pre>";
print_r($comidas);
echo "</pre>";
$contador = 0 ;
*/
/*
while($contador < count($comidas) ) {
    
    echo '<h3>' . $comidas[$contador]['Item'] . '</h3>';
    echo "<hr/>";
    echo ' Preço: ' . '<p>' . $comidas[$contador]['Preço'] . '</p>';
    echo "<hr/>";
    echo 'Data da compra: ' . '<p>' . $comidas[$contador]['data_da_compra'] . '</p>';
    echo "<hr/>";
    echo 'quantidade: ' . '<p>' . $comidas[$contador]['quantidade'] . '</p>';
    echo "<br/>";
    $contador ++;
}

*/

/*
do {
echo $comidas[$contador]['Item'] . '<br/>';
echo ' Preço:' .$comidas[$contador]['Preço'];
echo "<br/>";
echo "<br/>";
$contador++;

}while($contador < count($comidas));
*/
/*
for ($contador=0; $contador <  count($comidas); $contador++) { 
    echo $comidas[$contador]['Item'] . '<br/>';
echo ' Preço:' .$comidas[$contador]['Preço'];
echo "<br/>";
echo "<br/>";
}
*/

foreach ($comidas as $indice => $valor) {
    foreach ($valor as $indice2 => $valor2) {
        echo "$indice2 - $valor2 <br/>";
        }
        echo "<hr/>";

}

?>

</body>

</html>