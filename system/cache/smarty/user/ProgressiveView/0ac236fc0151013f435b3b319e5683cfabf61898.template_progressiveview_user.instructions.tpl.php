<?php /* Smarty version Smarty-3.1.13, created on 2014-12-22 21:44:15
         compiled from "template_progressiveview_user:../classifieds/instructions.tpl" */ ?>
<?php /*%%SmartyHeaderCode:577854982e3fa6c6b5-33562257%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0ac236fc0151013f435b3b319e5683cfabf61898' => 
    array (
      0 => 'template_progressiveview_user:../classifieds/instructions.tpl',
      1 => 1381394060,
      2 => 'template_progressiveview_user',
    ),
  ),
  'nocache_hash' => '577854982e3fa6c6b5-33562257',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'form_field' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_54982e3fbd3d01_02204216',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54982e3fbd3d01_02204216')) {function content_54982e3fbd3d01_02204216($_smarty_tpl) {?><div class="instruction">
	<div class="instr_icon" onmouseover="javascript:$(this).next('.instr_block').show();" onmouseout="javascript:$(this).next('.instr_block').hide();"></div>
    <div class="instr_block" id="instruction_<?php echo $_smarty_tpl->tpl_vars['form_field']->value['id'];?>
">
		<div class="instr_arrow"></div>
		<div class="instr_cont">
			<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['form_field']->value['instructions'];?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			<div class="clr"></div>
		</div>
		<div class="clr"></div>
	</div>
    <div class="clr"></div>
</div>
<?php }} ?>