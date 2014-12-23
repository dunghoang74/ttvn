<?php /* Smarty version Smarty-3.1.13, created on 2014-12-18 13:18:18
         compiled from "template__system/admin_admin:../field_types/input/applicationsettings.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21099549271aac36055-79105419%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0de228a14328cdc9615b9111d253d5fcd0562fec' => 
    array (
      0 => 'template__system/admin_admin:../field_types/input/applicationsettings.tpl',
      1 => 1389691050,
      2 => 'template__system/admin_admin',
    ),
  ),
  'nocache_hash' => '21099549271aac36055-79105419',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'id' => 0,
    'complexField' => 0,
    'complexStep' => 0,
    'value' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_549271ac8d33a6_39417849',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_549271ac8d33a6_39417849')) {function content_549271ac8d33a6_39417849($_smarty_tpl) {?><script type="text/javascript">

	function displayInput(disableValue, disableId) {
		$("[id^='ApplicationSettings']").attr("disabled", "disabled");
		var appSettingsDiv = document.getElementById(disableId);
		$("[id!=" + disableId + "][id^='ApplicationSettings']").val('');
		appSettingsDiv.disabled = disableValue;
	}

	function validateForm(formName) {
		var form = document.getElementById(formName);
		var appSettingsRadio		= form.elements['<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
[add_parameter]'];
		var appSettingsEmailValue	= form.elements["<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
_1"].value;
		var appSettingsWebValue		= form.elements["<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
_2"].value;
		for(var i = 0; i < appSettingsRadio.length; i++) {
			if(appSettingsRadio[i].checked && appSettingsRadio[i].value == 1)
				var exp = /^([a-zA-Z0-9_.-])+@([a-zA-Z0-9_.-])+\.([a-zA-Z])+([a-zA-Z])+/;
				if( (appSettingsEmailValue != '') && !(appSettingsEmailValue.match(exp)) ) {
					error('<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
"Application Settings" wrong Email format<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
');
					return false;
				}
			else if(appSettingsRadio[i].checked && appSettingsRadio[i].value == 2) {
				if(appSettingsWebValue == '') {
					error('<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
"Application Settings" url is empty<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
');
					return false;
				} else if( !( appSettingsWebValue.match(/https?:\/\//)) ) {
					form.elements["<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
_2"].value = 'http://' + appSettingsWebValue;
					return true;
				}
			}
		}
		return true;
	}

	function error(error_text) {
		$("#dialog").dialog( 'destroy' ).html(error_text);
		$("#dialog").dialog({
			bgiframe: true,
			modal: true,
			title: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Error<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
			buttons: {
				Ok: function() {
					$(this).dialog('close');
				}
			}
		});
	}
	function getUrl(name) {
		var url = document.getElementById(name);
		if (url.value != '') {
			if (!(url.value.match(/https?:\/\//)) ) {
				url.value = 'http://' + url.value;
			}
			window.open(url.value, "target");
		} else {
			alert('<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
"Application Settings" url is empty<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
');
		}
	}
</script>

<div id="dialog"></div>
<table id="application-settings">
	<tr>
		<td valign="top">
			<input  id="via-email" class="inputRadio <?php if ($_smarty_tpl->tpl_vars['complexField']->value){?>complexField<?php }?>" name="<?php if ($_smarty_tpl->tpl_vars['complexField']->value){?><?php echo $_smarty_tpl->tpl_vars['complexField']->value;?>
<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
[add_parameter][<?php echo $_smarty_tpl->tpl_vars['complexStep']->value;?>
]<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['id']->value;?>
[add_parameter]<?php }?>" value="1" <?php if ($_smarty_tpl->tpl_vars['value']->value['add_parameter']==1||$_smarty_tpl->tpl_vars['value']->value['add_parameter']==''){?>checked="checked"<?php }?> onclick="displayInput(false, '<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
_1');" type="radio" />
		</td>
		<td>
			<label for="via-email">
				<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Send applications online via web site<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<br/>
				<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Send applications to this e-mail<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
:<br/>
			</label>
			<input value="<?php if ($_smarty_tpl->tpl_vars['value']->value['add_parameter']==1){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value['value'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>" class="inputString"  name="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
[value]" <?php if ($_smarty_tpl->tpl_vars['value']->value['add_parameter']==2){?>disabled="disabled"<?php }?> id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
_1" type="text" />
		</td>
	</tr>
	<tr>
		<td valign="top">
			<input  id="via-site" class="inputRadio<?php if ($_smarty_tpl->tpl_vars['complexField']->value){?>complexField<?php }?>" name="<?php if ($_smarty_tpl->tpl_vars['complexField']->value){?><?php echo $_smarty_tpl->tpl_vars['complexField']->value;?>
[<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
[add_parameter][<?php echo $_smarty_tpl->tpl_vars['complexStep']->value;?>
]<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['id']->value;?>
[add_parameter]<?php }?>" value="2" <?php if ($_smarty_tpl->tpl_vars['value']->value['add_parameter']==2){?>checked="checked"<?php }?> onclick="displayInput(false, '<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
_2');" type="radio" />
		</td>
		<td>
			<label for="via-site">
				<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Redirect to this URL<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
:<br/>
			</label>
			<input value="<?php if ($_smarty_tpl->tpl_vars['value']->value['add_parameter']==2){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value['value'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>" class="inputString <?php if ($_smarty_tpl->tpl_vars['complexField']->value){?>complexField<?php }?>" name="<?php if ($_smarty_tpl->tpl_vars['complexField']->value){?><?php echo $_smarty_tpl->tpl_vars['complexField']->value;?>
[<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
][<?php echo $_smarty_tpl->tpl_vars['complexStep']->value;?>
][value]<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['id']->value;?>
[value]<?php }?>" id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
_2" <?php if ($_smarty_tpl->tpl_vars['value']->value['add_parameter']!=2){?>disabled="disabled"<?php }?> type="text" /> &nbsp; <input type="button" name="browse" value="<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Test URL<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
" onclick="getUrl('<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
_2')" /><br /><span class="small"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Use the following format:<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
 <i><strong>http://</strong>yoursite.com</i></span>
		</td>
	</tr>
</table><?php }} ?>