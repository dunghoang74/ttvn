<?php /* Smarty version Smarty-3.1.13, created on 2014-12-18 13:34:09
         compiled from "template__system/admin_admin:d:\xampp\htdocs\tuyendungvn\templates\_system\admin\users\acl.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1283854927561862877-22907572%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7415a49942fe2f3c408df5e3f8366c224a76db1a' => 
    array (
      0 => 'template__system/admin_admin:d:\\xampp\\htdocs\\tuyendungvn\\templates\\_system\\admin\\users\\acl.tpl',
      1 => 1348806348,
      2 => 'template__system/admin_admin',
    ),
  ),
  'nocache_hash' => '1283854927561862877-22907572',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'type' => 0,
    'GLOBALS' => 0,
    'userGroupInfo' => 0,
    'role' => 0,
    'membershipPlanInfo' => 0,
    'listingTypes' => 0,
    'listingType' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_549275631fe2a5_35024935',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_549275631fe2a5_35024935')) {function content_549275631fe2a5_35024935($_smarty_tpl) {?>
<script type="text/javascript">
<!--
	function viewPermission(el, value)
    {
    	var amountDiv = '#' + el.name + '_amountPermissions';
    	var typeDiv = '#' + el.name + '_typePermissions';
    	var userGroupPerm = '#' + el.name + '_userGroup';
    	var messageDiv = '#' + el.name + '_messagePermissions';

    	if (el.tagName == 'INPUT') {
    		if (el.checked) {
    			$(amountDiv).show();
    			$(typeDiv).hide();
    		}
    		else {
    			$(amountDiv).hide();  
    			$(typeDiv).show();
    		}
    	}
    	else {
        	switch (el.value) {
        		case 'inherit':
            		$(amountDiv).hide();
            		$(typeDiv).hide();
            		break;
        		case 'allow':
            		$(amountDiv).show();
            		$(typeDiv).hide();
            		break;
        		case 'deny':
        			$(amountDiv).hide();
        			$(typeDiv).show();
            		break;
        	}
    	}
    	if ($(typeDiv).css('display') == 'block') {
    		if ($(typeDiv +' input[type=radio]:checked').val() == "message")
        		$(messageDiv).show();	
    		else
    			$(messageDiv).hide();	
        }
    	else {
    		$(messageDiv).hide();
    	}
	}

    $(document).ready(function () {
        $(".permissionSelect").each(function () {
        	viewPermission(this, this.value);
        });
    });

	function viewMessage(p_name)
    {
		var typeDiv = '#' + p_name + '_typePermissions';
		var messageDiv = '#' + p_name + '_messagePermissions';
		if ($(typeDiv +' input[type=radio]:checked').val() == "message")
			$(messageDiv).show();	
		else
			$(messageDiv).hide();
	}

//-->
</script>


<?php $_smarty_tpl->smarty->_tag_stack[] = array('breadcrumbs', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['breadcrumbs'][0][0]->_tpl_breadcrumbs(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <?php if ($_smarty_tpl->tpl_vars['type']->value=='user'){?>
    	<a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/manage-<?php if ($_smarty_tpl->tpl_vars['userGroupInfo']->value['id']=='Employer'||$_smarty_tpl->tpl_vars['userGroupInfo']->value['id']=='JobSeeker'){?><?php echo mb_strtolower($_smarty_tpl->tpl_vars['userGroupInfo']->value['id'], 'UTF-8');?>
s<?php }else{ ?><?php echo mb_strtolower($_smarty_tpl->tpl_vars['userGroupInfo']->value['id'], 'UTF-8');?>
-users<?php }?>/">Manage <?php if ($_smarty_tpl->tpl_vars['userGroupInfo']->value['id']=='Employer'||$_smarty_tpl->tpl_vars['userGroupInfo']->value['id']=='JobSeeker'){?><?php echo $_smarty_tpl->tpl_vars['userGroupInfo']->value['name'];?>
s<?php }else{ ?>'<?php echo $_smarty_tpl->tpl_vars['userGroupInfo']->value['name'];?>
' Users<?php }?></a> &#187; <a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/edit-user/?user_sid=<?php echo $_smarty_tpl->tpl_vars['role']->value;?>
">Edit <?php echo $_smarty_tpl->tpl_vars['userGroupInfo']->value['name'];?>
</a> &#187; View Permissions
    <?php }elseif($_smarty_tpl->tpl_vars['type']->value=='group'){?>
    	<a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/user-groups/">User Groups</a> &#187; <a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/edit-user-group/?sid=<?php echo $_smarty_tpl->tpl_vars['role']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['userGroupInfo']->value['name'];?>
</a> &#187; Manage <?php if ($_smarty_tpl->tpl_vars['type']->value=='group'){?><?php echo $_smarty_tpl->tpl_vars['userGroupInfo']->value['name'];?>
 <?php }?>Permissions
    <?php }elseif($_smarty_tpl->tpl_vars['type']->value=='guest'){?>
    	<a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/user-groups/">User Groups</a> &#187; Manage Guest Permissions
    <?php }elseif($_smarty_tpl->tpl_vars['type']->value=='plan'){?>
    	<a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/membership-plans/">Membership Plans</a> &#187; <a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/membership-plan/?id=<?php echo $_smarty_tpl->tpl_vars['role']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['membershipPlanInfo']->value['name'];?>
</a> &#187; Manage <?php echo $_smarty_tpl->tpl_vars['membershipPlanInfo']->value['name'];?>
 Permissions 
    <?php }?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['breadcrumbs'][0][0]->_tpl_breadcrumbs(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<h1>
	<?php if ($_smarty_tpl->tpl_vars['type']->value=="user"){?>
        <img src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['image'][0][0]->getImageURL(array(),$_smarty_tpl);?>
/icons/contactcard32.png" border="0" alt="" class="titleicon"/> View
    <?php }else{ ?>
        <img src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['image'][0][0]->getImageURL(array(),$_smarty_tpl);?>
/icons/contactcard32.png" border="0" alt="" class="titleicon"/> Manage
    <?php }?>
	<?php if ($_smarty_tpl->tpl_vars['type']->value=='group'){?>
		<?php echo $_smarty_tpl->tpl_vars['userGroupInfo']->value['name'];?>

	<?php }elseif($_smarty_tpl->tpl_vars['type']->value=='guest'){?>
		Guest
	<?php }elseif($_smarty_tpl->tpl_vars['type']->value=='plan'){?>
		<?php echo $_smarty_tpl->tpl_vars['membershipPlanInfo']->value['name'];?>

	<?php }?> Permissions
</h1>
<div style="width: 700px;	display: block;">
	<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/system/users/acl/">
		<input type="hidden" id="action" name="action" value="save" />
		<input type="hidden" name="type" value="<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
" />
		<input type="hidden" name="role" value="<?php echo $_smarty_tpl->tpl_vars['role']->value;?>
" />
		<h3>General permissions</h3>
		<?php echo $_smarty_tpl->getSubTemplate ("acl_group_permissions.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('group'=>"general"), 0);?>

		
		<?php  $_smarty_tpl->tpl_vars['listingType'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['listingType']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['listingTypes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['listingType']->key => $_smarty_tpl->tpl_vars['listingType']->value){
$_smarty_tpl->tpl_vars['listingType']->_loop = true;
?>
			<h3><?php echo $_smarty_tpl->tpl_vars['listingType']->value['name'];?>
 permissions</h3>
			<?php echo $_smarty_tpl->getSubTemplate ("acl_group_permissions.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('group'=>$_smarty_tpl->tpl_vars['listingType']->value['id']), 0);?>

		<?php } ?>
	
		<?php if ($_smarty_tpl->tpl_vars['type']->value!='user'){?>
	    	<?php if ($_smarty_tpl->tpl_vars['type']->value=='plan'){?>
	        	<table width="100%" id="clear">
	        		<tr>
	        			<td  width="100%" style="text-align: right;"><small><b>Apply changes to all users currently subscribed to this plan</b></small></td><td align="right" ><input type="radio" name="update_users" value="1" checked="checked" /></td>
	        		</tr>
	        		<tr>
	        			<td  style="text-align: right;"><small><b>Changes will be applied to newly subscribed users only</b></small></td><td align="right" ><input type="radio" name="update_users" value="0"></td>
	        		</tr>
	        	</table>
	    	<?php }?>
			<br/>
            <div class="floatRight">
                <input type="submit" id="apply" value="Apply" class="grayButton"/>
                <input type="submit" value="Save" class="grayButton" />
            </div>
		<?php }?>
	</form>
</div>

	<script>
        $('#apply').click(
            function() {
                $('#action').attr('value', 'apply_info');
            }
        );
    </script>
<?php }} ?>