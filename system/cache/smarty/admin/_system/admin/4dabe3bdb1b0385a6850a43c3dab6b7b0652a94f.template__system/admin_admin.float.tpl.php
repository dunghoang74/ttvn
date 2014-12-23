<?php /* Smarty version Smarty-3.1.13, created on 2014-12-18 13:29:31
         compiled from "template__system/admin_admin:../field_types/input/float.tpl" */ ?>
<?php /*%%SmartyHeaderCode:34735492744b30b048-64461972%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4dabe3bdb1b0385a6850a43c3dab6b7b0652a94f' => 
    array (
      0 => 'template__system/admin_admin:../field_types/input/float.tpl',
      1 => 1387250308,
      2 => 'template__system/admin_admin',
    ),
  ),
  'nocache_hash' => '34735492744b30b048-64461972',
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
  'unifunc' => 'content_5492744b89ce13_56175606',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5492744b89ce13_56175606')) {function content_5492744b89ce13_56175606($_smarty_tpl) {?><input type="text" class="inputInteger <?php if ($_smarty_tpl->tpl_vars['complexField']->value){?>complexField<?php }?>" value="<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('type'=>"float")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array('type'=>"float"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo (($tmp = @$_smarty_tpl->tpl_vars['value']->value)===null||$tmp==='' ? 0 : $tmp);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array('type'=>"float"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
" name="<?php if ($_smarty_tpl->tpl_vars['complexField']->value){?><?php echo $_smarty_tpl->tpl_vars['complexField']->value;?>
[<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
][<?php echo $_smarty_tpl->tpl_vars['complexStep']->value;?>
]<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['id']->value;?>
<?php }?>" <?php if ($_smarty_tpl->tpl_vars['id']->value=='price_per_unit'||$_smarty_tpl->tpl_vars['id']->value=='renewal_price_per_listing'||$_smarty_tpl->tpl_vars['id']->value=='amount'||$_smarty_tpl->tpl_vars['id']->value=='price'){?>style="width: 90px;"<?php }?> />
<?php }} ?>