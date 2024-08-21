<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores Aritméticos</title>
</head>
<body>
    <?php 
    $idade = 20;
    $idade_daqui_cinco = $idade + 5; //25
    $ano_nascimento = 2020 - $idade; //2000
    $total_de_pedacos_de_bolo = $idade * 8;  //160
    $decadas = $idade / 10;  //2
    $anos_desde_multiplo_de_9 = $idade % 9; //2
    ?>
     <p>Idade daqui a cinco anos: <?php echo $idade_daqui_cinco; ?></p> 
    <p>Ano de nascimento: <?php echo $ano_nascimento; ?></p>
    <p>Total de pedaços de bolo: <?php echo $total_de_pedacos_de_bolo; ?></p>
    <p>Décadas de vida: <?php echo $decadas; ?></p>
    <p>Anos desde o último múltiplo de 9: <?php echo $anos_desde_multiplo_de_9; ?></p>
</body>
</html>