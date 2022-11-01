<?php session_start(); ?>
<?php

$name = ["idade","termoUm","termoDois","resultado"];
if (!isset($_GET['idade'])){
    setcookie($name[0], "0");
    setcookie($name[1], "0" , time() + (86400 * 10));
    setcookie($name[2], "0" , time() + (86400 * 10));
    setcookie($name[3], "1" , time() + (86400 * 10));
}

?>

<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Desafio 02</title>

        <script src="https://kit.fontawesome.com/7f335cf7b9.js" crossorigin="anonymous"></script>

        <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
            integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
            crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>

        <!-- NAVBAR -->
        <?php include ('navegacao.php');?>

        <main>
            <div class="titulo">
                <h3 >
                    PROBLEMA (2) - CALCULADORA
                </h3>
            </div>

            <div class="container">

                <form>
                    <fieldset>
                        <div class="form-group">
                            <label>Idade</label>
                            <input
                                type="text"
                                class="form-control"
                                name="idade"
                                placeholder="Insira a idade do aluno">
                        </div>

                        <div class="form-group">
                            <label>VALOR 1</label>
                            <input
                                type="text"
                                class="form-control"
                                name="valor1"
                                placeholder="Digite o valor para operação">
                        </div>

                        <div class="form-group">
                            <label>VALOR 2</label>
                            <input
                                type="text"
                                class="form-control"
                                name="valor2"
                                placeholder="Digite o valor para operação">
                        </div>

                        <div class="form-check form-check-inline">
                            <input
                                class="form-check-input"
                                type="radio"
                                name="operacao"
                                value="soma"
                                checked="checked">
                            <label class="form-check-label">
                                SOMA
                            </label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="operacao" value="subtracao">
                            <label class="form-check-label">
                                SUBTRAÇÃO
                            </label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="operacao" value="multi">
                            <label class="form-check-label">
                                MULTIPLICAÇÃO
                            </label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="operacao">
                            <label class="form-check-label">
                                DIVISÃO
                            </label>
                            <br><br>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="operacao">
                            <label class="form-check-label">
                                ESPECIAL
                            </label>
                        </div>
                        <br>
                        <button type="submit" class="btn btn-primary">CALCULAR</button>
                    </fieldset>
</form>


                <?php
                    echo "Passei";
                    if ( isset($_GET['idade']) || isset($_GET['valor1']) || isset($_GET['valor2']) ) {
                        echo "entrei no if";
                        echo $_GET['idade'];
                        setcookie($name[0], $_GET['idade'], time() + (86400 * 10));
                        setcookie($name[1], $_GET['valor1'], time() + (86400 * 10));
                        setcookie($name[2], $_GET['valor2'], time() + (86400 * 10));
                    }
                ?>
            </div>
        </div>
    </main>

    <script
        src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script
        src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>

</body>
</html>