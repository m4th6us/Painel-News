<?php
include('conexao.php');

if(isset($_POST['email']) || isset($_POST['Password']) || isset($_POST['Confirm_Password'])) {

    if(strlen($_POST['email']) == 0){
        echo "<script>alert(\"Preencha seu email\")</script>";
    } 
    else if(strlen($_POST['Password']) == 0){
        echo "<script>alert(\"Preencha sua senha\")</script>";
    } 
    else if(strlen($_POST['Confirm_Password']) == 0){
        echo "<script>alert(\"Confime sua senha\")</script>";
    } 
    else {
        $email = $mysqli->real_escape_string($_POST['email']);
        $pass = $mysqli->real_escape_string($_POST['Password']);

        $sql_code = "SELECT * FROM user WHERE email = '$email'";

        $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);

        $quantidade = $sql_query->num_rows;

        if ($quantidade == 1){
            $usuario = $sql_query->fetch_assoc();

            session_start();

            $_SESSION['id'] = $usuario['id'];
            $_SESSION['Name'] = $usuario['Name'];

            header("Location: painel.php");

        } else{
            echo "Falha a logar";
        }
    }
};
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style.css">
    <title>SignIn page</title>
</head>
<body>
    <main>
            <form action="" method="POST">
                <fieldset>
                    <div class="content">
                        <div class="title">
                            <h1>Enter in your account</h1>
                            <p>Hello everything is fine? <br> How much time! Nice to see you, how long have you been gone, again log into your account
                            </p>
                        </div>
                        <div class="components">
                            <input type="text" name="email" id="" placeholder="Email Address">
                            <br>
                            <input type="text" name="Password" id="" placeholder="Password">
                            <br>
                            <input type="text" name="Confirm_Password" id="" placeholder="Confirm Password">
                            <br>
                            <br>
                            <div class="btn-continue">
                                <button>Continue</button>
                            </div>
                        </div>
                    </div>
                </fieldset>
            </form>
    </main>
</body>
</html>