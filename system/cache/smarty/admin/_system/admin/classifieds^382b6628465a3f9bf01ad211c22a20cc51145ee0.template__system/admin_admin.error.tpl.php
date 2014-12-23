<?php /* Smarty version Smarty-3.1.13, created on 2014-12-18 13:16:34
         compiled from "template__system/admin_admin:error.tpl" */ ?>
<?php /*%%SmartyHeaderCode:87775492714296d4d6-29164311%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '382b6628465a3f9bf01ad211c22a20cc51145ee0' => 
    array (
      0 => 'template__system/admin_admin:error.tpl',
      1 => 1378376216,
      2 => 'template__system/admin_admin',
    ),
  ),
  'nocache_hash' => '87775492714296d4d6-29164311',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'errors' => 0,
    'error' => 0,
    'error_message' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_549271436d9542_75330610',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_549271436d9542_75330610')) {function content_549271436d9542_75330610($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars["error_message"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["error_message"]->_loop = false;
 $_smarty_tpl->tpl_vars["error"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['errors']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["error_message"]->key => $_smarty_tpl->tpl_vars["error_message"]->value){
$_smarty_tpl->tpl_vars["error_message"]->_loop = true;
 $_smarty_tpl->tpl_vars["error"]->value = $_smarty_tpl->tpl_vars["error_message"]->key;
?>
	<?php if ($_smarty_tpl->tpl_vars['error']->value=="INVALID_REQUEST"){?>
		<p class="error"><?php echo $_smarty_tpl->tpl_vars['error_message']->value;?>
</p>
	<?php }elseif($_smarty_tpl->tpl_vars['error']->value=="INVALID_DATA"){?>
		<p class="error"><?php echo $_smarty_tpl->tpl_vars['error_message']->value;?>
</p>
	<?php }elseif($_smarty_tpl->tpl_vars['error']->value=="PARAMETERS_MISSED"){?>
		<p class="error">The key parameters are not specified</p>
	<?php }elseif($_smarty_tpl->tpl_vars['error']->value=="MYSQL_ERROR"){?>
		<?php echo $_smarty_tpl->tpl_vars['error_message']->value;?>

	<?php }elseif($_smarty_tpl->tpl_vars['error']->value=="NOT_LOGGED_IN"){?>
		<p class="error">No logged in user found</p>
	<?php }elseif($_smarty_tpl->tpl_vars['error']->value=="NOT_OWNER"){?>
		<p class="error">You're not owner of this listing</p>
	<?php }elseif($_smarty_tpl->tpl_vars['error']->value=="EMPTY_EXPORT_DATA"){?>
		<p class="error">There is no data to export. Change your search criteria.</p>
	<?php }elseif($_smarty_tpl->tpl_vars['error']->value=="EMPTY_EXPORT_PROPERTIES"){?>
		<p class="error">There are no selected properties. Select at least one property to export.</p>
    <?php }elseif($_smarty_tpl->tpl_vars['error']->value=="CANT_CREATE_EXPORT_FILES"){?>
		<p class="error">Cannot create export files</p>
	<?php }elseif($_smarty_tpl->tpl_vars['error']->value=='UPLOAD_ERR_INI_SIZE'){?>
		<p class="error"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
File size exceeds system limit. Please check the file size limits on your hosting or upload another file.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</p>
	<?php }elseif($_smarty_tpl->tpl_vars['error']->value=='UPLOAD_ERR_NO_FILE'){?>
		<p class="error"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Please choose Excel or csv file<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</p>
	<?php }elseif($_smarty_tpl->tpl_vars['error']->value=='DO_NOT_MATCH_SELECTED_FILE_FORMAT'){?>
		<p class="error"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
The file type do not match with selected file format<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</p>
	<?php }else{ ?>
		<p class="error"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['error_message']->value;?>
</p>
	<?php }?>	<?php } ?><?php }} ?>