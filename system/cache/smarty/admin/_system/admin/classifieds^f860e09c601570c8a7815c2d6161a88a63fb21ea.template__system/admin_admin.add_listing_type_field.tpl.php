<?php /* Smarty version Smarty-3.1.13, created on 2014-12-18 13:23:35
         compiled from "template__system/admin_admin:d:\xampp\htdocs\tuyendungvn\templates\_system\admin\classifieds\add_listing_type_field.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4207549272e7e15845-36070382%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f860e09c601570c8a7815c2d6161a88a63fb21ea' => 
    array (
      0 => 'template__system/admin_admin:d:\\xampp\\htdocs\\tuyendungvn\\templates\\_system\\admin\\classifieds\\add_listing_type_field.tpl',
      1 => 1358745210,
      2 => 'template__system/admin_admin',
    ),
  ),
  'nocache_hash' => '4207549272e7e15845-36070382',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'GLOBALS' => 0,
    'listing_type_sid' => 0,
    'listing_type_info' => 0,
    'errors' => 0,
    'form_fields' => 0,
    'form_field' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_549272e85c89e6_54285929',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_549272e85c89e6_54285929')) {function content_549272e85c89e6_54285929($_smarty_tpl) {?><?php $_smarty_tpl->smarty->_tag_stack[] = array('breadcrumbs', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['breadcrumbs'][0][0]->_tpl_breadcrumbs(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/listing-types/">Listing Types</a>  &#187; <a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/edit-listing-type/?sid=<?php echo $_smarty_tpl->tpl_vars['listing_type_sid']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['listing_type_info']->value['name'];?>
</a> &#187; Add Listing Field<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['breadcrumbs'][0][0]->_tpl_breadcrumbs(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<h1><img src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['image'][0][0]->getImageURL(array(),$_smarty_tpl);?>
/icons/linedpaperplus32.png" border="0" alt="" class="titleicon"/>Add Listing Field</h1>
<?php echo $_smarty_tpl->getSubTemplate ("field_errors.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('errors'=>$_smarty_tpl->tpl_vars['errors']->value), 0);?>

<fieldset>
	<legend>Add a New Listing Field</legend>
	<form method="post" action="">
	<input type="hidden" name="action" value="add" />
	<input type="hidden" name="listing_type_sid" value="<?php echo $_smarty_tpl->tpl_vars['listing_type_sid']->value;?>
" />
		<table>
			<?php  $_smarty_tpl->tpl_vars['form_field'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['form_field']->_loop = false;
 $_smarty_tpl->tpl_vars['field_name'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['form_fields']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['form_field']->key => $_smarty_tpl->tpl_vars['form_field']->value){
$_smarty_tpl->tpl_vars['form_field']->_loop = true;
 $_smarty_tpl->tpl_vars['field_name']->value = $_smarty_tpl->tpl_vars['form_field']->key;
?>
				<tr>
					<td><?php echo $_smarty_tpl->tpl_vars['form_field']->value['caption'];?>
 </td>
					<td class="required"><?php if ($_smarty_tpl->tpl_vars['form_field']->value['is_required']){?>*<?php }?></td>
					<td><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['input'][0][0]->tpl_input(array('property'=>$_smarty_tpl->tpl_vars['form_field']->value['id']),$_smarty_tpl);?>
</td>
				</tr>
			<?php } ?>
			<tr>
				<td colspan="3">
                    <div class="floatRight"><input type="submit" value="Add" class="greenButton"/></div>
                </td>
			</tr>
		</table>
	</form>
</fieldset><?php }} ?>