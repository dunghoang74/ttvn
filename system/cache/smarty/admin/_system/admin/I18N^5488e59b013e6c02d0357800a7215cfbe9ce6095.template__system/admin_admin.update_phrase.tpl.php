<?php /* Smarty version Smarty-3.1.13, created on 2014-12-23 21:03:12
         compiled from "template__system/admin_admin:d:\xampp\htdocs\tuyendungvn\templates\_system\admin\i18n\update_phrase.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2303754997620b90de0-27772209%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5488e59b013e6c02d0357800a7215cfbe9ce6095' => 
    array (
      0 => 'template__system/admin_admin:d:\\xampp\\htdocs\\tuyendungvn\\templates\\_system\\admin\\i18n\\update_phrase.tpl',
      1 => 1383021548,
      2 => 'template__system/admin_admin',
    ),
  ),
  'nocache_hash' => '2303754997620b90de0-27772209',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'GLOBALS' => 0,
    'langs' => 0,
    'chosen_lang' => 0,
    'lang' => 0,
    'phrase' => 0,
    'errors' => 0,
    'lang_id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_54997622772868_00864902',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54997622772868_00864902')) {function content_54997622772868_00864902($_smarty_tpl) {?><script>

$("#updatePhraseForm").submit(function(){
	$("#editPhraseDialog").dialog('destroy');
	
	link = "<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/edit-phrase/";
	var content = "<img src='<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/../system/ext/jquery/progbar.gif'>";
	
<?php  $_smarty_tpl->tpl_vars['lang'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['lang']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['langs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['lang']->key => $_smarty_tpl->tpl_vars['lang']->value){
$_smarty_tpl->tpl_vars['lang']->_loop = true;
?>
<?php if (empty($_smarty_tpl->tpl_vars['chosen_lang']->value)||(!empty($_smarty_tpl->tpl_vars['chosen_lang']->value)&&$_smarty_tpl->tpl_vars['chosen_lang']->value==$_smarty_tpl->tpl_vars['lang']->value['id'])){?>
	var trans_val_<?php echo $_smarty_tpl->tpl_vars['lang']->value['id'];?>
 = $("#translations_<?php echo $_smarty_tpl->tpl_vars['lang']->value['id'];?>
").val();
<?php }?>
<?php } ?>

	var curr_lang = $("#curr_lang").val();
	new_val = $("#translations_"+curr_lang).val();
	var phraseInput = document.getElementsByName("phrase")[0].value;

	$("#editPhraseDialog").html("<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Please wait...<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<br>" + content).dialog({width: 180});
	$.post(link, { phrase: phraseInput, domain: "<?php echo $_smarty_tpl->tpl_vars['phrase']->value['domain'];?>
", current_lang: "<?php echo $_smarty_tpl->tpl_vars['chosen_lang']->value;?>
", lang: "<?php echo $_smarty_tpl->tpl_vars['chosen_lang']->value;?>
", action: "update_phrase"<?php  $_smarty_tpl->tpl_vars['lang'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['lang']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['langs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['lang']->key => $_smarty_tpl->tpl_vars['lang']->value){
$_smarty_tpl->tpl_vars['lang']->_loop = true;
?><?php if (empty($_smarty_tpl->tpl_vars['chosen_lang']->value)||(!empty($_smarty_tpl->tpl_vars['chosen_lang']->value)&&$_smarty_tpl->tpl_vars['chosen_lang']->value==$_smarty_tpl->tpl_vars['lang']->value['id'])){?>, 'translations[<?php echo $_smarty_tpl->tpl_vars['lang']->value['id'];?>
]': trans_val_<?php echo $_smarty_tpl->tpl_vars['lang']->value['id'];?>
 <?php }?><?php } ?> } , function(data) {
		var tr_id_replace = "tr_" + $('input[name="phrase"]').val();
		$("#" + tr_id_replace).children(".translated").children().text(new_val);
		$('#editPhraseDialog').html(data);
		if ($("#editPhraseDialog").find('.error').length != 0) {
			$("#editPhraseDialog").dialog({width: 650});
		} else {
			$("#editPhraseDialog").dialog('destroy');
		}
		return false;
	} );
	return false;
});

</script>

<?php if ($_smarty_tpl->tpl_vars['errors']->value){?>
	<?php echo $_smarty_tpl->getSubTemplate ("errors.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('errors'=>$_smarty_tpl->tpl_vars['errors']->value), 0);?>

<?php }?>

<p>Fields marked with an asterisk (<font color="red">*</font>) are mandatory</p>

<fieldset>
	<legend>Edit Phrase</legend>
	<form method="post" enctype="multipart/form-data" id="updatePhraseForm" name="updatePhraseForm">
		<table>
			<thead>
				<tr>
					<th>Domain</th>
					<th><?php echo $_smarty_tpl->tpl_vars['phrase']->value['domain'];?>
</th>
				</tr>
			</thead>
			<tr>
				<td>Phrase ID</td>
				<td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['phrase']->value['id'], ENT_QUOTES, 'UTF-8', true);?>
</td>
			</tr>
			<?php  $_smarty_tpl->tpl_vars['lang'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['lang']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['langs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['lang']->key => $_smarty_tpl->tpl_vars['lang']->value){
$_smarty_tpl->tpl_vars['lang']->_loop = true;
?>
				<?php if (empty($_smarty_tpl->tpl_vars['chosen_lang']->value)||(!empty($_smarty_tpl->tpl_vars['chosen_lang']->value)&&$_smarty_tpl->tpl_vars['chosen_lang']->value==$_smarty_tpl->tpl_vars['lang']->value['id'])){?>
				<tr>
					<td><?php echo $_smarty_tpl->tpl_vars['lang']->value['caption'];?>
</td>
					<td>
						<?php $_smarty_tpl->tpl_vars["lang_id"] = new Smarty_variable($_smarty_tpl->tpl_vars['lang']->value['id'], null, 0);?>
						<textarea name="translations[<?php echo $_smarty_tpl->tpl_vars['lang']->value['id'];?>
]" id="translations_<?php echo $_smarty_tpl->tpl_vars['lang']->value['id'];?>
" rows="4" cols="63"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['phrase']->value['translations'][$_smarty_tpl->tpl_vars['lang_id']->value], ENT_QUOTES, 'UTF-8', true);?>
</textarea>
					</td>
				</tr>
				<?php }?>
			<?php } ?>
			<tr>
				<td colspan="2">
					<input type="hidden" name="phrase" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['phrase']->value['id'], ENT_QUOTES, 'UTF-8', true);?>
" />
					<input type="hidden" name="domain" value="<?php echo $_smarty_tpl->tpl_vars['phrase']->value['domain'];?>
" />
					<input type="hidden" name="lang" value="<?php echo $_smarty_tpl->tpl_vars['chosen_lang']->value;?>
" />
					<input type="hidden" name="action" value="update_phrase" />
					<span class="greenButtonEnd"><input type="submit" value="Save" class="greenButton" /></span>
				</td>
			</tr>
		</table>
	</form>
</fieldset><?php }} ?>