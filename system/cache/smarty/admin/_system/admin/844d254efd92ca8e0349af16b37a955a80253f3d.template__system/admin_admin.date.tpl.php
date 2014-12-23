<?php /* Smarty version Smarty-3.1.13, created on 2014-12-18 13:29:29
         compiled from "template__system/admin_admin:../field_types/input/date.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3228354927449e93dd7-02442559%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '844d254efd92ca8e0349af16b37a955a80253f3d' => 
    array (
      0 => 'template__system/admin_admin:../field_types/input/date.tpl',
      1 => 1378267314,
      2 => 'template__system/admin_admin',
    ),
  ),
  'nocache_hash' => '3228354927449e93dd7-02442559',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'complexField' => 0,
    'id' => 0,
    'complexStep' => 0,
    'mysql_date' => 0,
    'value' => 0,
    'GLOBALS' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5492744a7bdfc8_44319218',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5492744a7bdfc8_44319218')) {function content_5492744a7bdfc8_44319218($_smarty_tpl) {?><input type="text" class="input-date displayDate <?php if ($_smarty_tpl->tpl_vars['complexField']->value){?>complexField<?php }?>" name="<?php if ($_smarty_tpl->tpl_vars['complexField']->value){?><?php echo $_smarty_tpl->tpl_vars['complexField']->value;?>
[<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
][<?php echo $_smarty_tpl->tpl_vars['complexStep']->value;?>
]<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['id']->value;?>
<?php }?>" value="<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('type'=>"date")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array('type'=>"date"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php if ($_smarty_tpl->tpl_vars['mysql_date']->value&&!$_smarty_tpl->tpl_vars['complexField']->value){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['mysql_date']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php }else{ ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php }?><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array('type'=>"date"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
" <?php if ($_smarty_tpl->tpl_vars['GLOBALS']->value['user_page_uri']=='/add-invoice/'||$_smarty_tpl->tpl_vars['GLOBALS']->value['user_page_uri']=='/edit-invoice/'){?>style="width: 120px;"<?php }?>/>

<script>
	var dFormat = '<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['current_language_data']['date_format'];?>
';
	
	dFormat = dFormat.replace('%m', "mm");
	dFormat = dFormat.replace('%d', "dd");
	dFormat = dFormat.replace('%Y', "yy");

		$(document).ready(function() {
	$(".input-date").datepicker({
		dateFormat: dFormat,
		showOn: 'both',
		changeMonth: true,
		changeYear: true,
		minDate: new Date(1940, 1 - 1, 1),
		maxDate: '+10y',
		yearRange: '-99:+99',
		buttonImage: '<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['image'][0][0]->getImageURL(array(),$_smarty_tpl);?>
icons/icon-calendar.png',
		buttonImageOnly: true
	});
	});
	
</script><?php }} ?>