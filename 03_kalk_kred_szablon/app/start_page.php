<?php
if (session_status() === PHP_SESSION_NONE) {
  session_start();
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta
      name="description"
      content="A layout example that shows off a responsive photo gallery."
    />
    <title>Kalkulator kredytowy &ndash; Strona startowa</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/purecss@3.0.0/build/pure-min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/purecss@3.0.0/build/grids-responsive-min.css">
    <link rel="stylesheet" href="<?php print($_SESSION['_APP_URL']);?>/styles/styles.css">
  </head>
  <body>
    <div>
      <div class="header">
        <div class="pure-menu pure-menu-horizontal">
          <a href="<?php print($_SESSION['_APP_URL']) ?>" class="pure-menu-heading">Kalkulator kredytowy</a>

          <ul class="pure-menu-list">
            <li class="pure-menu-item pure-menu-selected">
              <a href="#" class="pure-menu-link">Strona startowa</a>
            </li>
            <li class="pure-menu-item">
              <a href="<?php print($_SESSION['_APP_URL']);?>/app/kalk_kred_view.php" class="pure-menu-link">Przejdź do kalkulatora</a>
            </li>
          </ul>
        </div>
      </div>

      <div class="pure-g">
        <div class="photo-box pure-u-1 pure-u-md-1-2 pure-u-lg-1-3">
          <img
            src="<?php print($_SESSION['_APP_URL']);?>/images/chill-guy.webp"
            alt="chill guy"
          />
        </div>

        <div class="text-box pure-u-1 pure-u-md-1-2 pure-u-lg-1-3">
          <div class="l-box">
            <h1 class="text-box-head">Galeria</h1>
            <p class="text-box-subhead">
              Kilka zdjęć i wideo
            </p>
          </div>
        </div>

        <div class="photo-box pure-u-1 pure-u-md-1-2 pure-u-lg-1-3">
            <img
              src="<?php print($_SESSION['_APP_URL']);?>/images/mbape.png"
              alt="embape"
            />
          </div>

        <div class="photo-box pure-u-1 pure-u-md-1-2 pure-u-lg-1-3">
          <img
            src="<?php print($_SESSION['_APP_URL']);?>/images/laminjpg.jpg"
            alt="lamine yamale"
          />
        </div>

        <div class="photo-box pure-u-1 pure-u-md-1-2 pure-u-lg-1-3">
          <video autoplay loop muted playsinline>
            <source src="<?php print($_SESSION['_APP_URL']);?>/images/dembusz.mp4" type="video/mp4">
          </video>
        </div>

        <div class="photo-box pure-u-1 pure-u-md-1-2 pure-u-lg-1-3">
          <img
            src="<?php print($_SESSION['_APP_URL']);?>/images/mesi_world_cup.jpg"
            alt="ankara mesi"
          />
        </div>

        <div class="photo-box pure-u-1 pure-u-md-1-2 pure-u-lg-1-3">
          <img
            src="<?php print($_SESSION['_APP_URL']);?>/images/kun.jpeg"
            alt="bosiekuniaboje"
          />
        </div>

        <div class="photo-box photo-box-thin pure-u-1 pure-u-md-1-3">
          <img
            src="<?php print($_SESSION['_APP_URL']);?>/images/plansza.jpg"
            alt="plansza"
          />
        </div>

        <div class="photo-box photo-box-thin pure-u-1 pure-u-md-1-3">
          <img
            src="<?php print($_SESSION['_APP_URL']);?>/images/zeju.png"
            alt="zejupoooog"
          />
        </div>
      </div>

      

      <div class="footer">
        messi to goat
      </div>
    </div>
  </body>
</html>