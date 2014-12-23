<?php /* Smarty version Smarty-3.1.13, created on 2014-12-18 13:18:20
         compiled from "template__system/admin_admin:../field_types/input/expiration_date.tpl" */ ?>
<?php /*%%SmartyHeaderCode:25032549271ac986ed7-88479365%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a2dead91fd26c35305d8d38eb2aa9c8586b97f14' => 
    array (
      0 => 'template__system/admin_admin:../field_types/input/expiration_date.tpl',
      1 => 1389161950,
      2 => 'template__system/admin_admin',
    ),
  ),
  'nocache_hash' => '25032549271ac986ed7-88479365',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'listing_duration' => 0,
    'contract' => 0,
    'productInfo' => 0,
    'listing' => 0,
    'GLOBALS' => 0,
    'maxExpirationDate' => 0,
    'value' => 0,
    'fullPeriod' => 0,
    'expired' => 0,
    'complexField' => 0,
    'id' => 0,
    'complexStep' => 0,
    'mysql_date' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_549271aea14017_28397440',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_549271aea14017_28397440')) {function content_549271aea14017_28397440($_smarty_tpl) {?><?php if (!isset($_smarty_tpl->tpl_vars['listing_duration']->value)){?>
	<?php $_smarty_tpl->tpl_vars['listing_duration'] = new Smarty_variable(isset($_smarty_tpl->tpl_vars['contract']->value['listing_duration']) ? $_smarty_tpl->tpl_vars['contract']->value['listing_duration'] : $_smarty_tpl->tpl_vars['productInfo']->value['listing_duration'], null, 0);?>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['listing_duration']->value){?>
	<?php if ($_smarty_tpl->tpl_vars['listing']->value['activation_date']){?>
		<?php $_smarty_tpl->tpl_vars['maxExpirationDate'] = new Smarty_variable(strftime(((string)$_smarty_tpl->tpl_vars['GLOBALS']->value['current_language_data']['date_format']),strtotime("+".((string)$_smarty_tpl->tpl_vars['listing_duration']->value)." day",strtotime($_smarty_tpl->tpl_vars['listing']->value['activation_date']))), null, 0);?>
	<?php }else{ ?>
		<?php $_smarty_tpl->tpl_vars['maxExpirationDate'] = new Smarty_variable(strftime(((string)$_smarty_tpl->tpl_vars['GLOBALS']->value['current_language_data']['date_format']),strtotime("+".((string)$_smarty_tpl->tpl_vars['listing_duration']->value)." day")), null, 0);?>
	<?php }?>
<?php }?>

<?php $_smarty_tpl->tpl_vars['fullPeriod'] = new Smarty_variable($_smarty_tpl->tpl_vars['maxExpirationDate']->value==$_smarty_tpl->tpl_vars['value']->value||$_smarty_tpl->tpl_vars['value']->value=='', null, 0);?>

<table id="expiration-date">
	<tr>
		<td valign="top">
			<input <?php if ($_smarty_tpl->tpl_vars['fullPeriod']->value){?>checked="checked"<?php }?> <?php if ($_smarty_tpl->tpl_vars['expired']->value){?>disabled="disabled"<?php }?> class="inputRadio<?php if ($_smarty_tpl->tpl_vars['complexField']->value){?> complexField<?php }?>" name="exp_date" value="1" type="radio" id="maximum-length" />
		</td>
		<td>
			<label for="maximum-length"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Maximum length<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
 (<?php if ($_smarty_tpl->tpl_vars['listing_duration']->value){?><?php echo $_smarty_tpl->tpl_vars['listing_duration']->value;?>
 <?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
days<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }else{ ?><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Unlimited<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }?>)</label>
			<input type="hidden" <?php if (!$_smarty_tpl->tpl_vars['fullPeriod']->value){?>disabled="disabled"<?php }?> id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
_1" value="<?php if ($_smarty_tpl->tpl_vars['maxExpirationDate']->value){?><?php echo $_smarty_tpl->tpl_vars['maxExpirationDate']->value;?>
<?php }?>" name="<?php if ($_smarty_tpl->tpl_vars['complexField']->value){?><?php echo $_smarty_tpl->tpl_vars['complexField']->value;?>
[<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
][<?php echo $_smarty_tpl->tpl_vars['complexStep']->value;?>
]<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['id']->value;?>
<?php }?>"/>
		</td>
	</tr>
	<tr>
		<td valign="top">
			<input <?php if (!$_smarty_tpl->tpl_vars['fullPeriod']->value){?>checked="checked"<?php }?> <?php if ($_smarty_tpl->tpl_vars['expired']->value){?>disabled="disabled"<?php }?> class="inputRadio<?php if ($_smarty_tpl->tpl_vars['complexField']->value){?> complexField<?php }?>" name="exp_date" value="2" type="radio" id="until" />
		</td>
		<td>
			<label for="until"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Until<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
:</label>
			<input <?php if ($_smarty_tpl->tpl_vars['fullPeriod']->value){?>disabled="disabled"<?php }?> type="text" id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
_2" readonly value="<?php if (!$_smarty_tpl->tpl_vars['fullPeriod']->value){?><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('type'=>"date")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array('type'=>"date"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php if ($_smarty_tpl->tpl_vars['mysql_date']->value&&!$_smarty_tpl->tpl_vars['complexField']->value){?><?php echo $_smarty_tpl->tpl_vars['mysql_date']->value;?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['value']->value;?>
<?php }?><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array('type'=>"date"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }?>" class="input_date displayDate <?php if ($_smarty_tpl->tpl_vars['complexField']->value){?>complexField<?php }?>" name="<?php if ($_smarty_tpl->tpl_vars['complexField']->value){?><?php echo $_smarty_tpl->tpl_vars['complexField']->value;?>
[<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
][<?php echo $_smarty_tpl->tpl_vars['complexStep']->value;?>
]<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['id']->value;?>
<?php }?>"/>
		</td>
	</tr>
</table>


<script type="text/javascript">
	var dFormat = '<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['current_language_data']['date_format'];?>
';
	var maxExpirationDate = '<?php echo $_smarty_tpl->tpl_vars['maxExpirationDate']->value;?>
';
	var id = '<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
';
	var listingDuration = '<?php echo $_smarty_tpl->tpl_vars['listing_duration']->value;?>
';
	var expired = '<?php echo $_smarty_tpl->tpl_vars['expired']->value;?>
';
	if (expired) {
		$("#" + id + "_2").datepicker('hide');
	} else {
		dFormat = dFormat.replace('%m', "mm");
		dFormat = dFormat.replace('%d', "dd");
		dFormat = dFormat.replace('%Y', "yy");
		var dp = $("#" + id + "_2").datepicker({
			dateFormat: dFormat,
			showOn: 'button',
			changeMonth: true,
			changeYear: true,
			minDate: '+1d',
			yearRange: '-99:+99',
			buttonImage: '<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['user_site_url'];?>
/system/ext/jquery/calendar.gif',
			buttonImageOnly: true
		});
		if (listingDuration) {
			dp.datepicker("option", "maxDate", maxExpirationDate);
		}
		$(".ui-datepicker-trigger").click(function() {
			$("[name=exp_date]:not(:first)").attr('checked', true);
			$("#" + id + "_2").removeAttr("disabled").val(maxExpirationDate);
		});
		$("[name = exp_date]").click(function(){
			var checked = $("[name = exp_date]:radio:checked").val();
			var unchecked = $("[name = exp_date]:radio:not(:checked)").val();
			if (checked == 1) $("#"+ id +"_"+ unchecked).val("");
			if (checked == 2) $("#"+ id +"_"+ checked).val(maxExpirationDate);
			$("#" + id + "_"+ unchecked).attr("disabled", "disabled");
			$("#" + id + "_"+ checked).removeAttr("disabled");
		});
	}
</script>
<?php }} ?>