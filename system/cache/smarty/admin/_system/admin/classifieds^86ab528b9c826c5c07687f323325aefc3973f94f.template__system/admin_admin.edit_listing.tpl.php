<?php /* Smarty version Smarty-3.1.13, created on 2014-12-18 13:18:00
         compiled from "template__system/admin_admin:d:\xampp\htdocs\tuyendungvn\templates\_system\admin\classifieds\edit_listing.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1403854927198ac2ca1-91524539%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '86ab528b9c826c5c07687f323325aefc3973f94f' => 
    array (
      0 => 'template__system/admin_admin:d:\\xampp\\htdocs\\tuyendungvn\\templates\\_system\\admin\\classifieds\\edit_listing.tpl',
      1 => 1391655188,
      2 => 'template__system/admin_admin',
    ),
  ),
  'nocache_hash' => '1403854927198ac2ca1-91524539',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'GLOBALS' => 0,
    'listingType' => 0,
    'comments_total' => 0,
    'listing_id' => 0,
    'rate' => 0,
    'form_fields' => 0,
    'listing' => 0,
    'form_field' => 0,
    'METADATA' => 0,
    'pic_limit' => 0,
    'expirationField' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5492719ba9c657_40326040',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5492719ba9c657_40326040')) {function content_5492719ba9c657_40326040($_smarty_tpl) {?><script language="JavaScript" type="text/javascript" src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['common_js'][0][0]->getCommonJsURL(array(),$_smarty_tpl);?>
/picture_actions.js"></script>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('breadcrumbs', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['breadcrumbs'][0][0]->_tpl_breadcrumbs(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

	<a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/manage-<?php echo $_smarty_tpl->tpl_vars['listingType']->value['link'];?>
/?restore=1">
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Manage <?php echo $_smarty_tpl->tpl_vars['listingType']->value['name'];?>
s<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	</a>
	&#187; <?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Edit Listing<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['breadcrumbs'][0][0]->_tpl_breadcrumbs(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<h1><img src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['image'][0][0]->getImageURL(array(),$_smarty_tpl);?>
/icons/linedpaperpencil32.png" border="0" alt="" class="titleicon"/><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Edit Listing<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</h1>

<?php if ($_smarty_tpl->tpl_vars['GLOBALS']->value['is_ajax']){?>
	<link type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['user_site_url'];?>
/system/ext/jquery/themes/green/jquery-ui-1.7.2.custom.css" rel="stylesheet" />
	<script language="javascript" type="text/javascript">
		var url = "<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/edit-listing/";
		$("#editListingForm").submit(function() {
			var options = {
				target: "#messageBox",
				url:  url,
				success: function(data) {
					$("#messageBox").html(data).dialog('width': '200');
				}
			};
			$(this).ajaxSubmit(options);
			return false;
		});
	</script>
<?php }?>

<?php echo $_smarty_tpl->getSubTemplate ('field_errors.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<p>Fields marked with an asterisk (<font color="red">*</font>) are mandatory</p>

<p>
<?php if ($_smarty_tpl->tpl_vars['comments_total']->value>0){?>
	<a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/listing-comments/?listing_id=<?php echo $_smarty_tpl->tpl_vars['listing_id']->value;?>
">Comments (<?php echo $_smarty_tpl->tpl_vars['comments_total']->value;?>
)</a>,
<?php }else{ ?>
	Comments (<?php echo $_smarty_tpl->tpl_vars['comments_total']->value;?>
),
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['rate']->value){?>
	<a  href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/listing-rating/?listing_id=<?php echo $_smarty_tpl->tpl_vars['listing_id']->value;?>
">Rate (<?php echo $_smarty_tpl->tpl_vars['rate']->value;?>
)</a>
<?php }else{ ?>
	Rate (<?php echo $_smarty_tpl->tpl_vars['rate']->value;?>
)
<?php }?>
</p>

<fieldset class="wide-fieldset">
	<legend><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Edit Listing<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</legend>
	<form method="post" enctype="multipart/form-data" action="" <?php if ($_smarty_tpl->tpl_vars['form_fields']->value['ApplicationSettings']){?>onsubmit="return validateForm('editListingForm');"<?php }?> id='editListingForm'>
		<input type="hidden" id="action" name="action" value="save_info"/>
		<input type="hidden" name="listing_id" value="<?php echo $_smarty_tpl->tpl_vars['listing']->value['id'];?>
"/>
		<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['set_token_field'][0][0]->tpl_set_token_field(array(),$_smarty_tpl);?>

		<table>
			<?php  $_smarty_tpl->tpl_vars['form_field'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['form_field']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['form_fields']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['form_field']->key => $_smarty_tpl->tpl_vars['form_field']->value){
$_smarty_tpl->tpl_vars['form_field']->_loop = true;
?>
				
				<?php if ($_smarty_tpl->tpl_vars['form_field']->value['id']=='reject_reason'||$_smarty_tpl->tpl_vars['form_field']->value['id']=='status'||(!isset($_smarty_tpl->tpl_vars['form_fields']->value['Resume'])&&$_smarty_tpl->tpl_vars['form_field']->value['id']=='anonymous')){?>
				<?php }elseif(!isset($_smarty_tpl->tpl_vars['form_fields']->value['Resume'])&&$_smarty_tpl->tpl_vars['form_field']->value['id']=='ApplicationSettings'){?>
				<tr>
					<td class="caption-td"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('metadata'=>$_smarty_tpl->tpl_vars['METADATA']->value['form_field']['caption'])); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array('metadata'=>$_smarty_tpl->tpl_vars['METADATA']->value['form_field']['caption']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['form_field']->value['caption'];?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array('metadata'=>$_smarty_tpl->tpl_vars['METADATA']->value['form_field']['caption']), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</td>
					<td class="required">&nbsp;<?php if ($_smarty_tpl->tpl_vars['form_field']->value['is_required']){?>*<?php }?></td>
					<td><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['input'][0][0]->tpl_input(array('property'=>$_smarty_tpl->tpl_vars['form_field']->value['id'],'template'=>'applicationSettings.tpl'),$_smarty_tpl);?>
</td>
				</tr>
				<?php }elseif(!isset($_smarty_tpl->tpl_vars['form_fields']->value['Resume'])&&$_smarty_tpl->tpl_vars['form_field']->value['id']=='expiration_date'){?>
					<?php $_smarty_tpl->_capture_stack[0][] = array('default', "expirationField", null); ob_start(); ?>
					<tr>
						<td class="caption-td"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('metadata'=>$_smarty_tpl->tpl_vars['METADATA']->value['form_field']['caption'])); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array('metadata'=>$_smarty_tpl->tpl_vars['METADATA']->value['form_field']['caption']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['form_field']->value['caption'];?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array('metadata'=>$_smarty_tpl->tpl_vars['METADATA']->value['form_field']['caption']), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</td>
						<td class="required"><?php if ($_smarty_tpl->tpl_vars['form_field']->value['is_required']){?>*<?php }?> </td>
						<td> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['input'][0][0]->tpl_input(array('property'=>$_smarty_tpl->tpl_vars['form_field']->value['id'],'template'=>'expiration_date.tpl'),$_smarty_tpl);?>
</td>
					</tr>
					<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
				<?php }elseif($_smarty_tpl->tpl_vars['form_field']->value['id']=="access_type"){?>
					<?php if ($_smarty_tpl->tpl_vars['listingType']->value['id']=="Job"||$_smarty_tpl->tpl_vars['listing']->value['type']['id']=="Job"){?>
					<?php }else{ ?>
						<tr>
							<td class="caption-td"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('metadata'=>$_smarty_tpl->tpl_vars['METADATA']->value['form_field']['caption'])); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array('metadata'=>$_smarty_tpl->tpl_vars['METADATA']->value['form_field']['caption']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['form_field']->value['caption'];?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array('metadata'=>$_smarty_tpl->tpl_vars['METADATA']->value['form_field']['caption']), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</td>
							<td class="required">&nbsp;<?php if ($_smarty_tpl->tpl_vars['form_field']->value['is_required']){?>*<?php }?></td>
							<td><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['input'][0][0]->tpl_input(array('property'=>$_smarty_tpl->tpl_vars['form_field']->value['id'],'template'=>'resume_access.tpl'),$_smarty_tpl);?>
</td>
						</tr>
					<?php }?>
				<?php }elseif($_smarty_tpl->tpl_vars['form_field']->value['type']=='location'){?>
						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['input'][0][0]->tpl_input(array('property'=>$_smarty_tpl->tpl_vars['form_field']->value['id']),$_smarty_tpl);?>

				<?php }else{ ?>
					<?php if ($_smarty_tpl->tpl_vars['form_field']->value['id']=='ListingLogo'){?>
						<tr>
							<td class="caption-td"><?php echo $_smarty_tpl->tpl_vars['form_field']->value['caption'];?>
</td>
							<td class="required">&nbsp;<?php if ($_smarty_tpl->tpl_vars['form_field']->value['is_required']){?>*<?php }?></td>
							<td><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['input'][0][0]->tpl_input(array('property'=>$_smarty_tpl->tpl_vars['form_field']->value['id'],'template'=>"logo_listing.tpl"),$_smarty_tpl);?>
</td>
						</tr>
					<?php }else{ ?>
						<tr>
							<td class="caption-td"><?php echo $_smarty_tpl->tpl_vars['form_field']->value['caption'];?>
</td>
							<td class="required">&nbsp;<?php if ($_smarty_tpl->tpl_vars['form_field']->value['is_required']){?>*<?php }?></td>
							<td><div style="float: left;"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['input'][0][0]->tpl_input(array('property'=>$_smarty_tpl->tpl_vars['form_field']->value['id']),$_smarty_tpl);?>
</div>
							 <?php if (in_array($_smarty_tpl->tpl_vars['form_field']->value['type'],array('tree','multilist'))){?>
								<div id="count-available-<?php echo $_smarty_tpl->tpl_vars['form_field']->value['id'];?>
" class="mt-count-available"></div>
							 <?php }?>
							</td>
						</tr>
					<?php }?>
				<?php }?>
			<?php } ?>

			<?php if ($_smarty_tpl->tpl_vars['pic_limit']->value>0){?>
				<tr>
					<td class="caption-td"> <?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Add Pictures<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
 </td>
					<td>&nbsp;</td>
					<td>
						<div class="inputField">
							<div id="loading" class="add-picture-loading" style="display:none;">
								<img class="progBarImg" src="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['user_site_url'];?>
/system/ext/jquery/progbar.gif" alt="<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Please wait ...<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
" /> <?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Please wait ...<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

							</div>
							<div id="UploadPics" value="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/manage-pictures/?listing_sid=<?php echo $_smarty_tpl->tpl_vars['listing']->value['id'];?>
"></div>
						</div>
					</td>
				</tr>
			<?php }?>

			<?php if ($_smarty_tpl->tpl_vars['expirationField']->value){?><?php echo $_smarty_tpl->tpl_vars['expirationField']->value;?>
<?php }?>

			<tr>
				<td colspan="3">
					<div class="floatRight">
						<input type="submit" id="apply" value="Apply" class="greenButton"/>
						<input type="submit" value="Save" class="greenButton" />
					</div>
				</td>
			</tr>
		</table>
	</form>
</fieldset>

<script type="text/javascript">

	$('#apply').click(
		function(){
			$('#action').attr('value', 'apply_info');
		}
	);

	$(document).ready(function() {
		url = $("#UploadPics").attr("value");
		loadPicturesForm(url);
	});

</script><?php }} ?>