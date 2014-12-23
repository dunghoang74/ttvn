<?php /* Smarty version Smarty-3.1.13, created on 2014-12-17 23:58:14
         compiled from "template_progressiveview_user:d:\xampp\htdocs\tuyendungvn\templates\progressiveview\classifieds\latest_listings.tpl" */ ?>
<?php /*%%SmartyHeaderCode:309035491b626a7eb83-11177440%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0f6abf1e2b590fbe7b3a7ac1ce7c32549d63cc45' => 
    array (
      0 => 'template_progressiveview_user:d:\\xampp\\htdocs\\tuyendungvn\\templates\\progressiveview\\classifieds\\latest_listings.tpl',
      1 => 1387790826,
      2 => 'template_progressiveview_user',
    ),
  ),
  'nocache_hash' => '309035491b626a7eb83-11177440',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'listings' => 0,
    'GLOBALS' => 0,
    'listing' => 0,
    'number_of_cols' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5491b62750c556_95920103',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5491b62750c556_95920103')) {function content_5491b62750c556_95920103($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_regex_replace')) include 'D:\\xampp\\htdocs\\tuyendungvn\\system\\ext\\Smarty\\libs\\plugins\\modifier.regex_replace.php';
?><?php if ($_smarty_tpl->tpl_vars['listings']->value){?>
	<?php  $_smarty_tpl->tpl_vars['listing'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['listing']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['listings']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['listings_block']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['listing']->key => $_smarty_tpl->tpl_vars['listing']->value){
$_smarty_tpl->tpl_vars['listing']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['listings_block']['iteration']++;
?>
		<div class="featuredListings">
			<a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/display-job/<?php echo $_smarty_tpl->tpl_vars['listing']->value['id'];?>
/<?php echo smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['listing']->value['Title'],"/[\\/\\\:*?\"<>|%#"."$"."\s]/","-");?>
.html"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['listing']->value['Title'], ENT_QUOTES, 'UTF-8', true);?>
</a><br />
			<span class="green"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['listing']->value['user']['CompanyName'], ENT_QUOTES, 'UTF-8', true);?>
</span>
		</div>
		<?php if (!($_smarty_tpl->getVariable('smarty')->value['foreach']['listings_block']['iteration'] % $_smarty_tpl->tpl_vars['number_of_cols']->value)){?><?php }?>
	<?php } ?>
<?php }else{ ?>
	<div class="text-center"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
There are no listings with requested parameters in the system.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</div>
<?php }?><?php }} ?>