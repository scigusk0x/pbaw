<?php
/* Smarty version 5.4.2, created on 2025-04-28 16:45:18
  from 'file:messages.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_680f947e1f8619_35102605',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd63abc6348a7f403c9898a2009974da2b6855fa2' => 
    array (
      0 => 'messages.tpl',
      1 => 1744559820,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_680f947e1f8619_35102605 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\projekty\\projekty_moje\\09_kalk_kred_bd\\app\\views\\templates';
if ($_smarty_tpl->getValue('msgs')->isError()) {?>
<div class="message-list error-list">
	<ol>
	<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('msgs')->getErrors(), 'err');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('err')->value) {
$foreach0DoElse = false;
?>
	<li><?php echo $_smarty_tpl->getValue('err');?>
</li>
	<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
	</ol>
</div>
<?php }
if ($_smarty_tpl->getValue('msgs')->isInfo()) {?>
<div class="message-list info-list">
	<ol>
	<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('msgs')->getInfos(), 'info');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('info')->value) {
$foreach1DoElse = false;
?>
	<li><?php echo $_smarty_tpl->getValue('info');?>
</li>
	<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
	</ol>
</div>
<?php }
}
}
