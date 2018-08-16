<!DOCTYPE html>
<html lang="pt-br">

<body>

<h1>Aula 11 - PHP Condicional</h1>
<h2>Exercício 1</h2>


    <p>O primeiro número a ser comparado é o <?php   $n1 = 16; echo $n1; ?> </p>
    
    <p>O segundo número a ser comparado é o <?php $n2 = 13; echo $n2; ?></p>

    <?php
        if ($n1 > $n2){
    ?>
            <p><?php echo $n1; ?> é maior do que <?php echo $n2; ?></p>
        <?php } else {
            ?> <p><?php echo $n2; ?> é maior do que <?php echo $n1; ?> </p>
    <?php } ?> 

<h2>Exercício 2</h2>

<?php
    $x = rand(1,5);
    if ($x == 3 || $x == 5){
?>
    <p><?php echo $x; ?> é o seu número da sorte</p>

    <?php } else { ?>

        <p><?php echo $x; ?> não é o seu número da sorte </p>

    <?php } ?>



<h2>Exercício 3</h2>
<?php
    if ($x != 3) {?>
    <p>O número não é 3 e sim <?php echo $x; ?></p>
    <?php } else { ?>
    <p>O número é <?php echo $x; ?></p>
<?php
    }
?>

<h2>Exercício 4</h2>
   <p>O número gerado foi <?php $y = rand(0,100); echo $y; ?></p>
   <?php 
        if($y  > 50) {
    ?>
        <p>O número é maior que 50</p>
        <?php } else {
        ?>
        <p>O número é menor que 50</p>
        <?php } ?>

<h2> Exercício 5</h2>
<?php 
    if ($y % 2 == 0){
        echo "<p>$y é par</p>";
    } else {
        echo "<p>O número $y é ímpar</p>";
    }
?>

<h2>Exercício 6</h2>
<?php
    $idade = rand(1,99);
    $casado = true;
    $sexo = "Outro";
    if ($idade > 18 && $casado == true && $sexo == "Masculino"){
        echo "<p>Boas-vindas $idade </p>";
    } else {
        echo "<p>Você não é bem vindo aqui!</p>";
    }
?>

<h2> Exercício 6A</h2>
<?php
    if ($sexo == "Outro"){
        echo "<p>Seja muito bem vindo!</p>";
    } else {
        echo "<p>Você não deveria estar vendo essa mensagem</p>";
    }

    ?>

<h2>Exercício 7</h2>
<?php
    $quantidadeDeAlunos = 0;

    if ($quantidadeDeAlunos) {
        echo "true";
    } else {
        echo "false";
    }
?>
</body>
</html>