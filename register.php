<?php
$name = $_GET['name'];
?>

<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Trabalho 1</title>
    <!-- Import BULMA framework -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
</head>

<body>

    <!--- Header -->
    <section class="hero has-background-primary is-small">
        <div class="hero-body">
            <div class="container has-text-centered">
                <p class="title">
                    Bem vindo <?= $name ?>!
                </p>
                <p class="subtitle">
                    Registre-se!
                </p>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="columns is-centered">
            <div class="column is-half">
                <div class="box has-background-success">
                    <div class="columns is-multiline is-centered is-mobile">
                        <div class="column is-half">

                            <!--- First form -->
                            <div id="first-section">

                                <!--- Title -->
                                <h1 class="title has-text-centered">
                                    Registre-se
                                </h1>

                                <!--- Form -->
                                <form method="post" action="show.php">

                                    <!--- Sex field -->
                                    <label class="label">Sexo</label>
                                    <div class="field">
                                        <div class="control">
                                            <label class="radio">
                                                <input type="radio" name="sex" value="Masculino">
                                                Masculino
                                            </label>
                                            <br>
                                            <label class="radio">
                                                <input type="radio" name="sex" value="Feminino" checked>
                                                Feminino
                                            </label>
                                        </div>
                                    </div>

                                    <!--- Birth field -->
                                    <div class="field">
                                        <label class="label">Data de Nascimento</label>
                                        <div class="control ">
                                            <input type="date" class="input is-rounded is-black is-outlined" placeholder="Ex. dd/mm/yyyy" name="birth">
                                        </div>
                                    </div>
                                    <section class="section is-small"></section>
                                    <!--- End of form -->
                            </div>

                            <!--- Second form -->
                            <div id="second-section">

                                <!-- Title -->
                                <h1 class="title has-text-centered">
                                    Contato
                                </h1>
                                <!--- Email field -->
                                <div class="field">
                                    <label class="label">Email</label>
                                    <div class="control ">
                                        <input type="email" value="" class="input is-rounded is-black is-outlined" placeholder="Ex. andrey@gmail.com" name="email">
                                    </div>
                                </div>

                                <!--- Phone field -->
                                <div class="field">
                                    <label class="label">Telefone</label>
                                    <div class="control">
                                        <input type="tel" class="input is-rounded is-black is-outlined" placeholder="Ex. 00000000000" name="phone" pattern="[0-9]{11}">
                                    </div>
                                </div>
                                <section class="section is-small"></section>
                                <!--- End of form -->
                            </div>

                            <!--- Third form -->
                            <div id="third-section">

                                <!-- Title -->
                                <h1 class="title has-text-centered">
                                    Sobre
                                </h1>

                                <!--- City field -->
                                <div class="field">
                                    <label class="label">Qual sua cidade?</label>
                                    <div class="control">
                                        <select name="city">
                                            <option value="Gravataí">Gravataí</option>
                                            <option value="Cachoeirinha">Cachoeirinha</option>
                                            <option value="Porto Alegre">Porto Alegre</option>
                                            <option value="Morungava">Morungava</option>
                                        </select>
                                    </div>
                                </div>


                                <!--- Age field -->
                                <div class="field">
                                    <label class="label">Idade</label>
                                    <div class="control">
                                        <input type="number" name="age" min="12">
                                    </div>
                                </div>

                            </div>
                            <section class="section is-small"></section>
                            <!--- fourth form -->
                            <div id="fourth-section">

                                <!-- Title -->
                                <h1 class="title has-text-centered">
                                    Redes Sociais
                                </h1>

                                <!--- Github field -->
                                <div class="field">
                                    <label class="label">Github</label>
                                    <div class="control">
                                        <input type="url" name="github">
                                    </div>
                                </div>


                                <!--- Grade field -->
                                <div class="field">
                                    <label class="label">Gostou do site?</label>
                                    <div class="control">
                                        Péssimo
                                        <input type="range" name="grade" min="0" max="10">
                                        Ótimo
                                    </div>
                                </div>

                                <!--- Submit button -->
                                <div class=" column has-text-centered">
                                    <div class="field">
                                        <p class="control">
                                            <button class="button has-background-primary has-text-black is-rounded is-black is-outlined" id="fourth-submit" type="submit">
                                                Enviar
                                            </button>
                                        </p>
                                    </div>
                                </div>
                                <!--- End of form -->
                            </div>


                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>