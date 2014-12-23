<?php /* Smarty version Smarty-3.1.13, created on 2014-12-18 13:29:40
         compiled from "template__system/admin_admin:../users/acl_group_permissions.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1520454927454cc42e2-19463216%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4ac53708f480d1def274cee27bc1c6c3d062cbc3' => 
    array (
      0 => 'template__system/admin_admin:../users/acl_group_permissions.tpl',
      1 => 1349756382,
      2 => 'template__system/admin_admin',
    ),
  ),
  'nocache_hash' => '1520454927454cc42e2-19463216',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'type' => 0,
    'user_group_sid' => 0,
    'resources' => 0,
    'permission' => 0,
    'group' => 0,
    'role' => 0,
    'acl' => 0,
    'membershipPlanInfo' => 0,
    'permission_id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_54927458c56dc2_06174549',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54927458c56dc2_06174549')) {function content_54927458c56dc2_06174549($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cycle')) include 'D:\\xampp\\htdocs\\tuyendungvn\\system\\ext\\Smarty\\libs\\plugins\\function.cycle.php';
?><table>
	<thead>
		<tr>
			<th width="400px"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Permission<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</th>
			<?php if ($_smarty_tpl->tpl_vars['type']->value=='product'&&$_smarty_tpl->tpl_vars['user_group_sid']->value){?>
				<th width="210px"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Product permissions<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</th>
				<th width="150px"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
User Group Permissions<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</th>
			<?php }else{ ?>
				<th width="260px"></th>
				<th width="100px"></th>
			<?php }?>
		</tr>
	</thead>
	<tbody>
	    <?php  $_smarty_tpl->tpl_vars['permission'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['permission']->_loop = false;
 $_smarty_tpl->tpl_vars['permission_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['resources']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['permission']->key => $_smarty_tpl->tpl_vars['permission']->value){
$_smarty_tpl->tpl_vars['permission']->_loop = true;
 $_smarty_tpl->tpl_vars['permission_id']->value = $_smarty_tpl->tpl_vars['permission']->key;
?>
	    	<?php if ($_smarty_tpl->tpl_vars['permission']->value['group']==$_smarty_tpl->tpl_vars['group']->value){?>
	        	<tr class="<?php echo smarty_function_cycle(array('values'=>'evenrow,oddrow'),$_smarty_tpl);?>
">
	        		<td><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['permission']->value['title'];?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</td>
	        		<td>
	        			<?php if ($_smarty_tpl->tpl_vars['type']->value=='user'){?>
	        				<?php if ($_smarty_tpl->tpl_vars['acl']->value->isAllowed($_smarty_tpl->tpl_vars['permission']->value['name'],$_smarty_tpl->tpl_vars['role']->value)){?>
	        					<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Allowed<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	        				<?php }else{ ?>
	        					<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Denied<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
 <?php if ($_smarty_tpl->tpl_vars['permission']->value['optional']){?>(<?php if ($_smarty_tpl->tpl_vars['acl']->value->getPermissionParams($_smarty_tpl->tpl_vars['permission']->value['name'],$_smarty_tpl->tpl_vars['role']->value)=="message"){?><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Show message<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }else{ ?><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Hidden<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }?>)<?php }?>
	        				<?php }?>
	        			<?php }elseif($_smarty_tpl->tpl_vars['type']->value=='guest'||$_smarty_tpl->tpl_vars['type']->value=='group'||$_smarty_tpl->tpl_vars['permission']->value['type']=='product'){?>
	            			<label for="<?php echo $_smarty_tpl->tpl_vars['permission']->value['name'];?>
_allow"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Allow<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</label>
	            			<input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['permission']->value['name'];?>
" value="deny" />
	            			<input id="<?php echo $_smarty_tpl->tpl_vars['permission']->value['name'];?>
_allow" type="checkbox" name="<?php echo $_smarty_tpl->tpl_vars['permission']->value['name'];?>
" value="allow" <?php if ($_smarty_tpl->tpl_vars['permission']->value['value']=="allow"){?>checked="checked"<?php }?> onclick="viewPermission(this, '<?php echo $_smarty_tpl->tpl_vars['permission']->value['value'];?>
');" class="permissionSelect" />
	        			<?php }else{ ?>
							<select name="<?php echo $_smarty_tpl->tpl_vars['permission']->value['name'];?>
" onclick="viewPermission(this, '<?php echo $_smarty_tpl->tpl_vars['permission']->value['value'];?>
');" class="permissionSelect">
								<option value="inherit" <?php if ($_smarty_tpl->tpl_vars['permission']->value['value']!="allow"&&$_smarty_tpl->tpl_vars['permission']->value['value']!="deny"){?>selected="selected"<?php }?>><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Use user group permission<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</option>
								<option value="allow" <?php if ($_smarty_tpl->tpl_vars['permission']->value['value']=="allow"){?>selected="selected"<?php }?>><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Allow<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</option>
								<option value="deny" <?php if ($_smarty_tpl->tpl_vars['permission']->value['value']=="deny"){?>selected="selected"<?php }?>><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Deny<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</option>
							</select>
	        			<?php }?>
	            		<?php if ($_smarty_tpl->tpl_vars['permission']->value['limitable']&&$_smarty_tpl->tpl_vars['type']->value=='product'){?>
	                		<div id="<?php echo $_smarty_tpl->tpl_vars['permission']->value['name'];?>
_amountPermissions">
		            			<?php if (strpos($_smarty_tpl->tpl_vars['permission']->value['name'],'post')!==false){?><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Number of postings<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }else{ ?><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Number of views<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }?> <input size="4" type="text" name="<?php echo $_smarty_tpl->tpl_vars['permission']->value['name'];?>
_params" value="<?php echo $_smarty_tpl->tpl_vars['permission']->value['params'];?>
" />
		            			<br /><div style="font-size: 9px"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Set empty or 0 for unlimited number.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</div>
	            			</div>
	            		<?php }?>
	            		<?php if ($_smarty_tpl->tpl_vars['permission']->value['optional']&&$_smarty_tpl->tpl_vars['type']->value!='user'){?>
	            			<input type="hidden" id="<?php echo $_smarty_tpl->tpl_vars['permission']->value['name'];?>
_userGroup" value="<?php if ($_smarty_tpl->tpl_vars['acl']->value->isAllowed($_smarty_tpl->tpl_vars['permission']->value['name'],$_smarty_tpl->tpl_vars['membershipPlanInfo']->value['user_group_sid'],'group')){?>1<?php }else{ ?>0<?php }?>" />
	                		<div id="<?php echo $_smarty_tpl->tpl_vars['permission']->value['name'];?>
_typePermissions">
		            			<input size="4" type="radio" name="<?php echo $_smarty_tpl->tpl_vars['permission']->value['name'];?>
_params1" value="hide" <?php if ($_smarty_tpl->tpl_vars['permission']->value['params']!="message"&&$_smarty_tpl->tpl_vars['permission']->value['params']!="login_request"){?>checked="checked"<?php }?> onclick="viewMessage('<?php echo $_smarty_tpl->tpl_vars['permission']->value['name'];?>
')" />&nbsp;<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Hide Option<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		            			<br />
								<?php if ($_smarty_tpl->tpl_vars['permission_id']->value=='apply_for_a_job'&&$_smarty_tpl->tpl_vars['type']->value=='guest'){?>
									<input size="4" type="radio" name="<?php echo $_smarty_tpl->tpl_vars['permission']->value['name'];?>
_params1" value="login_request" <?php if ($_smarty_tpl->tpl_vars['permission']->value['params']=="login_request"){?>checked="checked"<?php }?> onclick="viewMessage('<?php echo $_smarty_tpl->tpl_vars['permission']->value['name'];?>
')" />&nbsp;<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Show Option with Login Request<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

									<br />
								<?php }?>
								<input size="4" type="radio" name="<?php echo $_smarty_tpl->tpl_vars['permission']->value['name'];?>
_params1" value="message" <?php if ($_smarty_tpl->tpl_vars['permission']->value['params']=="message"){?>checked="checked"<?php }?> onclick="viewMessage('<?php echo $_smarty_tpl->tpl_vars['permission']->value['name'];?>
')" />&nbsp;<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Show Option with Message<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	            			</div>
	            			<textarea name="<?php echo $_smarty_tpl->tpl_vars['permission']->value['name'];?>
_message" id="<?php echo $_smarty_tpl->tpl_vars['permission']->value['name'];?>
_messagePermissions"><?php echo $_smarty_tpl->tpl_vars['permission']->value['message'];?>
</textarea>
	            		<?php }?>
	        		</td>
	        		<td>
	            		<?php if ($_smarty_tpl->tpl_vars['type']->value=='user'){?>
	    					<?php if ($_smarty_tpl->tpl_vars['permission']->value['limitable']&&$_smarty_tpl->tpl_vars['acl']->value->isAllowed($_smarty_tpl->tpl_vars['permission']->value['name'],$_smarty_tpl->tpl_vars['role']->value)){?>
	    						<?php if ($_smarty_tpl->tpl_vars['acl']->value->getPermissionParams($_smarty_tpl->tpl_vars['permission']->value['name'],$_smarty_tpl->tpl_vars['role']->value)){?>
	    							<?php echo $_smarty_tpl->tpl_vars['acl']->value->getPermissionParams($_smarty_tpl->tpl_vars['permission']->value['name'],$_smarty_tpl->tpl_vars['role']->value);?>

	    							<?php if ($_smarty_tpl->tpl_vars['acl']->value->getPermissionParams($_smarty_tpl->tpl_vars['permission']->value['name'],$_smarty_tpl->tpl_vars['role']->value)==1){?>
	    								<?php if (strpos($_smarty_tpl->tpl_vars['permission']->value['name'],'post')!==false){?>
	    									<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
posting<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	    								<?php }else{ ?>
	    									<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
use<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	    								<?php }?>
	    							<?php }else{ ?>
	    								<?php if (strpos($_smarty_tpl->tpl_vars['permission']->value['name'],'post')!==false){?>
	    									<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
postings<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	    								<?php }else{ ?>
	    									<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
uses<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	    								<?php }?>
	    							<?php }?>
	    						<?php }else{ ?>
									<?php if (strpos($_smarty_tpl->tpl_vars['permission']->value['name'],'post')!==false){?>
										<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
unlimited postings<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

									<?php }else{ ?>
										<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
unlimited use<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

									<?php }?>
	    						<?php }?>
	    					<?php }?>
	            		<?php }?>
	            		<?php if ($_smarty_tpl->tpl_vars['type']->value=='product'&&$_smarty_tpl->tpl_vars['user_group_sid']->value){?>
		    				<?php if ($_smarty_tpl->tpl_vars['acl']->value->isAllowed($_smarty_tpl->tpl_vars['permission']->value['name'],$_smarty_tpl->tpl_vars['user_group_sid']->value,"group")){?>
		    					<?php if ($_smarty_tpl->tpl_vars['permission']->value['limitable']){?>
	    							<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
unlimited<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	    						<?php }else{ ?>
	    							<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
allow<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	    						<?php }?>
	        				<?php }else{ ?>
	        					<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
deny<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	        				<?php }?>
	            		<?php }?>
	        		</td>
	        	</tr>
	    	<?php }?>
	    <?php } ?>
	</tbody>
</table><?php }} ?>