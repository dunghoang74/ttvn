<?php /* Smarty version Smarty-3.1.13, created on 2014-12-18 13:31:04
         compiled from "template__system/admin_admin:d:\xampp\htdocs\tuyendungvn\templates\_system\admin\classifieds\export_listings.tpl" */ ?>
<?php /*%%SmartyHeaderCode:29133549274a8726a00-94310610%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4e62d0d1afab1bd0f1e430f5bfe3d26efe8a63b2' => 
    array (
      0 => 'template__system/admin_admin:d:\\xampp\\htdocs\\tuyendungvn\\templates\\_system\\admin\\classifieds\\export_listings.tpl',
      1 => 1386656764,
      2 => 'template__system/admin_admin',
    ),
  ),
  'nocache_hash' => '29133549274a8726a00-94310610',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'properties_id' => 0,
    'property_id' => 0,
    'property' => 0,
    'GLOBALS' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_549274aa1432c5_14550640',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_549274aa1432c5_14550640')) {function content_549274aa1432c5_14550640($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cycle')) include 'D:\\xampp\\htdocs\\tuyendungvn\\system\\ext\\Smarty\\libs\\plugins\\function.cycle.php';
?><?php $_smarty_tpl->smarty->_tag_stack[] = array('breadcrumbs', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['breadcrumbs'][0][0]->_tpl_breadcrumbs(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Export Listings<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['breadcrumbs'][0][0]->_tpl_breadcrumbs(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<h1><img src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['image'][0][0]->getImageURL(array(),$_smarty_tpl);?>
/icons/boxupload32.png" border="0" alt="" class="titleicon" /> Export Listings</h1>

<form method="post">
	<p>
	<table class="basetable">
		<input type="hidden" name="action" value="export" />
		<thead>
			<tr>
				<th colspan="6">Export Filter</th>
			</tr>
		</thead>
		<tbody>
			<tr class="oddrow"><td>Listing ID: </td><td colspan="5"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['search'][0][0]->tpl_search(array('property'=>"sid"),$_smarty_tpl);?>
</td></tr>
			<tr class="evenrow"><td>Listing Type: </td><td colspan="5"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['search'][0][0]->tpl_search(array('property'=>"listing_type",'template'=>"list_with_reload.tpl"),$_smarty_tpl);?>
</td></tr>
			<tr class="oddrow"><td>Activation Date:</td><td colspan="5"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['search'][0][0]->tpl_search(array('property'=>"activation_date"),$_smarty_tpl);?>
</td></tr>
			<tr class="evenrow"><td><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Expiration Date<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
:</td>	<td colspan="5"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['search'][0][0]->tpl_search(array('property'=>"expiration_date"),$_smarty_tpl);?>
</td></tr>
			<tr class="oddrow"><td>Username: </td><td colspan="5"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['search'][0][0]->tpl_search(array('property'=>"username"),$_smarty_tpl);?>
</td></tr>
			<tr class="evenrow"><td>Featured: </td><td colspan="5"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['search'][0][0]->tpl_search(array('property'=>"featured"),$_smarty_tpl);?>
</td></tr>
		</tbody>
		<tr id="clearTable"><td colspan="6">&nbsp;</td></tr>
		<thead>
			<tr>
				<th colspan="6">System Listing Properties To Export</th>
			</tr>
		</thead>
		<tbody>
			<tr class="oddrow">
				<?php  $_smarty_tpl->tpl_vars['property_id'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['property_id']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['properties_id']->value['system']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['property_id']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['system_properties']['total'] = $_smarty_tpl->tpl_vars['property_id']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['system_properties']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['property_id']->key => $_smarty_tpl->tpl_vars['property_id']->value){
$_smarty_tpl->tpl_vars['property_id']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['system_properties']['iteration']++;
?>
					<td colspan="2"><input type="checkbox" name="export_properties[<?php echo $_smarty_tpl->tpl_vars['property_id']->value;?>
]" value="1" id="system_checkbox_<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['system_properties']['iteration'];?>
" /> <?php echo $_smarty_tpl->tpl_vars['property_id']->value;?>
</td>
					<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['system_properties']['iteration']%3==0){?>
						</tr><tr class="<?php echo smarty_function_cycle(array('values'=>"evenrow,oddrow"),$_smarty_tpl);?>
">
					<?php }?>
				<?php } ?>
			</tr>
				<tr class="<?php echo smarty_function_cycle(array('values'=>"evenrow,oddrow"),$_smarty_tpl);?>
"><td colspan="6"><a href="#" onClick="check_all_system();return false;">Select</a> / <a href="#" onClick="uncheck_all_system();return false;">Deselect</a> All</td>
			</tr>
		</tbody>
		<tr id="clearTable"><td colspan="6">&nbsp;</td></tr>
		<thead>
			<tr>
				<th colspan="6">Common Listing Properties To Export</th>
			</tr>
		</thead>
		<tbody>
			<tr class="evenrow">
				<?php  $_smarty_tpl->tpl_vars['property'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['property']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['properties_id']->value['common']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['property']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['common_properties']['total'] = $_smarty_tpl->tpl_vars['property']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['common_properties']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['property']->key => $_smarty_tpl->tpl_vars['property']->value){
$_smarty_tpl->tpl_vars['property']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['common_properties']['iteration']++;
?>
					<td colspan="2"><input type="checkbox" name="export_properties[<?php echo $_smarty_tpl->tpl_vars['property']->value['id'];?>
]" value="1" id="common_checkbox_<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['common_properties']['iteration'];?>
" /> <?php echo $_smarty_tpl->tpl_vars['property']->value['caption'];?>
</td>
					<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['common_properties']['iteration']%3==0){?>
						</tr><tr class="<?php echo smarty_function_cycle(array('values'=>"evenrow,oddrow"),$_smarty_tpl);?>
">
					<?php }?>
				<?php } ?>
			</tr>
			<tr class="<?php echo smarty_function_cycle(array('values'=>"evenrow,oddrow"),$_smarty_tpl);?>
">
				<td colspan="6"><a href="#" onClick="check_all_common();return false;">Select</a> / <a href="#" onClick="uncheck_all_common();return false;">Deselect</a> All</td>
			</tr>
			<?php if (count($_smarty_tpl->tpl_vars['properties_id']->value['extra'])>0){?>
			<tr id="clearTable"><td colspan="6">&nbsp;</td></tr>
			<tr class="headrow">
				<td colspan="6">Extra Listing Properties To Export</td>
			</tr>
			<tr class="oddrow">
				<?php  $_smarty_tpl->tpl_vars['property'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['property']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['properties_id']->value['extra']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['property']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['extra_properties']['total'] = $_smarty_tpl->tpl_vars['property']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['extra_properties']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['property']->key => $_smarty_tpl->tpl_vars['property']->value){
$_smarty_tpl->tpl_vars['property']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['extra_properties']['iteration']++;
?>
					<td colspan="2"><input type="checkbox" name="export_properties[<?php echo $_smarty_tpl->tpl_vars['property']->value['id'];?>
]" value="1" id="extra_checkbox_<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['extra_properties']['iteration'];?>
" /> <?php echo $_smarty_tpl->tpl_vars['property']->value['caption'];?>
</td>
					<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['extra_properties']['iteration']%3==0){?>
						</tr><tr class="<?php echo smarty_function_cycle(array('values'=>"evenrow,oddrow"),$_smarty_tpl);?>
">
					<?php }?>
				<?php } ?>
			</tr>
			<tr>
				<td colspan="6"><a href="#" onClick="check_all_extra();return false;">Select</a> / <a href="#" onClick="uncheck_all_extra();return false;">Deselect</a> All</td>
			</tr>
			<?php }?>
			<tr id="clearTable">
				<td colspan="6">
                    <div class="clr"><br/></div>
                    <div class="floatRight"><input type="submit" value="Export" class="grayButton" /></div>
                </td>
			</tr>
		</tbody>
	</table>
</form>
<br/>
<script language="Javascript">
$(function(){

	var dFormat = '<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['current_language_data']['date_format'];?>
';
	
	dFormat = dFormat.replace('%m', "mm");
	dFormat = dFormat.replace('%d', "dd");
	dFormat = dFormat.replace('%Y', "yy");
	
	$("#activation_date_notless, #activation_date_notmore").datepicker({
		dateFormat: dFormat,
		showOn: 'both',
		yearRange: '-99:+99',
		buttonImage: '<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['image'][0][0]->getImageURL(array(),$_smarty_tpl);?>
icons/icon-calendar.png'
	});
	$("#expiration_date_notless, #expiration_date_notmore").datepicker({
		dateFormat: dFormat,
		showOn: 'both',
		yearRange: '-99:+99',
		buttonImage: '<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['image'][0][0]->getImageURL(array(),$_smarty_tpl);?>
icons/icon-calendar.png'
	});
	
});



var system_total=<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['system_properties']['total'];?>
;
var common_total=<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['common_properties']['total'];?>
;
var extra_total=<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['extra_properties']['total']){?><?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['extra_properties']['total'];?>
<?php }else{ ?>0<?php }?>;


	function check_all_system() 	{ set_checkbox_to(true, 'system', system_total); }
	function uncheck_all_system() 	{ set_checkbox_to(false, 'system', system_total); }
	
	function check_all_common() 	{ set_checkbox_to(true, 'common', common_total); }
	function uncheck_all_common() 	{ set_checkbox_to(false, 'common', common_total); }
		
	function check_all_extra() 		{ set_checkbox_to(true, 'extra', extra_total); }
	function uncheck_all_extra() 	{ set_checkbox_to(false, 'extra', extra_total); }
	
	function set_checkbox_to(flag, type, total)
	{		
		for (i = 1; i <= total; i++)
			if (checkbox = document.getElementById(type + '_checkbox_' + i))
				checkbox.checked = flag;
	}


</script>
<?php }} ?>