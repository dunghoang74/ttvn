<?php /* Smarty version Smarty-3.1.13, created on 2014-12-22 20:22:19
         compiled from "template_intelligentview_user:templates/_system/classifieds/browse_by_category.tpl" */ ?>
<?php /*%%SmartyHeaderCode:758554981b0b4d26c2-05590680%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e7be39568003f858dd281a25f1a129291eb05b07' => 
    array (
      0 => 'template_intelligentview_user:templates/_system/classifieds/browse_by_category.tpl',
      1 => 1384942956,
      2 => 'template_intelligentview_user',
    ),
  ),
  'nocache_hash' => '758554981b0b4d26c2-05590680',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'browseItems' => 0,
    'GLOBALS' => 0,
    'elementCount' => 0,
    'i' => 0,
    'recordsNumToDisplay' => 0,
    'elementId' => 0,
    'columns' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_54981b0c43e331_07955560',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54981b0c43e331_07955560')) {function content_54981b0c43e331_07955560($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include 'D:\\xampp\\htdocs\\tuyendungvn\\system\\ext\\Smarty\\libs\\plugins\\modifier.replace.php';
if (!is_callable('smarty_modifier_truncate')) include 'D:\\xampp\\htdocs\\tuyendungvn\\system\\ext\\Smarty\\libs\\plugins\\modifier.truncate.php';
?><?php $_smarty_tpl->tpl_vars['i'] = new Smarty_variable(1, null, 0);?>
<ul class="browseListing">
	<?php  $_smarty_tpl->tpl_vars['elementCount'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['elementCount']->_loop = false;
 $_smarty_tpl->tpl_vars['elementId'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['browseItems']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['browseItems']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['elementCount']->key => $_smarty_tpl->tpl_vars['elementCount']->value){
$_smarty_tpl->tpl_vars['elementCount']->_loop = true;
 $_smarty_tpl->tpl_vars['elementId']->value = $_smarty_tpl->tpl_vars['elementCount']->key;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['browseItems']['iteration']++;
?>
		<?php if ((($_smarty_tpl->tpl_vars['GLOBALS']->value['settings']['enableBrowseByCounter']&&$_smarty_tpl->tpl_vars['elementCount']->value>0||!$_smarty_tpl->tpl_vars['GLOBALS']->value['settings']['enableBrowseByCounter'])&&$_smarty_tpl->tpl_vars['i']->value<=$_smarty_tpl->tpl_vars['recordsNumToDisplay']->value)){?>
			<?php $_smarty_tpl->tpl_vars['i'] = new Smarty_variable($_smarty_tpl->tpl_vars['i']->value+1, null, 0);?>
			<li>
				<a class='brByCategoryLink'  href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/browse-by-category/<?php echo rawurlencode(smarty_modifier_replace($_smarty_tpl->tpl_vars['elementId']->value,"/","-or-"));?>
/"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smarty_modifier_truncate(htmlspecialchars($_smarty_tpl->tpl_vars['elementId']->value, ENT_QUOTES, 'UTF-8', true),28,"...",true);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

					<?php if ($_smarty_tpl->tpl_vars['GLOBALS']->value['settings']['enableBrowseByCounter']){?><span class="blue">(<?php echo $_smarty_tpl->tpl_vars['elementCount']->value;?>
)</span><?php }?>
				</a>
			</li>
			<?php if (!($_smarty_tpl->getVariable('smarty')->value['foreach']['browseItems']['iteration'] % $_smarty_tpl->tpl_vars['columns']->value)){?></ul><ul class="browseListing"><?php }?>
		<?php }?>
	<?php }
if (!$_smarty_tpl->tpl_vars['elementCount']->_loop) {
?>
		<li><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
There are no listings with requested parameters in the system.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</li>
	<?php } ?>
	<?php if ($_smarty_tpl->tpl_vars['i']->value==1){?>
		 <li><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
There are no listings with requested parameters in the system.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</li>
	<?php }?>
</ul>
<?php }} ?>