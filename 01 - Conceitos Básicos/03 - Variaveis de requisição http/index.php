<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Pequeno teste com login</h1>
    <h2><a href="protegida.php">protegida</a></h2>
    <?php session_start();
    if(isset($_SESSION['usuario'])){
        ?>
        <a href="logout.php">Logout</a>
        <?php
    } ?>
</body>
</html>