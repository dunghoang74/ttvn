<?php /* Smarty version Smarty-3.1.13, created on 2014-12-22 21:44:14
         compiled from "template_progressiveview_user:../field_types/input/monetary.tpl" */ ?>
<?php /*%%SmartyHeaderCode:514954982e3e0715c0-32782027%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bc8314fcc25aa34940d1a2362cc3a0d4d77b63eb' => 
    array (
      0 => 'template_progressiveview_user:../field_types/input/monetary.tpl',
      1 => 1378267314,
      2 => 'template_progressiveview_user',
    ),
  ),
  'nocache_hash' => '514954982e3e0715c0-32782027',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'value' => 0,
    'complexField' => 0,
    'id' => 0,
    'complexStep' => 0,
    'list_currency' => 0,
    'list_curr' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_54982e3ec8f1a6_65835400',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54982e3ec8f1a6_65835400')) {function content_54982e3ec8f1a6_65835400($_smarty_tpl) {?><input type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value['value'], ENT_QUOTES, 'UTF-8', true);?>
" class="inputStringMoney <?php if ($_smarty_tpl->tpl_vars['complexField']->value){?>complexField<?php }?>" name="<?php if ($_smarty_tpl->tpl_vars['complexField']->value){?><?php echo $_smarty_tpl->tpl_vars['complexField']->value;?>
[<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
][<?php echo $_smarty_tpl->tpl_vars['complexStep']->value;?>
][value]<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['id']->value;?>
[value]<?php }?>" />
<select name="<?php if ($_smarty_tpl->tpl_vars['complexField']->value){?><?php echo $_smarty_tpl->tpl_vars['complexField']->value;?>
[<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
][<?php echo $_smarty_tpl->tpl_vars['complexStep']->value;?>
][add_parameter]<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['id']->value;?>
[add_parameter]<?php }?>" class="selectCurrency <?php if ($_smarty_tpl->tpl_vars['complexField']->value){?>complexField<?php }?>">
	<option value=""><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Select<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
 <?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Currency<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</option>
	<?php  $_smarty_tpl->tpl_vars['list_curr'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list_curr']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list_currency']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list_curr']->key => $_smarty_tpl->tpl_vars['list_curr']->value){
$_smarty_tpl->tpl_vars['list_curr']->_loop = true;
?>
		<option value='<?php echo $_smarty_tpl->tpl_vars['list_curr']->value['sid'];?>
' <?php if (($_smarty_tpl->tpl_vars['list_curr']->value['sid']==$_smarty_tpl->tpl_vars['value']->value['currency'])||(!$_smarty_tpl->tpl_vars['value']->value['currency']&&$_smarty_tpl->tpl_vars['list_curr']->value['main']==1)){?>selected="selected"<?php }?> ><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('mode'=>"raw")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array('mode'=>"raw"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['list_curr']->value['currency_sign'];?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array('mode'=>"raw"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</option>
	<?php } ?>
</select><?php }} ?>