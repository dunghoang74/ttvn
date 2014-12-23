<?php /* Smarty version Smarty-3.1.13, created on 2014-12-18 13:18:15
         compiled from "template__system/admin_admin:../field_types/input/video.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15589549271a79f3301-31838773%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '021f41b88ff32cb5fbf133371e83c66a26b6b214' => 
    array (
      0 => 'template__system/admin_admin:../field_types/input/video.tpl',
      1 => 1390528918,
      2 => 'template__system/admin_admin',
    ),
  ),
  'nocache_hash' => '15589549271a79f3301-31838773',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'listing_id' => 0,
    'listing' => 0,
    'GLOBALS' => 0,
    'errors' => 0,
    'key' => 0,
    'id' => 0,
    'value' => 0,
    'uploadMaxFilesize' => 0,
    'url' => 0,
    'listingId' => 0,
    'copy_listing' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_549271aa684e78_12813939',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_549271aa684e78_12813939')) {function content_549271aa684e78_12813939($_smarty_tpl) {?><?php $_smarty_tpl->_capture_stack[0][] = array('default', 'listingId', null); ob_start(); ?><?php if ($_smarty_tpl->tpl_vars['listing_id']->value){?><?php echo $_smarty_tpl->tpl_vars['listing_id']->value;?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['listing']->value['id'];?>
<?php }?><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php if ($_smarty_tpl->tpl_vars['GLOBALS']->value['is_ajax']||$_GET['ajax_submit']){?>

	<?php  $_smarty_tpl->tpl_vars['error'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['error']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['errors']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['error']->key => $_smarty_tpl->tpl_vars['error']->value){
$_smarty_tpl->tpl_vars['error']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['error']->key;
?>
		<?php if ($_smarty_tpl->tpl_vars['key']->value=='NOT_SUPPORTED_VIDEO_FORMAT'||$_smarty_tpl->tpl_vars['key']->value=='NOT_ACCEPTABLE_FILE_FORMAT'){?>
			<p class="error"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Not supported video format<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</p>
		<?php }elseif($_smarty_tpl->tpl_vars['key']->value==='UPLOAD_ERR_INI_SIZE'){?>
			<p class="error"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
File size exceeds system limit. Please check the file size limits on your hosting or upload another file.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</p>
		<?php }else{ ?>
			<p class="error"><?php echo $_smarty_tpl->tpl_vars['key']->value;?>
</p>
		<?php }?>
	<?php } ?>

	<input type="file"
		   field_id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"
		   field_action="upload_classifieds_video"
		   field_target="video_field_content_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"
		   name="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"
		   class="autouploadField"
		   id="input_video_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"
		   <?php if ($_smarty_tpl->tpl_vars['value']->value['file_url']){?>style="display:none;"<?php }?>/>
	<?php if (!$_smarty_tpl->tpl_vars['value']->value['file_url']){?>
		<small>(<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
max.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
 <?php echo $_smarty_tpl->tpl_vars['uploadMaxFilesize']->value;?>
 M)</small>
	<?php }?>

	<span id="video_uploader_image_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" style="display: none;">&nbsp;<img src="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['user_site_url'];?>
/templates/_system/main/images/ajax_preloader_circular_16.gif" /></span>

		<?php if ($_smarty_tpl->tpl_vars['value']->value['file_name']!=null&&$_smarty_tpl->tpl_vars['url']->value!='/add-listing/'){?>
			<div id="classifieds_video_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" style="float:left;">
				<a onclick="popUpWindow('<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/video-player/?videoFileId=<?php echo $_smarty_tpl->tpl_vars['value']->value['file_id'];?>
&listing_id=<?php echo $_smarty_tpl->tpl_vars['listingId']->value;?>
&amp;field_id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
', 330, 305, ''); return false;" href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/video-player/?listing_id=<?php echo $_smarty_tpl->tpl_vars['listingId']->value;?>
&amp;field_id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"> <?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Watch a video<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a>
				|
				<?php if ($_smarty_tpl->tpl_vars['copy_listing']->value!=null){?>
					<a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/clone-job/?listing_id=<?php echo $_smarty_tpl->tpl_vars['listingId']->value;?>
&amp;action=delete&amp;field_id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Remove<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a>
					<input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
_hidden" value="1" />
				<?php }else{ ?>
					<a class="delete_classifieds_video" listing_id="<?php echo $_smarty_tpl->tpl_vars['listingId']->value;?>
" field_id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" file_id="<?php echo $_smarty_tpl->tpl_vars['value']->value['file_id'];?>
" href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/classifieds/delete-uploaded-file/?listing_id=<?php echo $_smarty_tpl->tpl_vars['listingId']->value;?>
&amp;field_id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Remove<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a>
				<?php }?>
				<br/><br/>
			</div>
			<span id="extra_field_info_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" style="display:none;"><small>(<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
max.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
 <?php echo $_smarty_tpl->tpl_vars['uploadMaxFilesize']->value;?>
 M)</small></span>
		<?php }?>
<?php }else{ ?>
	<div id="video_field_content_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
		<div class="errors"></div>

		<input type="file"
			field_id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"
			field_action="upload_classifieds_video"
			field_target="video_field_content_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"
			name="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"
			class="autouploadField"
			id="input_video_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"
			<?php if ($_smarty_tpl->tpl_vars['value']->value['file_url']){?>style="display:none;"<?php }?> />
		<?php if (!$_smarty_tpl->tpl_vars['value']->value['file_url']){?>
			<small>(<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
max.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
 <?php echo $_smarty_tpl->tpl_vars['uploadMaxFilesize']->value;?>
 M)</small>
		<?php }?>
		
		<span id="video_uploader_image_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" style="display: none;">&nbsp;<img src="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['user_site_url'];?>
/templates/_system/main/images/ajax_preloader_circular_16.gif" /></span>

		<?php if ($_smarty_tpl->tpl_vars['value']->value['file_name']!=null&&$_smarty_tpl->tpl_vars['url']->value!='/add-listing/'){?>
			<div id="classifieds_video_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" style="float:left;">
				<a onclick="popUpWindow('<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/video-player/?listing_id=<?php echo $_smarty_tpl->tpl_vars['listingId']->value;?>
&amp;field_id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
', 330, 305, ''); return false;" href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/video-player/?listing_id=<?php echo $_smarty_tpl->tpl_vars['listingId']->value;?>
&amp;field_id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"> <?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Watch a video<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a>
				|
				<?php if ($_smarty_tpl->tpl_vars['copy_listing']->value!=null){?>
					<a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/clone-job/?listing_id=<?php echo $_smarty_tpl->tpl_vars['listingId']->value;?>
&amp;action=delete&amp;field_id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Remove<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a>
					<input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
_hidden" value="1" />
				<?php }else{ ?>
					<a class="delete_classifieds_video" listing_id="<?php echo $_smarty_tpl->tpl_vars['listingId']->value;?>
" field_id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" file_id="<?php echo $_smarty_tpl->tpl_vars['value']->value['file_id'];?>
" href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/classifieds/delete-uploaded-file/?listing_id=<?php echo $_smarty_tpl->tpl_vars['listingId']->value;?>
&amp;field_id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Remove<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a>
				<?php }?>
				<br/><br/>
			</div>
			<span id="extra_field_info_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" style="display:none;"><small>(<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
max.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
 <?php echo $_smarty_tpl->tpl_vars['uploadMaxFilesize']->value;?>
 M)</small></span>
		<?php }?>
	</div>

	<script>
		
		// check temporary uploaded data of field
		$(function() {
			
				getClassifiedsVideoData('<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
', '<?php echo $_smarty_tpl->tpl_vars['listingId']->value;?>
');
			
		});

		
	</script>

<?php }?><?php }} ?>