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
        $money = 500;  
        $cartao = true;
        $valor_compra = 201;
        $valor_frete = 50;
        $desconto_frete = true;
        $valor_frete1 = 50;

        //$valor_frete = $cartao == true && $valor_compra >= 500 ? 0 :  $cartao == true && $valor_compra >= 300 ? 20 : $cartao == true && $valor_compra >= 150 ? 5 : $valor_frete 

        //$desconto_frete = $valor_frete1 != $valor_frete  ? true : false;
        if ($cartao == true && $valor_compra >= $money) {
            $valor_frete = 0;
            $desconto_frete = true;
        }else if ($cartao == true && $valor_compra > 200) {
            $valor_frete = 20;
            $desconto_frete = true; 

        }else if ($cartao == true && $valor_compra <= 200){
            $valor_frete = 40;
            $desconto_frete = true;

        }else { $desconto_frete = false;
                $valor_frete = 50;                }




     ?>
     <h1>Detalhes do pedido</h1>

     <p>Possui cartão da loja ?
    <?php 
    if ($cartao == true) {
        echo 'sim';
    }else { echo 'nao';
        }
        ?>  
      </p>
      <p>Possui cartão ? <?= $cartao ? 'SIM' : 'NÃO' ?> </p>
<p>Possui valor da compra ? <?= $valor_compra  ?> <br/>
<?php if ($valor_compra <= $money) {
    echo "tem grana";
} else {echo "não tem grana";} ?></p>
<p>Valor frete ? <?= $valor_frete ?>
 </p>

 <h1>Recebeu desconto frete ? </h1>
<?php  
    $teste = $desconto_frete ? 'SIM' : 'NÃO';
    echo $teste;
  ?>

 
</body>

</html>