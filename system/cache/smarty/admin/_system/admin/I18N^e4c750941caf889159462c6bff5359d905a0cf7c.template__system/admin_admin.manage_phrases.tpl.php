<?php /* Smarty version Smarty-3.1.13, created on 2014-12-23 21:02:19
         compiled from "template__system/admin_admin:d:\xampp\htdocs\tuyendungvn\templates\_system\admin\i18n\manage_phrases.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15689549975eb5c80a5-43887579%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e4c750941caf889159462c6bff5359d905a0cf7c' => 
    array (
      0 => 'template__system/admin_admin:d:\\xampp\\htdocs\\tuyendungvn\\templates\\_system\\admin\\i18n\\manage_phrases.tpl',
      1 => 1385516088,
      2 => 'template__system/admin_admin',
    ),
  ),
  'nocache_hash' => '15689549975eb5c80a5-43887579',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'GLOBALS' => 0,
    'errors' => 0,
    'result' => 0,
    'criteria' => 0,
    'domains' => 0,
    'domain' => 0,
    'languages' => 0,
    'language' => 0,
    'chosen_language_caption' => 0,
    'found_phrases' => 0,
    'phrase' => 0,
    'chosen_language_id' => 0,
    'phrases_per_page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_549975ee8030e3_68837608',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_549975ee8030e3_68837608')) {function content_549975ee8030e3_68837608($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cycle')) include 'D:\\xampp\\htdocs\\tuyendungvn\\system\\ext\\Smarty\\libs\\plugins\\function.cycle.php';
?><?php $_smarty_tpl->_capture_stack[0][] = array("edit_phrase", null, null); ob_start(); ?><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Edit Phrase<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php $_smarty_tpl->_capture_stack[0][] = array("loading", null, null); ob_start(); ?><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Loading<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<script language="JavaScript" type="text/javascript" src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['common_js'][0][0]->getCommonJsURL(array(),$_smarty_tpl);?>
/pagination.js"></script>

<script type="text/javascript">
	$.ui.dialog.prototype.options.bgiframe = true;
	$(function() {
		var content = '<img src="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['user_site_url'];?>
/system/ext/jquery/progbar.gif" />';
		
		$(".goEditPhrase").click(function(){
			$("#editPhraseDialog").dialog('destroy');
			$("#editPhraseDialog").attr({title: "<?php echo strtr(Smarty::$_smarty_vars['capture']['loading'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
"});
			$("#editPhraseDialog").html(content).dialog({width: 200});
			var link = $(this).attr("href");
			$.get(link, function(data){
				$("#editPhraseDialog").dialog('destroy');
				$("#editPhraseDialog").attr({title: "<?php echo strtr(Smarty::$_smarty_vars['capture']['edit_phrase'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
"});
				$("#editPhraseDialog").html(data).dialog({width: 650});
			});
			return false;
		});
	});
	</script>


<div id="editPhraseDialog" style="display: none"></div>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('breadcrumbs', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['breadcrumbs'][0][0]->_tpl_breadcrumbs(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Manage Phrases<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['breadcrumbs'][0][0]->_tpl_breadcrumbs(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<h1><img src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['image'][0][0]->getImageURL(array(),$_smarty_tpl);?>
/icons/exchange32.png" border="0" alt="" class="titleicon"/><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Manage Phrases<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</h1>
<p><a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/add-phrase/" class="grayButton"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Add a New Phrase<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a></p>

<?php if ($_smarty_tpl->tpl_vars['errors']->value){?>
	<?php echo $_smarty_tpl->getSubTemplate ("errors.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('errors'=>$_smarty_tpl->tpl_vars['errors']->value), 0);?>

<?php }?>

<div id="result">
	<?php if ($_smarty_tpl->tpl_vars['result']->value=='added'){?>
		<p class="message"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
The new phrase was successfully added<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</p>
	<?php }elseif($_smarty_tpl->tpl_vars['result']->value=='deleted'){?>
		<p class="message"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
The phrase was deleted<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</p>
	<?php }?>
</div>

<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/manage-phrases/">
	<input type="hidden" name="curr_lang" id="curr_lang" value="<?php echo $_smarty_tpl->tpl_vars['criteria']->value['language'];?>
" />
	<table>
		<tr>
			<td><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Phrase ID<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
:</td>
			<td><input type="text" name="phrase_id" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['criteria']->value['phrase_id'], ENT_QUOTES, 'UTF-8', true);?>
" /></td>
		</tr>
		<tr>
			<td><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Domain<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
:</td>
			<td>
				<select name="domain">
					<option value=""><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Any<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</option>
					<?php  $_smarty_tpl->tpl_vars['domain'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['domain']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['domains']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['domain']->key => $_smarty_tpl->tpl_vars['domain']->value){
$_smarty_tpl->tpl_vars['domain']->_loop = true;
?>
					<option value="<?php echo $_smarty_tpl->tpl_vars['domain']->value;?>
"<?php if ($_smarty_tpl->tpl_vars['criteria']->value['domain']==$_smarty_tpl->tpl_vars['domain']->value){?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['domain']->value;?>
</option>
					<?php } ?>
				</select>
			</td>
		</tr>
		<tr>
			<td><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Languages<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
:</td>
			<td>
				<select name="language">
					<?php  $_smarty_tpl->tpl_vars['language'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['language']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['language']->key => $_smarty_tpl->tpl_vars['language']->value){
$_smarty_tpl->tpl_vars['language']->_loop = true;
?>
						<option value="<?php echo $_smarty_tpl->tpl_vars['language']->value['id'];?>
"
						<?php if ($_smarty_tpl->tpl_vars['criteria']->value['language']==$_smarty_tpl->tpl_vars['language']->value['id']){?>
							selected="selected"
							<?php $_smarty_tpl->tpl_vars['chosen_language_id'] = new Smarty_variable($_smarty_tpl->tpl_vars['language']->value['id'], null, 0);?>
							<?php $_smarty_tpl->tpl_vars['chosen_language_caption'] = new Smarty_variable($_smarty_tpl->tpl_vars['language']->value['caption'], null, 0);?>
						<?php }?>><?php echo $_smarty_tpl->tpl_vars['language']->value['caption'];?>
</option>
					<?php } ?>
				</select>
			</td>
		</tr>
		<tr>
			<td colspan="2">
                <div class="floatRight">
                    <input type="hidden" name="action" value="search_phrases" />
                    <input type="submit" name="show" value="<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Show<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
" class="grayButton" />
                </div>
			</td>
		</tr>
	</table>
</form>
<div class="clr"><br/></div>
<div class="box" id="displayResults">
	<div class="box-header">
		<?php echo $_smarty_tpl->getSubTemplate ("../pagination/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('layout'=>"header"), 0);?>

	</div>
	<div class="innerpadding">
		<div id="displayResultsTable">
			<table width="100%">
				<thead>
					<tr>
						<th><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Phrase ID<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</th>
						<th><?php echo $_smarty_tpl->tpl_vars['chosen_language_caption']->value;?>
</th>
						<th colspan="2" class="actions" width="1%"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Actions<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</th>
					</tr>
				</thead>
				<?php if (!empty($_smarty_tpl->tpl_vars['found_phrases']->value)){?>
					<?php  $_smarty_tpl->tpl_vars['phrase'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['phrase']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['found_phrases']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['phrase']->key => $_smarty_tpl->tpl_vars['phrase']->value){
$_smarty_tpl->tpl_vars['phrase']->_loop = true;
?>
						<?php if ($_smarty_tpl->tpl_vars['phrase']->value['domain']!=$_smarty_tpl->tpl_vars['domain']->value){?>
							<tr>
								<th colspan="4"><?php echo $_smarty_tpl->tpl_vars['phrase']->value['domain'];?>
</th>
							</tr>
						<?php }?>
						<tr class="<?php echo smarty_function_cycle(array('values'=>'evenrow,oddrow'),$_smarty_tpl);?>
">
							<td><a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/edit-phrase/?phrase=<?php echo rawurlencode($_smarty_tpl->tpl_vars['phrase']->value['id']);?>
&amp;domain=<?php echo rawurlencode($_smarty_tpl->tpl_vars['phrase']->value['domain']);?>
&amp;current_lang=<?php echo rawurlencode($_smarty_tpl->tpl_vars['chosen_language_id']->value);?>
" title="Edit" class="goEditPhrase"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['phrase']->value['id'], ENT_QUOTES, 'UTF-8', true);?>
</a></td>
							<td class="translated"><a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/edit-phrase/?phrase=<?php echo rawurlencode($_smarty_tpl->tpl_vars['phrase']->value['id']);?>
&amp;domain=<?php echo rawurlencode($_smarty_tpl->tpl_vars['phrase']->value['domain']);?>
&amp;current_lang=<?php echo rawurlencode($_smarty_tpl->tpl_vars['chosen_language_id']->value);?>
" class="goEditPhrase"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['phrase']->value['translations'][$_smarty_tpl->tpl_vars['chosen_language_id']->value], ENT_QUOTES, 'UTF-8', true);?>
</a></td>
							<td><a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/edit-phrase/?phrase=<?php echo rawurlencode($_smarty_tpl->tpl_vars['phrase']->value['id']);?>
&amp;domain=<?php echo rawurlencode($_smarty_tpl->tpl_vars['phrase']->value['domain']);?>
&amp;current_lang=<?php echo rawurlencode($_smarty_tpl->tpl_vars['chosen_language_id']->value);?>
" title="Edit" class="goEditPhrase editbutton"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Edit<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a></td>
							<td nowrap="nowrap">
								<?php $_smarty_tpl->_capture_stack[0][] = array("delete_message", null, null); ob_start(); ?><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Do you want to delete `<?php echo strtr($_smarty_tpl->tpl_vars['phrase']->value['id'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
` phrase?<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
								<?php $_smarty_tpl->_capture_stack[0][] = array("delete_confirm_script", null, null); ob_start(); ?>return confirm('<?php echo strtr(Smarty::$_smarty_vars['capture']['delete_message'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
');<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
								<a href="?action=delete_phrase&amp;phrase=<?php echo rawurlencode($_smarty_tpl->tpl_vars['phrase']->value['id']);?>
&amp;phrases_per_page=<?php echo $_smarty_tpl->tpl_vars['phrases_per_page']->value;?>
&amp;domain=<?php echo rawurlencode($_smarty_tpl->tpl_vars['phrase']->value['domain']);?>
" onclick="<?php echo htmlspecialchars(Smarty::$_smarty_vars['capture']['delete_confirm_script'], ENT_QUOTES, 'UTF-8', true);?>
" title="Delete" class="deletebutton"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Delete<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a>
							</td>
						</tr>
						<?php $_smarty_tpl->tpl_vars['domain'] = new Smarty_variable($_smarty_tpl->tpl_vars['phrase']->value['domain'], null, 0);?>
					<?php } ?>
				<?php }?>
			</table>
		</div>
	</div>
	<div class="box-footer">
		<?php echo $_smarty_tpl->getSubTemplate ("../pagination/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('layout'=>"footer"), 0);?>

	</div>
</div><?php }} ?>