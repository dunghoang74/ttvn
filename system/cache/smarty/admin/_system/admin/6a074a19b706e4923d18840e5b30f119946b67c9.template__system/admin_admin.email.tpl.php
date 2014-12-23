<?php /* Smarty version Smarty-3.1.13, created on 2014-12-18 13:31:20
         compiled from "template__system/admin_admin:../field_types/input/email.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7512549274b883a722-74232372%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6a074a19b706e4923d18840e5b30f119946b67c9' => 
    array (
      0 => 'template__system/admin_admin:../field_types/input/email.tpl',
      1 => 1378267314,
      2 => 'template__system/admin_admin',
    ),
  ),
  'nocache_hash' => '7512549274b883a722-74232372',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'value' => 0,
    'complexField' => 0,
    'id' => 0,
    'complexStep' => 0,
    'isRequireConfirmation' => 0,
    'editProfile' => 0,
    'confirmed' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_549274b96e6ce6_74133701',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_549274b96e6ce6_74133701')) {function content_549274b96e6ce6_74133701($_smarty_tpl) {?><input type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="inputString <?php if ($_smarty_tpl->tpl_vars['complexField']->value){?>complexField<?php }?>" name="<?php if ($_smarty_tpl->tpl_vars['complexField']->value){?><?php echo $_smarty_tpl->tpl_vars['complexField']->value;?>
[<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
][<?php echo $_smarty_tpl->tpl_vars['complexStep']->value;?>
][original]<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['id']->value;?>
[original]<?php }?>" />
	</td>
</tr>
<?php if ($_smarty_tpl->tpl_vars['isRequireConfirmation']->value==1){?>
<tr>
	<td valign="top"></td>
	<td valign="top" align="right" class="required">*</td>
	<td><input type="text" <?php if ($_smarty_tpl->tpl_vars['editProfile']->value==1){?> value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8', true);?>
" <?php }else{ ?> value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['confirmed']->value, ENT_QUOTES, 'UTF-8', true);?>
" <?php }?> class="inputString" name="<?php if ($_smarty_tpl->tpl_vars['complexField']->value){?><?php echo $_smarty_tpl->tpl_vars['complexField']->value;?>
[<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
][<?php echo $_smarty_tpl->tpl_vars['complexStep']->value;?>
][confirmed]<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['id']->value;?>
[confirmed]<?php }?>" style="margin-top:2px;"/><br />
		<span style="font-size:11px"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Confirm E-mail<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</span>
	</td>
</tr>
<?php }?><?php }} ?>