<?php /* Smarty version Smarty-3.1.13, created on 2014-12-18 13:29:27
         compiled from "template__system/admin_admin:../users/field_errors.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1358954927447c7c3a5-33876050%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e47a46e460ca2311a103da41a1aeef0183126cc0' => 
    array (
      0 => 'template__system/admin_admin:../users/field_errors.tpl',
      1 => 1389855712,
      2 => 'template__system/admin_admin',
    ),
  ),
  'nocache_hash' => '1358954927447c7c3a5-33876050',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'errors' => 0,
    'error' => 0,
    'field_caption' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_549274496371d1_59373288',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_549274496371d1_59373288')) {function content_549274496371d1_59373288($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['error'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['error']->_loop = false;
 $_smarty_tpl->tpl_vars['field_caption'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['errors']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['error']->key => $_smarty_tpl->tpl_vars['error']->value){
$_smarty_tpl->tpl_vars['error']->_loop = true;
 $_smarty_tpl->tpl_vars['field_caption']->value = $_smarty_tpl->tpl_vars['error']->key;
?>
<?php if ($_smarty_tpl->tpl_vars['error']->value=='EMPTY_VALUE'){?>
	<p class="error">'<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['field_caption']->value;?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
' <?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
is empty<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</p>
<?php }elseif($_smarty_tpl->tpl_vars['error']->value=='NOT_UNIQUE_VALUE'){?>
	<p class="error">'<?php echo $_smarty_tpl->tpl_vars['field_caption']->value;?>
' this value is already used in the system</p>
<?php }elseif($_smarty_tpl->tpl_vars['error']->value=='NOT_CONFIRMED'){?>
	<p class="error">'<?php echo $_smarty_tpl->tpl_vars['field_caption']->value;?>
' not confirmed</p>
<?php }elseif($_smarty_tpl->tpl_vars['error']->value=='DATA_LENGTH_IS_EXCEEDED'){?>
	<p class="error">'<?php echo $_smarty_tpl->tpl_vars['field_caption']->value;?>
' length is exceeded</p>
<?php }elseif($_smarty_tpl->tpl_vars['error']->value=='NOT_INT_VALUE'){?>
	<p class="error">'<?php echo $_smarty_tpl->tpl_vars['field_caption']->value;?>
' is not an integer value</p>
<?php }elseif($_smarty_tpl->tpl_vars['error']->value=='OUT_OF_RANGE'){?>
	<p class="error">'<?php echo $_smarty_tpl->tpl_vars['field_caption']->value;?>
' value is out of range</p>
<?php }elseif($_smarty_tpl->tpl_vars['error']->value=='NOT_FLOAT_VALUE'){?>
	<p class="error">'<?php echo $_smarty_tpl->tpl_vars['field_caption']->value;?>
' is not an float value</p>
<?php }elseif($_smarty_tpl->tpl_vars['error']->value=='LOCATION_NOT_EXISTS'){?>
	<p class="error">'<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['field_caption']->value;?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
' <?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
is unknown<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</p>
<?php }elseif($_smarty_tpl->tpl_vars['error']->value=='NOT_VALID_ID_VALUE'){?>
	<p class="error">'<?php echo $_smarty_tpl->tpl_vars['field_caption']->value;?>
' is not valid</p>
<?php }elseif($_smarty_tpl->tpl_vars['error']->value=='RESERVED_ID_VALUE'){?>
	<p class="error"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
"$field_caption" current value is reserved for system<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</p>
<?php }elseif($_smarty_tpl->tpl_vars['error']->value=='NOT_VALID_EMAIL_FORMAT'){?>
	<p class="error">'<?php echo $_smarty_tpl->tpl_vars['field_caption']->value;?>
' is not valid email format</p>
<?php }elseif($_smarty_tpl->tpl_vars['error']->value=='NOT_SUPPORTED_VIDEO_FORMAT'){?>
	<p class="error"> '<?php echo $_smarty_tpl->tpl_vars['field_caption']->value;?>
' this file is not in a supported video file format</p>
<?php }elseif($_smarty_tpl->tpl_vars['error']->value=='NOT_CONVERT_VIDEO'){?>
	<p class="error">'<?php echo $_smarty_tpl->tpl_vars['field_caption']->value;?>
' <?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Could not convert video file<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</p>
<?php }elseif($_smarty_tpl->tpl_vars['error']->value=='Administrator Current Password is Incorrect'){?>
	<p class="error">'<?php echo $_smarty_tpl->tpl_vars['field_caption']->value;?>
' Administrator Current Password is Incorrect</p>
<?php }elseif($_smarty_tpl->tpl_vars['error']->value=='Administrator Current Password is Required'){?>
	<p class="error">'<?php echo $_smarty_tpl->tpl_vars['field_caption']->value;?>
' Administrator Current Password is Incorrect</p>
<?php }elseif($_smarty_tpl->tpl_vars['field_caption']->value=='QTY_FIELDS_IS_EMPTY'){?>
	<p class="error">All the Qty fields in Volume Based Pricing should be filled</p>
<?php }elseif($_smarty_tpl->tpl_vars['field_caption']->value=='QTY_FIELDS_RANGE_ERROR'){?>
	<p class="error">The Qty fields should be filled From: min To: max but not vice versa</p>
<?php }elseif($_smarty_tpl->tpl_vars['field_caption']->value=='EXCEED_LISTING_DURATION'){?>
	<p class="error">The period of 'Featured' and 'Priority' options activity should not exceed the Listing Duration period</p>
<?php }elseif($_smarty_tpl->tpl_vars['error']->value=='NOT_STRING_ID_VALUE'){?>
	<p class="error"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Use at least one A-Z letter value in the '<?php echo $_smarty_tpl->tpl_vars['field_caption']->value;?>
' field<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</p>	
<?php }elseif($_smarty_tpl->tpl_vars['error']->value=='NOT_PLUS_VALUE'){?>
	<p class="error"> '<?php echo $_smarty_tpl->tpl_vars['field_caption']->value;?>
' <?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
The number you have entered is negative. Please enter a positive number<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</p>	
<?php }elseif($_smarty_tpl->tpl_vars['field_caption']->value=='UNLIMITED_PERIOD'){?>
	<p class="error"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Recurring subscription period cannot be unlimited<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</p>
<?php }elseif($_smarty_tpl->tpl_vars['error']->value=='NOT_CORRECT_YOUTUBE_LINK'){?>
	<p class="error"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
YouTube link is not correct<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</p>
<?php }elseif($_smarty_tpl->tpl_vars['field_caption']->value=='BANNED_USER'){?>
	<p class="error"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
User's IP address was banned<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</p>
<?php }elseif($_smarty_tpl->tpl_vars['error']->value=='UPLOAD_ERR_INI_SIZE'){?>
	<p class="error"> '<?php echo $_smarty_tpl->tpl_vars['field_caption']->value;?>
' <?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
File size exceeds system limit. Please check the file size limits on your hosting or upload another file.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</p>
<?php }else{ ?>
	<p class="error"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</p>
<?php }?>
<?php } ?><?php }} ?>