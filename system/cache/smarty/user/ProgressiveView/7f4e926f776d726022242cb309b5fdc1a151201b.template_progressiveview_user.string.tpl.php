<?php /* Smarty version Smarty-3.1.13, created on 2014-12-22 21:32:00
         compiled from "template_progressiveview_user:../field_types/input/string.tpl" */ ?>
<?php /*%%SmartyHeaderCode:95754982b60cd9ca7-79263077%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7f4e926f776d726022242cb309b5fdc1a151201b' => 
    array (
      0 => 'template_progressiveview_user:../field_types/input/string.tpl',
      1 => 1389325698,
      2 => 'template_progressiveview_user',
    ),
  ),
  'nocache_hash' => '95754982b60cd9ca7-79263077',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'parentID' => 0,
    'id' => 0,
    'value' => 0,
    'complexField' => 0,
    'complexStep' => 0,
    'useAutocomplete' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_54982b61521567_53157384',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54982b61521567_53157384')) {function content_54982b61521567_53157384($_smarty_tpl) {?><input id="<?php if ($_smarty_tpl->tpl_vars['parentID']->value){?><?php echo $_smarty_tpl->tpl_vars['parentID']->value;?>
_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['id']->value;?>
<?php }?>" type="text" value="<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
" class="inputString <?php if ($_smarty_tpl->tpl_vars['complexField']->value){?>complexField<?php }?>" name="<?php if ($_smarty_tpl->tpl_vars['complexField']->value){?><?php echo $_smarty_tpl->tpl_vars['complexField']->value;?>
[<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
][<?php echo $_smarty_tpl->tpl_vars['complexStep']->value;?>
]<?php }elseif($_smarty_tpl->tpl_vars['parentID']->value){?><?php echo $_smarty_tpl->tpl_vars['parentID']->value;?>
[<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
]<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['id']->value;?>
<?php }?>" />

<?php if ($_smarty_tpl->tpl_vars['useAutocomplete']->value==1){?>
	<?php echo $_smarty_tpl->getSubTemplate ('../field_types/search/autocomplete.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }?><?php }} ?>