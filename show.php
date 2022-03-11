<?php

$sex = $_POST['sex'];
$birth = $_POST['birth'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$city = $_POST['city'];
$email = $_POST['email'];
$age = $_POST['age'];
$github = $_POST['github'];
$grade = $_POST['grade'];

?>

<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Trabalho 1</title>
    <!-- Import BULMA framework -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
</head>

<!--- Header -->
<section class="hero has-background-primary is-small">
    <div class="hero-body">
        <div class="container has-text-centered">
            <p class="title">
                Informações Inseridas.
            </p>
            <p class="subtitle">
                Suas Respostas.
            </p>
        </div>
    </div>
</section>

<section class="section">
    <div class="columns is-centered">
        <div class="column is-three-quarters">
            <div class="box has-background-success">
                <div class="columns is-multiline is-centered is-mobile">
                    <div class="column is-half">
                        <br>

                        <!--- Title -->
                        <h1 class="title has-text-centered">
                            Infos
                        </h1>

                        <!--- Sex info -->
                        <div class="title">Sexo</div>
                        <p class="subtitle"><?= $sex ?></p>
                        <!--- Birth info -->
                        <div class="title">Data de Nascimento</div>
                        <p class="subtitle"><?= $birth ?></p>
                        <br><br>
                        <!--- End of info -->


                        <!-- Title -->
                        <h1 class="title has-text-centered">
                            Contato
                        </h1>
                        <!--- Email info -->
                        <div class="title">Email</div>
                        <p class="subtitle"><?= $email ?></p>

                        <!--- Phone info -->
                        <div class="title">Celular</div>
                        <p class="subtitle"><?= $phone ?></p>
                        <br><br>
                        <!--- End of info -->


                        <!-- Title -->
                        <h1 class="title has-text-centered">
                            Sobre
                        </h1>

                        <!--- City info -->
                        <div class="title">Cidade</div>
                        <p class="subtitle"><?= $city ?></p>


                        <!--- Age info -->
                        <div class="title">Idade</div>
                        <p class="subtitle"><?= $age ?></p>
                        <br><br>



                        <!-- Title -->
                        <h1 class="title has-text-centered">
                            Redes Sociais
                        </h1>

                        <!--- Github info -->
                        <div class="title">Github</div>
                        <p class="subtitle"><?= $github ?></p>


                        <!--- Grade info -->
                        <div class="title">Nota do site</div>
                        <p class="subtitle"><?= $grade ?></p>
                        <br>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>