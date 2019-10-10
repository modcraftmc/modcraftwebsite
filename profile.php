
<?php
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>

<!--<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<body>
    <div class="page-header">
          <h1>Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our site.</h1>
    </div>
    <p>
        <a href="reset-password.php" class="btn btn-warning">Reset Your Password</a>
        <a href="logout.php" class="btn btn-danger">Sign Out of Your Account</a>
    </p>
</body>
</html>-->

<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Modcraft | Bienvenue <?php echo htmlspecialchars($_SESSION["username"]); ?></title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/profile.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="assets/img/favicon.png"/>

    <meta property="og:site_name" content="Modcraft MC">
    <meta property="og:url" content="https://modcraftmc.fr">
    <meta property="og:title" content="Serveur moddé 1.12.2 !">
    <meta property="og:description" content="Un serveur minecraft moddé sang lag !">
    <meta property="og:type" content="modcraft">
    <meta name="og:image" itemprop="image" content="assets/img/favicon.png">

  </head>
  <body>
    <div class="landing-page">

      <div class="nav-menu">

          <ul>
            <li>
              <a class="play" href="index.php">Accueil</a>
            </li>
            <li>
              <a class="play"href="download.html">Jouer</a>
            </li>
            <li>
              <a class="play"href="#">Boutique</a>
            </li>
            <li>
              <a class="play"href="discord.html">Discord</a>
            </li>
          </ul>
        <ul>
          <li>
              <a class="play"href="profile.php">Mon Compte</a>
          </li>
        </ul>

      </div>


      <div class="page-content">

          <h1>Bonjour, <?php echo htmlspecialchars($_SESSION["username"]); ?></h1>

        <p>Bienvenue sur votre votre profile modcraft. Grâce à ce compte, vous pouvez vous connecter depuis le
          <a class="link" href="">Launcher</a> de modcraft en utilisant vos identifiants.</p>
          <a class="play index-play" href="resetpw.php">Options</a>
          <a class="play index-play"href="logout.php">Se deconnecter</a>
      </div>
    </div>

  <!-- div content -->

  </body>
</html>
