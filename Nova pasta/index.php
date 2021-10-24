<?php
session_start()
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <P>Formulario de Inscrição</P>
    <form action="script.php" method="post">
        <?php
            $mensagemdeerro = isset($_SESSION['mensagem de erro']) ? $_SESSION['mensagem de erro'] : '';
            if(!empty($mensagemdeerro)){
                echo $mensagemdeerro;
            }
        ?>
        <P>Nome <input type="text" name="nome"></P>
        <P>Idade <input type="number" name="idade"></P>
        <input type="submit" value="Enviar">

    </form>
</body>
</html>
