<!DOCTYPE html>

    <head>
        <meta charset="utf-8">
        <meta name="description" content="To jest aplikacja ZOO">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Aplikacja ZOO</title>

        <link rel="stylesheet" href="style.css">
    </head>
    <body>
    <header>
        <nav>
            <a href="#">
                <img src="img/logo.png" alt="Logo Zoo">
            </a>
            <ul>
                <li><a href="index.php">Główna</a></li>
                <li><a href="#">O ZOO</a></li>
                <li><a href="#">Kontakt</a></li>
            </ul>
            <div>
                <form action="includes/login.inc.php" method="post">
                    <input type="text" name="mailuid" placeholder="Username/E-mail...">
                    <input type="password" name="pwd" placeholder="Password...">
                    <button type="submit" name="login-submit">Login</button>
                </form>
                <a href="signup.php">Signup</a>
                <form action="includes/logout.inc.php" method="post">
                    <button type="submit" name="logout-submit">Logout</button>
                </form>
            </div>
        </nav>
    </header>
    </body>
</html>