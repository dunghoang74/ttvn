<?php /* Smarty version Smarty-3.1.13, created on 2014-12-18 13:29:31
         compiled from "template__system/admin_admin:../field_types/input/volume_complex.tpl" */ ?>
<?php /*%%SmartyHeaderCode:94625492744b960337-38569349%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7ed12e83c3babd87287fc882564800899e2bb862' => 
    array (
      0 => 'template__system/admin_admin:../field_types/input/volume_complex.tpl',
      1 => 1369806538,
      2 => 'template__system/admin_admin',
    ),
  ),
  'nocache_hash' => '94625492744b960337-38569349',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'id' => 0,
    'complexElements' => 0,
    'complexElementKey' => 0,
    'complexField' => 0,
    'form_fields' => 0,
    'form_field' => 0,
    'GLOBALS' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5492744d26b4c0_20193434',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5492744d26b4c0_20193434')) {function content_5492744d26b4c0_20193434($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars["complexField"] = new Smarty_variable($_smarty_tpl->tpl_vars['id']->value, null, 3);
$_ptr = $_smarty_tpl->parent; while ($_ptr != null) {$_ptr->tpl_vars["complexField"] = clone $_smarty_tpl->tpl_vars["complexField"]; $_ptr = $_ptr->parent; }
Smarty::$global_tpl_vars["complexField"] = clone $_smarty_tpl->tpl_vars["complexField"];?> 
<div  class="complex">
	<table id="complexFieldsVolume">
		<tr>
			<td>Qty</td>
			<td>Price per unit</td>
			<td>Renewal Price</td>
		</tr>
    <?php  $_smarty_tpl->tpl_vars["complexElementItem"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["complexElementItem"]->_loop = false;
 $_smarty_tpl->tpl_vars["complexElementKey"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['complexElements']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["complexElementItem"]->key => $_smarty_tpl->tpl_vars["complexElementItem"]->value){
$_smarty_tpl->tpl_vars["complexElementItem"]->_loop = true;
 $_smarty_tpl->tpl_vars["complexElementKey"]->value = $_smarty_tpl->tpl_vars["complexElementItem"]->key;
?>
        <?php if ($_smarty_tpl->tpl_vars['complexElementKey']->value!=1){?>
            <tr id='complexFieldsAdd_<?php echo $_smarty_tpl->tpl_vars['complexField']->value;?>
_<?php echo $_smarty_tpl->tpl_vars['complexElementKey']->value;?>
' class="complex">
        <?php }else{ ?>
        	<tr id='complexFields_<?php echo $_smarty_tpl->tpl_vars['complexField']->value;?>
'>
        <?php }?>
        
			<?php  $_smarty_tpl->tpl_vars['form_field'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['form_field']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['form_fields']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['form_field']->key => $_smarty_tpl->tpl_vars['form_field']->value){
$_smarty_tpl->tpl_vars['form_field']->_loop = true;
?>
				<?php if ($_smarty_tpl->tpl_vars['form_field']->value['id']=='listings_range_from'){?>
				<td>
					From <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['input'][0][0]->tpl_input(array('property'=>$_smarty_tpl->tpl_vars['form_field']->value['id'],'complexParent'=>$_smarty_tpl->tpl_vars['complexField']->value,'complexStep'=>$_smarty_tpl->tpl_vars['complexElementKey']->value),$_smarty_tpl);?>
&nbsp;
				<?php }elseif($_smarty_tpl->tpl_vars['form_field']->value['id']=='listings_range_to'){?>
					To <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['input'][0][0]->tpl_input(array('property'=>$_smarty_tpl->tpl_vars['form_field']->value['id'],'complexParent'=>$_smarty_tpl->tpl_vars['complexField']->value,'complexStep'=>$_smarty_tpl->tpl_vars['complexElementKey']->value),$_smarty_tpl);?>

				</td>
				<?php }else{ ?>
					<td><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['input'][0][0]->tpl_input(array('property'=>$_smarty_tpl->tpl_vars['form_field']->value['id'],'complexParent'=>$_smarty_tpl->tpl_vars['complexField']->value,'complexStep'=>$_smarty_tpl->tpl_vars['complexElementKey']->value),$_smarty_tpl);?>
</td>
				<?php }?>
			<?php } ?>
	  <?php if ($_smarty_tpl->tpl_vars['complexElementKey']->value==1){?>
          </tr><tr id='complexFieldsAdd_<?php echo $_smarty_tpl->tpl_vars['complexField']->value;?>
'>
      <?php }else{ ?>
          <td><a href='' class="remove" onclick='removeComplexField_<?php echo $_smarty_tpl->tpl_vars['complexField']->value;?>
(<?php echo $_smarty_tpl->tpl_vars['complexElementKey']->value;?>
); return false;' ><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Remove<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a></td></tr>
      <?php }?>
	<?php } ?>
	</table>
</div>
<a href='#' class="add" onclick='addComplexField_<?php echo $_smarty_tpl->tpl_vars['complexField']->value;?>
(); return false;' ><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Add<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a>

<script>

	var i_<?php echo $_smarty_tpl->tpl_vars['complexField']->value;?>
 = <?php echo $_smarty_tpl->tpl_vars['complexElementKey']->value;?>
 + 1;

	var dFormat = '<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['current_language_data']['date_format'];?>
';
	dFormat = dFormat.replace('%m', "mm");
	dFormat = dFormat.replace('%d', "dd");
	dFormat = dFormat.replace('%Y', "yy");

	function addComplexField_<?php echo $_smarty_tpl->tpl_vars['complexField']->value;?>
() {
		var id = "complexFieldsAdd_<?php echo $_smarty_tpl->tpl_vars['complexField']->value;?>
_" + i_<?php echo $_smarty_tpl->tpl_vars['complexField']->value;?>
;
		var newField = $('#complexFields_<?php echo $_smarty_tpl->tpl_vars['complexField']->value;?>
').clone();
		$("<tr id='" + id + "'></tr>").appendTo("#complexFieldsVolume");
		$('#' + id).html(newField.html());
		$('#' + id).append('<td><a class="remove" href="" onclick="removeComplexField_<?php echo $_smarty_tpl->tpl_vars['complexField']->value;?>
(' + i_<?php echo $_smarty_tpl->tpl_vars['complexField']->value;?>
 + '); return false;"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Remove<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a></td>');
		$('#'+ id +' input[type=text]').val('');
		$('#'+ id +' input[type=file]').val('');
		$('#'+ id +' select').val('');
		$('#'+ id +' textarea').val('');
		$('#'+ id +' .complexField').each(function() {
				$(this).attr( 'name',  $(this).attr( 'name' ).replace('[1]', '['+i_<?php echo $_smarty_tpl->tpl_vars['complexField']->value;?>
+']'));
			}
		);
		$('#'+ id +' .complex-view-file-caption').remove();

		var img = $('#'+ id +' input').next('.ui-datepicker-trigger');
		var el = img.prev('.input-date');
		el.removeAttr('id').removeClass('hasDatepicker').unbind();
		el.datepicker({
                dateFormat: dFormat,
                showOn: 'both',
                changeMonth: true,
                changeYear: true,
                minDate: new Date(1940, 1 - 1, 1),
                maxDate: '+10y',
                yearRange: '-99:+99',
				buttonImage: '<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['image'][0][0]->getImageURL(array(),$_smarty_tpl);?>
icons/icon-calendar.png'
            });
            img.remove();
		if (typeof window.instructionFunc == 'function') {
			instructionFunc();
		}
        
		i_<?php echo $_smarty_tpl->tpl_vars['complexField']->value;?>
++;

	}

    function removeComplexField_<?php echo $_smarty_tpl->tpl_vars['complexField']->value;?>
(id) {
        $('#complexFieldsAdd_<?php echo $_smarty_tpl->tpl_vars['complexField']->value;?>
_' + id).remove();
	}

</script>

<?php $_smarty_tpl->tpl_vars["complexField"] = new Smarty_variable(false, null, 3);
$_ptr = $_smarty_tpl->parent; while ($_ptr != null) {$_ptr->tpl_vars["complexField"] = clone $_smarty_tpl->tpl_vars["complexField"]; $_ptr = $_ptr->parent; }
Smarty::$global_tpl_vars["complexField"] = clone $_smarty_tpl->tpl_vars["complexField"];?> <?php }} ?>