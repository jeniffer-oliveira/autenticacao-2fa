<?php

include_once('vendor/sonata-project/google-authenticator/src/FixedBitNotation.php');
include_once('vendor/sonata-project/google-authenticator/src/GoogleAuthenticatorInterface.php');
include_once('vendor/sonata-project/google-authenticator/src/GoogleAuthenticator.php');
include_once('vendor/sonata-project/google-authenticator/src/GoogleQrUrl.php');

$g = new \Google\Authenticator\GoogleAuthenticator();

$secret = "GKD5VS3VBD4CNF3B";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <link href="style.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Sua Conta </title>
   
</head>
<body>
    <h1>Cadastre-se para receber os próximos lançamentos literários</h1>

    <section class="container">
        <form id="form" method="post" action="duploFator.php">
            <div class="msg-error"></div>
            <div>"
                <label for="nome">Nome: </label>
                <input type="text" id="nome" name="name" size="30" placeholder="Digite seu primeiro nome">
            </div>

            <div>
                <label for="email">E-mail: </label>
                <input type="email" id="email" name="email" size="30" placeholder="Ex: exemplo@exemplo.com">
            </div>

            <div class="g-recaptcha" data-sitekey="6Lf5ANkfAAAAANIYChNgVuh2ev5jqXDvkNYpKlP8"></div><br>

            <input type="submit" class="btn" value="Confirmar cadastro" id="submit-button" onclick="return valida()">

        </form>
        </section>

        <script>
            /*function valida() {
                if (grecaptcha.getResponse() == "") {
                    alert("Você precisa marcar a caixa de validação");
                    return false;
                }
            }*/
        </script>

        <img src="<?php echo $g->getUrl("jenifferoliveira", "autenticacaodoisfatores.000webhostapp.com", $secret) ?>">

</body>
</html>
