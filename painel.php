<?php

include('protect.php');
session_start(); 
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/painel_style.css">
    <script src="scripts/script.js"></script>
    <script src="scripts/news.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>Painel News</title>
</head>
<body id="main" onload="news()">
    <nav>
            <span>Painel News</span>
            <div class="nav-buttons">
                <div class="color">
                    <button>
                        <span>
                            <img id="image-button" class="sun-button" onclick="color()"/>
                        </span>
                    </button>
                </div>
                <div class="sign-buttons">
                    <button onclick="escape()">
                        <span onclick="escape()">
                            <a onclick="escape()" href="logout.php"><?php echo strtoupper($_SESSION['name']) ?></a>
                        </span>
                    </button>
                </div>
            </div>      
    </nav>
    <main>
        <aside></aside>
        <div id="news" class="news news-black">
            <ol id="dynamicList">
            </ol>
        </div>
    </main>
</body>
</html>