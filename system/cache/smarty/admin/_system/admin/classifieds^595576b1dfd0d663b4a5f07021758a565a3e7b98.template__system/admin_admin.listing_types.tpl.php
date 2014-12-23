<?php /* Smarty version Smarty-3.1.13, created on 2014-12-18 11:47:15
         compiled from "template__system/admin_admin:d:\xampp\htdocs\tuyendungvn\templates\_system\admin\classifieds\listing_types.tpl" */ ?>
<?php /*%%SmartyHeaderCode:140954925c531365b0-75912777%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '595576b1dfd0d663b4a5f07021758a565a3e7b98' => 
    array (
      0 => 'template__system/admin_admin:d:\\xampp\\htdocs\\tuyendungvn\\templates\\_system\\admin\\classifieds\\listing_types.tpl',
      1 => 1338885934,
      2 => 'template__system/admin_admin',
    ),
  ),
  'nocache_hash' => '140954925c531365b0-75912777',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'GLOBALS' => 0,
    'listing_types' => 0,
    'listing_type' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_54925c53a5e3d3_62279311',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54925c53a5e3d3_62279311')) {function content_54925c53a5e3d3_62279311($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cycle')) include 'D:\\xampp\\htdocs\\tuyendungvn\\system\\ext\\Smarty\\libs\\plugins\\function.cycle.php';
?><?php $_smarty_tpl->smarty->_tag_stack[] = array('breadcrumbs', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['breadcrumbs'][0][0]->_tpl_breadcrumbs(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Listing Types<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['breadcrumbs'][0][0]->_tpl_breadcrumbs(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<h1><img src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['image'][0][0]->getImageURL(array(),$_smarty_tpl);?>
/icons/linedpapercheck32.png" border="0" class="titleicon"/>Listing Types</h1>
<p><a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/add-listing-type/" class="grayButton">Add a New Listing Type</a></p>

<table>
	<thead>
		<tr>
			<th>ID</th>
			<th>Name</th>
			<th>Number of listings</th>
			<th colspan="3" class="actions">Actions</th>
		</tr>
	</thead>
	<tbody>
		<?php  $_smarty_tpl->tpl_vars['listing_type'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['listing_type']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['listing_types']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['listing_type']->key => $_smarty_tpl->tpl_vars['listing_type']->value){
$_smarty_tpl->tpl_vars['listing_type']->_loop = true;
?>
		<tr class="<?php echo smarty_function_cycle(array('values'=>'evenrow,oddrow'),$_smarty_tpl);?>
">
			<td><?php echo $_smarty_tpl->tpl_vars['listing_type']->value['id'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['listing_type']->value['caption'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['listing_type']->value['listing_number'];?>
</td>
			<td align="center"><a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/edit-listing-type/?sid=<?php echo $_smarty_tpl->tpl_vars['listing_type']->value['sid'];?>
" title="Edit" class="editbutton">Edit</a></td>
			<?php if ($_smarty_tpl->tpl_vars['listing_type']->value['listing_number']>0){?>
                <td>&nbsp;</td>
			<?php }else{ ?>
				<td><a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/delete-listing-type/?sid=<?php echo $_smarty_tpl->tpl_vars['listing_type']->value['sid'];?>
" onclick='return confirm("Are you sure you want to delete this listing type?")' title="Delete" class="deletebutton">Delete</a></td>
			<?php }?>
			<td><a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/posting-pages/<?php echo mb_strtolower($_smarty_tpl->tpl_vars['listing_type']->value['id'], 'UTF-8');?>
" title="Posting Pages" class="editbutton">Posting Pages</a></td>
		</tr>
		<?php } ?>
	</tbody>
</table><?php }} ?>