<?php /* Smarty version Smarty-3.1.13, created on 2014-12-22 21:31:02
         compiled from "template_progressiveview_user:templates/_system/users/login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1078454982b267328d0-77552026%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '455ce05069b555c45f4c89f66e2b04564cc22653' => 
    array (
      0 => 'template_progressiveview_user:templates/_system/users/login.tpl',
      1 => 1390963116,
      2 => 'template_progressiveview_user',
    ),
  ),
  'nocache_hash' => '1078454982b267328d0-77552026',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ajaxRelocate' => 0,
    'shopping_cart' => 0,
    'logged_in' => 0,
    'GLOBALS' => 0,
    'errors' => 0,
    'return_url' => 0,
    'proceedToPosting' => 0,
    'productSID' => 0,
    'listingTypeID' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_54982b277176e3_01511232',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54982b277176e3_01511232')) {function content_54982b277176e3_01511232($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['ajaxRelocate']->value){?>
	
	<script type="text/javascript">
		function loginSubmit() {
			var options = {
					  target: "#messageBox",
					  url:  $("#loginForm").attr("action")
					};
			$("#loginForm").ajaxSubmit(options);
			return false;
		}
	</script>
	
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['shopping_cart']->value&&$_smarty_tpl->tpl_vars['logged_in']->value){?>
	<script language="JavaScript" type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/system/ext/jquery/jquery-ui.js"></script>
	<script type="text/javascript">
		
			 $("#shoppingCartForm").click();
		
	</script>
<?php }?>

<?php if (!$_smarty_tpl->tpl_vars['GLOBALS']->value['is_ajax']){?><h1><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Sign In<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</h1><?php }?>
<?php echo $_smarty_tpl->getSubTemplate ("../users/errors.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('errors'=>$_smarty_tpl->tpl_vars['errors']->value), 0);?>

<form action="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/login/" method="post" id="loginForm" <?php if ($_smarty_tpl->tpl_vars['ajaxRelocate']->value){?> onsubmit="return loginSubmit()" <?php }?>>
	<input type="hidden" name="return_url" value="<?php echo $_smarty_tpl->tpl_vars['return_url']->value;?>
" />
	<input type="hidden" name="action" value="login" />
	<?php if ($_smarty_tpl->tpl_vars['shopping_cart']->value){?><input type="hidden" name="shopping_cart" value="<?php echo $_smarty_tpl->tpl_vars['shopping_cart']->value;?>
" /><?php }?>
	<?php if ($_smarty_tpl->tpl_vars['proceedToPosting']->value){?><input type="hidden" name="proceed_to_posting" value="<?php echo $_smarty_tpl->tpl_vars['proceedToPosting']->value;?>
" /><?php }?>
	<?php if ($_smarty_tpl->tpl_vars['productSID']->value){?><input type="hidden" name="productSID" value="<?php echo $_smarty_tpl->tpl_vars['productSID']->value;?>
" /><?php }?>
	<?php if ($_smarty_tpl->tpl_vars['listingTypeID']->value){?><input type="hidden" name="listing_type_id" value="<?php echo $_smarty_tpl->tpl_vars['listingTypeID']->value;?>
" /><?php }?>
	<?php if ($_smarty_tpl->tpl_vars['ajaxRelocate']->value){?><input type="hidden" name="ajaxRelocate" value="1" /><?php }?>
	<fieldset>
		<div class="inputName"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Username<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</div>
		<div class="inputField"><input type="text" name="username" /></div>
	</fieldset>
	<fieldset>
		<div class="inputName"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Password<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</div>
		<div class="inputField"><input type="password" name="password" /></div>
	</fieldset>
	<fieldset>
		<div class="inputName">&nbsp;</div>
		<div class="inputField"><input type="checkbox" name="keep" id="keep" /><label for="keep"> <?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Keep me signed in<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</label></div>
	</fieldset>
	<fieldset>
		<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['module'][0][0]->module(array('name'=>"miscellaneous",'function'=>"captcha_handle",'displayMode'=>"fieldset"),$_smarty_tpl);?>

	</fieldset>
	<fieldset>
		<div class="inputName">&nbsp;</div>
		<div class="inputButton"><input type="submit" value="<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Login<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
" class="button" /></div>
	</fieldset>
</form>

<br/><a  href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/password-recovery/"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Forgot Your Password?<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a>&nbsp;|&nbsp; <a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/registration/<?php if ($_smarty_tpl->tpl_vars['shopping_cart']->value){?>?fromShoppingCart=1<?php }?>"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Registration<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a>
<div class="soc_reg_form"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['module'][0][0]->module(array('name'=>"social",'function'=>"social_plugins"),$_smarty_tpl);?>
</div><?php }} ?>