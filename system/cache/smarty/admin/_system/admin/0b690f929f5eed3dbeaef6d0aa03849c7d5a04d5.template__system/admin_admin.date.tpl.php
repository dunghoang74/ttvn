<?php /* Smarty version Smarty-3.1.13, created on 2014-12-18 13:14:22
         compiled from "template__system/admin_admin:../field_types/search/date.tpl" */ ?>
<?php /*%%SmartyHeaderCode:32630549270be014227-82309650%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0b690f929f5eed3dbeaef6d0aa03849c7d5a04d5' => 
    array (
      0 => 'template__system/admin_admin:../field_types/search/date.tpl',
      1 => 1397019456,
      2 => 'template__system/admin_admin',
    ),
  ),
  'nocache_hash' => '32630549270be014227-82309650',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'id' => 0,
    'value' => 0,
    'GLOBALS' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_549270be95f2d4_26358562',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_549270be95f2d4_26358562')) {function content_549270be95f2d4_26358562($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'D:\\xampp\\htdocs\\tuyendungvn\\system\\ext\\Smarty\\libs\\plugins\\modifier.date_format.php';
?><?php $_smarty_tpl->_capture_stack[0][] = array("input_text_field_from", null, null); ob_start(); ?><input type="text" name="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
[not_less]" value="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['current_language_data']['date_format'];?>
<?php $_tmp1=ob_get_clean();?><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['value']->value['not_less'],$_tmp1);?>
" id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
_notless"/><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php $_smarty_tpl->_capture_stack[0][] = array("input_text_field_to", null, null); ob_start(); ?><input type="text" name="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
[not_more]" value="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['current_language_data']['date_format'];?>
<?php $_tmp2=ob_get_clean();?><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['value']->value['not_more'],$_tmp2);?>
" id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
_notmore"/><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php $_smarty_tpl->tpl_vars["input_text_field_from"] = new Smarty_variable(((string)Smarty::$_smarty_vars['capture']['input_text_field_from']), null, 0);?>
<?php $_smarty_tpl->tpl_vars["input_text_field_to"] = new Smarty_variable(((string)Smarty::$_smarty_vars['capture']['input_text_field_to']), null, 0);?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
$input_text_field_from to $input_text_field_to<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<br/><?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['languages'][0]['date_format'];?>
<?php }} ?>