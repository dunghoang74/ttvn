<?php /* Smarty version Smarty-3.1.13, created on 2014-12-22 21:31:00
         compiled from "template_progressiveview_user:drop_down_menu_products.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2940554982b24c5a7e5-18754436%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '93233ac55fcaf474c8957fb096e472734e58e9dd' => 
    array (
      0 => 'template_progressiveview_user:drop_down_menu_products.tpl',
      1 => 1364272686,
      2 => 'template_progressiveview_user',
    ),
  ),
  'nocache_hash' => '2940554982b24c5a7e5-18754436',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'GLOBALS' => 0,
    'user_group' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_54982b250640a7_03708368',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54982b250640a7_03708368')) {function content_54982b250640a7_03708368($_smarty_tpl) {?><ul>
<?php  $_smarty_tpl->tpl_vars['user_group'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['user_group']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['GLOBALS']->value['user_groups']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['user_group']->key => $_smarty_tpl->tpl_vars['user_group']->value){
$_smarty_tpl->tpl_vars['user_group']->_loop = true;
?>
    <li><a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/<?php echo mb_strtolower($_smarty_tpl->tpl_vars['user_group']->value['id'], 'UTF-8');?>
-products/"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['user_group']->value['name'];?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a></li>
<?php } ?>
</ul>
<?php }} ?>