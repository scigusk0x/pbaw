<?php
/* Smarty version 5.4.2, created on 2025-03-24 18:55:41
  from 'file:C:\xampp\htdocs\projekty\projekty_moje\04_kalk_kred_smarty\app\../templates/main.html' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_67e19c9d2ade43_61395727',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7127f0e2aedea0b7ffa5b00b91953ebfbf496ddb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projekty\\projekty_moje\\04_kalk_kred_smarty\\app\\../templates/main.html',
      1 => 1742838940,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_67e19c9d2ade43_61395727 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\projekty\\projekty_moje\\04_kalk_kred_smarty\\templates';
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
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->getValue('app_url');?>
/styles/styles.css" />

	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getValue('app_url');?>
/js/jquery.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getValue('app_url');?>
/js/softscroll.js"><?php echo '</script'; ?>
>

</head>
<body>
    <div>
        <div class="header">
            <div class="pure-menu pure-menu-horizontal">
              <a href="<?php echo $_smarty_tpl->getValue('app_url');?>
" class="pure-menu-heading">Kalkulator kredytowy</a>
      
              <ul class="pure-menu-list">
                <li class="pure-menu-item <?php if ($_smarty_tpl->getValue('current_page') == 'start_page') {?>pure-menu-selected<?php }?>">
                  <a href="<?php echo $_smarty_tpl->getValue('app_url');?>
/app/start_page.php" class="pure-menu-link">
                    <?php if ($_smarty_tpl->getValue('current_page') == 'start_page') {?>
                        Strona startowa
                    <?php }?>
                    <?php if ($_smarty_tpl->getValue('current_page') != 'start_page') {?>
                        Przejdź do strony startowej
                    <?php }?>
                  </a>
                </li>
                <li class="pure-menu-item <?php if ($_smarty_tpl->getValue('current_page') == 'calc') {?>pure-menu-selected<?php }?>">
                  <a href="<?php echo $_smarty_tpl->getValue('app_url');?>
/app/calc.php" class="pure-menu-link">
                    <?php if ($_smarty_tpl->getValue('current_page') == 'calc') {?>
                        Kalkulator
                    <?php }?>
                    <?php if ($_smarty_tpl->getValue('current_page') != 'calc') {?>
                        Przejdź do kalkulatora
                    <?php }?>
                  </a>
                </li>
              </ul>
            </div>
        </div>

        <?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_59665061167e19c9d2aaa36_93002056', 'start_page');
?>

        <?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_147863976367e19c9d2ad729_18118226', 'kalk_kred');
?>


        <div class="footer">
          messi to goat
        </div>
    </div>
</body>
</html><?php }
/* {block 'start_page'} */
class Block_59665061167e19c9d2aaa36_93002056 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\projekty\\projekty_moje\\04_kalk_kred_smarty\\templates';
?>
 <?php
}
}
/* {/block 'start_page'} */
/* {block 'kalk_kred'} */
class Block_147863976367e19c9d2ad729_18118226 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\projekty\\projekty_moje\\04_kalk_kred_smarty\\templates';
?>
 <?php
}
}
/* {/block 'kalk_kred'} */
}
