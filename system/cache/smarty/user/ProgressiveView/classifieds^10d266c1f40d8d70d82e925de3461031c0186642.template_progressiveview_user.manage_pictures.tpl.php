<?php /* Smarty version Smarty-3.1.13, created on 2014-12-22 21:44:18
         compiled from "template_progressiveview_user:templates/_system/classifieds/manage_pictures.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1853154982e42bc8c41-49014217%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '10d266c1f40d8d70d82e925de3461031c0186642' => 
    array (
      0 => 'template_progressiveview_user:templates/_system/classifieds/manage_pictures.tpl',
      1 => 1389845726,
      2 => 'template_progressiveview_user',
    ),
  ),
  'nocache_hash' => '1853154982e42bc8c41-49014217',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'field_errors' => 0,
    'error' => 0,
    'field_caption' => 0,
    'errors' => 0,
    'number_of_picture' => 0,
    'number_of_picture_allowed' => 0,
    'GLOBALS' => 0,
    'listing' => 0,
    'pictures' => 0,
    'picture' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_54982e44796ee9_16438402',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54982e44796ee9_16438402')) {function content_54982e44796ee9_16438402($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include 'D:\\xampp\\htdocs\\tuyendungvn\\system\\ext\\Smarty\\libs\\plugins\\modifier.truncate.php';
?><?php  $_smarty_tpl->tpl_vars['error'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['error']->_loop = false;
 $_smarty_tpl->tpl_vars['field_caption'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['field_errors']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['error']->key => $_smarty_tpl->tpl_vars['error']->value){
$_smarty_tpl->tpl_vars['error']->_loop = true;
 $_smarty_tpl->tpl_vars['field_caption']->value = $_smarty_tpl->tpl_vars['error']->key;
?>
	<?php if ($_smarty_tpl->tpl_vars['error']->value=='FILE_NOT_SPECIFIED'){?>
		<p class="error">'<?php echo $_smarty_tpl->tpl_vars['field_caption']->value;?>
' <?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
file not specified<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</p>
	<?php }elseif($_smarty_tpl->tpl_vars['error']->value=='NOT_SUPPORTED_IMAGE_FORMAT'){?>
		<p class="error">'<?php echo $_smarty_tpl->tpl_vars['field_caption']->value;?>
' - <?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Image format is not supported<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</p>
	<?php }elseif($_smarty_tpl->tpl_vars['error']->value=='PICTURES_LIMIT_EXCEEDED'){?>
		<p class="error">'<?php echo $_smarty_tpl->tpl_vars['field_caption']->value;?>
' <?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
limit exceeded<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</p>
	<?php }elseif($_smarty_tpl->tpl_vars['error']->value=='UPLOAD_ERR_INI_SIZE'){?>
		<p class="error"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
File size exceeds system limit<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</p>
	<?php }elseif($_smarty_tpl->tpl_vars['error']->value=='UPLOAD_ERR_FORM_SIZE'){?>
		<p class="error"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
File size exceeds system limit<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</p>
	<?php }elseif($_smarty_tpl->tpl_vars['error']->value=='UPLOAD_ERR_PARTIAL'){?>
		<p class="error"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
There was an error during file upload<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</p>
	<?php }elseif($_smarty_tpl->tpl_vars['error']->value=='UPLOAD_ERR_NO_FILE'){?>
		<p class="error">'<?php echo $_smarty_tpl->tpl_vars['field_caption']->value;?>
' <?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
file not specified<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</p>
	<?php }?>
<?php } ?>
<?php if ($_smarty_tpl->tpl_vars['errors']->value!=''){?>
	<?php  $_smarty_tpl->tpl_vars['error_message'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['error_message']->_loop = false;
 $_smarty_tpl->tpl_vars['error'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['errors']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['error_message']->key => $_smarty_tpl->tpl_vars['error_message']->value){
$_smarty_tpl->tpl_vars['error_message']->_loop = true;
 $_smarty_tpl->tpl_vars['error']->value = $_smarty_tpl->tpl_vars['error_message']->key;
?>
		<?php if ($_smarty_tpl->tpl_vars['error']->value=='WRONG_PARAMETERS_SPECIFIED'){?>
			<p class="error"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Wrong parameters are specified<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</p>
		<?php }elseif($_smarty_tpl->tpl_vars['error']->value=='PARAMETERS_MISSED'){?>
			<p class="error"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
The key parameters are not specified<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</p>
		<?php }elseif($_smarty_tpl->tpl_vars['error']->value=='NOT_OWNER'){?>
			<p class="error"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
You are not owner of this listing<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</p>
		<?php }?>
	<?php } ?>
<?php }else{ ?>
	<?php if ($_smarty_tpl->tpl_vars['number_of_picture']->value<$_smarty_tpl->tpl_vars['number_of_picture_allowed']->value){?>
		<form id="uploadForm" method="post" action="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/manage-pictures/" enctype="multipart/form-data" onsubmit="return uploadPicture();">
			<input type="hidden" name="action" value="add" />
			<input type="hidden" id="listing_id" name="listing_sid" value="<?php echo $_smarty_tpl->tpl_vars['listing']->value['id'];?>
" />
			<fieldset>
				<div class="inputField"><input type="file" name="picture" /></div>
			</fieldset>
			<fieldset>
				<div class="inputField">
					<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Caption<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<br/>
					<input type="text" name="caption" value="" />
				</div>
			</fieldset>
			<div class="clr"></div>
			<input type="submit" value="<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Add Picture<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
" class="button"/>
		</form>
		<div class="clr"><br/></div>
	<?php }else{ ?>
		<p class="information"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
You've reached the limit of number of pictures allowed by your product<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</p>
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['pictures']->value){?>
		<table id="manage-pictures">
			<thead>
				<tr>
					<th class="tableLeft"></th>
					<th class="text-center"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Thumbnail<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</th>
					<th><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Caption<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</th>
					<th class="text-center"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Actions<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</th>
					<th class="tableRight"></th>
				</tr>
			</thead>
			<tbody>
				<?php  $_smarty_tpl->tpl_vars['picture'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['picture']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pictures']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['picture']->key => $_smarty_tpl->tpl_vars['picture']->value){
$_smarty_tpl->tpl_vars['picture']->_loop = true;
?>
					<tr>
						<td></td>
						<td class="text-center thumbnail"><img src="<?php echo $_smarty_tpl->tpl_vars['picture']->value['thumbnail_url'];?>
" alt="" border="0" /></td>
						<td class="caption"><?php echo htmlspecialchars(smarty_modifier_truncate($_smarty_tpl->tpl_vars['picture']->value['caption'],15), ENT_QUOTES, 'UTF-8', true);?>
</td>
						<td class="text-center actions">
							<a href="#" onclick="editPicture(<?php echo $_smarty_tpl->tpl_vars['listing']->value['id'];?>
, <?php echo $_smarty_tpl->tpl_vars['picture']->value['id'];?>
, '<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Edit Picture<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'); return false;"><img src="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/templates/_system/main/images/b_edit.gif" border="0" alt="" /></a>
							&nbsp;
							<a href="#" onclick="deletePicture(<?php echo $_smarty_tpl->tpl_vars['listing']->value['id'];?>
, <?php echo $_smarty_tpl->tpl_vars['picture']->value['id'];?>
); return false;"><img src="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/templates/_system/main/images/b_drop.gif" /></a>
						</td>
						<td></td>
					</tr>
				<?php } ?>
			</tbody>
		</table>
	<?php }?>
<?php }?>

<script type="text/javascript">
	var confirmPhrase = '<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Are you sure?<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
';
	function uploadPicture() {
		var browser = navigator.appName.toLowerCase();
		var options = {
			target: "#UploadPics",
			url:  $("#uploadForm").attr("action") + "?listing_sid=" + <?php echo $_smarty_tpl->tpl_vars['listing']->value['id'];?>
,
			beforeSend: function(data) {
				$("#UploadPics").css("opacity", "0.3");
				$("#loading-progbar").css("display", "block");
			},
			success: function(data) {
				$("#UploadPics").css("opacity", "1");
				$("#loading-progbar").css("display", "none");
				if ($.browser.msie) {
					data = data.replace(/(\w+)=([^ ">]+)/g, '$1="$2"');
				}
				$("#UploadPics").html(data);
		}
		};
		$("#uploadForm").ajaxSubmit(options);
		return false;
	}
</script><?php }} ?>