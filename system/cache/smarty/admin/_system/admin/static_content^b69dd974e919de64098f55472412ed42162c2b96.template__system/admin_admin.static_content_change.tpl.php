<?php /* Smarty version Smarty-3.1.13, created on 2014-12-22 21:28:23
         compiled from "template__system/admin_admin:d:\xampp\htdocs\tuyendungvn\templates\_system\admin\static_content\static_content_change.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1546354982a87b56a84-87517811%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b69dd974e919de64098f55472412ed42162c2b96' => 
    array (
      0 => 'template__system/admin_admin:d:\\xampp\\htdocs\\tuyendungvn\\templates\\_system\\admin\\static_content\\static_content_change.tpl',
      1 => 1381294060,
      2 => 'template__system/admin_admin',
    ),
  ),
  'nocache_hash' => '1546354982a87b56a84-87517811',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'GLOBALS' => 0,
    'pageInfo' => 0,
    'error' => 0,
    'page_sid' => 0,
    'page' => 0,
    'languages' => 0,
    'language' => 0,
    'page_content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_54982a88a9f472_22550293',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54982a88a9f472_22550293')) {function content_54982a88a9f472_22550293($_smarty_tpl) {?><?php $_smarty_tpl->smarty->_tag_stack[] = array('breadcrumbs', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['breadcrumbs'][0][0]->_tpl_breadcrumbs(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/stat-pages/">Static Content</a> &#187; Edit Static Content<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['breadcrumbs'][0][0]->_tpl_breadcrumbs(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<h1><img src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['image'][0][0]->getImageURL(array(),$_smarty_tpl);?>
/icons/notepencil32.png" border="0" alt="" class="titleicon"/>Edit Static Content</h1>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['module'][0][0]->module(array('name'=>"user_pages",'function'=>"register_page_link",'pageInfo'=>$_smarty_tpl->tpl_vars['pageInfo']->value,'caption'=>"Content"),$_smarty_tpl);?>

<?php echo $_smarty_tpl->tpl_vars['error']->value;?>

<form id="staticContent" method="post">
	<input type="hidden" name="action" value="change" />
	<input type="hidden" id="formSubmitted" name="formSubmitted" value="save_content" />
	<input type="hidden" name="page_sid" value=<?php echo $_smarty_tpl->tpl_vars['page_sid']->value;?>
 />
	<table width="100%" id="editStaticContent">
		<tr>
			<td width="15%">ID</td>
			<td><input type="text" name="page_id" value="<?php echo $_smarty_tpl->tpl_vars['page']->value['id'];?>
" /></td>
		</tr>
		<tr>
			<td>Static content name</td>
			<td><input type="text" name="name" value="<?php echo $_smarty_tpl->tpl_vars['page']->value['name'];?>
" /></td>
		</tr>
		<tr>
			<td>Language</td>
			<td>
				<select name="lang">
					<?php  $_smarty_tpl->tpl_vars['language'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['language']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['language']->key => $_smarty_tpl->tpl_vars['language']->value){
$_smarty_tpl->tpl_vars['language']->_loop = true;
?>
						<option value="<?php echo $_smarty_tpl->tpl_vars['language']->value['id'];?>
"<?php if ($_smarty_tpl->tpl_vars['language']->value['id']==$_smarty_tpl->tpl_vars['page']->value['lang']){?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['language']->value['caption'];?>
</option>
					<?php } ?>
				</select>
			</td>
		</tr>
		<tr>
			<td colspan="2">Static content:</td>
		</tr>
		<tr>
			<td colspan="2"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['WYSIWYGEditor'][0][0]->WYSIWYGEditor(array('name'=>"content",'width'=>"99%",'height'=>"700",'value'=>$_smarty_tpl->tpl_vars['page_content']->value,'conf'=>"BasicAdmin"),$_smarty_tpl);?>
</td>
		</tr>
		<tr id="clearTable">
			<td colspan="2">
				<div class="floatRight">
					<input type="button" id="apply" value="Apply" class="greenButton"/>
					<input type="button" id="save" value="Save" class="greenButton" />
				</div>
			</td>
		</tr>
	</table>
</form>
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
	var pageId = "<?php echo $_smarty_tpl->tpl_vars['page']->value['id'];?>
";
	$('#apply').click(function () {
		$('#formSubmitted').attr('value', 'apply_content');
		saveStaticContentSettings();
	});
	$("#save").click(function () {
		saveStaticContentSettings();
	});

	function saveStaticContentSettings()
	{
		if (pageId == $("input[name='page_id']").val()) {
			$('#staticContent').submit();
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
					$('#staticContent').submit();
				},
				"<?php echo strtr(Smarty::$_smarty_vars['capture']['don_t_change'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
": function () {
					$("input[name='page_id']").val(pageId);
					$('#action').attr('value', 'save_info');
					$("#messageWindow").dialog('destroy');
				}
			}
		});
	}
</script><?php }} ?>