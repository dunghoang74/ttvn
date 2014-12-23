<?php /* Smarty version Smarty-3.1.13, created on 2014-12-22 20:07:41
         compiled from "template_smartjobboard_user:../field_types/input/radiobuttons.tpl" */ ?>
<?php /*%%SmartyHeaderCode:23555498179da29db3-21937268%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f0fec36bc953b0c660273b77f3965f69f8dc4eb2' => 
    array (
      0 => 'template_smartjobboard_user:../field_types/input/radiobuttons.tpl',
      1 => 1381738392,
      2 => 'template_smartjobboard_user',
    ),
  ),
  'nocache_hash' => '23555498179da29db3-21937268',
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
  'unifunc' => 'content_5498179e081489_24376001',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5498179e081489_24376001')) {function content_5498179e081489_24376001($_smarty_tpl) {?><div <?php if ($_smarty_tpl->tpl_vars['sort_by_alphabet']->value){?>class="sortable-input"<?php }?>>
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