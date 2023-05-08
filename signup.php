<?php
include('conexao.php');

if(isset($_POST['email']) || isset($_POST['Password']) || isset($_POST['Name']) || isset($_POST['Surname']) || isset($_POST['Number'])
|| isset($_POST['Confirm_Password'])) {

    if(strlen($_POST['email']) == 0){
        echo "<script>alert(\"Preencha seu email\")</script>";
    }
    else if(strlen($_POST['Password']) == 0){
        echo "<script>alert(\"Preencha sua senha\")</script>";
    } 
    else if(strlen($_POST['Name']) == 0){
        echo "<script>alert(\"Preencha seu nome\")</script>";
    }
    else if(strlen($_POST['Surname']) == 0){
        echo "<script>alert(\"Preencha seu sobrenome\")</script>";
    }
    else if(strlen($_POST['Number']) == 0){
        echo "<script>alert(\"Preencha seu Number\")</script>";
    }
    else if(strlen($_POST['Confirm_Password']) == 0){
        echo "<script>alert(\"Preencha seu Confirm_Password\")</script>";
    }
    else {
        echo "<script>alert(\"Boa cria\")</script>";
        $email = $mysqli->real_escape_string($_POST['email']);
        $pass = $mysqli->real_escape_string($_POST['Password']);
        $name = $mysqli->real_escape_string($_POST['Name']);
        $surname = $mysqli->real_escape_string($_POST['Surname']);
        $number = $mysqli->real_escape_string($_POST['Number']);
        $confirm_password = $mysqli->real_escape_string($_POST['Confirm_Password']);

        $sql_code = "INSERT INTO `user` (`Name`, `Surname`, `Mobile Number`, `Password`, `Confirm Password`, `id`, `email`) VALUES ('$name', '$surname', '$number', '$pass', '$confirm_password', NULL, '$email'); ";

        $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);

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
                            <h1>Set up your account</h1>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae quos quisquam blanditiis quibusdam 
                            </p>
                        </div>
                        <div class="components">
                            <input type="text" name="Name" id="" placeholder="Name">
                            <br>
                            <input type="text" name="Surname" id="" placeholder="Surname">
                            <br>
                            <input type="text" name="Number" id="" placeholder="Mobile Number">
                            <br>
                            <input type="text" name="email" id="" placeholder="Email Address">
                            <br>
                            <input type="text" name="Password" id="" placeholder="Password">
                            <br>
                            <input type="text" name="Confirm_Password" id="" placeholder="Confirm Password">
                            <br>
                            <div class="link">
                                <input type="checkbox" name="" id=""> <label> Confirm Password</label>
                            </div>
                            <br>
                            <div class="btn-continue">
                                <button>Continue</button>
                                <div class="line"></div>
                            </div>
                            <br>
                            <p>Already have an account ? <a href="signin.php">Sign in &RightArrow;</a></p>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
    </main>
</body>
</html>