<?php /* Smarty version Smarty-3.1.13, created on 2014-12-22 20:24:52
         compiled from "template_intelligentview_user:../field_types/search/multilist.tpl" */ ?>
<?php /*%%SmartyHeaderCode:857154981ba4e41158-34429684%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bfdd228866c1803e315364abe8c271662ed975a6' => 
    array (
      0 => 'template_intelligentview_user:../field_types/search/multilist.tpl',
      1 => 1388978756,
      2 => 'template_intelligentview_user',
    ),
  ),
  'nocache_hash' => '857154981ba4e41158-34429684',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'id' => 0,
    'GLOBALS' => 0,
    'sort_by_alphabet' => 0,
    'list_values' => 0,
    'list_value' => 0,
    'value' => 0,
    'value_id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_54981ba5b18ab2_93297892',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54981ba5b18ab2_93297892')) {function content_54981ba5b18ab2_93297892($_smarty_tpl) {?><div style="min-height: 26px;">
	<img id="multilist-preloader-<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" src="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/templates/_system/main/images/ajax_preloader_circular_32.gif" height="16px" />
	<select multiple="multiple" style="display: none;" id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" class="inputList fieldType<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
 <?php if ($_smarty_tpl->tpl_vars['sort_by_alphabet']->value){?>sortable-select<?php }?>" name="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
[multi_like][]">
		<?php  $_smarty_tpl->tpl_vars['list_value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list_value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list_values']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list_value']->key => $_smarty_tpl->tpl_vars['list_value']->value){
$_smarty_tpl->tpl_vars['list_value']->_loop = true;
?>
			<option value='<?php echo $_smarty_tpl->tpl_vars['list_value']->value['id'];?>
' <?php  $_smarty_tpl->tpl_vars['value_id'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value_id']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['value']->value['multi_like']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value_id']->key => $_smarty_tpl->tpl_vars['value_id']->value){
$_smarty_tpl->tpl_vars['value_id']->_loop = true;
?><?php if ($_smarty_tpl->tpl_vars['list_value']->value['id']==$_smarty_tpl->tpl_vars['value_id']->value){?>selected="selected"<?php }?><?php } ?> <?php  $_smarty_tpl->tpl_vars['value_id'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value_id']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['value']->value['multi_like_and']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value_id']->key => $_smarty_tpl->tpl_vars['value_id']->value){
$_smarty_tpl->tpl_vars['value_id']->_loop = true;
?><?php if ($_smarty_tpl->tpl_vars['list_value']->value['id']==$_smarty_tpl->tpl_vars['value_id']->value){?>selected="selected"<?php }?><?php } ?> ><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('mode'=>"raw")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array('mode'=>"raw"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['list_value']->value['caption'];?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; ob_start();  echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array('mode'=>"raw"), $_block_content, $_smarty_tpl, $_block_repeat); echo htmlspecialchars(ob_get_clean(), ENT_QUOTES, 'UTF-8', true);} array_pop($_smarty_tpl->smarty->_tag_stack);?>
</option>
		<?php } ?>
	</select>
</div>
<script type="text/javascript">
	$(document).ready(function() {
		var name = "<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
[multi_like][]";
		var options = {
			selectedList: 3,
			selectedText: "# <?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
selected<?php $_block_content = ob_get_clean(); $_block_repeat=false; ob_start();  echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); echo htmlspecialchars(ob_get_clean(), ENT_QUOTES, 'UTF-8', true);} array_pop($_smarty_tpl->smarty->_tag_stack);?>
",
			noneSelectedText: "<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Click to select<?php $_block_content = ob_get_clean(); $_block_repeat=false; ob_start();  echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); echo htmlspecialchars(ob_get_clean(), ENT_QUOTES, 'UTF-8', true);} array_pop($_smarty_tpl->smarty->_tag_stack);?>
",
			checkAllText: "<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Select all<?php $_block_content = ob_get_clean(); $_block_repeat=false; ob_start();  echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); echo htmlspecialchars(ob_get_clean(), ENT_QUOTES, 'UTF-8', true);} array_pop($_smarty_tpl->smarty->_tag_stack);?>
",
			uncheckAllText: "<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Deselect all<?php $_block_content = ob_get_clean(); $_block_repeat=false; ob_start();  echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); echo htmlspecialchars(ob_get_clean(), ENT_QUOTES, 'UTF-8', true);} array_pop($_smarty_tpl->smarty->_tag_stack);?>
",
			header: true,
			height: 'auto',
			minWidth: 316
		};
		$("select[name='" + name + "']").getCustomMultiList(options, "<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
", null);
	});
</script>
<?php }} ?>