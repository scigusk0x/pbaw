<?php
/* Smarty version 5.4.2, created on 2025-04-01 09:35:14
  from 'file:templates/main.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_67eb9732bf0fd4_72084653',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cd1018ab72f1ebc178cceeeedf4c096689ba8570' => 
    array (
      0 => 'templates/main.tpl',
      1 => 1743490826,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_67eb9732bf0fd4_72084653 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\scig\\06_kalk_kred_kontroler_glowny\\app\\views\\templates';
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
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_45652235267eb9732bf00e3_74427882', 'start_page');
?>

        <?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_163959693067eb9732bf0842_23796759', 'kalk_kred');
?>


        <div class="footer">
          messi to goat
        </div>
    </div>
</body>
</html><?php }
/* {block 'start_page'} */
class Block_45652235267eb9732bf00e3_74427882 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\scig\\06_kalk_kred_kontroler_glowny\\app\\views\\templates';
?>
 <?php
}
}
/* {/block 'start_page'} */
/* {block 'kalk_kred'} */
class Block_163959693067eb9732bf0842_23796759 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\scig\\06_kalk_kred_kontroler_glowny\\app\\views\\templates';
?>
 <?php
}
}
/* {/block 'kalk_kred'} */
}
