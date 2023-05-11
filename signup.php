<?php
include('conexao.php');

if(isset($_POST['email']) || isset($_POST['pass']) || isset($_POST['name']) || isset($_POST['surname']) || isset($_POST['number'])) {

    if(strlen($_POST['email']) == 0){
        echo "<script>alert(\"Preencha seu email\")</script>";
    }
    else if(strlen($_POST['pass']) == 0){
        echo "<script>alert(\"Preencha sua senha\")</script>";
    } 
    else if(strlen($_POST['name']) == 0){
        echo "<script>alert(\"Preencha seu nome\")</script>";
    }
    else if(strlen($_POST['surname']) == 0){
        echo "<script>alert(\"Preencha seu sobrenome\")</script>";
    }
    else if(strlen($_POST['number']) == 0){
        echo "<script>alert(\"Preencha seu número\")</script>";
    } 
    else {
        $email = md5($mysqli->real_escape_string($_POST['email']));

        $select_code = "SELECT * FROM user WHERE email = '$email'";
        $select_query = $mysqli->query($select_code) or die("Falha na execução do código SQL: " . $mysqli->error);
        $qtd_rows =  $select_query->num_rows;

        if ($qtd_rows > 0){
            $em = $mysqli->real_escape_string($_POST['email']);
            echo "<script>alert(\"Esse email: $em já existe, cadastre outro!\")</script>";
        }
        else {
            $pass = md5($mysqli->real_escape_string($_POST['pass']));
            $name = $mysqli->real_escape_string($_POST['name']);
            $surname = $mysqli->real_escape_string($_POST['surname']);
            $number = $mysqli->real_escape_string($_POST['number']);

            $sql_code = "INSERT INTO `user` (`id`, `email`, `name`, `surname`, `phone`, `password`) VALUES (NULL, '$email', '$name', '$surname', '$number', '$pass') ";
            $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);
            header("Location: signin.php");
        }        
    }
};
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style.css">
    <title>Login page</title>
</head>
<body>
    <main>
        <div class="fundo"></div>
        <div class="form">
            <form action="" method="POST">
                <fieldset>
                    <div class="content">
                        <div class="title">
                            <h1>Cadastre sua Conta</h1>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae quos quisquam blanditiis quibusdam 
                            </p>
                        </div>
                        <div class="components">
                            <input type="text" name="name" id="" placeholder="Nome">
                            <br>
                            <input type="text" name="surname" id="" placeholder="Sobrenome">
                            <br>
                            <input type="text" name="number" id="" placeholder="Número de telefone">
                            <br>
                            <input type="text" name="email" id="" placeholder="Email">
                            <br>
                            <input type="password" name="pass" id="" placeholder="Senha">
                            <br>
                            <div class="btn-continue">
                                <button>Continue</button>
                                <div class="line"></div>
                            </div>
                            <br>
                            <p>Já possui conta ? <a href="signin.php">Login &RightArrow;</a></p>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
    </main>
</body>
</html>