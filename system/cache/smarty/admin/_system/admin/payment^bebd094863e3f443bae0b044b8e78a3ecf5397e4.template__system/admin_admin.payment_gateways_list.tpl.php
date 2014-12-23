<?php /* Smarty version Smarty-3.1.13, created on 2014-12-18 13:15:40
         compiled from "template__system/admin_admin:d:\xampp\htdocs\tuyendungvn\templates\_system\admin\payment\payment_gateways_list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:106065492710c67f658-93205239%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bebd094863e3f443bae0b044b8e78a3ecf5397e4' => 
    array (
      0 => 'template__system/admin_admin:d:\\xampp\\htdocs\\tuyendungvn\\templates\\_system\\admin\\payment\\payment_gateways_list.tpl',
      1 => 1366680336,
      2 => 'template__system/admin_admin',
    ),
  ),
  'nocache_hash' => '106065492710c67f658-93205239',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'gatewaySaved' => 0,
    'gateways' => 0,
    'GLOBALS' => 0,
    'gateway' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5492710cdf9911_33087993',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5492710cdf9911_33087993')) {function content_5492710cdf9911_33087993($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cycle')) include 'D:\\xampp\\htdocs\\tuyendungvn\\system\\ext\\Smarty\\libs\\plugins\\function.cycle.php';
?><?php $_smarty_tpl->smarty->_tag_stack[] = array('breadcrumbs', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['breadcrumbs'][0][0]->_tpl_breadcrumbs(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Payment Gateways<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['breadcrumbs'][0][0]->_tpl_breadcrumbs(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<h1><img src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['image'][0][0]->getImageURL(array(),$_smarty_tpl);?>
/icons/paperlock32.png" border="0" alt="" class="titleicon"/>Payment Gateways</h1>
<?php if ($_smarty_tpl->tpl_vars['gatewaySaved']->value){?><p class="message"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Your changes were successfully saved<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</p><?php }?>
<table>
	<thead>
		<tr>
			<th>Name<br><small>click to configure<small></th>
			<th>Status</th>
			<th class="actions">Actions</th>
		</tr>
	</thead>
	<tbody>
		<?php  $_smarty_tpl->tpl_vars['gateway'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['gateway']->_loop = false;
 $_smarty_tpl->tpl_vars['gateway_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['gateways']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['gateway']->key => $_smarty_tpl->tpl_vars['gateway']->value){
$_smarty_tpl->tpl_vars['gateway']->_loop = true;
 $_smarty_tpl->tpl_vars['gateway_id']->value = $_smarty_tpl->tpl_vars['gateway']->key;
?>
			<tr class="<?php echo smarty_function_cycle(array('values'=>"oddrow,evenrow"),$_smarty_tpl);?>
">
				<td><a href=<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/configure-gateway/?gateway=<?php echo $_smarty_tpl->tpl_vars['gateway']->value['id'];?>
 title="set up gateway"> <?php echo $_smarty_tpl->tpl_vars['gateway']->value['caption'];?>
 </a></td>
				<td><?php if ($_smarty_tpl->tpl_vars['gateway']->value['active']){?> Active <?php }else{ ?> Inactive <?php }?> </td>
				<td>
					<?php if ($_smarty_tpl->tpl_vars['gateway']->value['active']){?>
						<a href="?action=deactivate&gateway=<?php echo $_smarty_tpl->tpl_vars['gateway']->value['id'];?>
" class="deletebutton">Deactivate</a>
					<?php }else{ ?>
						<a href="?action=activate&gateway=<?php echo $_smarty_tpl->tpl_vars['gateway']->value['id'];?>
" class="editbutton greenbtn" style="width: 60px; text-align: center;">Activate</a>
					<?php }?>
				</td>
			</tr>
		<?php } ?>
	</tbody>
</table><?php }} ?>