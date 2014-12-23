<?php /* Smarty version Smarty-3.1.13, created on 2014-12-18 13:18:18
         compiled from "template__system/admin_admin:../field_types/input/youtube.tpl" */ ?>
<?php /*%%SmartyHeaderCode:25530549271aa7a5fb0-56864134%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e99a74bef8e7bfa7eb89d0a12da78eba19d3e578' => 
    array (
      0 => 'template__system/admin_admin:../field_types/input/youtube.tpl',
      1 => 1372916438,
      2 => 'template__system/admin_admin',
    ),
  ),
  'nocache_hash' => '25530549271aa7a5fb0-56864134',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'value' => 0,
    'complexField' => 0,
    'id' => 0,
    'complexStep' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_549271aabe3fb3_93014614',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_549271aabe3fb3_93014614')) {function content_549271aabe3fb3_93014614($_smarty_tpl) {?><input type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="inputString <?php if ($_smarty_tpl->tpl_vars['complexField']->value){?>complexField<?php }?>" name="<?php if ($_smarty_tpl->tpl_vars['complexField']->value){?><?php echo $_smarty_tpl->tpl_vars['complexField']->value;?>
[<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
][<?php echo $_smarty_tpl->tpl_vars['complexStep']->value;?>
]<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['id']->value;?>
<?php }?>" /><br/>
<i><b>e.g.</b> https://www.youtube.com/watch?v=XXXXXXXXXXX</i><?php }} ?>