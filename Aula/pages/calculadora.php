<?php

$resultado = 0;
$calcular = 'somar';


    if(isset($_GET['n1'], $_GET['n2'], $_GET['calcular'])){
        $n1 = $_GET['n1'];
        $n2 = $_GET['n2'];
        $calcular = $_GET['calcular'];

        switch($calcular){
            case 'somar':
                $resultado = $n1 + $n2;
                break;
            case 'dividir':
                $resultado = $n1 / $n2;
                break;
            case 'subtrair':
                $resultado = $n1 - $n2;
                break;
            case 'multiplicar':
                $resultado = $n1 * $n2;
                break;
    }
 }
?>



<h4>Calculadora</h4>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;  
        }   

        
    </style>
    <title>Minha calculadora</title>
</head>
<body>
<form>
    <input type="number" name="n1" placeholder="Primeiro Numero" required/ value="<?= $n1 ?>"><br /><br />
    <input type="number" name="n2" placeholder="Segundo Numero" required/ value="<?= $n2 ?>"><br /><br />
    <select name="calcular">
        <option value="somar"<?= ($calcular=='somar')?'Selected':''; ?>>Somar</option>
        <option value="subtrair"<?= ($calcular=='subtrair')?'Selected':''; ?>>Subtrair</option>
        <option value="dividir"<?= ($calcular=='dividir')?'Selected':''; ?>>Dividir</option>
        <option value="multiplicar"<?= ($calcular=='multiplicar')?'Selected':''; ?>>Multiplicar</option>
    </select>
    <br /><br />
    <input type="submit" value="Calcular"/>
    <br /><br />
    <p>O resultado é <?= $resultado ?></p>
</form>

</body>
</html>