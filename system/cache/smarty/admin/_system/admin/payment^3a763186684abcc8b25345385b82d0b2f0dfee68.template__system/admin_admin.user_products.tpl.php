<?php /* Smarty version Smarty-3.1.13, created on 2014-12-18 13:37:39
         compiled from "template__system/admin_admin:d:\xampp\htdocs\tuyendungvn\templates\_system\admin\payment\user_products.tpl" */ ?>
<?php /*%%SmartyHeaderCode:286154927633588688-42018804%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3a763186684abcc8b25345385b82d0b2f0dfee68' => 
    array (
      0 => 'template__system/admin_admin:d:\\xampp\\htdocs\\tuyendungvn\\templates\\_system\\admin\\payment\\user_products.tpl',
      1 => 1361353932,
      2 => 'template__system/admin_admin',
    ),
  ),
  'nocache_hash' => '286154927633588688-42018804',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'GLOBALS' => 0,
    'user_group_info' => 0,
    'user_sid' => 0,
    'contracts' => 0,
    'contract' => 0,
    'listingAmount' => 0,
    'availableViews' => 0,
    'availableContactViews' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_549276353b02b4_29188315',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_549276353b02b4_29188315')) {function content_549276353b02b4_29188315($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cycle')) include 'D:\\xampp\\htdocs\\tuyendungvn\\system\\ext\\Smarty\\libs\\plugins\\function.cycle.php';
if (!is_callable('smarty_modifier_capitalize')) include 'D:\\xampp\\htdocs\\tuyendungvn\\system\\ext\\Smarty\\libs\\plugins\\modifier.capitalize.php';
?><?php $_smarty_tpl->smarty->_tag_stack[] = array('breadcrumbs', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['breadcrumbs'][0][0]->_tpl_breadcrumbs(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/manage-<?php if ($_smarty_tpl->tpl_vars['user_group_info']->value['id']=='Employer'||$_smarty_tpl->tpl_vars['user_group_info']->value['id']=='JobSeeker'){?><?php echo mb_strtolower($_smarty_tpl->tpl_vars['user_group_info']->value['id'], 'UTF-8');?>
s<?php }else{ ?><?php echo mb_strtolower($_smarty_tpl->tpl_vars['user_group_info']->value['id'], 'UTF-8');?>
-users<?php }?>/?restore=1">Manage <?php if ($_smarty_tpl->tpl_vars['user_group_info']->value['id']=='Employer'||$_smarty_tpl->tpl_vars['user_group_info']->value['id']=='JobSeeker'){?><?php echo $_smarty_tpl->tpl_vars['user_group_info']->value['name'];?>
s<?php }else{ ?>'<?php echo $_smarty_tpl->tpl_vars['user_group_info']->value['name'];?>
' Users<?php }?></a> &#187; <a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/edit-user/?user_sid=<?php echo $_smarty_tpl->tpl_vars['user_sid']->value;?>
">Edit <?php echo $_smarty_tpl->tpl_vars['user_group_info']->value['name'];?>
</a> &#187; Products<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['breadcrumbs'][0][0]->_tpl_breadcrumbs(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<script type="text/javascript">
var progbar = "<img src='<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['user_site_url'];?>
/system/ext/jquery/progbar.gif'>";
$(function() {
	$(".addProduct").click(function(){
		$("#dialog").dialog('destroy');
		$("#dialog").attr({title: "Loading"});
		$("#dialog").html(progbar).dialog({width: 180});
		var link = $(this).attr("href");
		$.get(link, function(data){
			$("#dialog").dialog('destroy');
			$("#dialog").attr({title: "Add a new product"});
			$("#dialog").dialog({
				width: 560,
				close: function(event, ui) {
					if(parentReload == true) {
						parent.document.location.reload();
				}}
			}).html(data);
		});
		return false;
	});
});
function deleteProduct(link) 
{
	if (confirm('Are you sure you want to delete this user product?')) 
		location.href=link;
}
</script>


<h1><img src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['image'][0][0]->getImageURL(array(),$_smarty_tpl);?>
/icons/shoppingcart32.png" border="0" alt="" class="titleicon"/>Manage User Products</h1>
<p><a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/add-user-product/?user_sid=<?php echo $_smarty_tpl->tpl_vars['user_sid']->value;?>
" target="_blank" class="addProduct grayButton">Add a new product</a></p>

<div id="dialog" style="display: none"></div>
<table>
	<thead>
		<tr>
			<th><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Product Name<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</th>
			<th>Activation Date</th>
			<th><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Expiration / Renewal Date<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</th>
			<th>Stats</th>
			<th>Status</th>
			<th>Actions</th>
		</tr>
	</thead>
	<tbody>
		<?php  $_smarty_tpl->tpl_vars['contract'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['contract']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['contracts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['contract']->key => $_smarty_tpl->tpl_vars['contract']->value){
$_smarty_tpl->tpl_vars['contract']->_loop = true;
?>
			<tr class="<?php echo smarty_function_cycle(array('values'=>'evenrow,oddrow'),$_smarty_tpl);?>
">
				<td><?php echo $_smarty_tpl->tpl_vars['contract']->value['product']['name'];?>
</td>
				<td><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('type'=>"date")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array('type'=>"date"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['contract']->value['creation_date'];?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array('type'=>"date"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</td>
				<td><?php if ($_smarty_tpl->tpl_vars['contract']->value['expired_date']){?><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('type'=>"date")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array('type'=>"date"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['contract']->value['expired_date'];?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array('type'=>"date"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }else{ ?>Unlimited<?php }?></td>
				<td>
					<?php if ($_smarty_tpl->tpl_vars['contract']->value['listingAmount']){?>
						<?php  $_smarty_tpl->tpl_vars['listingAmount'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['listingAmount']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['contract']->value['listingAmount']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['listingAmount']->key => $_smarty_tpl->tpl_vars['listingAmount']->value){
$_smarty_tpl->tpl_vars['listingAmount']->_loop = true;
?>
							<div><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['listingAmount']->value['name'];?>
s Left to Post<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
: <?php echo $_smarty_tpl->tpl_vars['listingAmount']->value['listingsLeft'];?>
</div>
						<?php } ?>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['contract']->value['availableViews']){?>
						<?php  $_smarty_tpl->tpl_vars['availableViews'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['availableViews']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['contract']->value['availableViews']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['availableViews']->key => $_smarty_tpl->tpl_vars['availableViews']->value){
$_smarty_tpl->tpl_vars['availableViews']->_loop = true;
?>
							<div><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['availableViews']->value['name'];?>
s Left to View<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
: <?php echo $_smarty_tpl->tpl_vars['availableViews']->value['viewsLeft'];?>
</div>
						<?php } ?>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['contract']->value['availableContactViews']){?>
						<?php  $_smarty_tpl->tpl_vars['availableContactViews'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['availableContactViews']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['contract']->value['availableContactViews']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['availableContactViews']->key => $_smarty_tpl->tpl_vars['availableContactViews']->value){
$_smarty_tpl->tpl_vars['availableContactViews']->_loop = true;
?>
							<div><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['availableContactViews']->value['name'];?>
 Contact details left to view<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
: <?php echo $_smarty_tpl->tpl_vars['availableContactViews']->value['viewsLeft'];?>
</div>
						<?php } ?>
					<?php }?>
				</td>
				<td><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['contract']->value['status']);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</td>
				<td>
					<input type="button" name="button" value="Remove" class="deletebutton" onclick="deleteProduct('<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/user-products/?action=remove&user_sid=<?php echo $_smarty_tpl->tpl_vars['user_sid']->value;?>
&contract_id=<?php echo $_smarty_tpl->tpl_vars['contract']->value['id'];?>
');">
					<?php if ($_smarty_tpl->tpl_vars['contract']->value['status']=='pending'){?>
						<input type="button" name="button" value="Activate" class="grayButton" onclick="location.href='<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/user-products/?action=activate&user_sid=<?php echo $_smarty_tpl->tpl_vars['user_sid']->value;?>
&contract_id=<?php echo $_smarty_tpl->tpl_vars['contract']->value['id'];?>
'">
					<?php }?>
				</td>
			</tr>
		<?php } ?>
	</tbody>
</table><?php }} ?>