<?php /* Smarty version Smarty-3.1.13, created on 2014-12-22 20:24:48
         compiled from "template_intelligentview_user:../builder/bf_searchform_fieldsblocks.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2884454981ba0641329-87270190%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '09722fd4955b9951321c06c3e88d4e5eedbc9822' => 
    array (
      0 => 'template_intelligentview_user:../builder/bf_searchform_fieldsblocks.tpl',
      1 => 1359357036,
      2 => 'template_intelligentview_user',
    ),
  ),
  'nocache_hash' => '2884454981ba0641329-87270190',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'theField' => 0,
    'listingTypeID' => 0,
    'complexParent' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_54981ba1631cb0_02803094',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54981ba1631cb0_02803094')) {function content_54981ba1631cb0_02803094($_smarty_tpl) {?><fieldset>
	<?php if ($_smarty_tpl->tpl_vars['theField']->value['html']||substr($_smarty_tpl->tpl_vars['theField']->value['b_field_sid'],0,9)=="htmlBlock"){?>
		<div class="inputField"><?php echo $_smarty_tpl->tpl_vars['theField']->value['html'];?>
</div>
	<?php }elseif($_smarty_tpl->tpl_vars['theField']->value['id']=="City"){?>
		<div class="inputName"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['theField']->value['caption'];?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</div>
		<div class="inputField"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['search'][0][0]->tpl_search(array('property'=>$_smarty_tpl->tpl_vars['theField']->value['id'],'template'=>"string.like.tpl"),$_smarty_tpl);?>
</div>
	<?php }elseif($_smarty_tpl->tpl_vars['theField']->value['b_field_sid']=="keywords"){?>
		<div class="inputName"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Keywords<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</div>
		<div class="inputField"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['search'][0][0]->tpl_search(array('property'=>"keywords",'type'=>"bool",'listingType'=>$_smarty_tpl->tpl_vars['listingTypeID']->value),$_smarty_tpl);?>
</div>
	<?php }elseif($_smarty_tpl->tpl_vars['theField']->value['b_field_sid']=="PostedWithin"){?>
		<div class="inputName"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Posted Within<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</div>
		<div class="inputField"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['search'][0][0]->tpl_search(array('property'=>'PostedWithin','template'=>"list.date.tpl"),$_smarty_tpl);?>
</div>
	<?php }elseif($_smarty_tpl->tpl_vars['theField']->value['type']=="location"){?>
		<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['search'][0][0]->tpl_search(array('property'=>$_smarty_tpl->tpl_vars['theField']->value['id'],'fields'=>$_smarty_tpl->tpl_vars['theField']->value['fields']),$_smarty_tpl);?>

	<?php }else{ ?>
		<div class="inputName">
			<?php if ($_smarty_tpl->tpl_vars['theField']->value['id']=="ZipCode"){?>
				<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Search Within<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			<?php }else{ ?>
				<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['theField']->value['caption'];?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			<?php }?>
		</div>
		<?php if ($_smarty_tpl->tpl_vars['complexParent']->value){?>
			<div class="inputField"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['search'][0][0]->tpl_search(array('property'=>$_smarty_tpl->tpl_vars['theField']->value['id'],'complexParent'=>$_smarty_tpl->tpl_vars['complexParent']->value),$_smarty_tpl);?>
</div>
		<?php }else{ ?>
			<div class="inputField"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['search'][0][0]->tpl_search(array('property'=>$_smarty_tpl->tpl_vars['theField']->value['id']),$_smarty_tpl);?>
</div>
		<?php }?>
	<?php }?>
</fieldset>
<?php }} ?>