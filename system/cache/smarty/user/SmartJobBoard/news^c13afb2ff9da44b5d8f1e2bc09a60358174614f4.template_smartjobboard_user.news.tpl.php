<?php /* Smarty version Smarty-3.1.13, created on 2014-12-22 20:07:38
         compiled from "template_smartjobboard_user:templates/_system/news/news.tpl" */ ?>
<?php /*%%SmartyHeaderCode:175405498179aa7b387-56627073%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c13afb2ff9da44b5d8f1e2bc09a60358174614f4' => 
    array (
      0 => 'template_smartjobboard_user:templates/_system/news/news.tpl',
      1 => 1387790826,
      2 => 'template_smartjobboard_user',
    ),
  ),
  'nocache_hash' => '175405498179aa7b387-56627073',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'articles' => 0,
    'news_count' => 0,
    'elem' => 0,
    'GLOBALS' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5498179b687ab7_30216339',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5498179b687ab7_30216339')) {function content_5498179b687ab7_30216339($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_regex_replace')) include 'D:\\xampp\\htdocs\\tuyendungvn\\system\\ext\\Smarty\\libs\\plugins\\modifier.regex_replace.php';
?><?php if (!empty($_smarty_tpl->tpl_vars['articles']->value)){?>
	<div id="news">
		<input type="hidden" name="news_count" id="news_count" value="<?php echo $_smarty_tpl->tpl_vars['news_count']->value;?>
" />
		<ul>
			<?php  $_smarty_tpl->tpl_vars['elem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['elem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['articles']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['elem']->key => $_smarty_tpl->tpl_vars['elem']->value){
$_smarty_tpl->tpl_vars['elem']->_loop = true;
?>
				<li>
					
					<span class="small"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('type'=>"date")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array('type'=>"date"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['elem']->value['date'];?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array('type'=>"date"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</span><br/>
					<?php if ($_smarty_tpl->tpl_vars['elem']->value['link']){?>
						<a href="<?php echo $_smarty_tpl->tpl_vars['elem']->value['link'];?>
" target="_blank" class="newsLink"><?php echo $_smarty_tpl->tpl_vars['elem']->value['title'];?>
</a>
					<?php }else{ ?>
						<a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/news/<?php echo $_smarty_tpl->tpl_vars['elem']->value['sid'];?>
/<?php echo smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['elem']->value['title'],"/[\\/\\\:*?\"<>|%#"."$"."\s]/","-");?>
.html" class="newsLink"><?php echo $_smarty_tpl->tpl_vars['elem']->value['title'];?>
</a>
					<?php }?>
					<br/><?php echo $_smarty_tpl->tpl_vars['elem']->value['brief'];?>

				</li>
			<?php }
if (!$_smarty_tpl->tpl_vars['elem']->_loop) {
?>
				<li class="text-center"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
There is no news in the system.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</li>
			<?php } ?>
		</ul>
		<a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/news/" class="smallLink"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
View All News<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a>
	</div>
<?php }else{ ?>
	<div id="news">
		<ul>
			<li class="text-center"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
There are no news in the system.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</li>
		</ul>
	</div>
<?php }?><?php }} ?>