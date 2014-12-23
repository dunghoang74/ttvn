<?php /* Smarty version Smarty-3.1.13, created on 2014-12-18 13:31:06
         compiled from "template__system/admin_admin:../field_types/search/list_with_reload.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6786549274aa1c02e6-02351915%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c2cfe15fe2375c5ea227ddeaa63230593a3081a0' => 
    array (
      0 => 'template__system/admin_admin:../field_types/search/list_with_reload.tpl',
      1 => 1360313230,
      2 => 'template__system/admin_admin',
    ),
  ),
  'nocache_hash' => '6786549274aa1c02e6-02351915',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'id' => 0,
    'caption' => 0,
    'list_values' => 0,
    'list_value' => 0,
    'selected_listing_type_id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_549274aa658085_15564943',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_549274aa658085_15564943')) {function content_549274aa658085_15564943($_smarty_tpl) {?><select name='<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
[equal]' onchange="reloadWithParameter(this.value)">
	<option value="">Any <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['caption']->value, ENT_QUOTES, 'UTF-8', true);?>
</option>
	<?php  $_smarty_tpl->tpl_vars['list_value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list_value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list_values']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list_value']->key => $_smarty_tpl->tpl_vars['list_value']->value){
$_smarty_tpl->tpl_vars['list_value']->_loop = true;
?>
		<option value='<?php echo $_smarty_tpl->tpl_vars['list_value']->value['id'];?>
' <?php if ($_smarty_tpl->tpl_vars['selected_listing_type_id']->value===$_smarty_tpl->tpl_vars['list_value']->value['id']){?>selected="selected"<?php }?> ><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['list_value']->value['caption'], ENT_QUOTES, 'UTF-8', true);?>
</option>
	<?php } ?>
</select>

<script language="Javascript">
function reloadWithParameter(param)
{
	window.location = "?listing_type_id="+param;
}
</script>
<?php }} ?>