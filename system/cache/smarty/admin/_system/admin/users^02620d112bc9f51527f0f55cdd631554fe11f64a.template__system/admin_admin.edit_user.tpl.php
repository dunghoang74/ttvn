<?php /* Smarty version Smarty-3.1.13, created on 2014-12-18 13:31:15
         compiled from "template__system/admin_admin:d:\xampp\htdocs\tuyendungvn\templates\_system\admin\users\edit_user.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21557549274b3ecd041-44051079%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '02620d112bc9f51527f0f55cdd631554fe11f64a' => 
    array (
      0 => 'template__system/admin_admin:d:\\xampp\\htdocs\\tuyendungvn\\templates\\_system\\admin\\users\\edit_user.tpl',
      1 => 1383034916,
      2 => 'template__system/admin_admin',
    ),
  ),
  'nocache_hash' => '21557549274b3ecd041-44051079',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'GLOBALS' => 0,
    'user_group_info' => 0,
    'restore' => 0,
    'listingTypes' => 0,
    'listingType' => 0,
    'user_info' => 0,
    'parent_name' => 0,
    'form_fields' => 0,
    'form_field' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_549274b6426f81_35833573',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_549274b6426f81_35833573')) {function content_549274b6426f81_35833573($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['GLOBALS']->value['is_ajax']){?>
	<link type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['user_site_url'];?>
/system/ext/jquery/themes/green/jquery-ui-1.7.2.custom.css" rel="stylesheet" />
	    
	<script language="javascript">
	
	var url = "<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/edit-user/";
	
	
		$("#editUserForm").submit(function() {
			var options = {
				target: "#messageBox",
	            url:  url,
	            succes: function(data) {
					$("#messageBox").html(data).dialog({width: 200});
				}
	        };
	        $(this).ajaxSubmit(options);
	        return false;
		});
	
	</script>
<?php }?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('breadcrumbs', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['breadcrumbs'][0][0]->_tpl_breadcrumbs(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/manage-<?php if ($_smarty_tpl->tpl_vars['user_group_info']->value['id']=='Employer'||$_smarty_tpl->tpl_vars['user_group_info']->value['id']=='JobSeeker'){?><?php echo mb_strtolower($_smarty_tpl->tpl_vars['user_group_info']->value['id'], 'UTF-8');?>
s<?php }else{ ?><?php echo mb_strtolower($_smarty_tpl->tpl_vars['user_group_info']->value['id'], 'UTF-8');?>
-users<?php }?>/<?php if ($_smarty_tpl->tpl_vars['restore']->value){?>?restore=1<?php }?>">Manage <?php if ($_smarty_tpl->tpl_vars['user_group_info']->value['id']=='Employer'||$_smarty_tpl->tpl_vars['user_group_info']->value['id']=='JobSeeker'){?><?php echo $_smarty_tpl->tpl_vars['user_group_info']->value['name'];?>
s<?php }else{ ?>'<?php echo $_smarty_tpl->tpl_vars['user_group_info']->value['name'];?>
' Users<?php }?></a> &#187; Edit <?php echo $_smarty_tpl->tpl_vars['user_group_info']->value['name'];?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['breadcrumbs'][0][0]->_tpl_breadcrumbs(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<h1><img src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['image'][0][0]->getImageURL(array(),$_smarty_tpl);?>
/icons/users32.png" border="0" alt="" class="titleicon"/> Edit <?php echo $_smarty_tpl->tpl_vars['user_group_info']->value['name'];?>
</h1>

<p>
	<?php  $_smarty_tpl->tpl_vars['listingType'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['listingType']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['listingTypes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['listingType']->key => $_smarty_tpl->tpl_vars['listingType']->value){
$_smarty_tpl->tpl_vars['listingType']->_loop = true;
?>
		<a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/add-listing/?listing_type_id=<?php echo $_smarty_tpl->tpl_vars['listingType']->value['id'];?>
&username=<?php echo $_smarty_tpl->tpl_vars['user_info']->value['username'];?>
&edit_user=1" class="grayButton">Add New <?php echo $_smarty_tpl->tpl_vars['listingType']->value['name'];?>
</a>
	<?php } ?>
    <a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/system/applications/view/?user_sid=<?php echo $_smarty_tpl->tpl_vars['user_info']->value['sid'];?>
" class="grayButton">Manage Applications</a>
    <a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/user-products/?user_sid=<?php echo $_smarty_tpl->tpl_vars['user_info']->value['sid'];?>
" class="grayButton">Manage User Products</a>
    <a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/private-messages/pm-main/?user_sid=<?php echo $_smarty_tpl->tpl_vars['user_info']->value['sid'];?>
" class="grayButton">Manage Personal messages</a>
    <a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/system/users/acl/?type=user&amp;role=<?php echo $_smarty_tpl->tpl_vars['user_info']->value['sid'];?>
" class="grayButton">View Permissions</a>
    <a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/email-log/?user_sid=<?php echo $_smarty_tpl->tpl_vars['user_info']->value['sid'];?>
" class="grayButton">View Email Log</a>
	<a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/add-invoice/?user_sid=<?php echo $_smarty_tpl->tpl_vars['user_info']->value['sid'];?>
" class="grayButton" ><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Create Invoice<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a>
</p>
<?php echo $_smarty_tpl->getSubTemplate ('field_errors.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<br/>
<fieldset>
	<legend>User Info</legend>
	<form method="post" enctype="multipart/form-data" id="editUserForm">
		<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['set_token_field'][0][0]->tpl_set_token_field(array(),$_smarty_tpl);?>

		<input type="hidden" id="action_name" name="action_name" value="save_info" />
		<table>
            <?php if ($_smarty_tpl->tpl_vars['parent_name']->value){?>
                <tr>
                    <td>
                        Sub-user of <a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/edit-user/?user_sid=<?php echo $_smarty_tpl->tpl_vars['user_info']->value['parent_sid'];?>
" title="Edit"><?php echo $_smarty_tpl->tpl_vars['parent_name']->value;?>
</a>
                    </td>
                </tr>
            <?php }?>
			<?php  $_smarty_tpl->tpl_vars['form_field'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['form_field']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['form_fields']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['form_field']->key => $_smarty_tpl->tpl_vars['form_field']->value){
$_smarty_tpl->tpl_vars['form_field']->_loop = true;
?>
			<?php if ($_smarty_tpl->tpl_vars['form_field']->value['type']=="video"){?>
				<tr>
					<td valign="top"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['form_field']->value['caption'];?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</td>
					<td valign="top" class="required"><?php if ($_smarty_tpl->tpl_vars['form_field']->value['is_required']){?>*<?php }?></td>					<td ><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['input'][0][0]->tpl_input(array('property'=>$_smarty_tpl->tpl_vars['form_field']->value['id'],'template'=>"video_profile.tpl"),$_smarty_tpl);?>
</td>
				</tr>
			<?php }else{ ?>
				<tr>
					<td valign="top"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['form_field']->value['caption'];?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</td>
					<td valign="top" class="required"><?php if ($_smarty_tpl->tpl_vars['form_field']->value['is_required']){?>*<?php }?></td>
					<td>
						<div style="float: left;"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['input'][0][0]->tpl_input(array('property'=>$_smarty_tpl->tpl_vars['form_field']->value['id']),$_smarty_tpl);?>
</div>
						<?php if (in_array($_smarty_tpl->tpl_vars['form_field']->value['type'],array('multilist'))){?>
							<div id="count-available-<?php echo $_smarty_tpl->tpl_vars['form_field']->value['id'];?>
" class="mt-count-available"></div>
						<?php }?>
					</td>
				</tr>
			<?php }?>
			<?php } ?>
			<tr>
				<td valign="top">IP</td>
				<td valign="top"></td>
				<td><?php if ($_smarty_tpl->tpl_vars['user_info']->value['ip_is_banned']){?><a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/banned-ips/" target="_blank" style="color: red!important"><?php echo $_smarty_tpl->tpl_vars['user_info']->value['ip'];?>
</a><?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['user_info']->value['ip'];?>
<?php }?></td>
			</tr>
			<tr>
				<td colspan="3">
                    <div class="floatRight">
                        <input type="hidden" name="user_sid" value="<?php echo $_smarty_tpl->tpl_vars['user_info']->value['sid'];?>
" />
                        <input type="submit" id="apply" value="Apply" class="grayButton" />
                        <input type="submit" value="Save" class="grayButton" />
                    </div>
				</td>
			</tr>
		</table>
	</form>
</fieldset>


	<script>
        $('#apply').click(
            function() {
                $('#action_name').attr('value', 'apply_info');
            }
        );
    </script>
<?php }} ?>