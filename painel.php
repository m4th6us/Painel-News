<?php

// include('protect.php');
// session_start(); echo $_SESSION['Name']; 

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/painel_style.css">
    <script src="scripts/script.js"></script>
    <title>Painel News</title>
</head>
<body>
    <nav>
            <span>Painel News</span>
            <div class="sign-buttons">
                <button>
                    <span>
                        <img id="image-button" class="sun-button" onclick="color()"/>
                    </span>
                </button>
                <button><span><a href="signup.php" target="_blank" rel="noopener noreferrer">CADASTRAR</a></span></button>
                <button><span><a href="signin.php" target="_blank" rel="noopener noreferrer">LOGIN</a></span></button>
            </div>        
    </nav>
    <main id="main">
        <aside></aside>
        <div id="news" class="news news-black">
            <ol>
                <li><a href="#" target="_blank" rel="noopener noreferrer">O desafio de manter contato com a equipe e se sentir parte da empresa trabalhando em casa!</a></li>
                <li><a href="#" target="_blank" rel="noopener noreferrer">O desafio de manter contato com a equipe e se sentir parte da empresa trabalhando em casa!</a></li>
                <li><a href="#" target="_blank" rel="noopener noreferrer">O desafio de manter contato com a equipe e se sentir parte da empresa trabalhando em casa!</a></li>
                <li><a href="#" target="_blank" rel="noopener noreferrer">O desafio de manter contato com a equipe e se sentir parte da empresa trabalhando em casa!</a></li>
                <li><a href="#" target="_blank" rel="noopener noreferrer">O desafio de manter contato com a equipe e se sentir parte da empresa trabalhando em casa!</a></li>
                <li><a href="#" target="_blank" rel="noopener noreferrer">O desafio de manter contato com a equipe e se sentir parte da empresa trabalhando em casa!</a></li>
                <li><a href="#" target="_blank" rel="noopener noreferrer">O desafio de manter contato com a equipe e se sentir parte da empresa trabalhando em casa!</a></li>
                <li><a href="#" target="_blank" rel="noopener noreferrer">O desafio de manter contato com a equipe e se sentir parte da empresa trabalhando em casa!</a></li>
                <li><a href="#" target="_blank" rel="noopener noreferrer">O desafio de manter contato com a equipe e se sentir parte da empresa trabalhando em casa!</a></li>
                <li><a href="#" target="_blank" rel="noopener noreferrer">O desafio de manter contato com a equipe e se sentir parte da empresa trabalhando em casa!</a></li>
            </ol>
        </div>
    </main>
    <p>
        <a href="logout.php">Sair</a>
    </p>
</body>
</html>