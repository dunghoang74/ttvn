<?php /* Smarty version Smarty-3.1.13, created on 2014-12-22 20:58:12
         compiled from "template_generationx_user:../field_types/input/radiobuttons.tpl" */ ?>
<?php /*%%SmartyHeaderCode:566754982374e03db3-05564896%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '63a4b761707b013f2d5619415097b10334dba9ed' => 
    array (
      0 => 'template_generationx_user:../field_types/input/radiobuttons.tpl',
      1 => 1381738392,
      2 => 'template_generationx_user',
    ),
  ),
  'nocache_hash' => '566754982374e03db3-05564896',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'sort_by_alphabet' => 0,
    'list_values' => 0,
    'id' => 0,
    'list_value' => 0,
    'value' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_549823753af546_30512692',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_549823753af546_30512692')) {function content_549823753af546_30512692($_smarty_tpl) {?><div <?php if ($_smarty_tpl->tpl_vars['sort_by_alphabet']->value){?>class="sortable-input"<?php }?>>
	<?php  $_smarty_tpl->tpl_vars['list_value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list_value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list_values']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list_value']->key => $_smarty_tpl->tpl_vars['list_value']->value){
$_smarty_tpl->tpl_vars['list_value']->_loop = true;
?>
		<input type="radio" name="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['list_value']->value['id']==$_smarty_tpl->tpl_vars['value']->value){?>checked="checked"<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['list_value']->value['id'];?>
" /><span>&nbsp;<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['list_value']->value['caption'];?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; ob_start();  echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); echo htmlspecialchars(ob_get_clean(), ENT_QUOTES, 'UTF-8', true);} array_pop($_smarty_tpl->smarty->_tag_stack);?>
</span><br/>
	<?php } ?>
</div><?php }} ?>