<?php /* Smarty version Smarty-3.1.13, created on 2014-12-22 20:07:24
         compiled from "template_smartjobboard_user:templates/_system/payment/show_shopping_cart.tpl" */ ?>
<?php /*%%SmartyHeaderCode:255805498178c9a13c2-51928578%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7cc7c6fc2545e08e61926a07811f0c094fcbf534' => 
    array (
      0 => 'template_smartjobboard_user:templates/_system/payment/show_shopping_cart.tpl',
      1 => 1387250308,
      2 => 'template_smartjobboard_user',
    ),
  ),
  'nocache_hash' => '255805498178c9a13c2-51928578',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'products_number' => 0,
    'GLOBALS' => 0,
    'total_price' => 0,
    'productsPrice' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5498178ce5c3e7_83578797',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5498178ce5c3e7_83578797')) {function content_5498178ce5c3e7_83578797($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['products_number']->value>0){?>
	<div id="shoppingCart">
		<a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/shopping-cart/"><img src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['image'][0][0]->getImageURL(array(),$_smarty_tpl);?>
shoppingCart.png" border="0" alt="<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Shopping Cart<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
" title="<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Shopping Cart<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
"/></a>
		&nbsp;<?php $_smarty_tpl->_capture_stack[0][] = array('default', "productsPrice", null); ob_start(); ?><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('type'=>"float")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array('type'=>"float"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['total_price']->value;?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array('type'=>"float"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['currencyFormat'][0][0]->currencyFormat(array('amount'=>$_smarty_tpl->tpl_vars['productsPrice']->value),$_smarty_tpl);?>

	</div>
<?php }?><?php }} ?>