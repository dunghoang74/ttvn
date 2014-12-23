<?php /* Smarty version Smarty-3.1.13, created on 2014-12-18 13:18:07
         compiled from "template__system/admin_admin:../field_types/input/tree.tpl" */ ?>
<?php /*%%SmartyHeaderCode:225155492719ff40db7-81189286%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2654b6bec36104ccc82215d30e3927cdf07385c6' => 
    array (
      0 => 'template__system/admin_admin:../field_types/input/tree.tpl',
      1 => 1390276120,
      2 => 'template__system/admin_admin',
    ),
  ),
  'nocache_hash' => '225155492719ff40db7-81189286',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'id' => 0,
    'object_sid' => 0,
    'listing_field_info' => 0,
    'user_profile_field_info' => 0,
    'choiceLimit' => 0,
    'sid' => 0,
    'METADATA' => 0,
    'caption' => 0,
    'userTree' => 0,
    'GLOBALS' => 0,
    'value' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_549271a2794922_10811108',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_549271a2794922_10811108')) {function content_549271a2794922_10811108($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include 'D:\\xampp\\htdocs\\tuyendungvn\\system\\ext\\Smarty\\libs\\plugins\\modifier.replace.php';
?><script language="JavaScript" type="text/javascript" src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['common_js'][0][0]->getCommonJsURL(array(),$_smarty_tpl);?>
/tree.js"></script>

<?php $_smarty_tpl->_capture_stack[0][] = array("trLess", null, null); ob_start(); ?>&#171;&nbsp;<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
less<?php $_block_content = ob_get_clean(); $_block_repeat=false; ob_start();  echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); echo preg_replace("%(?<!\\\\)'%", "\'",ob_get_clean());} array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php $_smarty_tpl->_capture_stack[0][] = array("trMore", null, null); ob_start(); ?>&#187;&nbsp;<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
more<?php $_block_content = ob_get_clean(); $_block_repeat=false; ob_start();  echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); echo preg_replace("%(?<!\\\\)'%", "\'",ob_get_clean());} array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php $_smarty_tpl->_capture_stack[0][] = array("fieldId", null, null); ob_start(); ?><?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['id']->value,'_','-');?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php if ($_smarty_tpl->tpl_vars['object_sid']->value->details->properties['choiceLimit']->value){?>
	<?php $_smarty_tpl->_capture_stack[0][] = array("choiceLimit", null, null); ob_start(); ?><?php echo $_smarty_tpl->tpl_vars['object_sid']->value->details->properties['choiceLimit']->value;?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php }elseif($_smarty_tpl->tpl_vars['listing_field_info']->value['choiceLimit']){?>
	<?php $_smarty_tpl->_capture_stack[0][] = array("choiceLimit", null, null); ob_start(); ?><?php echo $_smarty_tpl->tpl_vars['listing_field_info']->value['choiceLimit'];?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php }elseif($_smarty_tpl->tpl_vars['user_profile_field_info']->value){?>
	<?php $_smarty_tpl->_capture_stack[0][] = array("choiceLimit", null, null); ob_start(); ?><?php echo $_smarty_tpl->tpl_vars['user_profile_field_info']->value['choiceLimit'];?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php }elseif($_smarty_tpl->tpl_vars['choiceLimit']->value){?>
	<?php $_smarty_tpl->_capture_stack[0][] = array("choiceLimit", null, null); ob_start(); ?><?php echo $_smarty_tpl->tpl_vars['choiceLimit']->value;?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php }else{ ?>
	<?php $_smarty_tpl->_capture_stack[0][] = array("choiceLimit", null, null); ob_start(); ?>0<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php }?>

<div class="tree-input-field">
	<div class="left">
		<a href="#" id="tree-<?php echo Smarty::$_smarty_vars['capture']['fieldId'];?>
-options" style="display:inline-block;"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Click to select<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a>
		<div id="tree-<?php echo Smarty::$_smarty_vars['capture']['fieldId'];?>
-values" class="tree-values"></div>
		<div id="tree-<?php echo Smarty::$_smarty_vars['capture']['fieldId'];?>
-values-more" style="display: none;"></div>
		<div id="tree-<?php echo Smarty::$_smarty_vars['capture']['fieldId'];?>
-values-more-button" class="more-button" onclick="buttonMoreTreeValuesClick('<?php echo Smarty::$_smarty_vars['capture']['fieldId'];?>
', '<?php echo Smarty::$_smarty_vars['capture']['trLess'];?>
', '<?php echo Smarty::$_smarty_vars['capture']['trMore'];?>
');" style="display: none; cursor: pointer;"><?php echo Smarty::$_smarty_vars['capture']['trMore'];?>
</div>
	</div>
	<div class="clr"></div>
</div>
<?php if (Smarty::$_smarty_vars['capture']['choiceLimit']){?>
	<div id="<?php echo Smarty::$_smarty_vars['capture']['fieldId'];?>
-available" class="tree-available-count"><?php echo Smarty::$_smarty_vars['capture']['choiceLimit'];?>
/<?php echo Smarty::$_smarty_vars['capture']['choiceLimit'];?>
 <?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Available<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</div>
<?php }?>
<input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
[tree]" id="tree-<?php echo Smarty::$_smarty_vars['capture']['fieldId'];?>
-selected" value="" />


<script language='JavaScript' type='text/javascript'>
	var <?php echo $_smarty_tpl->tpl_vars['id']->value;?>
Values = [];

	$("#tree-" + "<?php echo Smarty::$_smarty_vars['capture']['fieldId'];?>
" + "-options").click(function(event) {
		event.preventDefault();
		var checked     = $("#tree-" + "<?php echo Smarty::$_smarty_vars['capture']['fieldId'];?>
" + "-selected").val();
		var name        = "<?php if ($_smarty_tpl->tpl_vars['listing_field_info']->value['id']){?><?php echo $_smarty_tpl->tpl_vars['listing_field_info']->value['id'];?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['id']->value;?>
<?php }?>";
		var id          = "<?php echo $_smarty_tpl->tpl_vars['sid']->value;?>
";
		var choiceLimit = "<?php echo Smarty::$_smarty_vars['capture']['choiceLimit'];?>
";
		var caption     = "<?php if ($_smarty_tpl->tpl_vars['listing_field_info']->value['id']){?><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('metadata'=>$_smarty_tpl->tpl_vars['METADATA']->value['listing_field_info']['caption'])); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array('metadata'=>$_smarty_tpl->tpl_vars['METADATA']->value['listing_field_info']['caption']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['listing_field_info']->value['caption'];?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array('metadata'=>$_smarty_tpl->tpl_vars['METADATA']->value['listing_field_info']['caption']), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }else{ ?><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('metadata'=>$_smarty_tpl->tpl_vars['METADATA']->value['caption'])); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array('metadata'=>$_smarty_tpl->tpl_vars['METADATA']->value['caption']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['caption']->value;?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array('metadata'=>$_smarty_tpl->tpl_vars['METADATA']->value['caption']), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }?>";
		var userTree    = "<?php echo $_smarty_tpl->tpl_vars['userTree']->value;?>
";
		
		var url = "<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['admin_site_url'];?>
/tree-options/?check=" + checked + "&name=" + name +"&id=" + id + "&choiceLimit=" + choiceLimit + "&userTree=" + userTree;
		popUpWindow(url, 700, 550, caption, NaN, popUpClose<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
);
	});

	function getObject<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
()
	{
		return new Object({
			"arrayName"      : "<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
Values",
			"fieldId"        : "<?php echo Smarty::$_smarty_vars['capture']['fieldId'];?>
",
			"trMore"         : "<?php echo Smarty::$_smarty_vars['capture']['trMore'];?>
",
			"availableCount" : "<?php echo Smarty::$_smarty_vars['capture']['choiceLimit'];?>
",
			"availableTitle" : "<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Available<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
",
			"default"        : ""
		});
	}

	function popUpClose<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
()
	{
		treePopUpClose(<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
Values, getObject<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
());
	}

	<?php if ($_smarty_tpl->tpl_vars['value']->value){?>
		addElements(<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
Values, [<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
], getObject<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
());
	<?php }?>
</script>
<?php }} ?>