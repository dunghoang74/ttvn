<?php /* Smarty version Smarty-3.1.13, created on 2014-12-22 20:18:43
         compiled from "template_smartjobboard_user:templates/_system/flash_messages/flash_errors.tpl" */ ?>
<?php /*%%SmartyHeaderCode:320054981a33dac822-94206089%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8d9890aad527769fb29be4efa788e05a7b564579' => 
    array (
      0 => 'template_smartjobboard_user:templates/_system/flash_messages/flash_errors.tpl',
      1 => 1389154216,
      2 => 'template_smartjobboard_user',
    ),
  ),
  'nocache_hash' => '320054981a33dac822-94206089',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'messagesArray' => 0,
    'messages' => 0,
    'message' => 0,
    'messageId' => 0,
    'METADATA' => 0,
    'type' => 0,
    'messageValue' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_54981a350db842_47080300',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54981a350db842_47080300')) {function content_54981a350db842_47080300($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['messages'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['messages']->_loop = false;
 $_smarty_tpl->tpl_vars['type'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['messagesArray']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['messages']->key => $_smarty_tpl->tpl_vars['messages']->value){
$_smarty_tpl->tpl_vars['messages']->_loop = true;
 $_smarty_tpl->tpl_vars['type']->value = $_smarty_tpl->tpl_vars['messages']->key;
?>
	<?php  $_smarty_tpl->tpl_vars['message'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['message']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['messages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['message']->key => $_smarty_tpl->tpl_vars['message']->value){
$_smarty_tpl->tpl_vars['message']->_loop = true;
?>
		<?php if (is_array($_smarty_tpl->tpl_vars['message']->value)){?>
			<?php $_smarty_tpl->tpl_vars['messageId'] = new Smarty_variable($_smarty_tpl->tpl_vars['message']->value['messageId'], null, 0);?>
		<?php }else{ ?>
			<?php $_smarty_tpl->tpl_vars['messageId'] = new Smarty_variable($_smarty_tpl->tpl_vars['message']->value, null, 0);?>
		<?php }?>
		
		<?php $_smarty_tpl->_capture_stack[0][] = array('default', 'messageValue', null); ob_start(); ?>
			
			<?php if ($_smarty_tpl->tpl_vars['messageId']->value=='EMPTY_VALUE'){?>
				'<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('metadata'=>$_smarty_tpl->tpl_vars['METADATA']->value['message']['fieldCaption'])); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array('metadata'=>$_smarty_tpl->tpl_vars['METADATA']->value['message']['fieldCaption']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['message']->value['fieldCaption'];?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array('metadata'=>$_smarty_tpl->tpl_vars['METADATA']->value['message']['fieldCaption']), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
' <?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
is empty<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			
			
			<?php }elseif($_smarty_tpl->tpl_vars['messageId']->value=='ERROR_SEND_ACTIVATION_EMAIL'){?>
				<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Failed to send activation email<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			
			
			<?php }elseif($_smarty_tpl->tpl_vars['messageId']->value=="CANT_CREATE_EXPORT_FILES"){?>
				<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Cannot create export files<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			<?php }elseif($_smarty_tpl->tpl_vars['messageId']->value=="EMPTY_EXPORT_PROPERTIES"){?>
				<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
There are no selected properties. Select at least one property to export.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			<?php }elseif($_smarty_tpl->tpl_vars['messageId']->value=='EMPTY_EXPORT_DATA'){?>
				<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
There is no data to export. Change your search criteria.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			
			
			<?php }elseif($_smarty_tpl->tpl_vars['messageId']->value=='NOT_OWNER_OF_APPLICATIONS'){?>
				<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
There are no applications for "$message.listingTitle" listing<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			
			<?php }elseif($_smarty_tpl->tpl_vars['messageId']->value=='TCPDF_ERROR'){?>
				<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Error generating PDF<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			<?php }elseif($_smarty_tpl->tpl_vars['messageId']->value=='ERROR_ADD_BANNER_GROUP'){?>
				<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
System error while adding new banner group<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			<?php }elseif($_smarty_tpl->tpl_vars['messageId']->value=='CHANGES_SAVED'){?>
				<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Your changes were successfully saved<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			<?php }else{ ?>
				<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('metadata'=>$_smarty_tpl->tpl_vars['METADATA']->value['messageId'])); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array('metadata'=>$_smarty_tpl->tpl_vars['METADATA']->value['messageId']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['messageId']->value;?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array('metadata'=>$_smarty_tpl->tpl_vars['METADATA']->value['messageId']), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			<?php }?>
		<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
		
		<p class="<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['messageValue']->value, ENT_QUOTES, 'UTF-8', true);?>
</p>
	<?php } ?>
<?php } ?>
<?php }} ?>