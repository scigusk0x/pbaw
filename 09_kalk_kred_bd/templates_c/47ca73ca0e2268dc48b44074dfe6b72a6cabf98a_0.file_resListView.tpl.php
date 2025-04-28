<?php
/* Smarty version 5.4.2, created on 2025-04-28 16:50:09
  from 'file:resListView.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_680f95a14ca519_55825871',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '47ca73ca0e2268dc48b44074dfe6b72a6cabf98a' => 
    array (
      0 => 'resListView.tpl',
      1 => 1745851762,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_680f95a14ca519_55825871 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\projekty\\projekty_moje\\09_kalk_kred_bd\\app\\views';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_366444403680f95a14bf127_78783227', 'res_list');
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "main.tpl", $_smarty_current_dir);
}
/* {block 'res_list'} */
class Block_366444403680f95a14bf127_78783227 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\projekty\\projekty_moje\\09_kalk_kred_bd\\app\\views';
?>


<table id="tab_people" class="pure-table pure-table-bordered">
<thead>
	<tr>
		<th>kwota</th>
		<th>lata</th>
		<th>procent</th>
		<th>data</th>
		<th>opcje</th>
	</tr>
</thead>
<tbody>
<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('records'), 'r');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('r')->value) {
$foreach0DoElse = false;
?>
<tr><td><?php echo $_smarty_tpl->getValue('r')["kwota"];?>
</td><td><?php echo $_smarty_tpl->getValue('r')["lata"];?>
</td><td><?php echo $_smarty_tpl->getValue('r')["procent"];?>
</td><td><?php echo $_smarty_tpl->getValue('r')["data"];?>
</td><td><a class="button-small pure-button button-warning" href="<?php echo $_smarty_tpl->getValue('conf')->action_url;?>
resDelete&id=<?php echo $_smarty_tpl->getValue('r')['idres'];?>
">Usuń</a></td></tr>
<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
</tbody>
</table>

<?php
}
}
/* {/block 'res_list'} */
}
