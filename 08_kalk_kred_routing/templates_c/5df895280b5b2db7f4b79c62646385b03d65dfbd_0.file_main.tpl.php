<?php
/* Smarty version 5.4.2, created on 2025-04-13 19:37:06
  from 'file:main.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_67fbf642d2b7f9_85835530',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5df895280b5b2db7f4b79c62646385b03d65dfbd' => 
    array (
      0 => 'main.tpl',
      1 => 1744565821,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_67fbf642d2b7f9_85835530 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\projekty\\projekty_moje\\08_kalk_kred_routing\\app\\views\\templates';
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
startPageShow" class="pure-menu-heading">Kalkulator kredytowy</a>
      
              <ul class="pure-menu-list">

                <li class="pure-menu-item <?php if ($_smarty_tpl->getValue('page_title') == 'Strona startowa') {?>pure-menu-selected<?php }?>">
                  <a href="<?php echo $_smarty_tpl->getValue('conf')->action_url;?>
startPageShow" class="pure-menu-link">
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
calcShow" class="pure-menu-link">
                    <?php if ($_smarty_tpl->getValue('page_title') == 'Kalkulator kredytowy') {?>
                        Kalkulator
                    <?php }?>
                    <?php if ($_smarty_tpl->getValue('page_title') != 'Kalkulator kredytowy') {?>
                        Przejdź do kalkulatora
                    <?php }?>
                  </a>
                </li>

                <li class="pure-menu-item">
                  <?php if ((null !== ($_smarty_tpl->getValue('user') ?? null))) {?>
                    <a href="<?php echo $_smarty_tpl->getValue('conf')->action_url;?>
logout" class="pure-menu-link" style="background-color: red; color: white;">
                      Wyloguj
                    </a>
                  <?php }?>
                </li>

              </ul>
            </div>
        </div>

        <?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_2360409567fbf642d26e58_47690546', 'start_page');
?>

        <?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_69573358667fbf642d2a2b1_12466214', 'kalk_kred');
?>

        <?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_39392230267fbf642d2ad17_79224935', 'login_form');
?>


        <div class="footer">
          messi to goat
        </div>
    </div>
</body>
</html><?php }
/* {block 'start_page'} */
class Block_2360409567fbf642d26e58_47690546 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\projekty\\projekty_moje\\08_kalk_kred_routing\\app\\views\\templates';
?>
 <?php
}
}
/* {/block 'start_page'} */
/* {block 'kalk_kred'} */
class Block_69573358667fbf642d2a2b1_12466214 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\projekty\\projekty_moje\\08_kalk_kred_routing\\app\\views\\templates';
?>
 <?php
}
}
/* {/block 'kalk_kred'} */
/* {block 'login_form'} */
class Block_39392230267fbf642d2ad17_79224935 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\projekty\\projekty_moje\\08_kalk_kred_routing\\app\\views\\templates';
?>
 <?php
}
}
/* {/block 'login_form'} */
}
