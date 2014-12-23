<?php /* Smarty version Smarty-3.1.13, created on 2014-12-22 21:32:00
         compiled from "template_progressiveview_user:../field_types/input/boolean.tpl" */ ?>
<?php /*%%SmartyHeaderCode:795654982b605482e9-28729791%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e81109d865ea672724866fb2fdb7f32c8155ee21' => 
    array (
      0 => 'template_progressiveview_user:../field_types/input/boolean.tpl',
      1 => 1275881746,
      2 => 'template_progressiveview_user',
    ),
  ),
  'nocache_hash' => '795654982b605482e9-28729791',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'complexField' => 0,
    'id' => 0,
    'complexStep' => 0,
    'value' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_54982b60c8ba93_03133714',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54982b60c8ba93_03133714')) {function content_54982b60c8ba93_03133714($_smarty_tpl) {?><input type="hidden" class="<?php if ($_smarty_tpl->tpl_vars['complexField']->value){?>complexField<?php }?>" name="<?php if ($_smarty_tpl->tpl_vars['complexField']->value){?><?php echo $_smarty_tpl->tpl_vars['complexField']->value;?>
[<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
][<?php echo $_smarty_tpl->tpl_vars['complexStep']->value;?>
]<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['id']->value;?>
<?php }?>" value="0" />
<input type="checkbox" class="<?php if ($_smarty_tpl->tpl_vars['complexField']->value){?>complexField<?php }?>" name="<?php if ($_smarty_tpl->tpl_vars['complexField']->value){?><?php echo $_smarty_tpl->tpl_vars['complexField']->value;?>
[<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
][<?php echo $_smarty_tpl->tpl_vars['complexStep']->value;?>
]<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['id']->value;?>
<?php }?>" id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['value']->value){?>checked="checked" <?php }?> value="1" /><?php }} ?>