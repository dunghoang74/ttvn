<?php /* Smarty version Smarty-3.1.13, created on 2014-12-18 13:41:17
         compiled from "template__system/admin_admin:user_group_form_fields.tpl" */ ?>
<?php /*%%SmartyHeaderCode:77605492770d76dfa7-55020665%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '934d6c3c61bc7f369ce935f8ef59c9086648eda3' => 
    array (
      0 => 'template__system/admin_admin:user_group_form_fields.tpl',
      1 => 1392799862,
      2 => 'template__system/admin_admin',
    ),
  ),
  'nocache_hash' => '77605492770d76dfa7-55020665',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'form_fields' => 0,
    'switchColumns' => 0,
    'form_field' => 0,
    'notifications' => 0,
    'notificationGroupID' => 0,
    'notificationGroups' => 0,
    'notificationsByGroup' => 0,
    'notificationID' => 0,
    'user_group_info' => 0,
    'GLOBALS' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5492770f0dea41_71570285',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5492770f0dea41_71570285')) {function content_5492770f0dea41_71570285($_smarty_tpl) {?><table>
<?php  $_smarty_tpl->tpl_vars['form_field'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['form_field']->_loop = false;
 $_smarty_tpl->tpl_vars['field_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['form_fields']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['form_field']->key => $_smarty_tpl->tpl_vars['form_field']->value){
$_smarty_tpl->tpl_vars['form_field']->_loop = true;
 $_smarty_tpl->tpl_vars['field_id']->value = $_smarty_tpl->tpl_vars['form_field']->key;
?>
	<?php if (!$_smarty_tpl->tpl_vars['switchColumns']->value){?>
		<?php if ($_smarty_tpl->tpl_vars['form_field']->value['id']=='after_registration_redirect_to'){?>
			<?php $_smarty_tpl->tpl_vars["switchColumns"] = new Smarty_variable(true, null, 0);?>
		<?php }?>
		<tr>
			<td valign="top" width="42%"><?php echo $_smarty_tpl->tpl_vars['form_field']->value['caption'];?>
</td>
			<td><?php if ($_smarty_tpl->tpl_vars['form_field']->value['is_required']){?><span class="color-red">*</span><?php }?></td>
			<?php if ($_smarty_tpl->tpl_vars['form_field']->value['id']=='after_registration_redirect_to'){?>
				<td><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['input'][0][0]->tpl_input(array('property'=>$_smarty_tpl->tpl_vars['form_field']->value['id'],'template'=>"list_empty.tpl"),$_smarty_tpl);?>

					<div id="after_registration_redirect_to_instruction" style="display: none; font-size: 11px; margin-top:5px;">
						<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
If a user group doesn't have any default products allowing to post users will be redirected to the Products page first<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

					</div>
				</td>
			<?php }else{ ?>
				<td><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['input'][0][0]->tpl_input(array('property'=>$_smarty_tpl->tpl_vars['form_field']->value['id']),$_smarty_tpl);?>
</td>
			<?php }?>
		</tr>
	<?php }else{ ?>
		
	<?php }?>
<?php } ?>
</table>


<div id="mediumButton" class="setting_button"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Notification Settings<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<div class="setting_icon"><div id="accordeonClosed"></div></div></div>
<div  class="setting_block" style="display: none">
	<table>
		<tr>
			<td colspan="3" style='font-size:11px'>
				* <?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
These settings will be applied by default for newly registered users of this group<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
.<br/>
				* <?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Select "None" if you want to disable sending of notification<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
.</td>
		</tr>

		<?php  $_smarty_tpl->tpl_vars["notificationsByGroup"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["notificationsByGroup"]->_loop = false;
 $_smarty_tpl->tpl_vars["notificationGroupID"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['notifications']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["notificationsByGroup"]->key => $_smarty_tpl->tpl_vars["notificationsByGroup"]->value){
$_smarty_tpl->tpl_vars["notificationsByGroup"]->_loop = true;
 $_smarty_tpl->tpl_vars["notificationGroupID"]->value = $_smarty_tpl->tpl_vars["notificationsByGroup"]->key;
?>
			<tr>
				<td colspan="3" style='font-size:16px;font-weight: bold;'><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['notificationGroups']->value[$_smarty_tpl->tpl_vars['notificationGroupID']->value];?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
:</td>
			</tr>
			<?php  $_smarty_tpl->tpl_vars["notification"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["notification"]->_loop = false;
 $_smarty_tpl->tpl_vars["notificationID"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['notificationsByGroup']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["notification"]->key => $_smarty_tpl->tpl_vars["notification"]->value){
$_smarty_tpl->tpl_vars["notification"]->_loop = true;
 $_smarty_tpl->tpl_vars["notificationID"]->value = $_smarty_tpl->tpl_vars["notification"]->key;
?>
				<?php $_smarty_tpl->tpl_vars["form_field"] = new Smarty_variable($_smarty_tpl->tpl_vars['form_fields']->value[$_smarty_tpl->tpl_vars['notificationID']->value], null, 0);?>
				<?php if ($_smarty_tpl->tpl_vars['form_field']->value['type']=='integer'){?>
					<tr>
						<td>&nbsp;</td>
						<td class="notifications"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['input'][0][0]->tpl_input(array('property'=>$_smarty_tpl->tpl_vars['form_field']->value['id']),$_smarty_tpl);?>
</td>
						<td>Days before</td>
					</tr>
				<?php }elseif($_smarty_tpl->tpl_vars['user_group_info']->value['id']!='JobSeeker'&&($_smarty_tpl->tpl_vars['form_field']->value['id']=='notify_on_application_approve'||$_smarty_tpl->tpl_vars['form_field']->value['id']=='notify_on_application_reject')){?>
					
				<?php }else{ ?>
					<tr>
						<td colspan="1"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['form_field']->value['caption'];?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php if ($_smarty_tpl->tpl_vars['form_field']->value['is_required']){?><span class="required">*</span><?php }?></td>
						<td colspan="2">
							<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['input'][0][0]->tpl_input(array('property'=>$_smarty_tpl->tpl_vars['form_field']->value['id'],'template'=>"list_none.tpl"),$_smarty_tpl);?>

							<?php if ($_smarty_tpl->tpl_vars['user_group_info']->value[$_smarty_tpl->tpl_vars['notificationID']->value]&&$_smarty_tpl->tpl_vars['user_group_info']->value[$_smarty_tpl->tpl_vars['notificationID']->value]!='DoNotSend'){?>
								<a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/edit-email-templates/<?php echo $_smarty_tpl->tpl_vars['notificationGroupID']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['user_group_info']->value[$_smarty_tpl->tpl_vars['notificationID']->value];?>
" target="_blank" title="<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Edit<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
 <?php echo $_smarty_tpl->tpl_vars['form_field']->value['caption'];?>
" class="edit-email-template"></a>
							<?php }?>
						</td>
					</tr>
				<?php }?>

			<?php } ?>

		<?php } ?>
	</table>
</div>



<script type="text/javascript">
	$(".setting_button").click(function(){
		var butt = $(this);
		$(this).next(".setting_block").slideToggle("normal", function(){
			if ($(this).css("display") == "block") {
				butt.children(".setting_icon").html("<div id='accordeonOpen'></div>");
			} else {
				butt.children(".setting_icon").html("<div id='accordeonClosed'></div>");
			}
		});
	});

	var afterRegistrationElement = $(".searchList[name|=after_registration_redirect_to]");

	if (afterRegistrationElement.val() == 'posting_page') {
		$("#after_registration_redirect_to_instruction").show();
	}
	afterRegistrationElement.change(function() {
		if (this.value == 'posting_page') {
			$("#after_registration_redirect_to_instruction").show();
		} else {
			$("#after_registration_redirect_to_instruction").hide();
		}
	});

</script>
<?php }} ?>