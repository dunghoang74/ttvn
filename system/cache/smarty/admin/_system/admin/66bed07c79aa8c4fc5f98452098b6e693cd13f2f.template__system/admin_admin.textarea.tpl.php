<?php /* Smarty version Smarty-3.1.13, created on 2014-12-18 13:29:29
         compiled from "template__system/admin_admin:../field_types/input/textarea.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12330549274496b8079-33555432%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '66bed07c79aa8c4fc5f98452098b6e693cd13f2f' => 
    array (
      0 => 'template__system/admin_admin:../field_types/input/textarea.tpl',
      1 => 1330583216,
      2 => 'template__system/admin_admin',
    ),
  ),
  'nocache_hash' => '12330549274496b8079-33555432',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'id' => 0,
    'wysiwygType' => 0,
    'value' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_54927449b2cb81_85087422',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54927449b2cb81_85087422')) {function content_54927449b2cb81_85087422($_smarty_tpl) {?><?php $_smarty_tpl->_capture_stack[0][] = array("wysiwygName", null, null); ob_start(); ?><?php echo $_smarty_tpl->tpl_vars['id']->value;?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php $_smarty_tpl->_capture_stack[0][] = array("wysiwygClass", null, null); ob_start(); ?>inputText<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php $_smarty_tpl->tpl_vars['wysiwygType'] = new Smarty_variable('none', null, 0);?>
                                                         
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['WYSIWYGEditor'][0][0]->WYSIWYGEditor(array('name'=>Smarty::$_smarty_vars['capture']['wysiwygName'],'class'=>Smarty::$_smarty_vars['capture']['wysiwygClass'],'width'=>"40%",'height'=>"100",'type'=>$_smarty_tpl->tpl_vars['wysiwygType']->value,'value'=>$_smarty_tpl->tpl_vars['value']->value,'conf'=>"BasicAdmin"),$_smarty_tpl);?>
<?php }} ?>