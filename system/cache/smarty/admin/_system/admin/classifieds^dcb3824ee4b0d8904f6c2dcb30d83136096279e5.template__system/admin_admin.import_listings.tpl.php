<?php /* Smarty version Smarty-3.1.13, created on 2014-12-18 13:16:33
         compiled from "template__system/admin_admin:d:\xampp\htdocs\tuyendungvn\templates\_system\admin\classifieds\import_listings.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1236854927141bedbd1-01331423%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dcb3824ee4b0d8904f6c2dcb30d83136096279e5' => 
    array (
      0 => 'template__system/admin_admin:d:\\xampp\\htdocs\\tuyendungvn\\templates\\_system\\admin\\classifieds\\import_listings.tpl',
      1 => 1386656764,
      2 => 'template__system/admin_admin',
    ),
  ),
  'nocache_hash' => '1236854927141bedbd1-01331423',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'listing_types' => 0,
    'listing_type' => 0,
    'products' => 0,
    'product' => 0,
    'uploadMaxFilesize' => 0,
    'charSets' => 0,
    'charSet' => 0,
    'GLOBALS' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5492714292ae42_99038363',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5492714292ae42_99038363')) {function content_5492714292ae42_99038363($_smarty_tpl) {?><?php $_smarty_tpl->smarty->_tag_stack[] = array('breadcrumbs', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['breadcrumbs'][0][0]->_tpl_breadcrumbs(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Import Listings<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['breadcrumbs'][0][0]->_tpl_breadcrumbs(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<h1><img src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['image'][0][0]->getImageURL(array(),$_smarty_tpl);?>
/icons/boxdownload32.png" border="0" alt="" class="titleicon" /> Import Listings</h1>
<?php echo $_smarty_tpl->getSubTemplate ("error.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<form method="post"  enctype="multipart/form-data" onsubmit="disableSubmitButton('submitImport');">
	<table>
		<thead>
		 	<tr>
				<th colspan="2">System Import Values</th>
			</tr>
		</thead>
		<tbody>
			<tr class="evenrow">
		        <td>Type</td>
				<td>
					<select name="listing_type_id">
						<?php  $_smarty_tpl->tpl_vars['listing_type'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['listing_type']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['listing_types']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['listing_type']->key => $_smarty_tpl->tpl_vars['listing_type']->value){
$_smarty_tpl->tpl_vars['listing_type']->_loop = true;
?>
							<option value="<?php echo $_smarty_tpl->tpl_vars['listing_type']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['listing_type']->value['name'];?>
</option>
						<?php } ?>
					</select>
				</td>
			</tr>
			<tr class="oddrow">
				<td>Product</td>
				<td>
					<select name="product_sid">
						<?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value){
$_smarty_tpl->tpl_vars['product']->_loop = true;
?>
							<option value="<?php echo $_smarty_tpl->tpl_vars['product']->value['sid'];?>
"><?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>
</option>
						<?php } ?>
					</select>
				</td>
		    </tr>
			<tr class="evenrow">
				<td>Active status</td>
				<td><input type="checkbox" name="active" value="1" /></td>
		    </tr>
			<tr class="oddrow">
				<td>Activation date</td>
				<td><input type="text" name="activation_date" value="" id="activation_date_import" style="width: 180px;" /></td>
			</tr>
		    <tr id="clearTable">
				<td colspan="2">&nbsp;</td>
			</tr>
			</tbody>
			<thead>
			    <tr>
					<th colspan="2">Data Import</th>
				</tr>
			</thead>
			<tbody>
			<tr class="oddrow">
				<td>File:</td>
				<td><input type="file" name="import_file" value="" /> <small>(<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
max.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
 <?php echo $_smarty_tpl->tpl_vars['uploadMaxFilesize']->value;?>
 M)</small></td>
			</tr>
			<tr class="evenrow">
				<td>File Type:</td>
				<td>
					<select name="file_type">
						<option value="csv">CSV</option>
						<option value="xls">Excel</option>
					</select>
				</td>
			</tr>
			<tr class="oddrow">
				<td>Fields Delimiter:<br /><small>(for CSV-file only)</small></td>
				<td>
					<select name="csv_delimiter" >
						<option value="semicolon"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Semicolon<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</option>
						<option value="comma"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Comma<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</option>
						<option value="tab"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Tabulator<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</option>
					</select>
				</td>
			</tr>
			<tr class="evenrow">
				<td>Values not found in DB will be</td>
				<td>
		            <select name="non_existed_values" />
						<option value="ignore">ignored</option>
						<option value="add">added to DB</option>
					</select>
				</td>
			</tr>
			<tr>
				<td><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Encoding<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<br /><small>(<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
for CSV-file only<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
)</small></td>
				<td>
					<select name="encodingFromCharset" >
						<option value="UTF-8"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Default<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</option>
						<?php  $_smarty_tpl->tpl_vars['charSet'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['charSet']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['charSets']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['charSet']->key => $_smarty_tpl->tpl_vars['charSet']->value){
$_smarty_tpl->tpl_vars['charSet']->_loop = true;
?>
							<option value="<?php echo $_smarty_tpl->tpl_vars['charSet']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['charSet']->value;?>
</option>
						<?php } ?>
					</select>
					<div class="commentSmall"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Select appropriate encoding for your language  in case you have problems with import of certain symbols<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</div>
				</td>
			</tr>
		    <tr id="clearTable">
				<td colspan="2">
                    <div class="clr"><br/></div>
					<div class="floatRight">
						<input type="submit" name="action" value="<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Import<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
" id="submitImport" class="greenButton" />
					</div>
                </td>
			</tr>
		</tbody>
	</table>
</form>

<script>

$(function () {

	var dFormat = '<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['current_language_data']['date_format'];?>
';
	
	dFormat = dFormat.replace('%m', "mm");
	dFormat = dFormat.replace('%d', "dd");
	dFormat = dFormat.replace('%Y', "yy");
	
	$("#activation_date_import").datepicker({
		dateFormat: dFormat,
		showOn: 'both',
		yearRange: '-99:+99',
		buttonImage: '<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['image'][0][0]->getImageURL(array(),$_smarty_tpl);?>
icons/icon-calendar.png'
	});
	
	
});


</script>
<?php }} ?>