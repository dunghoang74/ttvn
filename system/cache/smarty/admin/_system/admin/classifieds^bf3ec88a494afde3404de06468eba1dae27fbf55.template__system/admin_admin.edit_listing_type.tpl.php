<?php /* Smarty version Smarty-3.1.13, created on 2014-12-18 13:21:50
         compiled from "template__system/admin_admin:d:\xampp\htdocs\tuyendungvn\templates\_system\admin\classifieds\edit_listing_type.tpl" */ ?>
<?php /*%%SmartyHeaderCode:179845492727edf1814-08284581%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bf3ec88a494afde3404de06468eba1dae27fbf55' => 
    array (
      0 => 'template__system/admin_admin:d:\\xampp\\htdocs\\tuyendungvn\\templates\\_system\\admin\\classifieds\\edit_listing_type.tpl',
      1 => 1375065022,
      2 => 'template__system/admin_admin',
    ),
  ),
  'nocache_hash' => '179845492727edf1814-08284581',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'GLOBALS' => 0,
    'listing_type_info' => 0,
    'errors' => 0,
    'form_fields' => 0,
    'form_field' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5492727fb46187_38856818',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5492727fb46187_38856818')) {function content_5492727fb46187_38856818($_smarty_tpl) {?><?php $_smarty_tpl->smarty->_tag_stack[] = array('breadcrumbs', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['breadcrumbs'][0][0]->_tpl_breadcrumbs(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/listing-types/">Listing Types</a> &#187; <?php echo $_smarty_tpl->tpl_vars['listing_type_info']->value['name'];?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['breadcrumbs'][0][0]->_tpl_breadcrumbs(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<h1><img src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['image'][0][0]->getImageURL(array(),$_smarty_tpl);?>
/icons/linedpaperpencil32.png" border="0" class="titleicon" />Edit Listing Type Info</h1>
<p><a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/posting-pages/<?php echo mb_strtolower($_smarty_tpl->tpl_vars['listing_type_info']->value['id'], 'UTF-8');?>
" class="grayButton">Edit Posting Pages</a></p>

<?php echo $_smarty_tpl->getSubTemplate ("errors.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('errors'=>$_smarty_tpl->tpl_vars['errors']->value), 0);?>

<fieldset>
	<legend>Listing Type Info</legend>
	<form method="post" action="">
		<input type="hidden" id="action" name="action" value="save_info" />
		<input type="hidden" name="sid" value="<?php echo $_smarty_tpl->tpl_vars['listing_type_info']->value['sid'];?>
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
					<td valign="top"><?php echo $_smarty_tpl->tpl_vars['form_field']->value['caption'];?>
</td>
					<td valign="top" class="required"><?php if ($_smarty_tpl->tpl_vars['form_field']->value['is_required']){?>*<?php }?></td>
					<td valign="top">
						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['input'][0][0]->tpl_input(array('property'=>$_smarty_tpl->tpl_vars['form_field']->value['id']),$_smarty_tpl);?>

						<?php if ($_smarty_tpl->tpl_vars['form_field']->value['id']=='email_alert'&&$_smarty_tpl->tpl_vars['listing_type_info']->value['email_alert']){?>
							<a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/edit-email-templates/alerts/<?php echo $_smarty_tpl->tpl_vars['listing_type_info']->value['email_alert'];?>
/" target="_blank" title="<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Edit Email Template<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
" class="edit-email-template"></a>
						<?php }elseif($_smarty_tpl->tpl_vars['form_field']->value['id']=='guest_alert_email'&&$_smarty_tpl->tpl_vars['listing_type_info']->value['guest_alert_email']){?>
							<a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/edit-email-templates/alerts/<?php echo $_smarty_tpl->tpl_vars['listing_type_info']->value['guest_alert_email'];?>
/" target="_blank" title="<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Edit Email Template<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
" class="edit-email-template"></a>
						<?php }?>
					</td>
				</tr>
			<?php } ?>
			<tr>
				<td colspan="3" align="right">
					<div class="floatRight">
						<input type="submit" id="apply" value="Apply" class="greenButton"/>
						<input type="submit" value="Save" class="greenButton" />
					</div>
				</td>
			</tr>
		</table>
	</form>
</fieldset>


<script>
	$('#apply').click(
		function(){
			$('#action').attr('value', 'apply_info');
		}
	);
	$('input[name="id"]').attr("disabled","disabled").after('<div style="font-size:11px;margin-top:5px">This is a system field. It cannot be changed.</div>');
</script>
<?php }} ?>