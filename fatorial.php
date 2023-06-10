<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fatorial</title>
    <link rel='stylesheet' type='text/css' media='screen' href='style.css'>
</head>
<body>
    <h1>Calculadora Fatorial</h1>
    <form method="POST" action="">
        <label for="casasTabuleiro">Número de casas do tabuleiro:</label>
        <input type="number" name="casasTabuleiro" id="casasTabuleiro" required>
        <input type="submit" name="calcular" value="Calcular">
</form>
        <?php
    function fatorial($n)
    {
        if ($n < 0 || $n > 64){
            return "O número deve estar entre 0 e 64.";

        }

        $resultado = 1;
        for ($i = 1; $i <= $n; $i++){
            $resultado *= $i;
        }
        return $resultado;
    }
        if (isset($_POST['calcular'])){
            $casasTabuleiro = $_POST['casasTabuleiro'];
            $fatorial = calcularFatorial($casasTabuleiro);
        }
?>
<?php if(isset($fatorial)) : ?>
    <p> 0 fatorial de <?php echo $casasTabuleiro; ?> é: <?php echo $fatorial; ?></p>
    <?php endif; ?>
</body>
</html>