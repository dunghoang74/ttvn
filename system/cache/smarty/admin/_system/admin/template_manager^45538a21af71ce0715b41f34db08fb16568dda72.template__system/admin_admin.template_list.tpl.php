<?php /* Smarty version Smarty-3.1.13, created on 2014-12-22 22:24:16
         compiled from "template__system/admin_admin:d:\xampp\htdocs\tuyendungvn\templates\_system\admin\template_manager\template_list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13644549837a0e06d44-29049505%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '45538a21af71ce0715b41f34db08fb16568dda72' => 
    array (
      0 => 'template__system/admin_admin:d:\\xampp\\htdocs\\tuyendungvn\\templates\\_system\\admin\\template_manager\\template_list.tpl',
      1 => 1372235020,
      2 => 'template__system/admin_admin',
    ),
  ),
  'nocache_hash' => '13644549837a0e06d44-29049505',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'template_name' => 0,
    'ERROR' => 0,
    'template_list' => 0,
    'counter' => 0,
    'template_info' => 0,
    'module_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_549837a1a26cf6_56570536',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_549837a1a26cf6_56570536')) {function content_549837a1a26cf6_56570536($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['template_name']->value==''){?>
	<?php if ($_smarty_tpl->tpl_vars['ERROR']->value!="MODULE_DOES_NOT_EXIST"){?>
		<?php if ($_smarty_tpl->tpl_vars['ERROR']->value=="CANNOT_COPY_THEME"){?>
		<p class="error">Access denied</p>
		<?php }?>
		<table>
			<thead>
				<tr>
					<th>Template Name</th>
					<th class="actions">Actions</th>
				</tr>
			</thead>
			<tbody>
				<?php $_smarty_tpl->tpl_vars["counter"] = new Smarty_variable(0, null, 0);?>
				<?php  $_smarty_tpl->tpl_vars["template_info"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["template_info"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['template_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["template_info"]->key => $_smarty_tpl->tpl_vars["template_info"]->value){
$_smarty_tpl->tpl_vars["template_info"]->_loop = true;
?>
					<?php $_smarty_tpl->tpl_vars["counter"] = new Smarty_variable($_smarty_tpl->tpl_vars['counter']->value+1, null, 0);?>
					<tr class="<?php if ((1 & $_smarty_tpl->tpl_vars['counter']->value)){?>oddrow<?php }else{ ?>evenrow<?php }?>">
						<td><?php echo $_smarty_tpl->tpl_vars['template_info']->value['fileName'];?>
</td>
						<td>
							<a href="?module_name=<?php echo $_smarty_tpl->tpl_vars['module_name']->value;?>
&template_name=<?php echo $_smarty_tpl->tpl_vars['template_info']->value['fileName'];?>
" title="Edit" class="editbutton">Edit</a>
							<?php if ($_smarty_tpl->tpl_vars['template_info']->value['themeTemplate']){?>
								<a title="Delete" onclick="return confirm('Template deletion may affect the front-end pages work. Are you sure you want to delete this Template?');" href="?action=delete&module_name=<?php echo $_smarty_tpl->tpl_vars['module_name']->value;?>
&template_name=<?php echo $_smarty_tpl->tpl_vars['template_info']->value['fileName'];?>
" class="deletebutton">Delete</a>
							<?php }?>
						</td>
					</tr>
				<?php }
if (!$_smarty_tpl->tpl_vars["template_info"]->_loop) {
?>
					<tr><td colspan="2">This module does not have any templates</td></tr>
				<?php } ?>
			</tbody>
		</table>
	<?php }?>
<?php }else{ ?>
	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['module'][0][0]->module(array('name'=>"template_manager",'function'=>"edit_template"),$_smarty_tpl);?>

<?php }?><?php }} ?>