<input type="button" value="Voltar" onClick="history.go(-1)">

<?php
    if (  !isset($_GET['var_qtd']) ) { ?>
         <h1><?php echo "resposta.php foi acessada diretamente."?></h1>
    <?php } else { 
                if( $_GET['var_qtd']<"1" ) { ?>
                    <h1><?php echo "O valor deve ser maior ou igual 1."?></h1>
                <?php } 
                
                else { 
                    for($i=0;$i<$_GET['var_qtd'];$i++){
                ?>
                    <p>
                <?php 
                    echo "Bem-Vindo";
                ?>
                </p>
                    <?php 
                        }   }    } 
?>

