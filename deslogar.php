<?php
    $cookieName = "usuario";
    $expiration = time() + (1);
    setcookie($cookieName, '', $expiration);//deleto o cookie
    header('Location: index.php');//trago o usuário devolta para o index
?>