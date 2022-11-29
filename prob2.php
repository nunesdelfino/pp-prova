<?php 

//Se a variavel ainda nao foi declarada e se encontra vazia
//Nome do cookie, valor que vai assumir do cookie e o tempo que vai valer isso 
//e podera nao funcionar mais
$name = ["nome","telefone","email"];
if (!isset($_GET['idade'])){
    setcookie($name[0], " " ,time() + (86400 * 30)); 
    setcookie($name[1], " " ,time() + (86400 * 30)); 
    setcookie($name[2], " " ,time() + (86400 * 30));
}

?>

<html>

<head>
    <title>Gerenciador de Contatos</title>   
</head>

<body>
    <h1>Gerenciador de Contatos</h1>

    <form>
    <form>

<fieldset>  <!-- field = campo set = conjunto -->
     <legend>Novo Contato</legend>
     <label>
         Nome:
         <input type="text" name="nome" />
     </label>
     <label>
         Telefone:
         <input type="text" name="telefone" />
     </label>
     <label>
         E-Mail:
         <input type="text" name="email" />
     </label>
     <input type="submit" value="Salvar" />
 </fieldset>
</form> conjunto -->
            <legend>Novo Contato</legend>
            <label>
                Nome:
                <input type="text" name="nome" />
            </label>
            <label>
                Telefone:
                <input type="text" name="telefone" />
            </label>
            <label>
                E-Mail:
                <input type="text" name="email" />
            </label>
            <input type="submit" value="Salvar" />
        </fieldset>
    </form>
    <?php

    if (isset($_GET['nome']) || isset($_GET['telefone']) || isset($_GET['email'])) {

        setcookie($name[0], $_GET['nome'] ,time() + (86400 * 30)); 
        setcookie($name[1], $_GET['telefone'] ,time() + (86400 * 30)); 
        setcookie($name[2], $_GET['email'] ,time() + (86400 * 30));

        $_COOKIE['contatos'][] = "Nome: ".$_GET['nome'];
        $_COOKIE['contatos'][] = "Telefone: ".$_GET['telefone'];
        $_COOKIE['contatos'][] = "E-Mail: ".$_GET['email'];
    }
    $contatos = array();
    if (isset($_COOKIE['contatos'])) {
        $contatos = $_COOKIE['contatos'];
    }
    ?>
    <table>
        <tr>
            <th>Contatos</th>
        </tr>
        <?php foreach ($contatos as $contato) : ?>
            <tr>
                <td><?php echo $contato; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>

</body>

</html>