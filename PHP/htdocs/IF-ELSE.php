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
        $valor_compra = 225;
        $valor_frete = 50;
        $desconto_frete = false;
        if ($cartao == true && $valor_compra >=100) {
            $valor_frete = 0;
            $desconto_frete = true;

        }

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
<p>Possui valor da compra ? <?= $valor_compra  ?> <br/>
<?php if ($valor_compra <= $money) {
    echo "tem grana";
} else {echo "não tem grana";} ?></p>
<p>Valor frete ? <?= $valor_frete ?>
    
 </p>
</body>

</html>