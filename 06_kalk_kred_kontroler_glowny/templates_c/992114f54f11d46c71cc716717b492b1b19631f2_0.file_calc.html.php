<?php
/* Smarty version 5.4.2, created on 2025-03-24 18:17:10
  from 'file:C:\xampp\htdocs\projekty\projekty_moje\04_kalk_kred_smarty/app/calc.html' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_67e193967ce154_26046316',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '992114f54f11d46c71cc716717b492b1b19631f2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projekty\\projekty_moje\\04_kalk_kred_smarty/app/calc.html',
      1 => 1742835808,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_67e193967ce154_26046316 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\projekty\\projekty_moje\\04_kalk_kred_smarty\\app';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_8454295067e193967bdfd2_23740735', 'kalk_kred');
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "../templates/main.html", $_smarty_current_dir);
}
/* {block 'kalk_kred'} */
class Block_8454295067e193967bdfd2_23740735 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\projekty\\projekty_moje\\04_kalk_kred_smarty\\app';
?>


<div class="pure-g">

	<div class="pure-u-1 form-box">
	  <div class="l-box">
		<h2>Oblicz ratę kredytu</h2>

		<form class="pure-form" action="<?php echo $_smarty_tpl->getValue('app_url');?>
/app/calc.php" method="get">
		  <input id="id_kwota"   type="text" name="kwota"   placeholder="Kwota"   value="<?php echo $_smarty_tpl->getValue('form')['kwota'];?>
" />
		  <input id="id_lata"    type="text" name="lata"    placeholder="Lata"    value="<?php echo $_smarty_tpl->getValue('form')['lata'];?>
" />
		  <input id="id_procent" type="text" name="procent" placeholder="Procent" value="<?php echo $_smarty_tpl->getValue('form')['procent'];?>
" />

		  <input type="submit" class="pure-button" value="Oblicz miesięczną ratę kredytu">
		</form>
	  </div>
	</div>

	<div class="results-container">

		<?php if ((null !== ($_smarty_tpl->getValue('messages') ?? null))) {?>
		<?php if ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('messages')) > 0) {?>
			<ol class="message-list">
			<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('messages'), 'msg');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('msg')->value) {
$foreach0DoElse = false;
?>
			<li><?php echo $_smarty_tpl->getValue('msg');?>
</li>
			<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
			</ol>
		<?php }?>
	<?php }?>

	<?php if ((null !== ($_smarty_tpl->getValue('rata') ?? null))) {?>
		<div class="result">Miesięczna rata wynosi<br><span style="font-family: monospace; font-size: 2.5em;"><?php echo round((float) $_smarty_tpl->getValue('rata'), (int) 2, (int) 1);?>
 zł</span></div>
	<?php }?>
	</div>

</div>

<?php
}
}
/* {/block 'kalk_kred'} */
}
