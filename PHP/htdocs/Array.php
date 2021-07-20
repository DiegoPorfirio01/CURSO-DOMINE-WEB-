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
$lista = Array('cumprimentos','palavras','aaaa','22sx22');
$lista['cumprimentos'] = [
   1 => 'oi',
   2 => 'ola',
   3 => 'hi',
   4 => 'hello',
   5 => 'oi1',
   6 => 'oi2',
   7 => 'hola',
   8 => 'hola1',
   9 => 'hola2',
   10 => 'hola3'];
$lista['palavras'] =[
    1 =>'aqui',
    2 =>'sei',
    3 =>'talvez',
    4 =>'nada',
    5 =>'caipira',
    6 =>'...',
    7 =>'...',
    8 =>'...',
    9=>'...',
];

echo $lista['palavras'][1];



echo '<pre>';
    var_dump($lista);
echo '</pre>';

echo "<hr/>";
    
echo '<pre>';
    print_r($lista);
echo '</pre>';
?>
//pesquisa dentro de array


//in_array()  <-(coisa,Local de pesquisaa) true = 1 false= vazio
//array_search() 

/*$lista = Array(
    'cumprimentos',
    'palavras',
    'aaaa',
    '22sx22');

$existe = in_array('cumprimentos',$lista);
if ($existe) {
    echo "sim isso existe";
}else { echo 'isso não existe';
}
echo "<br/>";

$existe1 = array_search('palavras',$lista);
if ($existe1 != null) {
    echo 'isso existe';
    
}else {echo ' isso não existe';}
*/
<?php   
$array = [1111=>'OI', 18 =>'BAA',22=>'LOO',33 =>'III'];

echo '<pre>';
print_r($array);

echo "</pre>";

$chaves_array = array_keys($array);
echo '<pre>';
print_r($chaves_array);
echo "</pre>";

asort($array);
echo " <pre>";
print_r($array);
echo '</pre>';


$huhu = ['oi','tchau'];
$huhu2 = ['ihi','uhu'];
$novoarray = array_merge($huhu,$huhu2);
echo "<pre>";
print_r($novoarray);
echo "</pre>";
echo '<br/>';



$string = '26/02/2018';
$array_retorno = explode('/', $string);

echo "<pre>";
echo $string;
print_r($array_retorno);
echo $array_retorno[2].'-'.$array_retorno[1].'-'.$array_retorno[0];
echo "</pre>";


$helo = ['no','virus','pc','legal','muito','é','vc','oi',];
$helocontacatenado = implode('', $helo);

echo($helocontacatenado);




?>

 
</body>





</html>