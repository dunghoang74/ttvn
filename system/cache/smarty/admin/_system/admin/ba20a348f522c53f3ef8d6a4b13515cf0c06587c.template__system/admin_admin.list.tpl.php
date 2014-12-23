<?php /* Smarty version Smarty-3.1.13, created on 2014-12-18 13:18:12
         compiled from "template__system/admin_admin:../field_types/input/list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19118549271a4308e34-09683504%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ba20a348f522c53f3ef8d6a4b13515cf0c06587c' => 
    array (
      0 => 'template__system/admin_admin:../field_types/input/list.tpl',
      1 => 1396322760,
      2 => 'template__system/admin_admin',
    ),
  ),
  'nocache_hash' => '19118549271a4308e34-09683504',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'sort_by_alphabet' => 0,
    'complexField' => 0,
    'id' => 0,
    'complexStep' => 0,
    'parentID' => 0,
    'product_type' => 0,
    'list_values' => 0,
    'enabled' => 0,
    'disable' => 0,
    'polls' => 0,
    'caption' => 0,
    'list_value' => 0,
    'value' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_549271a588b591_42345999',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_549271a588b591_42345999')) {function content_549271a588b591_42345999($_smarty_tpl) {?><select class="searchList <?php if ($_smarty_tpl->tpl_vars['sort_by_alphabet']->value){?>sortable-select<?php }?> <?php if ($_smarty_tpl->tpl_vars['complexField']->value){?>complexField<?php }?>" name="<?php if ($_smarty_tpl->tpl_vars['complexField']->value){?><?php echo $_smarty_tpl->tpl_vars['complexField']->value;?>
[<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
][<?php echo $_smarty_tpl->tpl_vars['complexStep']->value;?>
]<?php }elseif($_smarty_tpl->tpl_vars['parentID']->value){?><?php echo $_smarty_tpl->tpl_vars['parentID']->value;?>
[<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
]<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['id']->value;?>
<?php }?>" id="<?php if ($_smarty_tpl->tpl_vars['complexField']->value){?><?php echo $_smarty_tpl->tpl_vars['complexField']->value;?>
[<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
][<?php echo $_smarty_tpl->tpl_vars['complexStep']->value;?>
]<?php }elseif($_smarty_tpl->tpl_vars['parentID']->value){?><?php echo $_smarty_tpl->tpl_vars['parentID']->value;?>
[<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
]<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['id']->value;?>
<?php }?>" <?php if ($_smarty_tpl->tpl_vars['product_type']->value&&$_smarty_tpl->tpl_vars['id']->value=='user_group_sid'){?> onChange="changePermissions(this.value)" <?php }?> <?php if (($_smarty_tpl->tpl_vars['parentID']->value&&!$_smarty_tpl->tpl_vars['list_values']->value&&!$_smarty_tpl->tpl_vars['enabled']->value)||$_smarty_tpl->tpl_vars['disable']->value){?> disabled="disabled" <?php }?> <?php if ($_smarty_tpl->tpl_vars['parentID']->value&&$_smarty_tpl->tpl_vars['id']->value=="Country"){?> onchange = "get<?php echo $_smarty_tpl->tpl_vars['parentID']->value;?>
States(this.value)" <?php }?> >
	<option value=""><?php if ($_smarty_tpl->tpl_vars['id']->value=='profile_field_as_dv'){?>Select user profile field <?php }elseif($_smarty_tpl->tpl_vars['polls']->value&&$_smarty_tpl->tpl_vars['id']->value=='user_group_sid'){?>Everyone<?php }elseif($_smarty_tpl->tpl_vars['id']->value=='product_sid'){?>All Products<?php }elseif(!$_smarty_tpl->tpl_vars['parentID']->value&&($_smarty_tpl->tpl_vars['id']->value=="Country"||$_smarty_tpl->tpl_vars['id']->value=="State")){?>Any <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['caption']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php }else{ ?>Select <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['caption']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php }?></option>
	<?php  $_smarty_tpl->tpl_vars['list_value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list_value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list_values']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list_value']->key => $_smarty_tpl->tpl_vars['list_value']->value){
$_smarty_tpl->tpl_vars['list_value']->_loop = true;
?>
		<option value='<?php echo $_smarty_tpl->tpl_vars['list_value']->value['id'];?>
' <?php if ($_smarty_tpl->tpl_vars['list_value']->value['id']==$_smarty_tpl->tpl_vars['value']->value){?>selected="selected"<?php }?> ><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['list_value']->value['caption'];?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; ob_start();  echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); echo htmlspecialchars(ob_get_clean(), ENT_QUOTES, 'UTF-8', true);} array_pop($_smarty_tpl->smarty->_tag_stack);?>
</option>
	<?php } ?>
</select><?php }} ?>