<?php /* Smarty version Smarty-3.1.13, created on 2014-12-18 13:29:30
         compiled from "template__system/admin_admin:../field_types/input/integer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:70965492744a8fe510-79839545%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6fa5f12340e4c61b5c3332b6ddc87627eb7d779d' => 
    array (
      0 => 'template__system/admin_admin:../field_types/input/integer.tpl',
      1 => 1378267314,
      2 => 'template__system/admin_admin',
    ),
  ),
  'nocache_hash' => '70965492744a8fe510-79839545',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'complexField' => 0,
    'value' => 0,
    'id' => 0,
    'complexStep' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5492744b20d180_77921801',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5492744b20d180_77921801')) {function content_5492744b20d180_77921801($_smarty_tpl) {?><input type="text" class="inputInteger <?php if ($_smarty_tpl->tpl_vars['complexField']->value){?>complexField<?php }?>" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8', true);?>
" name="<?php if ($_smarty_tpl->tpl_vars['complexField']->value){?><?php echo $_smarty_tpl->tpl_vars['complexField']->value;?>
[<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
][<?php echo $_smarty_tpl->tpl_vars['complexStep']->value;?>
]<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['id']->value;?>
<?php }?>" id=<?php if ($_smarty_tpl->tpl_vars['complexField']->value){?><?php echo $_smarty_tpl->tpl_vars['complexField']->value;?>
[<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
][<?php echo $_smarty_tpl->tpl_vars['complexStep']->value;?>
]<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['id']->value;?>
<?php }?> <?php if ($_smarty_tpl->tpl_vars['id']->value=='listings_range_to'||$_smarty_tpl->tpl_vars['id']->value=='listings_range_from'||$_smarty_tpl->tpl_vars['id']->value=='period'||$_smarty_tpl->tpl_vars['id']->value=='featured_period'||$_smarty_tpl->tpl_vars['id']->value=='priority_period'||$_smarty_tpl->tpl_vars['id']->value=='qty'){?>style="width: 50px;"<?php }?>/><?php }} ?>