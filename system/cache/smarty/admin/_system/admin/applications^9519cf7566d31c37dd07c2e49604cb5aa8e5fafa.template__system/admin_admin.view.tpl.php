<?php /* Smarty version Smarty-3.1.13, created on 2014-12-18 13:33:27
         compiled from "template__system/admin_admin:d:\xampp\htdocs\tuyendungvn\templates\_system\admin\applications\view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:390549275373597b0-62873936%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9519cf7566d31c37dd07c2e49604cb5aa8e5fafa' => 
    array (
      0 => 'template__system/admin_admin:d:\\xampp\\htdocs\\tuyendungvn\\templates\\_system\\admin\\applications\\view.tpl',
      1 => 1375079698,
      2 => 'template__system/admin_admin',
    ),
  ),
  'nocache_hash' => '390549275373597b0-62873936',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'GLOBALS' => 0,
    'user_group_info' => 0,
    'user_sid' => 0,
    'username' => 0,
    'orderBy' => 0,
    'order' => 0,
    'applications' => 0,
    'app' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_54927539b35c34_59869608',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54927539b35c34_59869608')) {function content_54927539b35c34_59869608($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cycle')) include 'D:\\xampp\\htdocs\\tuyendungvn\\system\\ext\\Smarty\\libs\\plugins\\function.cycle.php';
?><?php $_smarty_tpl->smarty->_tag_stack[] = array('breadcrumbs', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['breadcrumbs'][0][0]->_tpl_breadcrumbs(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/manage-<?php if ($_smarty_tpl->tpl_vars['user_group_info']->value['id']=='Employer'||$_smarty_tpl->tpl_vars['user_group_info']->value['id']=='JobSeeker'){?><?php echo mb_strtolower($_smarty_tpl->tpl_vars['user_group_info']->value['id'], 'UTF-8');?>
s<?php }else{ ?><?php echo mb_strtolower($_smarty_tpl->tpl_vars['user_group_info']->value['id'], 'UTF-8');?>
-users<?php }?>/?restore=1"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Manage<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
 <?php if ($_smarty_tpl->tpl_vars['user_group_info']->value['id']=='Employer'||$_smarty_tpl->tpl_vars['user_group_info']->value['id']=='JobSeeker'){?><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['user_group_info']->value['name'];?>
s<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }else{ ?>'<?php echo $_smarty_tpl->tpl_vars['user_group_info']->value['name'];?>
' <?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Users<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }?></a> &#187; <a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/edit-user/?user_sid=<?php echo $_smarty_tpl->tpl_vars['user_sid']->value;?>
"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Edit <?php echo $_smarty_tpl->tpl_vars['user_group_info']->value['name'];?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a> &#187; <?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Manage Applications<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['breadcrumbs'][0][0]->_tpl_breadcrumbs(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<h1><img src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['image'][0][0]->getImageURL(array(),$_smarty_tpl);?>
/icons/linedpaperpencil32.png" border="0" alt="" class="titleicon"/> <?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Manage Applications for<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
 <?php echo $_smarty_tpl->tpl_vars['username']->value;?>
</h1>

<form method="post" name="applicationForm" action="">
	<input type="hidden" name="orderBy" value="<?php echo $_smarty_tpl->tpl_vars['orderBy']->value;?>
" />
	<input type="hidden" name="order" value="<?php echo $_smarty_tpl->tpl_vars['order']->value;?>
" />
	<input id="action" type="hidden" name="action" value="" />
	<input type="hidden" name="username" value="<?php echo $_smarty_tpl->tpl_vars['username']->value;?>
" />
	<input type="hidden" name="user_sid" value="<?php echo $_smarty_tpl->tpl_vars['user_sid']->value;?>
" />
	
	<input type="submit" value="<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Approve selected<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
"	class="grayButton" onclick="submitForm('approve'); return false;"/>
	<input type="submit" value="<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Reject selected<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
" class="grayButton" onclick="submitForm('reject')"/>
    <input type="submit" value="<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Delete selected<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
" class="deletebutton" onclick="if (confirm('<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Are you sure you want to delete the selected application(s)?<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
')) submitForm('delete');"/>
	
	<div class="clr"><br/></div>

	<table width="60%">
		<thead>
			<tr>
				<th width="1%"><input type="checkbox" id="all_checkboxes_control"></th>
				<th width="20%"><a href="?user_sid=<?php echo $_smarty_tpl->tpl_vars['user_sid']->value;?>
&amp;username=<?php echo $_smarty_tpl->tpl_vars['username']->value;?>
&amp;orderBy=date&amp;order=<?php if ($_smarty_tpl->tpl_vars['orderBy']->value=="date"&&$_smarty_tpl->tpl_vars['order']->value=="asc"){?>desc<?php }else{ ?>asc<?php }?>"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Date applied<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a></th>
				<th width="35%"><a href="?user_sid=<?php echo $_smarty_tpl->tpl_vars['user_sid']->value;?>
&amp;username=<?php echo $_smarty_tpl->tpl_vars['username']->value;?>
&amp;orderBy=title&amp;order=<?php if ($_smarty_tpl->tpl_vars['orderBy']->value=="title"&&$_smarty_tpl->tpl_vars['order']->value=="asc"){?>desc<?php }else{ ?>asc<?php }?>"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Job title<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a></th>
				<th width="25%"><a href="?user_sid=<?php echo $_smarty_tpl->tpl_vars['user_sid']->value;?>
&amp;username=<?php echo $_smarty_tpl->tpl_vars['username']->value;?>
&amp;orderBy=applicant&amp;order=<?php if ($_smarty_tpl->tpl_vars['orderBy']->value=="applicant"&&$_smarty_tpl->tpl_vars['order']->value=="asc"){?>desc<?php }else{ ?>asc<?php }?>">Applicant’s Name</a></th>
				<th width="20%"><a href="?user_sid=<?php echo $_smarty_tpl->tpl_vars['user_sid']->value;?>
&amp;username=<?php echo $_smarty_tpl->tpl_vars['username']->value;?>
&amp;orderBy=status&amp;order=<?php if ($_smarty_tpl->tpl_vars['orderBy']->value=="status"&&$_smarty_tpl->tpl_vars['order']->value=="asc"){?>desc<?php }else{ ?>asc<?php }?>">Status</a></th>
			</tr>
		</thead>
	</table>
	<table width="60%" id="application-table">
		<?php  $_smarty_tpl->tpl_vars['app'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['app']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['applications']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['app']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['applications']['total'] = $_smarty_tpl->tpl_vars['app']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['applications']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['app']->key => $_smarty_tpl->tpl_vars['app']->value){
$_smarty_tpl->tpl_vars['app']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['applications']['iteration']++;
?>
			<tr class="<?php echo smarty_function_cycle(array('values'=>'evenrow,oddrow'),$_smarty_tpl);?>
">
				<td>
					<table>
						<tbody>
							<tr>
								<td rowspan="2" width="1%" valign="top"><input type="checkbox" name="applications[<?php echo $_smarty_tpl->tpl_vars['app']->value['id'];?>
]" value="1" id="checkbox_<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['applications']['iteration'];?>
"/></td>
								<td width="20%"><?php echo $_smarty_tpl->tpl_vars['app']->value['date'];?>
</td>
								<td width="35%"><a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/display-listing/?listing_id=<?php echo $_smarty_tpl->tpl_vars['app']->value['job']['sid'];?>
"><?php echo $_smarty_tpl->tpl_vars['app']->value['job']['Title'];?>
</a></td>
								<td width="25%"><?php echo $_smarty_tpl->tpl_vars['app']->value['user']['FirstName'];?>
 <?php echo $_smarty_tpl->tpl_vars['app']->value['user']['LastName'];?>
</td>
								<td width="20%"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['app']->value['status'];?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</td>
							</tr>
							<tr>
								<td colspan="4">
									<div class="applicationCommentsHeader"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Cover Letter <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
:</div>
									<div class="applicationComments">
										<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['app']->value['comments'], ENT_QUOTES, 'UTF-8', true);?>

										<?php if ($_smarty_tpl->tpl_vars['app']->value['resume']){?>
											<br />- <a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/display-listing/?listing_id=<?php echo $_smarty_tpl->tpl_vars['app']->value['resume'];?>
"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Attached Resume<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a>
										<?php }?>
										<?php if ($_smarty_tpl->tpl_vars['app']->value['file']){?>
											<br />- <a href="?appsID=<?php echo $_smarty_tpl->tpl_vars['app']->value['id'];?>
&amp;filename=<?php echo rawurlencode($_smarty_tpl->tpl_vars['app']->value['file']);?>
"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
View Attached File<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a>
										<?php }?>
									</div>
								</td>
							</tr>
						</tbody>
					</table>
				</td>
			</tr>
		<?php } ?>
	</table>
</form>

<script type="text/javascript">
var total = <?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['applications']['total'];?>
;


function set_checkbox(param) {
	for (i = 1; i <= total; i++) {
		if (checkbox = document.getElementById('checkbox_' + i))
			checkbox.checked = param;
	}
}

$("#all_checkboxes_control").click(function() {
	set_checkbox(this.checked);
});

function submitForm(action) {
	document.getElementById('action').value = action;
	var form = document.applicationForm;
	form.submit();
}

</script>
<?php }} ?>