<?php /* Smarty version Smarty-3.1.13, created on 2014-12-22 22:24:02
         compiled from "template__system/admin_admin:d:\xampp\htdocs\tuyendungvn\templates\_system\admin\template_manager\module_list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19168549837927ef3e6-90657615%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f61ea1df6caa47eff75712e5727f583133c3a984' => 
    array (
      0 => 'template__system/admin_admin:d:\\xampp\\htdocs\\tuyendungvn\\templates\\_system\\admin\\template_manager\\module_list.tpl',
      1 => 1338886608,
      2 => 'template__system/admin_admin',
    ),
  ),
  'nocache_hash' => '19168549837927ef3e6-90657615',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'module_list' => 0,
    'counter' => 0,
    'module_info' => 0,
    'system_module_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_54983792da82b1_01205854',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54983792da82b1_01205854')) {function content_54983792da82b1_01205854($_smarty_tpl) {?><div class="clr"><br/><br/></div>
<table>
	<thead>
		<tr>
			<th>Module Name</th>
			<th>Description</th>
			<th class="actions">Actions</th>
		</tr>
	</thead>
	<tbody>
		<?php $_smarty_tpl->tpl_vars["counter"] = new Smarty_variable(0, null, 0);?>
		<?php  $_smarty_tpl->tpl_vars["module_info"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["module_info"]->_loop = false;
 $_smarty_tpl->tpl_vars["system_module_name"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['module_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["module_info"]->key => $_smarty_tpl->tpl_vars["module_info"]->value){
$_smarty_tpl->tpl_vars["module_info"]->_loop = true;
 $_smarty_tpl->tpl_vars["system_module_name"]->value = $_smarty_tpl->tpl_vars["module_info"]->key;
?>
			<?php $_smarty_tpl->tpl_vars["counter"] = new Smarty_variable($_smarty_tpl->tpl_vars['counter']->value+1, null, 0);?>
			<tr class="<?php if ((1 & $_smarty_tpl->tpl_vars['counter']->value)){?>oddrow<?php }else{ ?>evenrow<?php }?>">
				<td><?php echo $_smarty_tpl->tpl_vars['module_info']->value['display_name'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['module_info']->value['description'];?>
</td>
				<td align=center><a href="?module_name=<?php echo $_smarty_tpl->tpl_vars['system_module_name']->value;?>
" title="Edit" class="editbutton">Edit</a></td>
			</tr>
		<?php }
if (!$_smarty_tpl->tpl_vars["module_info"]->_loop) {
?>
			<tr><td colspan=3>There are no modules with templates in the system. If you don't have any, your package either comes without module templates or is damaged. </td></tr>
		<?php } ?>
	</tbody>
</table><?php }} ?>