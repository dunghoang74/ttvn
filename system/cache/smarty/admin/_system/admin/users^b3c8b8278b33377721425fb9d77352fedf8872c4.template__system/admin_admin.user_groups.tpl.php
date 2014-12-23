<?php /* Smarty version Smarty-3.1.13, created on 2014-12-18 13:35:38
         compiled from "template__system/admin_admin:d:\xampp\htdocs\tuyendungvn\templates\_system\admin\users\user_groups.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1815549275badfdf52-59646610%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b3c8b8278b33377721425fb9d77352fedf8872c4' => 
    array (
      0 => 'template__system/admin_admin:d:\\xampp\\htdocs\\tuyendungvn\\templates\\_system\\admin\\users\\user_groups.tpl',
      1 => 1372092802,
      2 => 'template__system/admin_admin',
    ),
  ),
  'nocache_hash' => '1815549275badfdf52-59646610',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'GLOBALS' => 0,
    'user_groups' => 0,
    'user_group' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_549275bb7dfaf9_32531739',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_549275bb7dfaf9_32531739')) {function content_549275bb7dfaf9_32531739($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cycle')) include 'D:\\xampp\\htdocs\\tuyendungvn\\system\\ext\\Smarty\\libs\\plugins\\function.cycle.php';
?><?php $_smarty_tpl->smarty->_tag_stack[] = array('breadcrumbs', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['breadcrumbs'][0][0]->_tpl_breadcrumbs(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
User Groups<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['breadcrumbs'][0][0]->_tpl_breadcrumbs(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<h1><img src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['image'][0][0]->getImageURL(array(),$_smarty_tpl);?>
users-online.png" border="0" alt="" class="titleicon" />User Groups</h1>
<p><a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/add-user-group/" class="grayButton">Add a New User Group</a></p>

<table>
	<thead>
		<tr>
			<th>ID</th>
			<th>Name</th>
			<th>User number</th>
			<th colspan="4" class="actions">Actions</th>
		</tr>
	</thead>
	<tbody>
		<?php  $_smarty_tpl->tpl_vars['user_group'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['user_group']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['user_groups']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['user_group']->key => $_smarty_tpl->tpl_vars['user_group']->value){
$_smarty_tpl->tpl_vars['user_group']->_loop = true;
?>
			<tr class="<?php echo smarty_function_cycle(array('values'=>'evenrow,oddrow'),$_smarty_tpl);?>
">
				<td><?php echo $_smarty_tpl->tpl_vars['user_group']->value['id'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['user_group']->value['caption'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['user_group']->value['user_number'];?>
</td>
				<td><a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/edit-user-group/?sid=<?php echo $_smarty_tpl->tpl_vars['user_group']->value['sid'];?>
" title="Edit" class="editbutton">Edit</a></td>
				<td><span class="greenButtonEnd"><input type="button" onclick="location.href='<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/edit-user-profile/?user_group_sid=<?php echo $_smarty_tpl->tpl_vars['user_group']->value['sid'];?>
'" class="greenButton" value="Edit User Profile Fields" /></span></td>
				<td><span class="greenButtonEnd"><input type="button" onclick="location.href='<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/system/users/acl/?type=group&role=<?php echo $_smarty_tpl->tpl_vars['user_group']->value['sid'];?>
'" class="greenButton" value="Manage permissions" /></span></td>
				<td>&nbsp;
					<?php if ($_smarty_tpl->tpl_vars['user_group']->value['user_number']>0){?>
					<?php }else{ ?>
						<a class="deletebutton" title="Delete" onclick="return confirm('Are you sure you want to delete this user group?')" href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/delete-user-group/?sid=<?php echo $_smarty_tpl->tpl_vars['user_group']->value['sid'];?>
">Delete</a>
					<?php }?>
				</td>
			</tr>
		<?php } ?>
		<tr class="<?php echo smarty_function_cycle(array('values'=>'evenrow,oddrow'),$_smarty_tpl);?>
">
			<td colspan="5">Guest</td>
			<td><span class="greenButtonEnd"><input type="button" onclick="location.href='<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/system/users/acl/?type=guest&role=guest'" class="greenButton" value="Manage permissions"/></span></td>
			<td></td>
		</tr>
	</tbody>
</table><?php }} ?>