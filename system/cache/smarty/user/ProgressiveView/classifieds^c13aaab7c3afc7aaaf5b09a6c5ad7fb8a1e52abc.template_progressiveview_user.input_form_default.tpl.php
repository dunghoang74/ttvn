<?php /* Smarty version Smarty-3.1.13, created on 2014-12-22 21:44:08
         compiled from "template_progressiveview_user:input_form_default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:173554982e383fe3a9-90336852%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c13aaab7c3afc7aaaf5b09a6c5ad7fb8a1e52abc' => 
    array (
      0 => 'template_progressiveview_user:input_form_default.tpl',
      1 => 1389845726,
      2 => 'template_progressiveview_user',
    ),
  ),
  'nocache_hash' => '173554982e383fe3a9-90336852',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'form_fields' => 0,
    'form_field' => 0,
    'extraInfo' => 0,
    'METADATA' => 0,
    'listing_type_id' => 0,
    'listing' => 0,
    'listingTypeID' => 0,
    'fixInstructionsForComplexField' => 0,
    'showPic' => 0,
    'GLOBALS' => 0,
    'picValue' => 0,
    'expirationField' => 0,
    'instructionsExist' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_54982e3c2af2a7_73349638',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54982e3c2af2a7_73349638')) {function content_54982e3c2af2a7_73349638($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['form_field'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['form_field']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['form_fields']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['form_field']->key => $_smarty_tpl->tpl_vars['form_field']->value){
$_smarty_tpl->tpl_vars['form_field']->_loop = true;
?>
	<?php $_smarty_tpl->tpl_vars['form_field'] = new Smarty_variable($_smarty_tpl->tpl_vars['form_field']->value, null, 3);
$_ptr = $_smarty_tpl->parent; while ($_ptr != null) {$_ptr->tpl_vars['form_field'] = clone $_smarty_tpl->tpl_vars['form_field']; $_ptr = $_ptr->parent; }
Smarty::$global_tpl_vars['form_field'] = clone $_smarty_tpl->tpl_vars['form_field'];?>
	<?php if ($_smarty_tpl->tpl_vars['form_field']->value['id']=='video'||$_smarty_tpl->tpl_vars['form_field']->value['id']=='youtube'){?>
		<?php if ($_smarty_tpl->tpl_vars['extraInfo']->value['video']){?>
			<fieldset>
				<div class="inputName"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('metadata'=>$_smarty_tpl->tpl_vars['METADATA']->value['form_field']['caption'])); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array('metadata'=>$_smarty_tpl->tpl_vars['METADATA']->value['form_field']['caption']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['form_field']->value['caption'];?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array('metadata'=>$_smarty_tpl->tpl_vars['METADATA']->value['form_field']['caption']), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</div>
				<div class="inputReq">&nbsp;<?php if ($_smarty_tpl->tpl_vars['form_field']->value['is_required']){?>*<?php }?></div>
				<div class="inputField"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['input'][0][0]->tpl_input(array('property'=>$_smarty_tpl->tpl_vars['form_field']->value['id']),$_smarty_tpl);?>
</div>
				<?php if ($_smarty_tpl->tpl_vars['form_field']->value['instructions']){?><?php $_smarty_tpl->tpl_vars["instructionsExist"] = new Smarty_variable("1", null, 0);?><?php echo $_smarty_tpl->getSubTemplate ("instructions.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('form_field'=>$_smarty_tpl->tpl_vars['form_field']->value), 0);?>
<?php }?>
			</fieldset>
		<?php }?>
	<?php }elseif(($_smarty_tpl->tpl_vars['listing_type_id']->value=="Job"||$_smarty_tpl->tpl_vars['listing']->value['type']['id']=="Job")&&$_smarty_tpl->tpl_vars['form_field']->value['id']=="anonymous"){?>
		
	<?php }elseif(($_smarty_tpl->tpl_vars['listing_type_id']->value=="Resume"||$_smarty_tpl->tpl_vars['listing']->value['type']['id']=="Resume")&&$_smarty_tpl->tpl_vars['form_field']->value['id']=="anonymous"){?>
			<fieldset>
				<div class="inputName"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('metadata'=>$_smarty_tpl->tpl_vars['METADATA']->value['form_field']['caption'])); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array('metadata'=>$_smarty_tpl->tpl_vars['METADATA']->value['form_field']['caption']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['form_field']->value['caption'];?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array('metadata'=>$_smarty_tpl->tpl_vars['METADATA']->value['form_field']['caption']), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</div>
				<div class="inputReq">&nbsp;<?php if ($_smarty_tpl->tpl_vars['form_field']->value['is_required']){?>*<?php }?></div>
				<div class="inputField"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['input'][0][0]->tpl_input(array('property'=>$_smarty_tpl->tpl_vars['form_field']->value['id']),$_smarty_tpl);?>
</div>
				<?php if ($_smarty_tpl->tpl_vars['form_field']->value['instructions']){?><?php $_smarty_tpl->tpl_vars["instructionsExist"] = new Smarty_variable("1", null, 0);?><?php echo $_smarty_tpl->getSubTemplate ("instructions.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('form_field'=>$_smarty_tpl->tpl_vars['form_field']->value), 0);?>
<?php }?>
			</fieldset>
	<?php }elseif($_smarty_tpl->tpl_vars['form_field']->value['id']=="access_type"){?>
		<?php if ($_smarty_tpl->tpl_vars['listing_type_id']->value!="Job"&&$_smarty_tpl->tpl_vars['listing']->value['type']['id']!="Job"){?>
			<fieldset>
				<div class="inputName"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('metadata'=>$_smarty_tpl->tpl_vars['METADATA']->value['form_field']['caption'])); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array('metadata'=>$_smarty_tpl->tpl_vars['METADATA']->value['form_field']['caption']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['form_field']->value['caption'];?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array('metadata'=>$_smarty_tpl->tpl_vars['METADATA']->value['form_field']['caption']), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</div>
				<div class="inputReq">&nbsp;<?php if ($_smarty_tpl->tpl_vars['form_field']->value['is_required']){?>*<?php }?></div>
				<div class="inputField"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['input'][0][0]->tpl_input(array('property'=>$_smarty_tpl->tpl_vars['form_field']->value['id'],'template'=>'resume_access.tpl'),$_smarty_tpl);?>
</div>
				<?php if ($_smarty_tpl->tpl_vars['form_field']->value['instructions']){?><?php $_smarty_tpl->tpl_vars["instructionsExist"] = new Smarty_variable("1", null, 0);?><?php echo $_smarty_tpl->getSubTemplate ("instructions.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('form_field'=>$_smarty_tpl->tpl_vars['form_field']->value), 0);?>
<?php }?>
			</fieldset>
		<?php }?>
	<?php }elseif(($_smarty_tpl->tpl_vars['listingTypeID']->value=="Job"||$_smarty_tpl->tpl_vars['listing']->value['type']['id']=="Job")&&$_smarty_tpl->tpl_vars['form_field']->value['id']=='ApplicationSettings'){?>
		<fieldset>
			<div class="inputName"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('metadata'=>$_smarty_tpl->tpl_vars['METADATA']->value['form_field']['caption'])); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array('metadata'=>$_smarty_tpl->tpl_vars['METADATA']->value['form_field']['caption']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['form_field']->value['caption'];?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array('metadata'=>$_smarty_tpl->tpl_vars['METADATA']->value['form_field']['caption']), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</div>
			<div class="inputReq">&nbsp;<?php if ($_smarty_tpl->tpl_vars['form_field']->value['is_required']){?>*<?php }?></div>
			<div class="inputField"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['input'][0][0]->tpl_input(array('property'=>$_smarty_tpl->tpl_vars['form_field']->value['id'],'template'=>'applicationSettings.tpl'),$_smarty_tpl);?>
</div>
			<?php if ($_smarty_tpl->tpl_vars['form_field']->value['instructions']){?><?php $_smarty_tpl->tpl_vars["instructionsExist"] = new Smarty_variable("1", null, 0);?><?php echo $_smarty_tpl->getSubTemplate ("instructions.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('form_field'=>$_smarty_tpl->tpl_vars['form_field']->value), 0);?>
<?php }?>
		</fieldset>
	<?php }elseif(($_smarty_tpl->tpl_vars['listingTypeID']->value=="Job"||$_smarty_tpl->tpl_vars['listing']->value['type']['id']=="Job")&&$_smarty_tpl->tpl_vars['form_field']->value['id']=='expiration_date'){?>
		<?php $_smarty_tpl->_capture_stack[0][] = array('default', "expirationField", null); ob_start(); ?>
		<fieldset>
			<div class="inputName"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('metadata'=>$_smarty_tpl->tpl_vars['METADATA']->value['form_field']['caption'])); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array('metadata'=>$_smarty_tpl->tpl_vars['METADATA']->value['form_field']['caption']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['form_field']->value['caption'];?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array('metadata'=>$_smarty_tpl->tpl_vars['METADATA']->value['form_field']['caption']), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</div>
			<div class="inputReq">&nbsp;<?php if ($_smarty_tpl->tpl_vars['form_field']->value['is_required']){?>*<?php }?></div>
			<div class="inputField"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['input'][0][0]->tpl_input(array('property'=>$_smarty_tpl->tpl_vars['form_field']->value['id'],'template'=>'expiration_date.tpl'),$_smarty_tpl);?>
</div>
			<?php if ($_smarty_tpl->tpl_vars['form_field']->value['instructions']){?><?php $_smarty_tpl->tpl_vars["instructionsExist"] = new Smarty_variable("1", null, 0);?><?php echo $_smarty_tpl->getSubTemplate ("instructions.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('form_field'=>$_smarty_tpl->tpl_vars['form_field']->value), 0);?>
<?php }?>
		</fieldset>
		<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
	<?php }elseif($_smarty_tpl->tpl_vars['form_field']->value['type']=='location'){?>
		<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['input'][0][0]->tpl_input(array('property'=>$_smarty_tpl->tpl_vars['form_field']->value['id']),$_smarty_tpl);?>

	<?php }else{ ?>
		<fieldset>
			<?php $_smarty_tpl->tpl_vars["fixInstructionsForComplexField"] = new Smarty_variable(false, null, 0);?>
			<?php if ($_smarty_tpl->tpl_vars['form_field']->value['type']!='complex'){?>
				<?php $_smarty_tpl->tpl_vars["fixInstructionsForComplexField"] = new Smarty_variable(true, null, 0);?>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['form_field']->value['id']=='ListingLogo'){?>
				<div class="inputName"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('metadata'=>$_smarty_tpl->tpl_vars['METADATA']->value['form_field']['caption'])); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array('metadata'=>$_smarty_tpl->tpl_vars['METADATA']->value['form_field']['caption']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['form_field']->value['caption'];?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array('metadata'=>$_smarty_tpl->tpl_vars['METADATA']->value['form_field']['caption']), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</div>
				<div class="inputReq">&nbsp;<?php if ($_smarty_tpl->tpl_vars['form_field']->value['is_required']){?>*<?php }?></div>
				<div class="inputField"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['input'][0][0]->tpl_input(array('property'=>$_smarty_tpl->tpl_vars['form_field']->value['id'],'template'=>"logo_listing.tpl"),$_smarty_tpl);?>
</div>
				<?php if ($_smarty_tpl->tpl_vars['form_field']->value['instructions']&&$_smarty_tpl->tpl_vars['fixInstructionsForComplexField']->value){?><?php $_smarty_tpl->tpl_vars["instructionsExist"] = new Smarty_variable("1", null, 0);?><?php echo $_smarty_tpl->getSubTemplate ("instructions.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('form_field'=>$_smarty_tpl->tpl_vars['form_field']->value), 0);?>
<?php }?>
			<?php }else{ ?>
				<div class="inputName"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('metadata'=>$_smarty_tpl->tpl_vars['METADATA']->value['form_field']['caption'])); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array('metadata'=>$_smarty_tpl->tpl_vars['METADATA']->value['form_field']['caption']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['form_field']->value['caption'];?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array('metadata'=>$_smarty_tpl->tpl_vars['METADATA']->value['form_field']['caption']), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</div>
				<div class="inputReq">&nbsp;<?php if ($_smarty_tpl->tpl_vars['form_field']->value['is_required']){?>*<?php }?></div>
				<div class="inputField"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['input'][0][0]->tpl_input(array('property'=>$_smarty_tpl->tpl_vars['form_field']->value['id']),$_smarty_tpl);?>
</div>
				<?php if ($_smarty_tpl->tpl_vars['form_field']->value['instructions']&&$_smarty_tpl->tpl_vars['fixInstructionsForComplexField']->value){?><?php $_smarty_tpl->tpl_vars["instructionsExist"] = new Smarty_variable("1", null, 0);?><?php echo $_smarty_tpl->getSubTemplate ("instructions.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('form_field'=>$_smarty_tpl->tpl_vars['form_field']->value), 0);?>
<?php }?>
				<?php if (in_array($_smarty_tpl->tpl_vars['form_field']->value['type'],array('multilist'))){?>
					<div id="count-available-<?php echo $_smarty_tpl->tpl_vars['form_field']->value['id'];?>
" class="mt-count-available"></div>
				<?php }?>
			<?php }?>
		</fieldset>
	<?php }?>
<?php } ?>

<?php if (!empty($_smarty_tpl->tpl_vars['showPic']->value)){?>
	<fieldset>
		<div class="inputName"> <?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Add Pictures<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
 </div>
		<div class="inputReq">&nbsp;</div>
		<div class="inputField">
			<div id="loading-progbar" class="add-picture-loading" style="display:none;">
				<img class="progBarImg" src="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/system/ext/jquery/progbar.gif" alt="<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Please wait ...<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
" /> <?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Please wait ...<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			</div>
			<div id="UploadPics" value="<?php echo $_smarty_tpl->tpl_vars['picValue']->value;?>
"></div>
		</div>
	</fieldset>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['expirationField']->value){?><?php echo $_smarty_tpl->tpl_vars['expirationField']->value;?>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['instructionsExist']->value){?>
	
		<script type="text/javascript">
			function instructionFunc() {
				var elem = $(".instruction").prev();
				elem.children().focus(function() {
					$(this).parent().next(".instruction").children(".instr_block").show();
				});
				elem.children().blur(function() {
					$(this).parent().next(".instruction").children(".instr_block").hide();
				});
			}
			$("document").ready(function() {
				instructionFunc();
			});

			CKEDITOR.on('instanceReady', function(e) {
				e.editor.on('focus', function() {
						$("#instruction_"+ e.editor.name).show();
					});
				e.editor.on('blur', function() {
						$("#instruction_"+e.editor.name).hide();
					});
				return;
			});
		</script>
	
<?php }?><?php }} ?>