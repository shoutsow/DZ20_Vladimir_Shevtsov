<?php

if ($_GET['pid'] == 'thanks') {
    header('Refresh: 10; url=./header.php?pid=contact');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Treehouse</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Arvo&family=Montserrat:wght@400;700;800&
    family=Open+Sans&family=Roboto+Slab:wght@100;300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="site">
        <header>
            <div class="container">

                <div class="header_wrapper">
                    <div class="main_logo">
                        <a href="#"><img class="leaf" src="res/log1.png" alt="#">Treehouse</a>
                    </div>

                    <div class="nav_menu">
                        <ul class="menu">
                            <li><a href="/">home</a></li>
                            <li><a href="./header.php?pid=<?php echo $id = 'about' ?>">about</a></li>
                            <li><a href="./header.php?pid=<?php echo $id = 'blog' ?>">blog</a></li>
                            <li><a href="./header.php?pid=<?php echo $id = 'portfolio' ?>">portfolio</a></li>
                            <li><a href="./header.php?pid=<?php echo $id = 'contact' ?>">contact</a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </header>

<?php

if (!empty($_GET['pid'])) {
    require_once './page.php';
}

?>      