<?php /* Smarty version Smarty-3.1.13, created on 2014-12-22 19:59:47
         compiled from "template_tuyendungvn_user:d:\xampp\htdocs\tuyendungvn\templates\tuyendungvn\breadcrumbs\show_breadcrumbs.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20638549815c30978a0-94265075%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e5d34f0ca2b7684c276dd1ece10560901c067a23' => 
    array (
      0 => 'template_tuyendungvn_user:d:\\xampp\\htdocs\\tuyendungvn\\templates\\tuyendungvn\\breadcrumbs\\show_breadcrumbs.tpl',
      1 => 1418396449,
      2 => 'template_tuyendungvn_user',
    ),
  ),
  'nocache_hash' => '20638549815c30978a0-94265075',
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
  'unifunc' => 'content_549815c37812c1_01067303',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_549815c37812c1_01067303')) {function content_549815c37812c1_01067303($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['navCount']->value=="0"){?><?php }else{ ?>
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
</a> &nbsp;<?php }else{ ?> <span><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['navItem']->value['name'];?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</span> <?php }?> <?php } ?> </p>
</div>
<?php }?><?php }} ?>