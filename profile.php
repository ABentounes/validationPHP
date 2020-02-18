<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mythic: Profiles</title>
    <link rel="stylesheet" href="./css/profile.css">
    <link rel="stylesheet" href="./css/header.css">
</head>

<body>
    <?php include_once './templates/header.php' ?>

    <?php if ($_SESSION['name'] != "Jon") {
        header('Location: /');
    } ?>

    <main>

        <form action="./controllers/settings.php" method="post">
            <label for="keepSerie">Series
                <input type="checkbox" value="serieOn" name="serieCheck" <?= ($_SESSION['serieCheck'] == 'serieOn') ? 'checked' : '' ?>>
            </label>

            <label for="keepGame">Jeux Vidéos
                <input type="checkbox" value="gameOn" name="gameCheck" <?= ($_SESSION['gameCheck'] == 'gameOn') ? 'checked' : '' ?>>
            </label>
            <button type="submit">Sauvegarder les préférences</button>
        </form>

    </main>
</body>

</html>