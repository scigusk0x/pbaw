<?php
/* Smarty version 5.4.2, created on 2025-04-01 09:44:55
  from 'file:CalcView.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_67eb9977937e94_14920245',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '130f12621d47a4ab0d22010789471babe942777e' => 
    array (
      0 => 'CalcView.tpl',
      1 => 1743492642,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_67eb9977937e94_14920245 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\scig\\06_kalk_kred_kontroler_glowny\\app\\views';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_117783555467eb997790a009_92685829', 'kalk_kred');
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "templates/main.tpl", $_smarty_current_dir);
}
/* {block 'kalk_kred'} */
class Block_117783555467eb997790a009_92685829 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\scig\\06_kalk_kred_kontroler_glowny\\app\\views';
?>


<div class="pure-g">

	<div class="pure-u-1 form-box">
	  <div class="l-box">
		<h2>Oblicz ratę kredytu</h2>

		<form class="pure-form" action="<?php echo $_smarty_tpl->getValue('conf')->action_url;?>
calcComputeView" method="post">
		  <input id="id_kwota"   type="text" name="kwota"   placeholder="Kwota"   value="<?php echo $_smarty_tpl->getValue('form')->kwota;?>
" />
		  <input id="id_lata"    type="text" name="lata"    placeholder="Lata"    value="<?php echo $_smarty_tpl->getValue('form')->lata;?>
" />
		  <input id="id_procent" type="text" name="procent" placeholder="Procent" value="<?php echo $_smarty_tpl->getValue('form')->procent;?>
" />

		  <input type="submit" class="pure-button" value="Oblicz miesięczną ratę kredytu">
		</form>
	  </div>
	</div>

	<div class="results-container">

		<?php if ($_smarty_tpl->getValue('msgs')->isError()) {?>
		<ol class="message-list error-list">
		<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('msgs')->getErrors(), 'msg');
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

	<?php if (!$_smarty_tpl->getValue('msgs')->isError()) {?>
		<?php if ($_smarty_tpl->getValue('msgs')->isInfo()) {?>
			<ol class="message-list info-list">
			<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('msgs')->getInfos(), 'msg');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('msg')->value) {
$foreach1DoElse = false;
?>
			<li><?php echo $_smarty_tpl->getValue('msg');?>
</li>
			<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
			</ol>
		<?php }?>

		<?php if ((null !== ($_smarty_tpl->getValue('result')->result ?? null))) {?>
			<div class="result">Miesięczna rata wynosi<br><span style="font-family: monospace; font-size: 2.5em;"><?php echo round((float) $_smarty_tpl->getValue('result')->result, (int) 2, (int) 1);?>
 zł</span></div>
		<?php }?>
	<?php }?>
	</div>

</div>

<?php
}
}
/* {/block 'kalk_kred'} */
}
