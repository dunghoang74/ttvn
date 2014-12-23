<?php /* Smarty version Smarty-3.1.13, created on 2014-12-18 11:33:14
         compiled from "template__system/admin_admin:d:\xampp\htdocs\tuyendungvn\templates\_system\admin\classifieds\listing_fields.tpl" */ ?>
<?php /*%%SmartyHeaderCode:176925492590a3be153-31757406%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd408a3c070d1fd88017d2d373babe58ca059001d' => 
    array (
      0 => 'template__system/admin_admin:d:\\xampp\\htdocs\\tuyendungvn\\templates\\_system\\admin\\classifieds\\listing_fields.tpl',
      1 => 1354248576,
      2 => 'template__system/admin_admin',
    ),
  ),
  'nocache_hash' => '176925492590a3be153-31757406',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'GLOBALS' => 0,
    'listing_field_sids' => 0,
    'listing_field_sid' => 0,
    'fieldID' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5492590ac13045_25344733',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5492590ac13045_25344733')) {function content_5492590ac13045_25344733($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cycle')) include 'D:\\xampp\\htdocs\\tuyendungvn\\system\\ext\\Smarty\\libs\\plugins\\function.cycle.php';
?><?php $_smarty_tpl->smarty->_tag_stack[] = array('breadcrumbs', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['breadcrumbs'][0][0]->_tpl_breadcrumbs(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Common Fields<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['breadcrumbs'][0][0]->_tpl_breadcrumbs(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<h1><img src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['image'][0][0]->getImageURL(array(),$_smarty_tpl);?>
/icons/linedpapercheck32.png" class="titleicon"/> Common Fields</h1>
<p><a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/add-listing-field/" class="grayButton">Add a New Listing Field</a></p>
<table>
	<thead>
		<th>ID</th>
		<th>Caption</th>
		<th>Type</th>
		<th>Required</th>
		<th colspan="2" class="actions">Actions</th>
	</thead>
	<tbody>
		<?php  $_smarty_tpl->tpl_vars['listing_field_sid'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['listing_field_sid']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['listing_field_sids']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['listing_field_sid']->key => $_smarty_tpl->tpl_vars['listing_field_sid']->value){
$_smarty_tpl->tpl_vars['listing_field_sid']->_loop = true;
?>
		<tr class="<?php echo smarty_function_cycle(array('values'=>'evenrow,oddrow','advance'=>true),$_smarty_tpl);?>
">
			<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['display'][0][0]->tpl_display(array('property'=>'id','object_sid'=>$_smarty_tpl->tpl_vars['listing_field_sid']->value,'assign'=>'fieldID'),$_smarty_tpl);?>

			<td><?php echo $_smarty_tpl->tpl_vars['fieldID']->value;?>
</td>
			<td><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['display'][0][0]->tpl_display(array('property'=>'caption','object_sid'=>$_smarty_tpl->tpl_vars['listing_field_sid']->value),$_smarty_tpl);?>
</td>
			<td><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['display'][0][0]->tpl_display(array('property'=>'type','object_sid'=>$_smarty_tpl->tpl_vars['listing_field_sid']->value),$_smarty_tpl);?>
</td>
			<td><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['display'][0][0]->tpl_display(array('property'=>'is_required','object_sid'=>$_smarty_tpl->tpl_vars['listing_field_sid']->value),$_smarty_tpl);?>
</td>
			<td><a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/edit-listing-field/?sid=<?php echo $_smarty_tpl->tpl_vars['listing_field_sid']->value;?>
" title="Edit" class="editbutton">Edit</a></td>
			<td><?php if ($_smarty_tpl->tpl_vars['fieldID']->value!='Location'){?><a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/delete-listing-field/?sid=<?php echo $_smarty_tpl->tpl_vars['listing_field_sid']->value;?>
" onclick='return confirm("Are you sure you want to delete this field?")' title="Delete" class="deletebutton">Delete</a><?php }?></td>
		</tr>
		<?php } ?>	
	</tbody>
</table><?php }} ?>