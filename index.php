<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            text-align: center;
        }
        h2{
            height: 100px;
            font-size: 50pt;
        }

        form {
            margin-top: 20px;
            margin-left: 500px;
            border: black 2px solid;
            width: 300px;
            height: 500px;
            text-align: center;
        }

        p {
            padding-top: 160px;
        }
    </style>
    <title>Calcular caracteres</title>
</head>

<body>
    <form method="POST">
        <h1>
            Calcular caracteres
        </h1>
        <h2><?php

if (isset($_POST['C'])) {
    $palavra = $_POST['texto'];
    $t = strlen($palavra);
echo $t;
}
?></h2>
        <p>Digite o texo</p>
        <input type="text" name="texto">
        <input type="submit" name="C" value="Contar">
    </form>
</body>

</html>
