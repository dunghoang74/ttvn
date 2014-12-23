<?php /* Smarty version Smarty-3.1.13, created on 2014-12-22 20:24:59
         compiled from "template_intelligentview_user:templates/_system/breadcrumbs/show_breadcrumbs.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2749054981babc46ce0-60607977%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '92da1f8155967439f6a48bd77b3cd351f0f644c9' => 
    array (
      0 => 'template_intelligentview_user:templates/_system/breadcrumbs/show_breadcrumbs.tpl',
      1 => 1306816552,
      2 => 'template_intelligentview_user',
    ),
  ),
  'nocache_hash' => '2749054981babc46ce0-60607977',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'navCount' => 0,
    'navArray' => 0,
    'GLOBALS' => 0,
    'navItem' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_54981bac2ffe58_12667410',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54981bac2ffe58_12667410')) {function content_54981bac2ffe58_12667410($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['navCount']->value=="0"){?><?php }else{ ?>
<div class="BreadCrumbs">
	<p><?php  $_smarty_tpl->tpl_vars['navItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['navItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['navArray']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['navForeach']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['navItem']->key => $_smarty_tpl->tpl_vars['navItem']->value){
$_smarty_tpl->tpl_vars['navItem']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['navForeach']['iteration']++;
?> <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['navForeach']['iteration']<$_smarty_tpl->tpl_vars['navCount']->value){?><a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
<?php echo $_smarty_tpl->tpl_vars['navItem']->value['uri'];?>
"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['navItem']->value['name'];?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a> &#187; <?php }else{ ?> <span><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['navItem']->value['name'];?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</span> <?php }?> <?php } ?> </p>
</div>
<?php }?><?php }} ?>