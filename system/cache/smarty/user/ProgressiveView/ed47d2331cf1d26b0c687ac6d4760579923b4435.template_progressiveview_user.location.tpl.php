<?php /* Smarty version Smarty-3.1.13, created on 2014-12-22 20:47:37
         compiled from "template_progressiveview_user:../field_types/search/location.tpl" */ ?>
<?php /*%%SmartyHeaderCode:22096549820f9a034d2-67026568%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ed47d2331cf1d26b0c687ac6d4760579923b4435' => 
    array (
      0 => 'template_progressiveview_user:../field_types/search/location.tpl',
      1 => 1378267314,
      2 => 'template_progressiveview_user',
    ),
  ),
  'nocache_hash' => '22096549820f9a034d2-67026568',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'form_fields' => 0,
    'parentID' => 0,
    'form_field' => 0,
    'GLOBALS' => 0,
    'value' => 0,
    'defaultCountry' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_549820fbc61400_16733204',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_549820fbc61400_16733204')) {function content_549820fbc61400_16733204($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['form_field'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['form_field']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['form_fields']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['form_field']->key => $_smarty_tpl->tpl_vars['form_field']->value){
$_smarty_tpl->tpl_vars['form_field']->_loop = true;
?>
	<fieldset id="<?php echo $_smarty_tpl->tpl_vars['parentID']->value;?>
_<?php echo $_smarty_tpl->tpl_vars['form_field']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['form_field']->value['id']=='State'){?> style="display: none;" <?php }?>>
        <div class="inputName">
        	<?php if ($_smarty_tpl->tpl_vars['form_field']->value['id']=="ZipCode"){?>
				<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Search Within<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			<?php }else{ ?>
				<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['form_field']->value['caption'];?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; ob_start();  echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); echo htmlspecialchars(ob_get_clean(), ENT_QUOTES, 'UTF-8', true);} array_pop($_smarty_tpl->smarty->_tag_stack);?>

			<?php }?>
		</div>
        <div class="inputField"><?php if ($_smarty_tpl->tpl_vars['form_field']->value['type']=='location'){?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['search'][0][0]->tpl_search(array('property'=>$_smarty_tpl->tpl_vars['form_field']->value['id'],'searchWithin'=>true,'template'=>"location.like.tpl"),$_smarty_tpl);?>
<?php }elseif($_smarty_tpl->tpl_vars['form_field']->value['id']=="City"){?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['search'][0][0]->tpl_search(array('property'=>$_smarty_tpl->tpl_vars['form_field']->value['id'],'parent'=>$_smarty_tpl->tpl_vars['parentID']->value,'template'=>"string.like.tpl"),$_smarty_tpl);?>
<?php }else{ ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['search'][0][0]->tpl_search(array('property'=>$_smarty_tpl->tpl_vars['form_field']->value['id'],'parent'=>$_smarty_tpl->tpl_vars['parentID']->value),$_smarty_tpl);?>
<?php }?></div>
	</fieldset>
<?php } ?>
<script language='JavaScript' type='text/javascript'>
<?php if ($_smarty_tpl->tpl_vars['form_field']->value['id']=='State'){?> 
	function get<?php echo $_smarty_tpl->tpl_vars['parentID']->value;?>
States(countrySID) {
		<?php  $_smarty_tpl->tpl_vars['form_field'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['form_field']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['form_fields']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['form_field']->key => $_smarty_tpl->tpl_vars['form_field']->value){
$_smarty_tpl->tpl_vars['form_field']->_loop = true;
?>
			<?php if ($_smarty_tpl->tpl_vars['form_field']->value['id']=='State'){?>
				$.get("<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/get-states/", { country_sid: countrySID, "state_sid[multi_like][0]": "<?php echo strtr($_smarty_tpl->tpl_vars['value']->value['multi_like'][0], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
", parentID: "<?php echo $_smarty_tpl->tpl_vars['parentID']->value;?>
", display_as: "<?php echo $_smarty_tpl->tpl_vars['form_field']->value['display_as'];?>
", type: "search" }, 
					  function(data){
							$("#<?php echo $_smarty_tpl->tpl_vars['parentID']->value;?>
_State .inputField").html(data);
					 });
			<?php }?>
		<?php } ?>
	}
<?php }?>
$("document").ready(function(){
	<?php if ($_smarty_tpl->tpl_vars['form_field']->value['id']=='State'){?> 
		var country = $("#"+'<?php echo $_smarty_tpl->tpl_vars['parentID']->value;?>
'+"_Country");
		if (country.html()) {
			$("#"+'<?php echo $_smarty_tpl->tpl_vars['parentID']->value;?>
'+"_State").css('display', 'block');
		}
		else {
			<?php if ($_smarty_tpl->tpl_vars['defaultCountry']->value){?>
				$("#"+'<?php echo $_smarty_tpl->tpl_vars['parentID']->value;?>
'+"_State").css('display', 'block');
				get<?php echo $_smarty_tpl->tpl_vars['parentID']->value;?>
States("<?php echo strtr($_smarty_tpl->tpl_vars['defaultCountry']->value, array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
");
			<?php }?>
		}
	<?php }elseif($_smarty_tpl->tpl_vars['form_field']->value['id']=='Country'){?>
		<?php if ($_smarty_tpl->tpl_vars['value']->value['multi_like'][0]){?>
			get<?php echo $_smarty_tpl->tpl_vars['parentID']->value;?>
States("<?php echo strtr($_smarty_tpl->tpl_vars['value']->value['multi_like'][0], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
");
		<?php }elseif(!isset($_smarty_tpl->tpl_vars['value']->value['multi_like'][0])&&$_smarty_tpl->tpl_vars['defaultCountry']->value){?>
			$("#"+"<?php echo $_smarty_tpl->tpl_vars['parentID']->value;?>
"+"_Country [value='<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['defaultCountry']->value, ENT_QUOTES, 'UTF-8', true);?>
']").attr("selected", "selected");
			get<?php echo $_smarty_tpl->tpl_vars['parentID']->value;?>
States("<?php echo strtr($_smarty_tpl->tpl_vars['defaultCountry']->value, array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
");
		<?php }?>
	<?php }?>
});
</script>
<?php $_smarty_tpl->tpl_vars["parentID"] = new Smarty_variable(false, null, 0);?> <?php }} ?>