<?php /* Smarty version Smarty-3.1.13, created on 2014-12-24 00:19:20
         compiled from "template_progressiveview_user:d:\xampp\htdocs\tuyendungvn\templates\progressiveview\classifieds\input_form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1097754982e32d82872-79203938%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8004da2f2c3bab8495bdeea9e62de183e9d021fc' => 
    array (
      0 => 'template_progressiveview_user:d:\\xampp\\htdocs\\tuyendungvn\\templates\\progressiveview\\classifieds\\input_form.tpl',
      1 => 1419355155,
      2 => 'template_progressiveview_user',
    ),
  ),
  'nocache_hash' => '1097754982e32d82872-79203938',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_54982e35e3eb59_66741830',
  'variables' => 
  array (
    'account_activated' => 0,
    'listingTypeID' => 0,
    'nextPage' => 0,
    'prevPage' => 0,
    'pages' => 0,
    'page' => 0,
    'pageSID' => 0,
    'currentPage' => 0,
    'GLOBALS' => 0,
    'listingSID' => 0,
    'socialAutoFillData' => 0,
    'listing_sid' => 0,
    'product_sid' => 0,
    'form_fields' => 0,
    'productSID' => 0,
    'contract_id' => 0,
    'listing_id' => 0,
    'pic_limit' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54982e35e3eb59_66741830')) {function content_54982e35e3eb59_66741830($_smarty_tpl) {?><script language="JavaScript" type="text/javascript" src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['common_js'][0][0]->getCommonJsURL(array(),$_smarty_tpl);?>
/picture_actions.js"></script>
<?php if ($_smarty_tpl->tpl_vars['account_activated']->value){?>
	<p class="message">
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Your account was successfully activated. Thank you.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	</p>
<?php }?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('title', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['title'][0][0]->_tpl_title(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Post <?php echo $_smarty_tpl->tpl_vars['listingTypeID']->value;?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; ob_start();  echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); echo htmlspecialchars(ob_get_clean(), ENT_QUOTES, 'UTF-8', true);} array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['title'][0][0]->_tpl_title(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php if ($_smarty_tpl->tpl_vars['nextPage']->value||$_smarty_tpl->tpl_vars['prevPage']->value){?>
	<div class="bread-crumb">
		<?php  $_smarty_tpl->tpl_vars['page'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['page']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['page']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['page']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['page']->key => $_smarty_tpl->tpl_vars['page']->value){
$_smarty_tpl->tpl_vars['page']->_loop = true;
 $_smarty_tpl->tpl_vars['page']->iteration++;
 $_smarty_tpl->tpl_vars['page']->last = $_smarty_tpl->tpl_vars['page']->iteration === $_smarty_tpl->tpl_vars['page']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['page_block']['last'] = $_smarty_tpl->tpl_vars['page']->last;
?>
			<div class="input-form-bc"><?php if ($_smarty_tpl->tpl_vars['page']->value['sid']==$_smarty_tpl->tpl_vars['pageSID']->value){?><b>&gt;&nbsp;<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['page']->value['page_name'];?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</b><?php }else{ ?><?php if ($_smarty_tpl->tpl_vars['page']->value['order']<=$_smarty_tpl->tpl_vars['currentPage']->value['order']){?><a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/add-listing/<?php echo htmlentities($_smarty_tpl->tpl_vars['listingTypeID']->value);?>
/<?php echo $_smarty_tpl->tpl_vars['page']->value['page_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['listingSID']->value;?>
">&gt;&nbsp;<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['page']->value['page_name'];?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a><?php }else{ ?>&gt;&nbsp;<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['page']->value['page_name'];?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }?><?php }?><?php if (!$_smarty_tpl->getVariable('smarty')->value['foreach']['page_block']['last']){?><?php }?>&nbsp;</div>
		<?php } ?>
	</div>
<?php }?>
<div class="clr"></div>
<h1><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['currentPage']->value['page_name'];?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</h1>
<div><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['currentPage']->value['description'];?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</div>


<?php if ($_smarty_tpl->tpl_vars['socialAutoFillData']->value['allow']){?>
	<div id="social_autoFill" class="<?php echo $_smarty_tpl->tpl_vars['socialAutoFillData']->value['network'];?>
_16">
		<?php if ($_smarty_tpl->tpl_vars['socialAutoFillData']->value['logged']){?>
			<?php if ($_smarty_tpl->tpl_vars['currentPage']->value&&$_smarty_tpl->tpl_vars['listing_sid']->value){?>
				<a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/add-listing/<?php echo htmlentities($_smarty_tpl->tpl_vars['listingTypeID']->value);?>
/<?php echo $_smarty_tpl->tpl_vars['currentPage']->value['page_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['listing_sid']->value;?>
/?autofill" title=""><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Auto-fill resume from my <?php echo $_smarty_tpl->tpl_vars['socialAutoFillData']->value['network'];?>
 profile<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a>
			<?php }else{ ?>
				<a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/add-listing/?listing_type_id=<?php echo htmlentities($_smarty_tpl->tpl_vars['listingTypeID']->value);?>
&amp;product_sid=<?php echo $_smarty_tpl->tpl_vars['product_sid']->value;?>
&amp;autofill" title=""><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Auto-fill resume from my <?php echo $_smarty_tpl->tpl_vars['socialAutoFillData']->value['network'];?>
 profile<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a>
			<?php }?>
		<?php }else{ ?>
			<a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/social/?network=<?php echo $_smarty_tpl->tpl_vars['socialAutoFillData']->value['network'];?>
"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Login with Linkedin to Auto-fill resume from my <?php echo $_smarty_tpl->tpl_vars['socialAutoFillData']->value['network'];?>
 profile<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a>
		<?php }?>
	</div>
<?php }?>


<?php echo $_smarty_tpl->getSubTemplate ('field_errors.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/add-listing/<?php echo htmlentities($_smarty_tpl->tpl_vars['listingTypeID']->value);?>
/<?php echo $_smarty_tpl->tpl_vars['currentPage']->value['page_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['listingSID']->value;?>
" enctype="multipart/form-data" <?php if ($_smarty_tpl->tpl_vars['form_fields']->value['ApplicationSettings']){?>onsubmit="return validateForm('addListingForm');"<?php }?> id="addListingForm" class="inputForm">
	<input type="hidden" name="productSID" value="<?php echo $_smarty_tpl->tpl_vars['productSID']->value;?>
">
	<input type="hidden" name="contract_id" value="<?php echo $_smarty_tpl->tpl_vars['contract_id']->value;?>
" />
	<input type="hidden" name="listing_type_id" value="<?php echo htmlentities($_smarty_tpl->tpl_vars['listingTypeID']->value);?>
" />
	<input type="hidden" id="listing_id" name="listing_id" value="<?php echo $_smarty_tpl->tpl_vars['listing_id']->value;?>
" />
	<?php if (($_smarty_tpl->tpl_vars['contract_id']->value==0)){?><input type="hidden" name="proceed_to_posting" value="done" /><?php }?>
	<p class="marked-fields"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Fields marked with an asterisk (<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<font color="red">*</font><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
) are mandatory<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</p>
	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['set_token_field'][0][0]->tpl_set_token_field(array(),$_smarty_tpl);?>


	<?php $_smarty_tpl->tpl_vars['showPic'] = new Smarty_variable($_smarty_tpl->tpl_vars['pic_limit']->value>0&&!$_smarty_tpl->tpl_vars['prevPage']->value ? true : false, null, 0);?>
	<?php ob_start();?><?php if ($_smarty_tpl->tpl_vars['contract_id']->value!=0){?><?php echo "contract_id=";?><?php echo (string)$_smarty_tpl->tpl_vars['contract_id']->value;?><?php echo "&amp;";?><?php }?><?php $_tmp1=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['picValue'] = new Smarty_variable(!empty($_smarty_tpl->tpl_vars['listing_sid']->value) ? ((string)$_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'])."/manage-pictures/?listing_sid=".((string)$_smarty_tpl->tpl_vars['listing_sid']->value) : ((string)$_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'])."/manage-pictures/?".$_tmp1."product_sid=".((string)$_smarty_tpl->tpl_vars['product_sid']->value)."&amp;listing_sid=".((string)$_smarty_tpl->tpl_vars['listing_id']->value), null, 0);?>

	<?php echo $_smarty_tpl->getSubTemplate ("input_form_default.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


	<fieldset>
		<div class="inputName">&nbsp;</div>
		<div class="inputReq">&nbsp;</div>
		<div class="inputField">
			<?php if ($_smarty_tpl->tpl_vars['prevPage']->value){?>
				<input type="button" name="action_add" value="<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Back<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
" class="button" onclick="window.location = '<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/add-listing/<?php echo htmlentities($_smarty_tpl->tpl_vars['listingTypeID']->value);?>
/<?php echo $_smarty_tpl->tpl_vars['prevPage']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['listingSID']->value;?>
'" />&nbsp;&nbsp;&nbsp;
			<?php }?>
			<input type="hidden" name="action_add" id="hidden_action_add" value=""/>
			<?php if ($_smarty_tpl->tpl_vars['nextPage']->value){?>
				<input type="submit" name="action_add" value="<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Next<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
" class="button" id="submitButton" />
			<?php }else{ ?>
				<input type="submit" name="preview_listing" value="<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Preview<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
" class="button" id="listingPreview"/>
				<?php if ($_smarty_tpl->tpl_vars['contract_id']->value==0){?>
					<input type="submit" name="action_add" value="<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Proceed to Checkout<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
" class="button" id="submitButton" />
				<?php }else{ ?>
					<input type="submit" name="action_add" value="<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Post<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
" class="button" id="submitButton" />
				<?php }?>
			<?php }?>
		</div>
	</fieldset>
</form>


<script type="text/javascript">

	$(document).ready(function() {
		url = $("#UploadPics").attr("value");
		loadPicturesForm(url);
	});

</script>
<?php }} ?>