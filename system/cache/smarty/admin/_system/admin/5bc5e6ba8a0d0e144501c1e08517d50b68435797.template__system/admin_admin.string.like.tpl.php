<?php /* Smarty version Smarty-3.1.13, created on 2014-12-18 13:24:30
         compiled from "template__system/admin_admin:../field_types/search/string.like.tpl" */ ?>
<?php /*%%SmartyHeaderCode:190345492731e382104-34871587%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5bc5e6ba8a0d0e144501c1e08517d50b68435797' => 
    array (
      0 => 'template__system/admin_admin:../field_types/search/string.like.tpl',
      1 => 1378267314,
      2 => 'template__system/admin_admin',
    ),
  ),
  'nocache_hash' => '190345492731e382104-34871587',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'id' => 0,
    'value' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5492731e84cb13_89324905',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5492731e84cb13_89324905')) {function content_5492731e84cb13_89324905($_smarty_tpl) {?><input type="text" name="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
[like]" value="<?php if (is_array($_smarty_tpl->tpl_vars['value']->value)){?><?php if ($_smarty_tpl->tpl_vars['value']->value['like']){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value['like'], ENT_QUOTES, 'UTF-8', true);?>
<?php }elseif($_smarty_tpl->tpl_vars['value']->value['equal']){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value['equal'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?><?php }else{ ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php }?>" /><?php }} ?>