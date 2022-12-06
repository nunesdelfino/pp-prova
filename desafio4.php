<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PROBLEMA 04</title>

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
                    PROBLEMA (4) - Parte 1
                </h3>
            </div>
            <div class="container">
                <form action="ativ_formulario2.php" method="get">
                    <div class="form-group">
                        <label>Nome</label>
                        <input
                            type="text"
                            class="form-control"
                            name="nome"
                            placeholder="Insira o nome"
                            required="required">
                    </div>
                    <div class="form-group">
                        <label>Idade</label>
                        <input
                            type="number"
                            class="form-control"
                            name="idade"
                            placeholder="Insira a idade"
                            required="required">
                    </div>

                    <div>
                        <label>SEXO</label><br>
                        <div class="form-check form-check-inline">

                            <input
                                class="form-check-input"
                                type="radio"
                                name="sexo"
                                value="Masculino"
                                checked="checked">
                            <label class="form-check-label">
                                MASCULINO
                            </label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="sexo" value="Feminino">
                            <label class="form-check-label">
                                FEMININO
                            </label>
                        </div>
                    </div>

                    <div>
                        <br>
                        <label>Selecione os dispositivo que você possui</label><br>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="pc" value="pc" id="defaultCheck1">
                            <label class="form-check-label">
                                Computador
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="note" value="note" id="defaultCheck1">
                            <label class="form-check-label">
                                Notebook
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="cel" value="cel" id="defaultCheck1">
                            <label class="form-check-label">
                                Smartphone
                            </label>
                        </div>
                    </div>
                    <div>

                        <br>
                        <label for="experiencia">Experiencia com programação:</label>

                        <select name="experiencia" id="experiencia">
                            <option value="nao-tem">Não Possui</option>
                            <option value="Iniciante">Iniciante</option>
                            <option value="Interm">Intermediário</option>
                            <option value="avanc">Avançado</option>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary">Enviar</button>

                </form>
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