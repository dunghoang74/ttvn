<?php /* Smarty version Smarty-3.1.13, created on 2014-12-18 13:18:15
         compiled from "template__system/admin_admin:../field_types/input/geo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:25564549271a75382f8-64611061%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a9b56f0577c89c0917ccb4498da45b76844262fb' => 
    array (
      0 => 'template__system/admin_admin:../field_types/input/geo.tpl',
      1 => 1378267314,
      2 => 'template__system/admin_admin',
    ),
  ),
  'nocache_hash' => '25564549271a75382f8-64611061',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'complexField' => 0,
    'value' => 0,
    'id' => 0,
    'complexStep' => 0,
    'parentID' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_549271a79b4b00_37589991',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_549271a79b4b00_37589991')) {function content_549271a79b4b00_37589991($_smarty_tpl) {?><input type="text" class="inputGeo <?php if ($_smarty_tpl->tpl_vars['complexField']->value){?>complexField<?php }?>" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8', true);?>
" name="<?php if ($_smarty_tpl->tpl_vars['complexField']->value){?><?php echo $_smarty_tpl->tpl_vars['complexField']->value;?>
[<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
][<?php echo $_smarty_tpl->tpl_vars['complexStep']->value;?>
]<?php }elseif($_smarty_tpl->tpl_vars['parentID']->value){?><?php echo $_smarty_tpl->tpl_vars['parentID']->value;?>
[<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
]<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['id']->value;?>
<?php }?>" /><?php }} ?>