<?php /* Smarty version Smarty-3.1.13, created on 2014-12-22 20:18:39
         compiled from "template_smartjobboard_user:../field_types/search/monetary.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2126854981a2f1013e2-82239359%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e2f006fa36ca025809cb2c0bd52ae00ffcc64ac5' => 
    array (
      0 => 'template_smartjobboard_user:../field_types/search/monetary.tpl',
      1 => 1364523604,
      2 => 'template_smartjobboard_user',
    ),
  ),
  'nocache_hash' => '2126854981a2f1013e2-82239359',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'id' => 0,
    'value' => 0,
    'list_currency' => 0,
    'list_curr' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_54981a2fd460c3_85758485',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54981a2fd460c3_85758485')) {function content_54981a2fd460c3_85758485($_smarty_tpl) {?><?php $_smarty_tpl->_capture_stack[0][] = array("input_text_field_from", null, null); ob_start(); ?> <input type="text" name="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
[monetary][not_less]" class="searchMoney" value="<?php echo $_smarty_tpl->tpl_vars['value']->value['monetary']['not_less'];?>
" /> <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php $_smarty_tpl->_capture_stack[0][] = array("input_text_field_to", null, null); ob_start(); ?>   <input type="text" name="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
[monetary][not_more]" class="searchMoney" value="<?php echo $_smarty_tpl->tpl_vars['value']->value['monetary']['not_more'];?>
" /> <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_smarty_tpl->tpl_vars["input_text_field_from"] = new Smarty_variable(((string)Smarty::$_smarty_vars['capture']['input_text_field_from']), null, 0);?>
<?php $_smarty_tpl->tpl_vars["input_text_field_to"] = new Smarty_variable(((string)Smarty::$_smarty_vars['capture']['input_text_field_to']), null, 0);?>

<span class="salary-abbr"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
$input_text_field_from to $input_text_field_to<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</span>
<select name='<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
[monetary][currency]' id='<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
_list'>
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
		<option value='<?php echo $_smarty_tpl->tpl_vars['list_curr']->value['currency_code'];?>
' <?php if ($_smarty_tpl->tpl_vars['list_curr']->value['currency_code']==$_smarty_tpl->tpl_vars['value']->value['monetary']['currency']||(!$_smarty_tpl->tpl_vars['value']->value['monetary']['currency']&&$_smarty_tpl->tpl_vars['list_curr']->value['main']==1)){?>selected="selected"<?php }?> ><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('mode'=>"raw")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array('mode'=>"raw"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['list_curr']->value['currency_sign'];?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array('mode'=>"raw"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</option>
	<?php } ?>
</select><?php }} ?>