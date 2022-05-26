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

<a href="index.php">Voltar</a>