<?php /* Smarty version Smarty-3.1.13, created on 2014-12-22 20:58:13
         compiled from "template_generationx_user:../menu/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1455354982375e7cf73-53908102%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cd9894dafa121be85645edcc1077e8ac7b1d3ff9' => 
    array (
      0 => 'template_generationx_user:../menu/footer.tpl',
      1 => 1387349752,
      2 => 'template_generationx_user',
    ),
  ),
  'nocache_hash' => '1455354982375e7cf73-53908102',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'GLOBALS' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_549823767be6a7_28329745',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_549823767be6a7_28329745')) {function content_549823767be6a7_28329745($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'D:\\xampp\\htdocs\\tuyendungvn\\system\\ext\\Smarty\\libs\\plugins\\modifier.date_format.php';
?>	<div class="clr"><br/></div>
	<div class="Footer">
		<div id="footer-left"></div>
		&nbsp; &copy; 2008-<?php echo smarty_modifier_date_format(time(),"%Y");?>
 <?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Powered by<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
 <a target="_blank" href="http://www.smartjobboard.com" title="Job Board Software, Script" style="color:white;">SmartJobBoard Job Board Software</a> &nbsp; &nbsp; <a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/about/"style="color:white;"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
About Us<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a> &nbsp;  <a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/site-map/"style="color:white;"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Sitemap<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a>
		<?php if (isset($_smarty_tpl->tpl_vars['GLOBALS']->value['mobileUrl'])){?>
			&nbsp;  <a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['mobileUrl'];?>
<?php if ($_smarty_tpl->tpl_vars['GLOBALS']->value['SessionId']){?>?authId=<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['SessionId'];?>
<?php }?>" style="color:white;"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Mobile Version<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['GLOBALS']->value['settings']['cookieLaw']){?>
			&nbsp;  <a href="#" onClick="return cookiePreferencesPopupOpen();" style="color:white;"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Cookie Preferences<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a>
		<?php }?>
		<div id="footer-right"></div>
	</div>
	<div class="clr"><br/></div>
</div><?php }} ?>