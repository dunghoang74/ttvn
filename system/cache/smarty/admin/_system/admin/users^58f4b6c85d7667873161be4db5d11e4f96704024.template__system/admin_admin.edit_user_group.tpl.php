<?php /* Smarty version Smarty-3.1.13, created on 2014-12-18 13:41:16
         compiled from "template__system/admin_admin:d:\xampp\htdocs\tuyendungvn\templates\_system\admin\users\edit_user_group.tpl" */ ?>
<?php /*%%SmartyHeaderCode:30915492770c137d27-90971928%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '58f4b6c85d7667873161be4db5d11e4f96704024' => 
    array (
      0 => 'template__system/admin_admin:d:\\xampp\\htdocs\\tuyendungvn\\templates\\_system\\admin\\users\\edit_user_group.tpl',
      1 => 1393387444,
      2 => 'template__system/admin_admin',
    ),
  ),
  'nocache_hash' => '30915492770c137d27-90971928',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'GLOBALS' => 0,
    'user_group_info' => 0,
    'user_group_sid' => 0,
    'errors' => 0,
    'error' => 0,
    'object_sid' => 0,
    'user_group_products_info' => 0,
    'products_info' => 0,
    'product_sid' => 0,
    'user_group_product_user_number' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5492770d727a93_47717547',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5492770d727a93_47717547')) {function content_5492770d727a93_47717547($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cycle')) include 'D:\\xampp\\htdocs\\tuyendungvn\\system\\ext\\Smarty\\libs\\plugins\\function.cycle.php';
?><?php $_smarty_tpl->smarty->_tag_stack[] = array('breadcrumbs', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['breadcrumbs'][0][0]->_tpl_breadcrumbs(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/user-groups/">User Groups</a> &#187; <?php echo $_smarty_tpl->tpl_vars['user_group_info']->value['id'];?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['breadcrumbs'][0][0]->_tpl_breadcrumbs(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php $_smarty_tpl->tpl_vars["switchColumns"] = new Smarty_variable(false, null, 0);?>
<h1><img src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['image'][0][0]->getImageURL(array(),$_smarty_tpl);?>
/icons/users32.png" border="0" alt="" class="titleicon"/> Edit User Group</h1>
<p>
	<a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/edit-user-profile/?user_group_sid=<?php echo $_smarty_tpl->tpl_vars['user_group_sid']->value;?>
" class="grayButton">Edit User Profile Fields</a>
	&nbsp;<a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/system/users/acl/?type=group&amp;role=<?php echo $_smarty_tpl->tpl_vars['user_group_sid']->value;?>
" class="grayButton">Manage Permissions</a>
</p>

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
<?php } ?>
<fieldset>
	<legend>User Group Info</legend>
	<form method="post" action="">
		<input type="hidden" id="submit" name="submit" value="save_info" />
		<input type="hidden" name="sid" value="<?php echo $_smarty_tpl->tpl_vars['object_sid']->value;?>
" />

		<?php echo $_smarty_tpl->getSubTemplate ("user_group_form_fields.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


		<div class="clr"><br/></div>
		<div class="floatRight">
			<input type="submit" id="apply" value="Apply" class="grayButton"/>
			<input type="submit" value="Save" class="grayButton" />
		</div>
	</form>
</fieldset>

<div  class="setting_block" style="display: none"></div>
<div class="clr"><br/></div>

<h2>Products</h2>
<table>
	<thead>
		<tr>
			<th>ID</th>
			<th>Name</th>
			<th>User number</th>
			<th>Default</th>
			<th colspan="2">Order</th>
		</tr>
	</thead>
	<tbody>
		<?php  $_smarty_tpl->tpl_vars['products_info'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['products_info']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['user_group_products_info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['products_info']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['items_block']['total'] = $_smarty_tpl->tpl_vars['products_info']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['items_block']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['products_info']->key => $_smarty_tpl->tpl_vars['products_info']->value){
$_smarty_tpl->tpl_vars['products_info']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['items_block']['iteration']++;
?>
			<tr class="<?php echo smarty_function_cycle(array('values'=>'evenrow,oddrow'),$_smarty_tpl);?>
">
				<td><?php echo $_smarty_tpl->tpl_vars['products_info']->value['sid'];?>
</td>
				<td><a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/edit-product/?sid=<?php echo $_smarty_tpl->tpl_vars['products_info']->value['sid'];?>
"><?php echo $_smarty_tpl->tpl_vars['products_info']->value['name'];?>
</a></td>
				<?php $_smarty_tpl->tpl_vars["product_sid"] = new Smarty_variable($_smarty_tpl->tpl_vars['products_info']->value['sid'], null, 0);?>
				<td><?php echo $_smarty_tpl->tpl_vars['user_group_product_user_number']->value[$_smarty_tpl->tpl_vars['product_sid']->value];?>
</td>
				<td><input class="default-plan" value="<?php echo $_smarty_tpl->tpl_vars['products_info']->value['sid'];?>
" type="checkbox" <?php if ($_smarty_tpl->tpl_vars['user_group_info']->value['default_product']==$_smarty_tpl->tpl_vars['products_info']->value['sid']){?>checked="checked"<?php }?>" /></td>
				<td>
					<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['items_block']['iteration']<$_smarty_tpl->getVariable('smarty')->value['foreach']['items_block']['total']){?>
						<a href="?product_sid=<?php echo $_smarty_tpl->tpl_vars['products_info']->value['sid'];?>
&amp;action=move_down&amp;sid=<?php echo $_smarty_tpl->tpl_vars['user_group_sid']->value;?>
"><img src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['image'][0][0]->getImageURL(array(),$_smarty_tpl);?>
b_down_arrow.gif" border="0" alt=""/></a>
					<?php }?>
				</td>
				<td>
					<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['items_block']['iteration']>1){?>
						<a href="?product_sid=<?php echo $_smarty_tpl->tpl_vars['products_info']->value['sid'];?>
&amp;action=move_up&amp;sid=<?php echo $_smarty_tpl->tpl_vars['user_group_sid']->value;?>
"><img src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['image'][0][0]->getImageURL(array(),$_smarty_tpl);?>
b_up_arrow.gif" border="0" alt="" /></a>
					<?php }?>
				</td>
			</tr>
		<?php } ?>
	</tbody>
</table>

<p>Users of this group will be automatically subscribed (free of charge) to the product marked as <strong>Default</strong> after registration</p>


<script type="text/javascript">
$(document).ready(function() {
	$('.default-plan').change( function() {
		var plan = 0;
		if (this.checked) {
			plan = this.value
		}
		location.href = '?product_sid=' + plan + '&action=set_default_product&sid=<?php echo $_smarty_tpl->tpl_vars['user_group_sid']->value;?>
';
	});

	$('#apply').click(function(){
				$('#submit').attr('value', 'apply_info');
		}
	);

	$('input[name="id"]').attr("disabled","disabled").after('<div style="font-size:11px;margin-top:5px">This is a system field. It cannot be changed.</div>');
});
</script>
<?php }} ?>