<?php
/* Smarty version 5.4.2, created on 2025-03-31 21:43:09
  from 'file:C:\xampp\htdocs\projekty\projekty_moje\06_kalk_kred_kontroler_glowny\app\calc\../../templates/main.html' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_67eaf04d566762_30437034',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '96fa4405de4848214079b957ad3a26d5134f2a2e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projekty\\projekty_moje\\06_kalk_kred_kontroler_glowny\\app\\calc\\../../templates/main.html',
      1 => 1743450184,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_67eaf04d566762_30437034 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\projekty\\projekty_moje\\06_kalk_kred_kontroler_glowny\\templates';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, false);
?>
<!doctype html>
<html lang="pl">
<head>
  <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="<?php echo (($tmp = $_smarty_tpl->getValue('page_description') ?? null)===null||$tmp==='' ? "Opis domyślny" ?? null : $tmp);?>
">

  <title><?php echo (($tmp = $_smarty_tpl->getValue('page_title') ?? null)===null||$tmp==='' ? "Tytuł domyślny" ?? null : $tmp);?>
</title>

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/purecss@3.0.0/build/pure-min.css" integrity="sha384-X38yfunGUhNzHpBaEBsWLO+A0HDYOQi8ufWDkZ0k9e0eXz/tH3II7uKZ9msv++Ls" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/purecss@3.0.0/build/grids-responsive-min.css">
  <link rel="stylesheet" href="<?php echo $_smarty_tpl->getValue('conf')->app_url;?>
/styles/styles.css" />

	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getValue('conf')->app_url;?>
/js/jquery.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getValue('conf')->app_url;?>
/js/softscroll.js"><?php echo '</script'; ?>
>

</head>
<body>
    <div class="page">
        <div class="header">
            <div class="pure-menu pure-menu-horizontal">
              <a href="<?php echo $_smarty_tpl->getValue('conf')->action_url;?>
startPageView" class="pure-menu-heading">Kalkulator kredytowy</a>
      
              <ul class="pure-menu-list">
                <li class="pure-menu-item <?php if ($_smarty_tpl->getValue('page_title') == 'Strona startowa') {?>pure-menu-selected<?php }?>">
                  <a href="<?php echo $_smarty_tpl->getValue('conf')->action_url;?>
startPageView" class="pure-menu-link">
                    <?php if ($_smarty_tpl->getValue('page_title') == 'Strona startowa') {?>
                        Strona startowa
                    <?php }?>
                    <?php if ($_smarty_tpl->getValue('page_title') != 'Strona startowa') {?>
                        Przejdź do strony startowej
                    <?php }?>
                  </a>
                </li>
                <li class="pure-menu-item <?php if ($_smarty_tpl->getValue('page_title') == 'Kalkulator kredytowy') {?>pure-menu-selected<?php }?>">
                  <a href="<?php echo $_smarty_tpl->getValue('conf')->action_url;?>
emptyCalcView" class="pure-menu-link">
                    <?php if ($_smarty_tpl->getValue('page_title') == 'Kalkulator kredytowy') {?>
                        Kalkulator
                    <?php }?>
                    <?php if ($_smarty_tpl->getValue('page_title') != 'Kalkulator kredytowy') {?>
                        Przejdź do kalkulatora
                    <?php }?>
                  </a>
                </li>
              </ul>
            </div>
        </div>

        <?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_126398299067eaf04d5632e3_74056017', 'start_page');
?>

        <?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_67694895667eaf04d565f92_08080116', 'kalk_kred');
?>


        <div class="footer">
          messi to goat
        </div>
    </div>
</body>
</html><?php }
/* {block 'start_page'} */
class Block_126398299067eaf04d5632e3_74056017 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\projekty\\projekty_moje\\06_kalk_kred_kontroler_glowny\\templates';
?>
 <?php
}
}
/* {/block 'start_page'} */
/* {block 'kalk_kred'} */
class Block_67694895667eaf04d565f92_08080116 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\projekty\\projekty_moje\\06_kalk_kred_kontroler_glowny\\templates';
?>
 <?php
}
}
/* {/block 'kalk_kred'} */
}
