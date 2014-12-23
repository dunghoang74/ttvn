<?php /* Smarty version Smarty-3.1.13, created on 2014-12-22 20:07:14
         compiled from "template_smartjobboard_user:../field_types/search/autocomplete.tpl" */ ?>
<?php /*%%SmartyHeaderCode:38265498178298ff59-00634453%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '60f395124bd99f69790b1d8f9dcb071ba4d11e54' => 
    array (
      0 => 'template_smartjobboard_user:../field_types/search/autocomplete.tpl',
      1 => 1389325698,
      2 => 'template_smartjobboard_user',
    ),
  ),
  'nocache_hash' => '38265498178298ff59-00634453',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'parentID' => 0,
    'id' => 0,
    'GLOBALS' => 0,
    'type' => 0,
    'theField' => 0,
    'isClassifieds' => 0,
    'parameters' => 0,
    'listingTypeID' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5498178365bc60_25370121',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5498178365bc60_25370121')) {function content_5498178365bc60_25370121($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include 'D:\\xampp\\htdocs\\tuyendungvn\\system\\ext\\Smarty\\libs\\plugins\\modifier.replace.php';
?><script type="text/javascript">
	$(document).ready(function() {
		function liFormat (row, i, num) {
			return htmlentities(row[0]);
		}
		
		function selectItem(li) {
			var sValue;
			
			if (li == null) {
				sValue = 'Nothing Selected!';
			}
			
			if (!!li.extra) {
				sValue = li.extra[2];
			} else {
				sValue = li.selectValue;
			}
			
			alert("Selected ID: " + sValue);
		}
		
		var elementId     = "<?php if ($_smarty_tpl->tpl_vars['parentID']->value){?><?php echo $_smarty_tpl->tpl_vars['parentID']->value;?>
_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
<?php }else{ ?><?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['id']->value,':','\\\\:');?>
<?php }?>";
		var siteUrl       = "<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/autocomplete/";
		var field         = "<?php if ($_smarty_tpl->tpl_vars['parentID']->value){?><?php echo $_smarty_tpl->tpl_vars['parentID']->value;?>
_<?php }?><?php echo $_smarty_tpl->tpl_vars['id']->value;?>
/";
		var fieldType     = "<?php if ($_smarty_tpl->tpl_vars['type']->value){?><?php echo $_smarty_tpl->tpl_vars['type']->value;?>
<?php }elseif($_smarty_tpl->tpl_vars['theField']->value['type']){?><?php echo $_smarty_tpl->tpl_vars['theField']->value['type'];?>
<?php }else{ ?>text<?php }?>/";
		var tablePrefix   = "<?php if ($_smarty_tpl->tpl_vars['isClassifieds']->value==1){?>listings<?php }else{ ?>users<?php }?>/";
		var viewType      = "<?php echo $_smarty_tpl->tpl_vars['parameters']->value['viewType'];?>
/";
		var listingTypeID = "<?php if ($_smarty_tpl->tpl_vars['listingTypeID']->value){?><?php echo strtr($_smarty_tpl->tpl_vars['listingTypeID']->value, array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
<?php }else{ ?>Job<?php }?>/";
		
		$("input#" + elementId).autocomplete(siteUrl + field + fieldType + tablePrefix + viewType + listingTypeID, {
			delay:10,
			minChars:<?php if ($_smarty_tpl->tpl_vars['GLOBALS']->value['settings']['min_autocomplete_symbols_quantity']){?><?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['settings']['min_autocomplete_symbols_quantity'];?>
<?php }else{ ?>1<?php }?>,
			matchSubset:1,
			autoFill:false,
			width: 300,
			matchContains:1,
			cacheLength:1,
			selectFirst:true,
			formatItem:liFormat,
			maxItemsToShow:5,
			onItemSelect:selectItem
		})
	}); 
</script>
<?php }} ?>