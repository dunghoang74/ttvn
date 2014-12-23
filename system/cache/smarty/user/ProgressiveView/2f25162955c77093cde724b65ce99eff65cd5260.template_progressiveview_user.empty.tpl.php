<?php /* Smarty version Smarty-3.1.13, created on 2014-12-22 21:42:52
         compiled from "template_progressiveview_user:empty.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17854982decc9afe4-67683692%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2f25162955c77093cde724b65ce99eff65cd5260' => 
    array (
      0 => 'template_progressiveview_user:empty.tpl',
      1 => 1384423920,
      2 => 'template_progressiveview_user',
    ),
  ),
  'nocache_hash' => '17854982decc9afe4-67683692',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MAIN_CONTENT' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_54982decda8876_15696721',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54982decda8876_15696721')) {function content_54982decda8876_15696721($_smarty_tpl) {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['module'][0][0]->module(array('name'=>'flash_messages','function'=>'display'),$_smarty_tpl);?>
<?php echo $_smarty_tpl->tpl_vars['MAIN_CONTENT']->value;?>
<?php }} ?>