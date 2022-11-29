<?php
    session_start();
    
    if(isset($_GET['nome'])){
        $nome = $_GET['nome'];
    } else {
        $nome = "";
    }
    
?>


<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PROBLEMA 03</title>

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
<!--Formulario e variaveis-->
        <main>
            <div class="titulo">
                <h3 >
                    PROBLEMA (3) - INFORMAÇÕES ACADÊMICAS
                </h3>
            </div>

            <div class="container">

                <form>
                    <fieldset>
                        <div class="form-group">
                            <label>Nome do Aluno</label>
                            <input
                                type="text"
                                class="form-control"
                                name="nome"
                                value = "<?php echo $nome;?>"
                                placeholder="Insira o nome do aluno" required>
                        </div>

                        <div class="form-group">
                            <label>Nome da Disciplina</label>
                            <input
                                type="text"
                                class="form-control"
                                name="disciplina"
                                placeholder="Insira o nome da disciplina" required>
                        </div>

                        <div class="form-group">
                            <label>Nota</label>
                            <input
                                type="text"
                                class="form-control"
                                name="nota"
                                placeholder="Digite a nota para a disciplina" required>
                        </div>

                        <br>
                        <button type="submit" class="btn btn-primary">ENVIAR</button>
                    </fieldset>
                </form>

                <?php
                    
                    $count = -1;
                    $pos = 0;
                    do {
                        $varFim = $_SESSION[$nome][$pos];
                        $pos++;
                        $count++;
                    } while ($varFim != NULL);

                    if (isset($_GET['nome']) || isset($_GET['disciplina']) || isset($_GET['nota'])) {

                        if(isset($_SESSION[$nome])){
                            for ($i = 0; $i < $count; $i++) {
                                $dados = explode("#:#",$_SESSION[$nome][$i]);
                                
                                if($_GET['disciplina'] == $dados[0]){
                                    $dados[1] = (($_GET['nota'] + $dados[1])/2);
                                    $_SESSION[$nome][$i] = $dados[0]."#:#".$dados[1];
                                    break;
                                } 
                            }
                            if($i == $count){
                                $_SESSION[$nome][] = $_GET['disciplina']."#:#".$_GET['nota'];
                            }
                        } else {
                            $_SESSION[$nome][] = $_GET['disciplina']."#:#".$_GET['nota'];
                        }

                    }
                    $disciplinas = array();
                    if (isset($_SESSION[$nome])) {
                        $disciplinas = $_SESSION[$nome];
                    }
                    
                ?>
                
                <br>
                <br>
                
                
                <h5><b>Disciplinas</b></h5>
                <textarea id='area' name='area' rows='10' cols='60'>
                    
                        <?php foreach ($disciplinas as $disciplina) : 
                            $dados = explode("#:#",$disciplina);    
                            $msg = "Disciplina: ".$dados[0]." - Média: ".$dados[1];
                        ?>
                            <?php echo "$msg"; ?>&#13;&#10;
                        <?php endforeach; ?>
                    
                    
                </textarea>
                    
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