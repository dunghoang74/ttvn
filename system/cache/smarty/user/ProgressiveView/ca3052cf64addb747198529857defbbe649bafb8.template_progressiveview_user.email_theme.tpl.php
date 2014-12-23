<?php /* Smarty version Smarty-3.1.13, created on 2014-12-22 21:43:09
         compiled from "template_progressiveview_user:../miscellaneous/email_theme.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3102254982dfd8b3de3-79280731%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ca3052cf64addb747198529857defbbe649bafb8' => 
    array (
      0 => 'template_progressiveview_user:../miscellaneous/email_theme.tpl',
      1 => 1361531704,
      2 => 'template_progressiveview_user',
    ),
  ),
  'nocache_hash' => '3102254982dfd8b3de3-79280731',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'emailData' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_54982dfdbec227_27477544',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54982dfdbec227_27477544')) {function content_54982dfdbec227_27477544($_smarty_tpl) {?><?php $_smarty_tpl->smarty->_tag_stack[] = array('fromName', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['fromName'][0][0]->parseLetterFromName(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['emailData']->value['fromName'];?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['fromName'][0][0]->parseLetterFromName(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('subject', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['subject'][0][0]->parseLetterSubject(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['emailData']->value['subject'];?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['subject'][0][0]->parseLetterSubject(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('message', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['message'][0][0]->parseLetterMessage(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

	<p><img src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['image'][0][0]->getImageURL(array(),$_smarty_tpl);?>
logo.png" /></p>
	<p style="display:block; background-color: #dddddd; height: 20px; width: 100%;"></p>
	<?php echo $_smarty_tpl->tpl_vars['emailData']->value['message'];?>

	<hr/>
	<?php echo $_smarty_tpl->tpl_vars['emailData']->value['signature'];?>

	<p style="display:block; background-color: #dddddd; height: 20px; width: 100%;"></p>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['message'][0][0]->parseLetterMessage(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }} ?>