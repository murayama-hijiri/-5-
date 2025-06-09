<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>共通ヘッダー</title>
        <link rel="stylesheet" href="../css/style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&display=swap" rel="stylesheet">
    </head>
    <body>
        <header>
            <div class="header_content">
                <a href="index.php" class="scroll" id="top">
                    <img src="../img/logo.png" alt="ロゴ画像">
                </a>
                <ul>
                    <li>
                        <a href="index.php#schedule" class="scroll" id="schedule">スケジュール</a>
                    </li>
                    <li>
                        <a href="index.php#access" class="scroll" id="access">アクセス</a>
                    </li>
                    <li>
                        <a href="index.php#form" class="scroll" id="form">席予約</a>
                    </li>                             
                </ul>
                <button class="hamburger-menu" id="js-hamburger-menu">
                    <span class="hamburger-menu__bar"></span>
                    <span class="hamburger-menu__bar"></span>
                    <span class="hamburger-menu__bar"></span>
                </button>
            </div>
            <nav class="navigation">
                <ul class="navigation__list">
                    <li class="navigation__list-item">
                        <a href="index.php#schedule" class="navigation__link scroll" id="schedule" >スケジュール</a>
                    </li>
                    <li class="navigation__list-item">
                        <a href="index.php#access" class="navigation__link scroll" id="access">アクセス</a>
                    </li>
                    <li class="navigation__list-item">
                        <a href="index.php#form" class="navigation__link scroll" id="form">席予約</a>
                    </li>
                </ul>
            </nav>  
        </header>
    </body>
</html>