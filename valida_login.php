<?php

    $user = array('email' => 'admin@adm.com', 'senha' => 'admin');

    if ($_REQUEST['email'] == $user['email'] && $_REQUEST['senha'] == $user['senha']) {
        header('Location: register.php?');
    }
    else{
        header('Location: index.php?login=erro');
    }
