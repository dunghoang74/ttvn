<?php /* Smarty version Smarty-3.1.13, created on 2014-12-22 21:32:19
         compiled from "template_progressiveview_user:../field_types/input/text.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1850854982b73a45ef3-40471325%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '139f79eb125d9920abb35951b8795332756e6770' => 
    array (
      0 => 'template_progressiveview_user:../field_types/input/text.tpl',
      1 => 1335942214,
      2 => 'template_progressiveview_user',
    ),
  ),
  'nocache_hash' => '1850854982b73a45ef3-40471325',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'complexField' => 0,
    'id' => 0,
    'complexStep' => 0,
    'wysiwygType' => 0,
    'value' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_54982b743f8c97_64010355',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54982b743f8c97_64010355')) {function content_54982b743f8c97_64010355($_smarty_tpl) {?><?php $_smarty_tpl->_capture_stack[0][] = array("wysiwygName", null, null); ob_start(); ?><?php if ($_smarty_tpl->tpl_vars['complexField']->value){?><?php echo $_smarty_tpl->tpl_vars['complexField']->value;?>
[<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
][<?php echo $_smarty_tpl->tpl_vars['complexStep']->value;?>
]<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['id']->value;?>
<?php }?><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php $_smarty_tpl->_capture_stack[0][] = array("wysiwygClass", null, null); ob_start(); ?>inputText<?php if ($_smarty_tpl->tpl_vars['complexField']->value){?> complexField<?php }?><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php $_smarty_tpl->tpl_vars['wysiwygType'] = new Smarty_variable('ckeditor', null, 0);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['WYSIWYGEditor'][0][0]->WYSIWYGEditor(array('name'=>Smarty::$_smarty_vars['capture']['wysiwygName'],'class'=>Smarty::$_smarty_vars['capture']['wysiwygClass'],'width'=>"555px",'height'=>"300",'type'=>$_smarty_tpl->tpl_vars['wysiwygType']->value,'value'=>$_smarty_tpl->tpl_vars['value']->value,'conf'=>"Basic"),$_smarty_tpl);?>
<?php }} ?>