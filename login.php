<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="./css/login.css">
    <link rel="stylesheet" href="./css/footer.css">
    <title>Reddot | Connection</title>
</head>

<body>
    <?php include_once './templates/header.php' ?>

    <main>
        <div id="container">
            <form action="./controllers/log.php" class="flex" method="POST">
                <div id="back" class="flex">

                    <h1>Login</h1>
                    <div>
                        <label for="name">Nom de Compte</label><br>
                        <input type="text" name="name" autocomplete="off">
                    </div>
                    <div>
                        <label for="password">Mot de Passe</label><br>
                        <input type="text" name="password" autocomplete="off">
                    </div>

                    <input type="submit" value="Connection">

                    <!--I'm destroying the session in case of bad logs, so I can't have this condition, leaving it here for the moment -->

                    <?php if (((isset($_SESSION['name']) && $_SESSION['name'] == 'Jon')) && ((isset($_SESSION['password']) && $_SESSION['password'] == '1234'))) : ?>
                        <p id='error'>Mauvais nom de compte ou mot de passe</p>
                    <?php endif ?>

                </div>
            </form>
        </div>

    </main>
    <?php include_once './templates/footer.php' ?>

</body>

</html>