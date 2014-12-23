<?php /* Smarty version Smarty-3.1.13, created on 2014-12-18 13:24:28
         compiled from "template__system/admin_admin:d:\xampp\htdocs\tuyendungvn\templates\_system\admin\users\user_search_form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3805492731ca40464-18036999%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '79acf4b0ed237017d932ca042bf4dc39891c53a6' => 
    array (
      0 => 'template__system/admin_admin:d:\\xampp\\htdocs\\tuyendungvn\\templates\\_system\\admin\\users\\user_search_form.tpl',
      1 => 1384832412,
      2 => 'template__system/admin_admin',
    ),
  ),
  'nocache_hash' => '3805492731ca40464-18036999',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'userGroupInfo' => 0,
    'GLOBALS' => 0,
    'products' => 0,
    'product' => 0,
    'selectedProduct' => 0,
    'online' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5492731df0b220_19975967',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5492731df0b220_19975967')) {function content_5492731df0b220_19975967($_smarty_tpl) {?><?php $_smarty_tpl->smarty->_tag_stack[] = array('breadcrumbs', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['breadcrumbs'][0][0]->_tpl_breadcrumbs(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Manage <?php if ($_smarty_tpl->tpl_vars['userGroupInfo']->value['id']=='Employer'||$_smarty_tpl->tpl_vars['userGroupInfo']->value['id']=='JobSeeker'){?><?php echo $_smarty_tpl->tpl_vars['userGroupInfo']->value['name'];?>
s<?php }else{ ?>'<?php echo $_smarty_tpl->tpl_vars['userGroupInfo']->value['name'];?>
' Users<?php }?><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['breadcrumbs'][0][0]->_tpl_breadcrumbs(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<h1><img src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['image'][0][0]->getImageURL(array(),$_smarty_tpl);?>
users-online.png" border="0" alt="" class="titleicon" />Manage <?php if ($_smarty_tpl->tpl_vars['userGroupInfo']->value['id']=='Employer'||$_smarty_tpl->tpl_vars['userGroupInfo']->value['id']=='JobSeeker'){?><?php echo $_smarty_tpl->tpl_vars['userGroupInfo']->value['name'];?>
s<?php }else{ ?>'<?php echo $_smarty_tpl->tpl_vars['userGroupInfo']->value['name'];?>
' Users<?php }?></h1>
<p><a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/add-<?php echo mb_strtolower($_smarty_tpl->tpl_vars['userGroupInfo']->value['id'], 'UTF-8');?>
" class="grayButton">Add a New <?php echo $_smarty_tpl->tpl_vars['userGroupInfo']->value['name'];?>
</a></p>

<div class="setting_button" id="mediumButton"><strong>Click to modify search criteria</strong><div class="setting_icon"><div id="accordeonClosed"></div></div></div>
<div class="setting_block" style="display: none"  id="clearTable">
	<form method="get" name="search_form">
		<table  width="100%">
			<tr><td>User ID:</td><td><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['search'][0][0]->tpl_search(array('property'=>"sid"),$_smarty_tpl);?>
</td></tr>
			<tr><td>Username:</td><td><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['search'][0][0]->tpl_search(array('property'=>"username",'template'=>"string.like.tpl"),$_smarty_tpl);?>
</td></tr>
			<?php if ($_smarty_tpl->tpl_vars['userGroupInfo']->value['id']=='Employer'){?>
               <tr><td>Company Name:</td><td><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['search'][0][0]->tpl_search(array('property'=>"CompanyName",'template'=>"string.like.tpl"),$_smarty_tpl);?>
</td></tr>
            <?php }elseif($_smarty_tpl->tpl_vars['userGroupInfo']->value['id']=='JobSeeker'){?>
				<tr><td>First/Last Name:</td><td><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['search'][0][0]->tpl_search(array('property'=>"FirstName"),$_smarty_tpl);?>
</td></tr>
            <?php }?>
		    <tr><td>Email:</td><td><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['search'][0][0]->tpl_search(array('property'=>"email",'template'=>"string.like.tpl"),$_smarty_tpl);?>
</td></tr>
		    <tr><td>Registration Date:</td><td><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['search'][0][0]->tpl_search(array('property'=>"registration_date"),$_smarty_tpl);?>
</td></tr>
			<tr>
				<td>Product:</td>
				<td><select name="product[simple_equal]">
						<option value="">Any</option>
					<?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value){
$_smarty_tpl->tpl_vars['product']->_loop = true;
?>
						<option value="<?php echo $_smarty_tpl->tpl_vars['product']->value['sid'];?>
" <?php if ($_smarty_tpl->tpl_vars['selectedProduct']->value['simple_equal']==$_smarty_tpl->tpl_vars['product']->value['sid']){?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>
</option>
					<?php } ?>
					</select>
				</td>
			</tr>
			<tr><td>Status:</td><td><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['search'][0][0]->tpl_search(array('property'=>"active"),$_smarty_tpl);?>
</td></tr>
			<tr><td>Online:</td><td><input type="checkbox" value="1" name="online" <?php if ($_smarty_tpl->tpl_vars['online']->value){?>checked="checked"<?php }?> /></td></tr>
			<tr>
				<td>&nbsp;</td>
				<td>
					<div class="floatRight">
						<input type="hidden" name="action" value="search" />
						<input type="hidden" name="page" value="1" />
						<input type="submit" value="Search" class="grayButton" />
					</div>
				</td>
			</tr>
		</table>
	</form>
</div>

<script>
	$( function () {
	
		var dFormat = '<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['current_language_data']['date_format'];?>
';
		
		dFormat = dFormat.replace('%m', "mm");
		dFormat = dFormat.replace('%d', "dd");
		dFormat = dFormat.replace('%Y', "yy");
		
		$("#registration_date_notless, #registration_date_notmore").datepicker({
			dateFormat: dFormat,
			showOn: 'both',
			yearRange: '-99:+99',
			buttonImage: '<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['image'][0][0]->getImageURL(array(),$_smarty_tpl);?>
icons/icon-calendar.png'
		});
		
		
		$(".setting_button").click(function(){
			var butt = $(this);
			$(this).next(".setting_block").slideToggle("normal", function(){
				if ($(this).css("display") == "block") {
					butt.children(".setting_icon").html("<div id='accordeonOpen'></div>");
					butt.children("strong").text("Click to hide search criteria");
				} else {
					butt.children(".setting_icon").html("<div id='accordeonClosed'></div>");
					butt.children("strong").text("Click to modify search criteria");
				}
			});
		});
	
		
	
	});
</script>

<?php }} ?>