<?php /* Smarty version Smarty-3.1.13, created on 2014-12-18 13:31:20
         compiled from "template__system/admin_admin:../field_types/input/password.tpl" */ ?>
<?php /*%%SmartyHeaderCode:571549274b81ae917-13167115%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '498c650a9c35211c75a6bb6824bd581f44110ffe' => 
    array (
      0 => 'template__system/admin_admin:../field_types/input/password.tpl',
      1 => 1284374810,
      2 => 'template__system/admin_admin',
    ),
  ),
  'nocache_hash' => '571549274b81ae917-13167115',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'complexField' => 0,
    'id' => 0,
    'complexStep' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_549274b87f0390_53759876',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_549274b87f0390_53759876')) {function content_549274b87f0390_53759876($_smarty_tpl) {?><input type="password"  name="<?php if ($_smarty_tpl->tpl_vars['complexField']->value){?><?php echo $_smarty_tpl->tpl_vars['complexField']->value;?>
[<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
][<?php echo $_smarty_tpl->tpl_vars['complexStep']->value;?>
][original]<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['id']->value;?>
[original]<?php }?>" class="inputString <?php if ($_smarty_tpl->tpl_vars['complexField']->value){?>complexField<?php }?>" /><br />
<input type="password"  name="<?php if ($_smarty_tpl->tpl_vars['complexField']->value){?><?php echo $_smarty_tpl->tpl_vars['complexField']->value;?>
[<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
][<?php echo $_smarty_tpl->tpl_vars['complexStep']->value;?>
][confirmed]<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['id']->value;?>
[confirmed]<?php }?>" class="inputString <?php if ($_smarty_tpl->tpl_vars['complexField']->value){?>complexField<?php }?>" style="margin-top:2px;" /><br />
<span style="font-size:11px"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Confirm Password<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</span><?php }} ?>