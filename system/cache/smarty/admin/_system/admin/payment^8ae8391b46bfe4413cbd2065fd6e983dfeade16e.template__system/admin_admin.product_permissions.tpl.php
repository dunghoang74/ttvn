<?php /* Smarty version Smarty-3.1.13, created on 2014-12-18 13:29:40
         compiled from "template__system/admin_admin:d:\xampp\htdocs\tuyendungvn\templates\_system\admin\payment\product_permissions.tpl" */ ?>
<?php /*%%SmartyHeaderCode:24823549274548cc8e1-26926913%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8ae8391b46bfe4413cbd2065fd6e983dfeade16e' => 
    array (
      0 => 'template__system/admin_admin:d:\\xampp\\htdocs\\tuyendungvn\\templates\\_system\\admin\\payment\\product_permissions.tpl',
      1 => 1332489782,
      2 => 'template__system/admin_admin',
    ),
  ),
  'nocache_hash' => '24823549274548cc8e1-26926913',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'role' => 0,
    'countGeneralPermissions' => 0,
    'listingTypes' => 0,
    'listingType' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_54927454c9d1e9_18796900',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54927454c9d1e9_18796900')) {function content_54927454c9d1e9_18796900($_smarty_tpl) {?>
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


<table width="100%">
	<tr>
		<td>
			<input type="hidden" name="role" value="<?php echo $_smarty_tpl->tpl_vars['role']->value;?>
" />
			<?php if ($_smarty_tpl->tpl_vars['countGeneralPermissions']->value){?>
			<h3>General permissions</h3>
			<?php echo $_smarty_tpl->getSubTemplate ("../users/acl_group_permissions.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('group'=>"general"), 0);?>

			<?php }?>
					
			<?php  $_smarty_tpl->tpl_vars['listingType'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['listingType']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['listingTypes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['listingType']->key => $_smarty_tpl->tpl_vars['listingType']->value){
$_smarty_tpl->tpl_vars['listingType']->_loop = true;
?>
				<h3><?php echo $_smarty_tpl->tpl_vars['listingType']->value['name'];?>
 permissions</h3>
				<?php echo $_smarty_tpl->getSubTemplate ("../users/acl_group_permissions.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('group'=>$_smarty_tpl->tpl_vars['listingType']->value['id']), 0);?>

			<?php } ?>
		</td>
	</tr>
</table><?php }} ?>