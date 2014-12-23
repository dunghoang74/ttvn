<?php /* Smarty version Smarty-3.1.13, created on 2014-12-18 13:18:43
         compiled from "template__system/admin_admin:d:\xampp\htdocs\tuyendungvn\templates\_system\admin\classifieds\flagged_listings.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7619549271c3a340b0-64883219%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a340772f5e5b7269a0ae1a35e56d841679214196' => 
    array (
      0 => 'template__system/admin_admin:d:\\xampp\\htdocs\\tuyendungvn\\templates\\_system\\admin\\classifieds\\flagged_listings.tpl',
      1 => 1388055540,
      2 => 'template__system/admin_admin',
    ),
  ),
  'nocache_hash' => '7619549271c3a340b0-64883219',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'listing_types' => 0,
    'type' => 0,
    'listing_type_sid' => 0,
    'filters' => 0,
    'all_flags' => 0,
    'flag' => 0,
    'listings' => 0,
    'elem' => 0,
    'GLOBALS' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_549271c562d2e8_32219586',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_549271c562d2e8_32219586')) {function content_549271c562d2e8_32219586($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cycle')) include 'D:\\xampp\\htdocs\\tuyendungvn\\system\\ext\\Smarty\\libs\\plugins\\function.cycle.php';
if (!is_callable('smarty_modifier_truncate')) include 'D:\\xampp\\htdocs\\tuyendungvn\\system\\ext\\Smarty\\libs\\plugins\\modifier.truncate.php';
?><?php $_smarty_tpl->smarty->_tag_stack[] = array('breadcrumbs', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['breadcrumbs'][0][0]->_tpl_breadcrumbs(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Flagged Listings<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['breadcrumbs'][0][0]->_tpl_breadcrumbs(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<h1><img src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['image'][0][0]->getImageURL(array(),$_smarty_tpl);?>
/icons/linedpaperminus32.png" border="0" alt="" class="titleicon" />Flagged Listings</h1>
<script language="JavaScript" type="text/javascript" src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['common_js'][0][0]->getCommonJsURL(array(),$_smarty_tpl);?>
/pagination.js"></script>

	<form name="filter">
		<fieldset id="filter_fieldset">
			<legend>Filter By</legend>
			<table>
				<thead>
					<tr>
						<th>Listing Type</th>
						<th>Title</th>
						<th>Listing Owner</th>
						<th>Flag</th>
						<th></th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>
							<select name="listing_type">
								<option value="">All</option>
								<?php  $_smarty_tpl->tpl_vars['type'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['type']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['listing_types']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['type']->key => $_smarty_tpl->tpl_vars['type']->value){
$_smarty_tpl->tpl_vars['type']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['type']->key;
?>
									<option value="<?php echo $_smarty_tpl->tpl_vars['type']->value['sid'];?>
" <?php if ($_smarty_tpl->tpl_vars['type']->value['sid']==$_smarty_tpl->tpl_vars['listing_type_sid']->value){?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['type']->value['id'];?>
</option>
								<?php } ?>
							</select>
						</td>
						<td><input type="text" name="filter_title"  value="<?php echo $_smarty_tpl->tpl_vars['filters']->value['title'];?>
"/></td>
						<td><input type="text" name="filter_user" value="<?php echo $_smarty_tpl->tpl_vars['filters']->value['username'];?>
"/></td>
						<td>
							<select name="filter_flag">
								<option value="">All</option>
									<?php  $_smarty_tpl->tpl_vars['flag'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['flag']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['all_flags']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['flag']->key => $_smarty_tpl->tpl_vars['flag']->value){
$_smarty_tpl->tpl_vars['flag']->_loop = true;
?>
										<option value="<?php echo $_smarty_tpl->tpl_vars['flag']->value['sid'];?>
" <?php if ($_smarty_tpl->tpl_vars['flag']->value['sid']==$_smarty_tpl->tpl_vars['filters']->value['flag']){?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['flag']->value['value'];?>
</option>
									<?php } ?>
							</select>
						</td>
						<td>
							<input name="action" value="filter" type="hidden">
							<input name="page" value="1" type="hidden">
							<span class="greenButtonEnd"><input value="Filter" type="submit" class="greenButton" /></span>
						</td>
					</tr>
				</tbody>
			</table>
		</fieldset>
	</form>
<div class="clr"><br/></div>

<form method="post" name="flagged_listings_form">
	<input type="hidden" id="action_name" name="action_name" value="" />
	<div class="box" id="displayResults">
		<div class="box-header">
			<?php echo $_smarty_tpl->getSubTemplate ("../pagination/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('layout'=>"header"), 0);?>

		</div>
		<div class="innerpadding">
			<div id="displayResultsTable">
				<table width="100%">
					<thead>
						<?php echo $_smarty_tpl->getSubTemplate ("../pagination/sort.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

					</thead>
					<tbody>
					<?php  $_smarty_tpl->tpl_vars['elem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['elem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['listings']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['flagged_block']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['elem']->key => $_smarty_tpl->tpl_vars['elem']->value){
$_smarty_tpl->tpl_vars['elem']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['flagged_block']['iteration']++;
?>
						<tr class="<?php echo smarty_function_cycle(array('values'=>"oddrow,evenrow"),$_smarty_tpl);?>
">
							<td><input type="checkbox" name="flagged[<?php echo $_smarty_tpl->tpl_vars['elem']->value['sid'];?>
]" value="1" id="checkbox_<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['flagged_block']['iteration'];?>
" /></td>
							<td><?php echo $_smarty_tpl->tpl_vars['elem']->value['sid'];?>
</td>
							<td>
								<?php if ($_smarty_tpl->tpl_vars['elem']->value['listing_info']['Title']){?>
									<a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/edit-listing/?listing_id=<?php echo $_smarty_tpl->tpl_vars['elem']->value['listing_sid'];?>
" class="editListing"><?php echo $_smarty_tpl->tpl_vars['elem']->value['listing_info']['Title'];?>
</a>
								<?php }else{ ?>
									<?php echo $_smarty_tpl->tpl_vars['elem']->value['listing_sid'];?>
 (deleted)
								<?php }?>
							</td>
							<td><?php if ($_smarty_tpl->tpl_vars['elem']->value['listing_info']['active']==0){?>Not Active<?php }else{ ?>Active<?php }?></td>
							<td><a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/edit-user/?user_sid=<?php echo $_smarty_tpl->tpl_vars['elem']->value['user_info']['sid'];?>
" class="editUser"><?php echo $_smarty_tpl->tpl_vars['elem']->value['user_info']['username'];?>
</a></td>
							<td><?php if (empty($_smarty_tpl->tpl_vars['elem']->value['flagged_user'])){?>anonymous<?php }else{ ?><a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/edit-user/?user_sid=<?php echo $_smarty_tpl->tpl_vars['elem']->value['flagged_user']['sid'];?>
" class="editUser"><?php echo $_smarty_tpl->tpl_vars['elem']->value['flagged_user']['username'];?>
</a><?php }?></td>
							<td><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['elem']->value['date'],"10",'');?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['elem']->value['flag_reason'];?>
</td>
							<td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elem']->value['comment'], ENT_QUOTES, 'UTF-8', true);?>
</td>
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
<?php $_smarty_tpl->_capture_stack[0][] = array("sureToDeleteListing", null, null); ob_start(); ?><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Are you sure you want to delete selected listings?<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<script type="text/javascript">
	function isPopUp(button, textChooseAction, textChooseItem, textToDelete) {
		if (isActionEmpty(button, textChooseAction, textChooseItem)) {
			var action = $("#selectedAction_" + button).val();
			switch (action) {
				case "remove":
					if (confirm(textToDelete)) {
						submitForm(action);
					}
					break;
				case "delete":
					if (confirm("<?php echo htmlspecialchars(Smarty::$_smarty_vars['capture']['sureToDeleteListing'], ENT_QUOTES, 'UTF-8', true);?>
")) {
						submitForm(action);
					}
					break;
				default:
					submitForm(action);
					break;
			}
		}
	}
</script><?php }} ?>