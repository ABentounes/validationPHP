<?php session_start() ?>

<header>
  <nav>
    <ul>
      <li><a href="/">Accueil</a></li>
      <li><a href="./wall.php">Derniers posts</a></li>

      <?php if (isset($_SESSION['name']) && $_SESSION['name'] == 'Jon') : ?>
        <li class="dropdown">
          <span>Bonjour <?= $_SESSION['name'] ?></span>
          <ul class="dropdownContent">
            <li><a href="../profile.php"> Profil</a></li>
            <li><a href="../controllers/disconnect.php">Déconnection </a></li>

          </ul>
        </li>
      <?php else : ?>
        <li><a href="../login.php">Connection </a></li>
      <?php endif ?>

    </ul>
  </nav>
</header>