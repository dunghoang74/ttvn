<?php /* Smarty version Smarty-3.1.13, created on 2014-12-22 21:31:58
         compiled from "template_progressiveview_user:../field_types/input/unique_string.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2470554982b5ecd1888-11602763%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9694af64237b8e4cebe75c17e67b166ff0fdd28a' => 
    array (
      0 => 'template_progressiveview_user:../field_types/input/unique_string.tpl',
      1 => 1337681658,
      2 => 'template_progressiveview_user',
    ),
  ),
  'nocache_hash' => '2470554982b5ecd1888-11602763',
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
  'unifunc' => 'content_54982b5f1a24f3_26831032',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54982b5f1a24f3_26831032')) {function content_54982b5f1a24f3_26831032($_smarty_tpl) {?><input type="text" value="<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
" class="<?php if ($_smarty_tpl->tpl_vars['complexField']->value){?>complexField<?php }?>" name="<?php if ($_smarty_tpl->tpl_vars['complexField']->value){?><?php echo $_smarty_tpl->tpl_vars['complexField']->value;?>
[<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
][<?php echo $_smarty_tpl->tpl_vars['complexStep']->value;?>
]<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['id']->value;?>
<?php }?>" onblur="checkField($(this), '<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
')"/><span class="aMessage" id="am_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"></span><?php }} ?>