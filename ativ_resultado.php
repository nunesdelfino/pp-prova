<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PROBLEMA 4</title>

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
                    PROBLEMA (4) - Parte 2
                </h3>
            </div>
            <div class="container">
                <form action="ativ_resultado.php" method="get">
                    <div class="form-group">
                        <label>Nome do Aluno</label>
                        <input
                            type="text"
                            class="form-control"
                            name="nome"
                            value="<?php echo $_GET['nome'];?>"
                            disabled>
                    </div>
                    <div class="form-group">
                        <label>Idade</label>
                        <input
                            type="text"
                            class="form-control"
                            name="idade"
                            value="<?php echo $_GET['idade'];?>"
                            disabled>
                    </div>
                    <div class="form-group">
                        <label>Sexo</label>
                        <input
                            type="text"
                            class="form-control"
                            name="sexo"
                            value="<?php echo $_GET['sexo'];?>"
                            disabled>
                    </div>

                    <div class="form-group" <?php if(!isset($_GET['configpc']) || $_GET['configpc']=="" ) echo 'style="display:none;"' ?>>
                        <label>Configurações do PC que possui</label>
                        <br>
                        <textarea name="configpc" rows='5' cols='60' 
                            readonly><?php echo $_GET['configpc'];?></textarea>
                        
                    </div>

                    <div class="form-group" <?php if(!isset($_GET['confignote']) || $_GET['confignote']=="" ) echo 'style="display:none;"' ?>>
                        <label>Configurações do Notebook que possui</label>
                        <br>
                        <textarea name="confignote" rows='5' cols='60' 
                            readonly><?php echo $_GET['confignote'];?></textarea>
                        
                    </div>

                    <div class="form-group" <?php if(!isset($_GET['configcel']) || $_GET['configcel']=="" ) echo 'style="display:none;"' ?>>
                        <label>Configurações do PC que possui</label>
                        <br>
                        <textarea name="configcel" rows='5' cols='60' 
                            readonly><?php echo $_GET['configcel'];?></textarea>
                        
                    </div>

                    <div class="form-group" 
                        <?php if(!isset($_GET['C']) && !isset($_GET['C++']) && !isset($_GET['Java'])  && !isset($_GET['PHP']) && !isset($_GET['Python'])
                         && !isset($_GET['Perl']) && !isset($_GET['Ruby']) && !isset($_GET['Outra']) && $_GET['C']=="" && $_GET['C++']==""
                         && $_GET['Java']=="" && $_GET['Python']=="" && $_GET['Perl']=="" && $_GET['Ruby']=="" && $_GET['Outra']==""
                         && $_GET['PHP']=="") 
                        echo 'style="display:none;"'?>
                        >
                        <label>Conhece as seguintes linguagens</label>
                        <br>
                        <textarea name="configcel" rows='5' cols='60' 
                            readonly>
                            <?php echo $_GET['C'].', '.$_GET['C++'].', '.$_GET['Java'].', '.$_GET['Python'].', '.$_GET['Perl'].', '.$_GET['Ruby'].', '.$_GET['Outra'].', '.$_GET['PHP'];?>
                        </textarea>
                        
                    </div>

                    </div>

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