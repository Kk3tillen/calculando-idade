<?php
    $nome = $_POST['Nome'];
    $anoNasc = $_POST['ano'];

    $idade = date('Y')-$anoNasc;
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Idade</title>
</head>
<body>
    <h1>Olá <span><?=$nome?></span></h1>
    <h1>Atualmente você está com <span><?=$idade?></span> anos!</h1>
</body>
</html>