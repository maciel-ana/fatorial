<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fatorial</title>
</head>
<body>
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
</body>
</html>