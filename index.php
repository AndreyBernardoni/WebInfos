<!DOCTYPE html>
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
                    Bem vindo!
                </p>
                <p class="subtitle">
                    Entre para continuar.
                </p>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="columns is-centered">
            <div class="column is-half">
                <div class="box has-background-success">
                    <div class="columns is-centered is-mobile">
                        <div class="column is-half">

                            <!--- Title -->
                            <h1 class="title has-text-centered">
                                Entrar
                            </h1>

                            <!--- Form -->
                            <form method="post" action="valida_login.php">

                                <!--- Email field -->
                                <div class="field">
                                    <label class="label">Email</label>
                                    <div class="control">
                                        <input class="input is-rounded is-black is-outlined" type="email"
                                            placeholder="Ex. andrey@gmail.com" name="email">
                                    </div>
                                </div>
                                
                                <!--- Senha field -->
                                <div class="field">
                                    <label class="label">Senha</label>
                                    <div class="control">
                                        <input class="input is-rounded is-black is-outlined" type="password"
                                            placeholder="Ex. 123456" name="senha">
                                    </div>
                                </div>

                                <!--- Error Text -->
                                <?php
                                    if (isset($_GET['login']) && $_GET['login'] == 'erro') {
                                        echo '<p class="has-text-centered has-text-danger">Usuário ou senha inválidos!</p>';
                                    }
                                ?>

                                <!--- Login button -->
                                <div class="column has-text-centered">
                                    <div class="field">
                                        <p class="control">
                                            <button
                                                class="button has-background-primary has-text-black is-rounded is-black is-outlined"
                                                type="submit">
                                                Entrar
                                            </button>
                                        </p>
                                    </div>
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