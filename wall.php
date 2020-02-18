<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="./css/header.css">
  <link rel="stylesheet" href="./css/footer.css">
  <link rel="stylesheet" href="./css/wall.css">
  <title>Reddot | Accueil</title>
</head>

<body>
  <?php include_once './templates/header.php' ?>
  <?php if ($_SESSION['name'] != "Jon") {
    $_SESSION['denied'] = 'true';
    header('Location: ./login.php');
  } ?>
  <div id="container">
    <h1>Derniers Posts</h1>

    <?php if ($_SESSION['serieCheck'] == 'serieOn' || !isset($_SESSION['name'])) : ?>
      <div class="post">
        <img src="./images/video.png">
        <div>
          <h2>Saison 4 de Prison Break</h2>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum obcaecati iure veritatis sequi reiciendis voluptatum recusandae quam architecto dignissimos autem? Consequatur similique quia alias voluptates repudiandae reprehenderit maxime voluptate omnis.</p>
          <p>Note: 3/10</p>
        </div>
      </div>
    <?php endif ?>

    <?php if ($_SESSION['serieCheck'] == 'serieOn' || !isset($_SESSION['name'])) : ?>
      <div class="post">
        <img src="./images/video.png">
        <div>
          <h2>The Good Place: Le pourquoi du comment</h2>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum obcaecati iure veritatis sequi reiciendis voluptatum recusandae quam architecto dignissimos autem? Consequatur similique quia alias voluptates repudiandae reprehenderit maxime voluptate omnis.</p>
          <p>Note: 8/10</p>
        </div>
      </div>
    <?php endif ?>

    <?php if ($_SESSION['gameCheck'] == 'gameOn' || !isset($_SESSION['name'])) : ?>

      <div class="post">
        <img src="./images/console.png">
        <div>
          <h2>Diablo 4: Top ou Flop?</h2>
          <p>Bah je sais pas, mais la hype est là</p>
          <p>Note: hype/10</p>
        </div>
      </div>
    <?php endif ?>

  </div>

  <?php include_once './templates/footer.php' ?>

</body>

</html>