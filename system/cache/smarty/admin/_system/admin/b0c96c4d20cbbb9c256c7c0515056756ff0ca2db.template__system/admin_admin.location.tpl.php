<?php /* Smarty version Smarty-3.1.13, created on 2014-12-18 13:18:13
         compiled from "template__system/admin_admin:../field_types/input/location.tpl" */ ?>
<?php /*%%SmartyHeaderCode:79549271a5ae8da8-83328009%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b0c96c4d20cbbb9c256c7c0515056756ff0ca2db' => 
    array (
      0 => 'template__system/admin_admin:../field_types/input/location.tpl',
      1 => 1378267314,
      2 => 'template__system/admin_admin',
    ),
  ),
  'nocache_hash' => '79549271a5ae8da8-83328009',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'value' => 0,
    'form_fields' => 0,
    'form_field' => 0,
    'parentID' => 0,
    'GLOBALS' => 0,
    'LocationValues' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_549271a6b42ec3_74638037',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_549271a6b42ec3_74638037')) {function content_549271a6b42ec3_74638037($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars["LocationValues"] = new Smarty_variable($_smarty_tpl->tpl_vars['value']->value, null, 0);?>
<?php  $_smarty_tpl->tpl_vars['form_field'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['form_field']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['form_fields']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['form_field']->key => $_smarty_tpl->tpl_vars['form_field']->value){
$_smarty_tpl->tpl_vars['form_field']->_loop = true;
?>
	<?php $_smarty_tpl->tpl_vars["fixInstructionsForComplexField"] = new Smarty_variable(true, null, 0);?>
	<tr <?php if ($_smarty_tpl->tpl_vars['form_field']->value['hidden']){?>style="display:none;"<?php }?> id="<?php echo $_smarty_tpl->tpl_vars['parentID']->value;?>
_<?php echo $_smarty_tpl->tpl_vars['form_field']->value['id'];?>
">
		<td valign="top" width="20%"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['form_field']->value['caption'];?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; ob_start();  echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); echo htmlspecialchars(ob_get_clean(), ENT_QUOTES, 'UTF-8', true);} array_pop($_smarty_tpl->smarty->_tag_stack);?>
</td>
		<td valign="top" class="required">&nbsp;<?php if ($_smarty_tpl->tpl_vars['form_field']->value['is_required']){?>*<?php }?></td>
		<td class="locationField"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['input'][0][0]->tpl_input(array('property'=>$_smarty_tpl->tpl_vars['form_field']->value['id'],'parent'=>$_smarty_tpl->tpl_vars['parentID']->value),$_smarty_tpl);?>
</td>
	</tr>
<?php } ?>
<script language='JavaScript' type='text/javascript'>
function get<?php echo $_smarty_tpl->tpl_vars['parentID']->value;?>
States(countrySID) {
	<?php  $_smarty_tpl->tpl_vars['form_field'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['form_field']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['form_fields']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['form_field']->key => $_smarty_tpl->tpl_vars['form_field']->value){
$_smarty_tpl->tpl_vars['form_field']->_loop = true;
?>
		<?php if ($_smarty_tpl->tpl_vars['form_field']->value['id']=='State'){?>
			$.get("<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/get-states/", { country_sid: countrySID, state_sid: "<?php echo strtr($_smarty_tpl->tpl_vars['LocationValues']->value['State'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
", parentID: "<?php echo $_smarty_tpl->tpl_vars['parentID']->value;?>
", display_as: "<?php echo $_smarty_tpl->tpl_vars['form_field']->value['display_as'];?>
" },
				  function(data){
						$("#<?php echo $_smarty_tpl->tpl_vars['parentID']->value;?>
_State .locationField").html(data);
				 });
		<?php }?>
	<?php } ?>
}

get<?php echo $_smarty_tpl->tpl_vars['parentID']->value;?>
States("<?php echo strtr($_smarty_tpl->tpl_vars['LocationValues']->value['Country'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
");
</script>
<?php $_smarty_tpl->tpl_vars["parentID"] = new Smarty_variable(false, null, 3);
$_ptr = $_smarty_tpl->parent; while ($_ptr != null) {$_ptr->tpl_vars["parentID"] = clone $_smarty_tpl->tpl_vars["parentID"]; $_ptr = $_ptr->parent; }
Smarty::$global_tpl_vars["parentID"] = clone $_smarty_tpl->tpl_vars["parentID"];?>
<?php $_smarty_tpl->tpl_vars["fixInstructionsForComplexField"] = new Smarty_variable(false, null, 0);?>
<?php }} ?>