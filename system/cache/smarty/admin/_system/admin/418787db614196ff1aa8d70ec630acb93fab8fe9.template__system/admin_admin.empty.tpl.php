<?php /* Smarty version Smarty-3.1.13, created on 2014-12-18 13:18:38
         compiled from "template__system/admin_admin:empty.tpl" */ ?>
<?php /*%%SmartyHeaderCode:28535549271be057584-41225522%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '418787db614196ff1aa8d70ec630acb93fab8fe9' => 
    array (
      0 => 'template__system/admin_admin:empty.tpl',
      1 => 1384423920,
      2 => 'template__system/admin_admin',
    ),
  ),
  'nocache_hash' => '28535549271be057584-41225522',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MAIN_CONTENT' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_549271be1709c1_32921025',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_549271be1709c1_32921025')) {function content_549271be1709c1_32921025($_smarty_tpl) {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['module'][0][0]->module(array('name'=>'flash_messages','function'=>'display'),$_smarty_tpl);?>
<?php echo $_smarty_tpl->tpl_vars['MAIN_CONTENT']->value;?>
<?php }} ?>