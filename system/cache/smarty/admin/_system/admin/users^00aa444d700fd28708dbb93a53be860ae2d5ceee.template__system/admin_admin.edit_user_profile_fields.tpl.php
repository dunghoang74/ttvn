<?php /* Smarty version Smarty-3.1.13, created on 2014-12-18 13:36:12
         compiled from "template__system/admin_admin:d:\xampp\htdocs\tuyendungvn\templates\_system\admin\users\edit_user_profile_fields.tpl" */ ?>
<?php /*%%SmartyHeaderCode:25677549275dc26b2d9-81925193%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '00aa444d700fd28708dbb93a53be860ae2d5ceee' => 
    array (
      0 => 'template__system/admin_admin:d:\\xampp\\htdocs\\tuyendungvn\\templates\\_system\\admin\\users\\edit_user_profile_fields.tpl',
      1 => 1354248576,
      2 => 'template__system/admin_admin',
    ),
  ),
  'nocache_hash' => '25677549275dc26b2d9-81925193',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'GLOBALS' => 0,
    'user_group_sid' => 0,
    'user_group_info' => 0,
    'errors' => 0,
    'error' => 0,
    'user_profile_fields' => 0,
    'user_profile_field' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_549275dd555899_59732327',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_549275dd555899_59732327')) {function content_549275dd555899_59732327($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cycle')) include 'D:\\xampp\\htdocs\\tuyendungvn\\system\\ext\\Smarty\\libs\\plugins\\function.cycle.php';
?><?php $_smarty_tpl->smarty->_tag_stack[] = array('breadcrumbs', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['breadcrumbs'][0][0]->_tpl_breadcrumbs(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/user-groups/">User Groups</a> &#187; <a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/edit-user-group/?sid=<?php echo $_smarty_tpl->tpl_vars['user_group_sid']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['user_group_info']->value['name'];?>
</a> &#187; Edit User Profile Fields<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['breadcrumbs'][0][0]->_tpl_breadcrumbs(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<h1><img src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['image'][0][0]->getImageURL(array(),$_smarty_tpl);?>
/icons/linedpaperpencil32.png" border="0" alt="" class="titleicon"/>Edit User Profile Fields</h1>

<?php  $_smarty_tpl->tpl_vars['message'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['message']->_loop = false;
 $_smarty_tpl->tpl_vars['error'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['errors']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['message']->key => $_smarty_tpl->tpl_vars['message']->value){
$_smarty_tpl->tpl_vars['message']->_loop = true;
 $_smarty_tpl->tpl_vars['error']->value = $_smarty_tpl->tpl_vars['message']->key;
?>
	<?php if ($_smarty_tpl->tpl_vars['error']->value=="USER_GROUP_SID_NOT_SET"){?>
		<p class="error">User group SID is not set</p>
	<?php }?>
<?php }
if (!$_smarty_tpl->tpl_vars['message']->_loop) {
?>
	<p><a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/add-user-profile-field/?user_group_sid=<?php echo $_smarty_tpl->tpl_vars['user_group_sid']->value;?>
" class="grayButton">Add User Profile Field</a></p>
	<table>
		<thead>
			<tr>
				<th>SID</th>
				<th>ID</th>
				<th>Caption</th>
				<th>Type</th>
				<th>Required</th>
				<th colspan="4" class="actions">Actions</th>
			</tr>
		</thead>
		<tbody>
		<?php  $_smarty_tpl->tpl_vars['user_profile_field'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['user_profile_field']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['user_profile_fields']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['user_profile_field']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['fields_block']['total'] = $_smarty_tpl->tpl_vars['user_profile_field']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['fields_block']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['user_profile_field']->key => $_smarty_tpl->tpl_vars['user_profile_field']->value){
$_smarty_tpl->tpl_vars['user_profile_field']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['fields_block']['iteration']++;
?>
			<tr class="<?php echo smarty_function_cycle(array('values'=>'evenrow,oddrow'),$_smarty_tpl);?>
">
				<td><?php echo $_smarty_tpl->tpl_vars['user_profile_field']->value['sid'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['user_profile_field']->value['id'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['user_profile_field']->value['caption'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['user_profile_field']->value['type'];?>
</td>
				<td><?php if ($_smarty_tpl->tpl_vars['user_profile_field']->value['is_required']){?>Yes<?php }else{ ?>No<?php }?></td>
				<td><a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/edit-user-profile-field/?sid=<?php echo $_smarty_tpl->tpl_vars['user_profile_field']->value['sid'];?>
&amp;user_group_sid=<?php echo $_smarty_tpl->tpl_vars['user_group_sid']->value;?>
" title="Edit" class="editbutton">Edit</a></td>
				<td><?php if ($_smarty_tpl->tpl_vars['user_profile_field']->value['id']!='Location'){?><a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/delete-user-profile-field/?sid=<?php echo $_smarty_tpl->tpl_vars['user_profile_field']->value['sid'];?>
&amp;user_group_sid=<?php echo $_smarty_tpl->tpl_vars['user_group_sid']->value;?>
" onclick="return confirm('Are you sure you want to delete this field?')" title="Delete" class="deletebutton">Delete</a><?php }?></td>
				<td>
					<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['fields_block']['iteration']<$_smarty_tpl->getVariable('smarty')->value['foreach']['fields_block']['total']){?>
						<a href="?user_group_sid=<?php echo $_smarty_tpl->tpl_vars['user_group_sid']->value;?>
&amp;field_sid=<?php echo $_smarty_tpl->tpl_vars['user_profile_field']->value['sid'];?>
&amp;action=move_down"><img src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['image'][0][0]->getImageURL(array(),$_smarty_tpl);?>
b_down_arrow.gif" border=0>
					<?php }?> 
				</td>
				<td>
					<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['fields_block']['iteration']>1){?>
						<a href="?user_group_sid=<?php echo $_smarty_tpl->tpl_vars['user_group_sid']->value;?>
&amp;field_sid=<?php echo $_smarty_tpl->tpl_vars['user_profile_field']->value['sid'];?>
&amp;action=move_up"><img src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['image'][0][0]->getImageURL(array(),$_smarty_tpl);?>
b_up_arrow.gif" border=0>
					<?php }?> 
				</td>
			</tr>
		<?php } ?>
	</table>
<?php } ?><?php }} ?>