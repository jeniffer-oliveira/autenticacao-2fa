<?php
require_once( 'vendor/autoload.php' );
require_once( 'vendor/sonata-project/google-authenticator/src/GoogleAuthenticator.php' );

$autenticador = new \Google\Authenticator\GoogleAuthenticator();

$secret = $_POST["codigosecreto"];

$codigo_verificador = $_POST["codigo"];

var_dump($secret, $codigo_verificador);
$resultado = $autenticador->checkCode($secret, $codigo_verificador);



if ( $resultado ){
    echo "<h1>Código valido</h1>";
}
else{
    echo "<h1>Código invalido</h1>";
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Verificador </title>
    <link href="style.css" rel="stylesheet">
    <link rel="stylesheet" href="css/2fa.css">
    <body>
        <a href="index.php">Voltar</a>
    </body>
</head>
</html>
