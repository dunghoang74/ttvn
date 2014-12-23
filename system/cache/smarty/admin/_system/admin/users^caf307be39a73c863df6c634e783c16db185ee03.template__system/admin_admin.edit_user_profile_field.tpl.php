<?php /* Smarty version Smarty-3.1.13, created on 2014-12-18 13:36:25
         compiled from "template__system/admin_admin:d:\xampp\htdocs\tuyendungvn\templates\_system\admin\users\edit_user_profile_field.tpl" */ ?>
<?php /*%%SmartyHeaderCode:23298549275e96b2dd0-36519512%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'caf307be39a73c863df6c634e783c16db185ee03' => 
    array (
      0 => 'template__system/admin_admin:d:\\xampp\\htdocs\\tuyendungvn\\templates\\_system\\admin\\users\\edit_user_profile_field.tpl',
      1 => 1370393404,
      2 => 'template__system/admin_admin',
    ),
  ),
  'nocache_hash' => '23298549275e96b2dd0-36519512',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'GLOBALS' => 0,
    'user_group_sid' => 0,
    'user_group_info' => 0,
    'user_profile_field_info' => 0,
    'field_type' => 0,
    'user_profile_field_sid' => 0,
    'form_fields' => 0,
    'form_field' => 0,
    'field_name' => 0,
    'tree_levels_number' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_549275eb7343a2_96603648',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_549275eb7343a2_96603648')) {function content_549275eb7343a2_96603648($_smarty_tpl) {?><?php $_smarty_tpl->smarty->_tag_stack[] = array('breadcrumbs', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['breadcrumbs'][0][0]->_tpl_breadcrumbs(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/user-groups/">User Groups</a> &#187; <a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/edit-user-group/?sid=<?php echo $_smarty_tpl->tpl_vars['user_group_sid']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['user_group_info']->value['name'];?>
</a> &#187; <a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/edit-user-profile/?user_group_sid=<?php echo $_smarty_tpl->tpl_vars['user_group_sid']->value;?>
">Edit User Profile Fields</a> &#187; <?php echo $_smarty_tpl->tpl_vars['user_profile_field_info']->value['caption'];?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['breadcrumbs'][0][0]->_tpl_breadcrumbs(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<h1><img src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['image'][0][0]->getImageURL(array(),$_smarty_tpl);?>
/icons/linedpaperpencil32.png" border="0" alt="" class="titleicon" />Edit User Profile Field Info</h1>
<?php echo $_smarty_tpl->getSubTemplate ("field_errors.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php if (in_array($_smarty_tpl->tpl_vars['field_type']->value,array('list','multilist'))){?>
    <p><a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/edit-user-profile-field/edit-list/?field_sid=<?php echo $_smarty_tpl->tpl_vars['user_profile_field_sid']->value;?>
" class="grayButton">Edit List Values</a></p>
<?php }elseif($_smarty_tpl->tpl_vars['field_type']->value=='location'){?>
    <p><a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/edit-user-profile-field/edit-location-fields/?field_sid=<?php echo $_smarty_tpl->tpl_vars['user_profile_field_sid']->value;?>
" class="grayButton">Edit Fields</a></p>
<?php }elseif($_smarty_tpl->tpl_vars['field_type']->value=='tree'){?>
    <p><a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/edit-user-profile-field/edit-tree/?field_sid=<?php echo $_smarty_tpl->tpl_vars['user_profile_field_sid']->value;?>
&amp;user_group_sid=<?php echo $_smarty_tpl->tpl_vars['user_group_sid']->value;?>
" class="grayButton">Edit Tree</a></p>
<?php }elseif($_smarty_tpl->tpl_vars['field_type']->value=='geo'){?>
    <p><a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/geographic-data/" class="grayButton">Edit Geographic Data</a></p>
<?php }?>

<fieldset>
	<legend>User Profile Field Info - <?php echo $_smarty_tpl->tpl_vars['user_profile_field_info']->value['caption'];?>
</legend>
	<table>
		<form id="fieldData" method="post" enctype="multipart/form-data">
			<input type="hidden" id="action" name="action" value="save_info">
			<input type="hidden" name="sid" value="<?php echo $_smarty_tpl->tpl_vars['user_profile_field_sid']->value;?>
">
			<input type="hidden" name="user_group_sid" value="<?php echo $_smarty_tpl->tpl_vars['user_group_sid']->value;?>
">
			<?php  $_smarty_tpl->tpl_vars['form_field'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['form_field']->_loop = false;
 $_smarty_tpl->tpl_vars['field_name'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['form_fields']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['form_field']->key => $_smarty_tpl->tpl_vars['form_field']->value){
$_smarty_tpl->tpl_vars['form_field']->_loop = true;
 $_smarty_tpl->tpl_vars['field_name']->value = $_smarty_tpl->tpl_vars['form_field']->key;
?>
				<?php if ($_smarty_tpl->tpl_vars['form_field']->value['id']=='width'&&$_smarty_tpl->tpl_vars['field_type']->value=='logo'){?>
					<tr><td colspan="3" style="font-weight: bold; padding-top:10px;">Company Info</td></tr>
				<?php }elseif($_smarty_tpl->tpl_vars['form_field']->value['id']=='second_width'&&$_smarty_tpl->tpl_vars['field_type']->value=='logo'){?>
					<tr><td colspan="3" style="font-weight: bold; padding-top:10px;">Featured Companies</td></tr>
				<?php }?>
				<tr id="tr_<?php echo $_smarty_tpl->tpl_vars['field_name']->value;?>
">
					<td id="td_caption_<?php echo $_smarty_tpl->tpl_vars['field_name']->value;?>
"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['form_field']->value['caption'];?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
 </td>
					<td class="required"><?php if ($_smarty_tpl->tpl_vars['form_field']->value['is_required']){?>*<?php }?></td>
					<td>
						<?php if ($_smarty_tpl->tpl_vars['field_name']->value=='display_as_select_boxes'){?>
							<input type="radio" name="display_as_select_boxes" value="0" <?php if (!$_smarty_tpl->tpl_vars['user_profile_field_info']->value['display_as_select_boxes']){?>checked="checked"<?php }?>/>Tree Block<br/>
							<input type="radio" name="display_as_select_boxes" value="1" <?php if ($_smarty_tpl->tpl_vars['user_profile_field_info']->value['display_as_select_boxes']){?>checked="checked"<?php }?>/>Select Boxes
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
			<?php } ?>
			<tr>
                <td colspan="3">
                    <div class="floatRight">
                        <input type="button" id="apply" value="<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Apply<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
" class="greenButton"/>
                        <input type="button" id="save" value="<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Save<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
" class="greenButton" />
                    </div>
                </td>
            </tr>
		</form>
	</table>
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

<script type="text/javascript">
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

var userFieldId = "<?php echo $_smarty_tpl->tpl_vars['user_profile_field_info']->value['id'];?>
";
$('#apply').click(function () {
		$('#action').attr('value', 'apply_info');
		saveFieldSettings();
});
$('#save').click(function () {
		saveFieldSettings();
});

function saveFieldSettings()
{
	if ((userFieldId == $("input[name='id']").val()) || (userFieldId == 'Location')) {
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
				$("input[name='id']").val(userFieldId);
				$('#action').attr('value', 'save_info');
				$("#messageWindow").dialog('destroy');
			}
		}
	});
}


</script><?php }} ?>