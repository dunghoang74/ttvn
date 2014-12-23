<?php /* Smarty version Smarty-3.1.13, created on 2014-12-22 22:27:00
         compiled from "template__system/admin_admin:d:\xampp\htdocs\tuyendungvn\templates\_system\admin\user_pages\user_pages_list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17014549838443437f7-51187713%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9eddf76a743f0f84ab58837dbee6364b85407f39' => 
    array (
      0 => 'template__system/admin_admin:d:\\xampp\\htdocs\\tuyendungvn\\templates\\_system\\admin\\user_pages\\user_pages_list.tpl',
      1 => 1338886608,
      2 => 'template__system/admin_admin',
    ),
  ),
  'nocache_hash' => '17014549838443437f7-51187713',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'GLOBALS' => 0,
    'sort_pages' => 0,
    'pages_list' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_549838452ca9e0_48944687',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_549838452ca9e0_48944687')) {function content_549838452ca9e0_48944687($_smarty_tpl) {?><?php $_smarty_tpl->smarty->_tag_stack[] = array('breadcrumbs', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['breadcrumbs'][0][0]->_tpl_breadcrumbs(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Site Pages<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['breadcrumbs'][0][0]->_tpl_breadcrumbs(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<h1><img src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['image'][0][0]->getImageURL(array(),$_smarty_tpl);?>
/icons/linedpaper32.png" border="0" alt="" class="titleicon"/>Site Pages</h1>
<p><a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/user-pages/?action=new_page" class="grayButton">Add a New User Page</a></p>

<table>
	<thead>
		<tr>
			<th>
				<a href="?restore=1&amp;sorting_field=uri&amp;sorting_order=<?php if ($_smarty_tpl->tpl_vars['sort_pages']->value['sorting_order']=='ASC'&&$_smarty_tpl->tpl_vars['sort_pages']->value['sorting_field']=='uri'){?>DESC<?php }else{ ?>ASC<?php }?>">URI</a>
					<?php if ($_smarty_tpl->tpl_vars['sort_pages']->value['sorting_field']=='id'){?>
						<?php if ($_smarty_tpl->tpl_vars['sort_pages']->value['sorting_order']=='ASC'){?>
							<img src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['image'][0][0]->getImageURL(array(),$_smarty_tpl);?>
b_up_arrow.gif" alt="Up" />
						<?php }else{ ?>
							<img src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['image'][0][0]->getImageURL(array(),$_smarty_tpl);?>
b_down_arrow.gif" alt="Down" />
						<?php }?>
					<?php }?>
			</th>
			<th>Title</th>	
			<th>Module</th>
			<th>Function</th>
			<th colspan="2" class="actions">Actions</th>
		</tr>
	</thead>
	<tbody>
		<?php  $_smarty_tpl->tpl_vars['page'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['page']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pages_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["foreach"]['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['page']->key => $_smarty_tpl->tpl_vars['page']->value){
$_smarty_tpl->tpl_vars['page']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["foreach"]['iteration']++;
?>
			<tr class="<?php if (!(1 & $_smarty_tpl->getVariable('smarty')->value['foreach']['foreach']['iteration'])){?>evenrow<?php }else{ ?>oddrow<?php }?>">
				<td><a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/..<?php echo $_smarty_tpl->tpl_vars['page']->value['uri'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['page']->value['uri'];?>
</a></td>		
				<td><?php echo $_smarty_tpl->tpl_vars['page']->value['title'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['page']->value['module'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['page']->value['function'];?>
</td>
				<td><a href="?action=edit_page&amp;uri=<?php echo rawurlencode($_smarty_tpl->tpl_vars['page']->value['uri']);?>
" title="Edit" class="editbutton">Edit</a></td>
				<td><a href="?action=delete_page&amp;uri=<?php echo rawurlencode($_smarty_tpl->tpl_vars['page']->value['uri']);?>
" onclick="return confirm('Are you sure you want to delete this page?')" title="Delete" class="deletebutton">Delete</a></td>
			</tr>
		<?php } ?>
	</tbody>
</table>
<?php }} ?>