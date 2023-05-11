
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/painel_style.css">
    <script src="scripts/news.js"></script>
    <script src="scripts/script.js"></script>
    <title>Painel News</title>
</head>
<body id="main" onload="news(0, 20)">
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
                    <button><span><a href="signup.php" target="_blank" rel="noopener noreferrer">Cadastrar</a></span></button>
                    <button><span><a href="signin.php" target="_blank" rel="noopener noreferrer">Login</a></span></button>
                </div>
            </div>        
    </nav>
    <main>
        <aside></aside>
        <div id="news" class="news news-black">
            <ol id="dynamicList">
            </ol>
        </div>
        <div class="buttons-choice">
                <button><span>&LeftArrow;</span></button>
                <button onclick="next()"><span>&RightArrow;</span></button>
        </div>
    </main>
</body>
</html>