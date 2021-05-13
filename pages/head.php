<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="../css/style.css" media="all">
        <script src="https://kit.fontawesome.com/6ea7f29f3f.js" crossorigin="anonymous"></script>
        <title>Portfolio-Page</title>
    </head>
    <body>
        <header>
        <?php 
        $nickName = "ATTILIUS";
        echo '<div class="icon""><p id="nick-name">'.$nickName.'</p></div>';
        ?>
            <ul id="menu" class="menu mobile-menu">
                <li class="menu-item"><a class="menu-link" href="./about.php">About</a></li>
                <li class="menu-item"><a class="menu-link" href="./portfolio.php">Portfolio</a></li>
               <!-- <li class="menu-item"><a class="menu-link" href="/blog.php">Blog</a></li> -->
                <li class="menu-item"><a class="menu-link" href="./contact.php">Contact</a></li>
            </ul>
            <div class="mobile-icon">
            <i id="menu-icon-closed" class="fas fa-align-justify"></i>
            <i id="menu-icon-open" class="fas fa-align-right"></i>
            </div>
        </header>
