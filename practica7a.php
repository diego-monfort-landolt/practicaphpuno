<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica 7</title>
</head>
<body>
    <?php
    include_once("ccorriente.inc.php");
    $c = new Ccorriente("0000-0000-00-0000000002", "11111111232-D", "12/05/2002", 0.0235);
    $c->abonar(785.85, "01/01/2003", "Abono en Banco");
    $c->cargar(59.95, "15/02/2003", "Netflix");
    echo "el saldo es " . $c->getSaldo();

    
    ?>
    
</body>
</html>