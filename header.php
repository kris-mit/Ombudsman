<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/grid-system.css">
    <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans:100,100i,200,300,300i,400,500,600,700|IBM+Plex+Serif:100,100i,200,200i,300,300i,400,500,600,700&display=swap&subset=cyrillic,latin-ext" rel="stylesheet">
    <script src="https://kit.fontawesome.com/137ef1605d.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <title>Ombudsman grada Beograda</title>
</head>

<body class="<?php echo $page; ?>">

<header class="header">
    <div class="wrapper">
        <div class="header-content">
            <a href="index.php"><img src="images/logo-white.svg" /><img src="images/logo.svg" class="logo-dark" alt="Ombudsman" /></a>
            <nav id="nav">
                <ul> 
                    <a href="#" id="logo-hamburger"><img src="images/logo.svg" alt="Ombudsman" style="width: 100%"></a>
                    <li><a href="izvestaji.php">Извештаји</a></li>
                    <li><a href="aktivnosti.php">Активности</a></li>
                    <li><a href="o-ombudsmanu.php">О Омбудсману</a></li>
                    <li><a href="najcesca-pitanja.php">Најчешћа питања</a></li>
                    <li><a href="kontakt.php">Контакт</a></li>
                </ul>
            </nav>
            <a id="btnHamburger" href="#" class="header__menu hide-for-desktop">
                <span></span>
                <span></span>
                <span></span>
            </a> 
            <ul class="language">
                <li class="active"><a href="#">ЋИР.</a></li>
                <li><a href="#">LAT.</a></li>
            </ul>
        </div>
    </div>
</header>