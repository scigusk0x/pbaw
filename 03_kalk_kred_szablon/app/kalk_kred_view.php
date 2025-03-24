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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/purecss@3.0.0/build/pure-min.css" integrity="sha384-X38yfunGUhNzHpBaEBsWLO+A0HDYOQi8ufWDkZ0k9e0eXz/tH3II7uKZ9msv++Ls" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/purecss@3.0.0/build/grids-responsive-min.css">
    <link rel="stylesheet" href="<?php print($_SESSION['_APP_URL']);?>/styles/styles.css" />
  </head>
  <body>
    <div class="page">
      <div class="header">
        <div class="pure-menu pure-menu-horizontal">
          <a href="<?php print($_SESSION['_APP_URL']) ?>" class="pure-menu-heading">Kalkulator kredytowy</a>

          <ul class="pure-menu-list">
            <li class="pure-menu-item">
              <a href="start_page.php" class="pure-menu-link">Przejdź do strony startowej</a>
            </li>
            <li class="pure-menu-item pure-menu-selected">
              <a href="#" class="pure-menu-link">Kalkulator</a>
            </li>
          </ul>
        </div>
      </div>

      <div class="pure-g">

        <div class="pure-u-1 form-box">
          <div class="l-box">
            <h2>Oblicz ratę kredytu</h2>

            <form class="pure-form" action="<?php print($_SESSION['_APP_URL']);?>/app/kalk_kred.php" method="get">
              <input id="id_kwota"   type="text" name="kwota"   placeholder="Kwota"   value="<?php if (isset($_SESSION['kwota']))   print($_SESSION['kwota']); ?>" />
              <input id="id_lata"    type="text" name="lata"    placeholder="Lata"    value="<?php if (isset($_SESSION['lata']))    print($_SESSION['lata']); ?>" />
              <input id="id_procent" type="text" name="procent" placeholder="Procent" value="<?php if (isset($_SESSION['procent'])) print($_SESSION['procent']); ?>" />

              <input type="submit" class="pure-button" value="Oblicz miesięczną ratę kredytu">
            </form>
          </div>
        </div>

        <div class="results-container">
          <?php
            if (isset($_SESSION['messages'])) {
              if (count($_SESSION['messages']) != 0) {
                print('<ol class="message-list">');
                foreach ($_SESSION['messages'] as $key=>$msg) {
                  print('<li>'.$msg.'</li>');
                }
                print('</ol>');
              }
              else {
                print('<div class="result">Miesięczna rata wynosi<br><span style="font-family: monospace; font-size: 2.5em;">'.round($_SESSION['rata'], 2).'</span></div>');
              }
            }
          ?>
        </div>
      </div>

      <div class="footer">
        messi to goat
      </div>
    </div>
  </body>
</html>