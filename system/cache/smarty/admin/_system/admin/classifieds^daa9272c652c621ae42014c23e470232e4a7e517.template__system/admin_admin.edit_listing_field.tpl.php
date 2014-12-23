<?php /* Smarty version Smarty-3.1.13, created on 2014-12-23 22:05:03
         compiled from "template__system/admin_admin:d:\xampp\htdocs\tuyendungvn\templates\_system\admin\classifieds\edit_listing_field.tpl" */ ?>
<?php /*%%SmartyHeaderCode:201805499849f99c3a9-08030663%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'daa9272c652c621ae42014c23e470232e4a7e517' => 
    array (
      0 => 'template__system/admin_admin:d:\\xampp\\htdocs\\tuyendungvn\\templates\\_system\\admin\\classifieds\\edit_listing_field.tpl',
      1 => 1387956258,
      2 => 'template__system/admin_admin',
    ),
  ),
  'nocache_hash' => '201805499849f99c3a9-08030663',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'GLOBALS' => 0,
    'listing_field_info' => 0,
    'field_type' => 0,
    'field_sid' => 0,
    'form_fields' => 0,
    'field_name' => 0,
    'form_field' => 0,
    'profileFieldAsDV' => 0,
    'tree_levels_number' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_549984a219a000_69026834',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_549984a219a000_69026834')) {function content_549984a219a000_69026834($_smarty_tpl) {?><?php $_smarty_tpl->smarty->_tag_stack[] = array('breadcrumbs', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['breadcrumbs'][0][0]->_tpl_breadcrumbs(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/listing-fields/">Listing Fields</a> &#187; <?php echo $_smarty_tpl->tpl_vars['listing_field_info']->value['caption'];?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['breadcrumbs'][0][0]->_tpl_breadcrumbs(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<h1><img src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['image'][0][0]->getImageURL(array(),$_smarty_tpl);?>
/icons/linedpaperpencil32.png" border="0" class="titleicon" />Edit Listing Field Info</h1>
<?php echo $_smarty_tpl->getSubTemplate ("field_errors.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php if ($_smarty_tpl->tpl_vars['field_type']->value=='list'||$_smarty_tpl->tpl_vars['field_type']->value=='multilist'){?>
    <p><a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/edit-listing-field/edit-list/?field_sid=<?php echo $_smarty_tpl->tpl_vars['field_sid']->value;?>
" class="grayButton">Edit List Values</a></p>
<?php }elseif($_smarty_tpl->tpl_vars['field_type']->value=='complex'){?>
    <p><a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/edit-listing-field/edit-fields/?field_sid=<?php echo $_smarty_tpl->tpl_vars['field_sid']->value;?>
" class="grayButton">Edit Fields</a></p>
<?php }elseif($_smarty_tpl->tpl_vars['field_type']->value=='location'){?>
    <p><a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/edit-listing-field/edit-location-fields/?field_sid=<?php echo $_smarty_tpl->tpl_vars['field_sid']->value;?>
" class="grayButton">Edit Fields</a></p>
<?php }elseif($_smarty_tpl->tpl_vars['field_type']->value=='geo'){?>
    <p><a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/geographic-data/" class="grayButton">Edit Geographic Data</a></p>
<?php }elseif($_smarty_tpl->tpl_vars['field_type']->value=='tree'){?>
    <p style="margin: 13px 0;"><a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/edit-listing-field/edit-tree/?field_sid=<?php echo $_smarty_tpl->tpl_vars['field_sid']->value;?>
" class="grayButton">Edit Tree Values</a></p>
<?php }?>

<fieldset>
<legend>Listing Field Info</legend>
	<form id="fieldData" method="post" action="">
		<input type="hidden" id="action" name="action" value="save_info" />
		<input type="hidden" name="sid" value="<?php echo $_smarty_tpl->tpl_vars['field_sid']->value;?>
" />
		<table>
			<?php  $_smarty_tpl->tpl_vars['form_field'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['form_field']->_loop = false;
 $_smarty_tpl->tpl_vars['field_name'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['form_fields']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['form_field']->key => $_smarty_tpl->tpl_vars['form_field']->value){
$_smarty_tpl->tpl_vars['form_field']->_loop = true;
 $_smarty_tpl->tpl_vars['field_name']->value = $_smarty_tpl->tpl_vars['form_field']->key;
?>
				<tr id="tr_<?php echo $_smarty_tpl->tpl_vars['field_name']->value;?>
">
					<td valign="top" id="td_caption_<?php echo $_smarty_tpl->tpl_vars['field_name']->value;?>
">
						<?php if ($_smarty_tpl->tpl_vars['form_field']->value['id']=='default_value'){?>
							<div id='defaultCaption' <?php if (!$_smarty_tpl->tpl_vars['profileFieldAsDV']->value){?>style='display: block;'<?php }else{ ?>style='display: none'<?php }?>><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['form_field']->value['caption'];?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</div>
						<?php }elseif($_smarty_tpl->tpl_vars['form_field']->value['id']=='profile_field_as_dv'){?>
							<div id='profileFieldAsDefaultCaption' <?php if (!$_smarty_tpl->tpl_vars['profileFieldAsDV']->value){?>style='display: none'<?php }else{ ?>style='display: block'<?php }?>><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['form_field']->value['caption'];?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</div>
						<?php }else{ ?>
							<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['form_field']->value['caption'];?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

						<?php }?>
					</td>
					<td class="required"><?php if ($_smarty_tpl->tpl_vars['form_field']->value['is_required']){?>*<?php }?></td>
					<td valign="top">
						<?php if ($_smarty_tpl->tpl_vars['form_field']->value['id']=='default_value'&&$_smarty_tpl->tpl_vars['form_field']->value['type']!='tree'){?>
							<input type='checkbox' id='profile_field' name='profile_field' <?php if ($_smarty_tpl->tpl_vars['profileFieldAsDV']->value){?>checked=checked<?php }?> />Use user profile field as a default value<div class="clr"><br/></div>
							<div id='defaultValue' <?php if (!$_smarty_tpl->tpl_vars['profileFieldAsDV']->value){?>style='display: block;'<?php }else{ ?>style='display: none'<?php }?>><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['input'][0][0]->tpl_input(array('property'=>$_smarty_tpl->tpl_vars['form_field']->value['id']),$_smarty_tpl);?>
</div>
						<?php }elseif($_smarty_tpl->tpl_vars['form_field']->value['id']=='profile_field_as_dv'){?>
							<div id='profileFieldAsDefaultValue' <?php if (!$_smarty_tpl->tpl_vars['profileFieldAsDV']->value){?>style='display: none'<?php }else{ ?>style='display: block'<?php }?>><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['input'][0][0]->tpl_input(array('property'=>$_smarty_tpl->tpl_vars['form_field']->value['id']),$_smarty_tpl);?>
</div>
							<div class="commentSmall">This value will be automatically set for this field.</div>
						<?php }elseif($_smarty_tpl->tpl_vars['field_name']->value=='display_as_select_boxes'){?>
							<input type="radio" name="display_as_select_boxes" value="0" <?php if (!$_smarty_tpl->tpl_vars['listing_field_info']->value['display_as_select_boxes']){?>checked="checked"<?php }?>/>Tree Block<br/>
							<input type="radio" name="display_as_select_boxes" value="1" <?php if ($_smarty_tpl->tpl_vars['listing_field_info']->value['display_as_select_boxes']){?>checked="checked"<?php }?>/>Select Boxes
                        <?php }elseif($_smarty_tpl->tpl_vars['field_name']->value=='choiceLimit'){?>
                            <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['input'][0][0]->tpl_input(array('property'=>$_smarty_tpl->tpl_vars['form_field']->value['id']),$_smarty_tpl);?>
<br />
                            <span class="commentSmall">Set empty or 0 for unlimited selection</span>
						<?php }elseif($_smarty_tpl->tpl_vars['field_name']->value=='display_as'&&($_smarty_tpl->tpl_vars['field_type']->value=='list'||$_smarty_tpl->tpl_vars['field_type']->value=='multilist')){?>
							<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['input'][0][0]->tpl_input(array('property'=>$_smarty_tpl->tpl_vars['form_field']->value['id'],'template'=>"list_empty.tpl"),$_smarty_tpl);?>

						<?php }else{ ?>
							<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['input'][0][0]->tpl_input(array('property'=>$_smarty_tpl->tpl_vars['form_field']->value['id']),$_smarty_tpl);?>

						<?php }?>
					</td>
				</tr>
				<?php if ($_smarty_tpl->tpl_vars['form_field']->value['comment']){?><tr><td style="font-size:12px;" colspan="3"><?php echo $_smarty_tpl->tpl_vars['form_field']->value['comment'];?>
</td></tr><?php }?>
				<?php if ($_smarty_tpl->tpl_vars['form_field']->value['id']=='signs_num'){?>
					<tr>
						<td>&nbsp;</td>
                        <td>&nbsp;</td>
						<td style="font-size:12px;" >This setting will be overlapped <br />by the language setting 'Decimals' <br />in the beta version. <br />It will be fixed in the release.</td>
					</tr>
				<?php }?>
			<?php } ?>
			<tr>
				<td colspan="3">
					<input type="hidden" name="old_listing_field_id" value="<?php echo $_smarty_tpl->tpl_vars['listing_field_info']->value['id'];?>
" />
                    <div class="floatRight">
                        <input type="button" id="apply" value="<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Apply<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
" class="greenButton"/>
                        <input type="button" id="save" value="<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Save<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
" class="greenButton"/>
                    </div>
				</td>
			</tr>
		</table>
	</form>
</fieldset>
<div id="messageWindow" style="display: none;">
	<p><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
You are trying to edit the system field (id). If you change the default value of this field there would be a need to make appropriate changes in the settings, templates and PHP code. Otherwise the system will function unpredictably<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</p>
</div>
<?php $_smarty_tpl->_capture_stack[0][] = array("change_anyway", null, null); ob_start(); ?><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Change anyway<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php $_smarty_tpl->_capture_stack[0][] = array("don_t_change", null, null); ob_start(); ?><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Don't change<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>


	<script>
	$("#profile_field").click(function() {
		if (!this.checked) {
			$("#defaultValue").css('display', 'block');
			$("#defaultCaption").css('display', 'block');
			$("#profileFieldAsDefaultValue").css('display', 'none');
			$("#profileFieldAsDefaultCaption").css('display', 'none');
		}
		else {
			$("#defaultValue").css('display', 'none');
			$("#defaultCaption").css('display', 'none');
			$("#profileFieldAsDefaultValue").css('display', 'block');
			$("#profileFieldAsDefaultCaption").css('display', 'block');
		}
	});
	
	<?php if ($_smarty_tpl->tpl_vars['tree_levels_number']->value){?>
	
		$("document").ready(function(){
			showHideTreeLevels($("[name='display_as_select_boxes']:checked").val());
			$("[id^='td_caption_level']").css({"text-align":"right"});
			$("[name='display_as_select_boxes']").click(function(){
				showHideTreeLevels($(this).val());
			});
			function showHideTreeLevels(show){
				if(show==1){ $("[id^='tr_level_']").show();
				}else{ $("[id^='tr_level_']").hide(); }
			}
		});
	
	<?php }?>
	
	var listingFieldId = "<?php echo $_smarty_tpl->tpl_vars['listing_field_info']->value['id'];?>
";
	$('#apply').click(function () {
			$('#action').attr('value', 'apply_info');
			saveFieldSettings();
	});
	$("#save").click(function () {
			saveFieldSettings();
	});

	function saveFieldSettings()
	{
		if (listingFieldId == $("input[name='id']").val() || (listingFieldId == 'Location')) {
			$('#fieldData').submit();
		} else {
			showMessageWindow();
		}
	}

	function showMessageWindow()
	{
		$("#messageWindow").dialog({
			width: 600,
			height: 200,
			buttons: {
				"<?php echo strtr(Smarty::$_smarty_vars['capture']['change_anyway'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
": function () {
					$('#fieldData').submit();
				},
				"<?php echo strtr(Smarty::$_smarty_vars['capture']['don_t_change'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
": function () {
					$("input[name='id']").val(listingFieldId);
					$('#action').attr('value', 'save_info');
					$("#messageWindow").dialog('destroy');
				}
			}
		});
	}
	</script>
<?php }} ?>