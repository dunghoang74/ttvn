<?php /* Smarty version Smarty-3.1.13, created on 2014-12-18 13:14:25
         compiled from "template__system/admin_admin:../field_types/search/boolean.tpl" */ ?>
<?php /*%%SmartyHeaderCode:28237549270c1210a50-36438230%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '56931ae158f6ec6bc129f27fcf92bc3e35dd56a1' => 
    array (
      0 => 'template__system/admin_admin:../field_types/search/boolean.tpl',
      1 => 1240375118,
      2 => 'template__system/admin_admin',
    ),
  ),
  'nocache_hash' => '28237549270c1210a50-36438230',
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
  'unifunc' => 'content_549270c135cb29_42346983',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_549270c135cb29_42346983')) {function content_549270c135cb29_42346983($_smarty_tpl) {?><input type="checkbox" name="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
[equal]" <?php if ($_smarty_tpl->tpl_vars['value']->value['equal']=='1'){?>checked="checked"<?php }?> value="1"/><?php }} ?>