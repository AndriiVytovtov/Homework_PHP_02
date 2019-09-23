<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?=$title?></title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/<?=$css?>">
</head>
<body>
    <header>
        <section>
            <div class="logo">
                logo
            </div>
            <nav>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="?page=about">About</a></li>
                    <li><a href="?page=contacts">Contacts</a></li>
                </ul>
            </nav>
        </section>
    </header>
    <main>
        <?php include("templates/".$tpl); ?>
    </main>
    <footer>
       copyright © 2019
    </footer>
</body>
</html>