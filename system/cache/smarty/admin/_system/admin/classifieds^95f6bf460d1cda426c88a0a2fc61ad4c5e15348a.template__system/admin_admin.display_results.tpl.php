<?php /* Smarty version Smarty-3.1.13, created on 2014-12-18 13:17:29
         compiled from "template__system/admin_admin:d:\xampp\htdocs\tuyendungvn\templates\_system\admin\classifieds\display_results.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5334549271798fe7c7-43097536%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '95f6bf460d1cda426c88a0a2fc61ad4c5e15348a' => 
    array (
      0 => 'template__system/admin_admin:d:\\xampp\\htdocs\\tuyendungvn\\templates\\_system\\admin\\classifieds\\display_results.tpl',
      1 => 1388137594,
      2 => 'template__system/admin_admin',
    ),
  ),
  'nocache_hash' => '5334549271798fe7c7-43097536',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'listingsType' => 0,
    'GLOBALS' => 0,
    'listings' => 0,
    'listing' => 0,
    'showApprovalStatusField' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5492717c65f3d6_15042106',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5492717c65f3d6_15042106')) {function content_5492717c65f3d6_15042106($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cycle')) include 'D:\\xampp\\htdocs\\tuyendungvn\\system\\ext\\Smarty\\libs\\plugins\\function.cycle.php';
if (!is_callable('smarty_modifier_regex_replace')) include 'D:\\xampp\\htdocs\\tuyendungvn\\system\\ext\\Smarty\\libs\\plugins\\modifier.regex_replace.php';
?><script language="JavaScript" type="text/javascript" src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['common_js'][0][0]->getCommonJsURL(array(),$_smarty_tpl);?>
/pagination.js"></script>
<?php $_smarty_tpl->_capture_stack[0][] = array("confirmToDelete", null, null); ob_start(); ?><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Are you sure you want to delete this <?php echo mb_strtolower($_smarty_tpl->tpl_vars['listingsType']->value['name'], 'UTF-8');?>
?<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<div class="clr"><br/></div>
<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/listing-actions/" name="resultsForm">
	<input type="hidden" name="action_name" id="action_name" value="">
	<input type="hidden" name="listingTypeId" value="<?php echo $_smarty_tpl->tpl_vars['listingsType']->value['id'];?>
">
	<input type="hidden" name="rejectReason" value="">
	<input type="hidden" name="date_to_change" id="date_to_change" value="">

	<div class="box" id="displayResults">
		<div class="box-header">
			<?php echo $_smarty_tpl->getSubTemplate ("../pagination/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('layout'=>"header"), 0);?>

			<div id="rejectDialog" style="display: none">
				<textarea name="reason" cols="30" rows="4"></textarea>
				<input type="submit" value="Submit Reject" class="greenButton" id="submitReject" />
			</div>

			<div id="modify_date_dialog" style="display: none; z-index: 10000">
				Modify Expiration Date for <input type="text" size="2" id="new_date" name="new_date" readonly = "readonly">
				<div class="clr"><br/></div>
				<input type="submit" id="modify_send_button" name="modify_send_button" value="Modify" class="greenButton" />
			</div>
		</div>

		<div class="innerpadding">
			<div id="displayResultsTable">
				<table width="100%">
					<thead>
						<?php echo $_smarty_tpl->getSubTemplate ("../pagination/sort.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

					</thead>
					<tbody>
						<?php  $_smarty_tpl->tpl_vars['listing'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['listing']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['listings']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['listings_block']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['listing']->key => $_smarty_tpl->tpl_vars['listing']->value){
$_smarty_tpl->tpl_vars['listing']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['listings_block']['iteration']++;
?>
							<tr class="<?php echo smarty_function_cycle(array('values'=>'evenrow,oddrow'),$_smarty_tpl);?>
">
								<td><input type="checkbox" name="listings[<?php echo $_smarty_tpl->tpl_vars['listing']->value['id'];?>
]" value="1" id="checkbox_<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['listings_block']['iteration'];?>
" /></td>
								<td><a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/display-listing/?listing_id=<?php echo $_smarty_tpl->tpl_vars['listing']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['listing']->value['id'];?>
</a></td>
								<td><a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/display-listing/?listing_id=<?php echo $_smarty_tpl->tpl_vars['listing']->value['id'];?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['listing']->value['Title'], ENT_QUOTES, 'UTF-8', true);?>
</a></td>
								<td><?php echo $_smarty_tpl->tpl_vars['listing']->value['product']['name'];?>
</td>
								<td><span title="<?php echo $_smarty_tpl->tpl_vars['listing']->value['activation_date'];?>
"><?php echo smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['listing']->value['activation_date'],"/\s.*/",'');?>
</span></td>
								<td><span title="<?php echo $_smarty_tpl->tpl_vars['listing']->value['expiration_date'];?>
"><?php echo smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['listing']->value['expiration_date'],"/\s.*/",'');?>
</span></td>
								<td>
									<a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/edit-user/?user_sid=<?php echo $_smarty_tpl->tpl_vars['listing']->value['user']['sid'];?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['listing']->value['user']['username'], ENT_QUOTES, 'UTF-8', true);?>

										<?php if (in_array($_smarty_tpl->tpl_vars['listing']->value['type']['id'],array('Job','Resume'))){?>
											(<?php if ($_smarty_tpl->tpl_vars['listing']->value['type']['id']=='Job'){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['listing']->value['user']['CompanyName'], ENT_QUOTES, 'UTF-8', true);?>
<?php }else{ ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['listing']->value['user']['FirstName'], ENT_QUOTES, 'UTF-8', true);?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['listing']->value['user']['LastName'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>)
										<?php }?>
									</a>
								</td>
								<td><?php echo $_smarty_tpl->tpl_vars['listing']->value['views'];?>
</td>
								<td><?php if ($_smarty_tpl->tpl_vars['listing']->value['active']==1){?>Active<?php }else{ ?>Not Active<?php }?></td>
								<?php if ($_smarty_tpl->tpl_vars['showApprovalStatusField']->value!=false){?>
									<td <?php if ($_smarty_tpl->tpl_vars['listing']->value['reject_reason']!=''){?>title="Reason: <?php echo $_smarty_tpl->tpl_vars['listing']->value['reject_reason'];?>
"<?php }?>>
										<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['listing']->value['status'], ENT_QUOTES, 'UTF-8', true);?>

									</td>
								<?php }?>
								<td nowrap="nowrap">
									<?php if ($_smarty_tpl->tpl_vars['listing']->value['active']){?>
										<a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/listing-actions/?action_name=deactivate&amp;listings[<?php echo $_smarty_tpl->tpl_vars['listing']->value['id'];?>
]=1&amp;listingTypeId=<?php echo $_smarty_tpl->tpl_vars['listing']->value['type']['id'];?>
" class="deletebutton"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Deactivate<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a>
									<?php }else{ ?>
										<a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/listing-actions/?action_name=activate&amp;listings[<?php echo $_smarty_tpl->tpl_vars['listing']->value['id'];?>
]=1&amp;listingTypeId=<?php echo $_smarty_tpl->tpl_vars['listing']->value['type']['id'];?>
" class="editbutton greenbtn" style="text-align: center;"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Activate<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a>
									<?php }?>
								</td>
								<td nowrap="nowrap" style="border-left: 0px;"><a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/edit-listing/?listing_id=<?php echo $_smarty_tpl->tpl_vars['listing']->value['id'];?>
" title="Edit" class="editbutton"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Edit<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a></td>
								<td nowrap="nowrap" style="border-left: 0px;"><a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/listing-actions/?action_name=delete&amp;listings[<?php echo $_smarty_tpl->tpl_vars['listing']->value['id'];?>
]=1&amp;listingTypeId=<?php echo $_smarty_tpl->tpl_vars['listing']->value['type']['id'];?>
" onclick="return confirm('<?php echo htmlspecialchars(Smarty::$_smarty_vars['capture']['confirmToDelete'], ENT_QUOTES, 'UTF-8', true);?>
')" title="Delete" class="deletebutton"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Delete<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a></td>
							</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
		<div class="box-footer">
			<?php echo $_smarty_tpl->getSubTemplate ("../pagination/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('layout'=>"footer"), 0);?>

		</div>
	</div>
</form>
<?php $_smarty_tpl->_capture_stack[0][] = array("trTitleRejectReason", null, null); ob_start(); ?><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Enter Reject Reason:<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php $_smarty_tpl->_capture_stack[0][] = array("trTitleModifyExpirationDate", null, null); ob_start(); ?><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Modify Expiration Date<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php $_smarty_tpl->_capture_stack[0][] = array("trLoading", null, null); ob_start(); ?><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Please, wait...<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<script type="text/javascript">
	$.ui.dialog.prototype.options.bgiframe = true;
	var progBar = "<img src='<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['user_site_url'];?>
/system/ext/jquery/progbar.gif' />";

	function isPopUp(button, textChooseAction, textChooseItem, textToDelete) {
		if (isActionEmpty(button, textChooseAction, textChooseItem)) {
			var action = $("#selectedAction_" + button).val();
			switch (action) {
				case "reject":
					$("#rejectDialog").dialog("destroy");
					$("#rejectDialog").attr({ title: "<?php echo strtr(Smarty::$_smarty_vars['capture']['trTitleRejectReason'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
" });
					$("#rejectDialog").dialog();
					return false;
					break;
				case "modify_date_button":
					$("#modify_date_dialog").dialog('destroy');
					$("#modify_date_dialog").attr({ title: "<?php echo strtr(Smarty::$_smarty_vars['capture']['trTitleModifyExpirationDate'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
" });
					$("#modify_date_dialog").dialog();
					break;
				case "delete":
					if (confirm(textToDelete)) {
						submitForm(action);
					}
				default:
					submitForm(action);
					break;
			}
		}
	}

	$("#submitReject").click(function(){
		val = $("textarea[name='reason']").val();
		$("input[name='rejectReason']").val( val );
		$("input[name='action_name']").val('reject');
		$("form[name='resultsForm']").submit();
	});

	$("#modify_send_button").click(function(){
		val = $("#new_date").val();
		$("#date_to_change").val( val );
		$("input[name='action_name']").val("datemodify");
		$("#modify_date_dialog").dialog('destroy').html("<?php echo strtr(Smarty::$_smarty_vars['capture']['trLoading'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
" + progBar).dialog({ width: 250 });
		$("form[name='resultsForm']").submit();
	});

	var dFormat = '<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['current_language_data']['date_format'];?>
';

	dFormat = dFormat.replace('%m', "mm");
	dFormat = dFormat.replace('%d', "dd");
	dFormat = dFormat.replace('%Y', "yy");
	$(function () {
		$("#new_date").datepicker({
			dateFormat:dFormat,
			showOn:'both',
			yearRange:'-99:+99',
			buttonImage: '<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['image'][0][0]->getImageURL(array(),$_smarty_tpl);?>
icons/icon-calendar.png'
		});
	});
</script><?php }} ?>