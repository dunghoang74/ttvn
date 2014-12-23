<?php /* Smarty version Smarty-3.1.13, created on 2014-12-18 13:29:22
         compiled from "template__system/admin_admin:d:\xampp\htdocs\tuyendungvn\templates\_system\admin\payment\edit_product.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2426854927442ec12d3-65340611%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd004d7c3ec6789ad8dfe4b863b57930cea71571c' => 
    array (
      0 => 'template__system/admin_admin:d:\\xampp\\htdocs\\tuyendungvn\\templates\\_system\\admin\\payment\\edit_product.tpl',
      1 => 1390528918,
      2 => 'template__system/admin_admin',
    ),
  ),
  'nocache_hash' => '2426854927442ec12d3-65340611',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'GLOBALS' => 0,
    'product_info' => 0,
    'pageTab' => 0,
    'pages' => 0,
    'page_id' => 0,
    'page' => 0,
    'form_fields' => 0,
    'form_fields_info' => 0,
    'form_field' => 0,
    'METADATA' => 0,
    'product_type' => 0,
    'formFieldReq' => 0,
    'params' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_54927447c1a918_63642009',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54927447c1a918_63642009')) {function content_54927447c1a918_63642009($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cycle')) include 'D:\\xampp\\htdocs\\tuyendungvn\\system\\ext\\Smarty\\libs\\plugins\\function.cycle.php';
?>
<script type="text/javascript">
	function windowMessage(message){
		$("#messageBox").dialog( 'destroy' ).html(message);
		$("#messageBox").dialog({
			width: 370,
			height: 170,
			title: 'Error',
			buttons: {
				OK: function(){
					$(this).dialog('close');
				}
			}
			
		}).dialog( 'open' );
		
		return false;
	}

	function showHideFields(fieldShow, fieldHide)
	{
	 	var height = $("#"+fieldHide).height()+2;
	 	var width = $("#"+fieldHide).width();
	 	$("#"+fieldHide+"_div").css('display', 'block');
	 	$("#"+fieldHide+"_div").css('height', height);
	 	$("#"+fieldHide+"_div").css('width', width);
	 	$("#"+fieldHide+"_div").css('position', 'relative');
	 	$("#"+fieldHide+"_div").css('margin-top', -height);
	 	$("#"+fieldHide+"_div").css('opacity', '0.3');
	 	$("#"+fieldHide+"_div").css('background-color', '#EEEEEE');
	
	 	$("#"+fieldShow+"_div").css('display', 'none');
	}
	
	</script>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('breadcrumbs', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['breadcrumbs'][0][0]->_tpl_breadcrumbs(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/products/">Products</a> &#187; Edit product<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['breadcrumbs'][0][0]->_tpl_breadcrumbs(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<h1><img src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['image'][0][0]->getImageURL(array(),$_smarty_tpl);?>
/icons/paperpencil32.png" border="0" alt="" class="titleicon"/>Edit Product</h1>
<div id="messageBox" style="display: none;"></div>

<div class="addProduct">
<?php echo $_smarty_tpl->getSubTemplate ("../users/field_errors.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/edit-product/" id="productForm">
	<input type="hidden" id="action" name="action" value="save" />
	<input type="hidden" id="sid" name="sid" value="<?php echo $_smarty_tpl->tpl_vars['product_info']->value['sid'];?>
" />
	<input type="hidden" id="page" name="page" value="<?php if ($_smarty_tpl->tpl_vars['pageTab']->value){?><?php echo $_smarty_tpl->tpl_vars['pageTab']->value;?>
<?php }else{ ?>#generalTab<?php }?>"/>
	
	<div id="addProduct">
		<ul class="ui-tabs-nav">
			<?php  $_smarty_tpl->tpl_vars['page'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['page']->_loop = false;
 $_smarty_tpl->tpl_vars['page_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['pages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['page']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["pages"]['total'] = $_smarty_tpl->tpl_vars['page']->total;
foreach ($_from as $_smarty_tpl->tpl_vars['page']->key => $_smarty_tpl->tpl_vars['page']->value){
$_smarty_tpl->tpl_vars['page']->_loop = true;
 $_smarty_tpl->tpl_vars['page_id']->value = $_smarty_tpl->tpl_vars['page']->key;
?>
				<li class="ui-tabs-selected"><a href="#<?php echo $_smarty_tpl->tpl_vars['page_id']->value;?>
"><span><?php echo $_smarty_tpl->tpl_vars['page']->value['name'];?>
</span></a></li>
			<?php } ?>
		</ul>
		<?php  $_smarty_tpl->tpl_vars['form_fields_info'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['form_fields_info']->_loop = false;
 $_smarty_tpl->tpl_vars['page_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['form_fields']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['form_fields_info']->key => $_smarty_tpl->tpl_vars['form_fields_info']->value){
$_smarty_tpl->tpl_vars['form_fields_info']->_loop = true;
 $_smarty_tpl->tpl_vars['page_id']->value = $_smarty_tpl->tpl_vars['form_fields_info']->key;
?>
			<div id="<?php echo $_smarty_tpl->tpl_vars['page_id']->value;?>
" class="ui-tabs-panel">
				<table class="basetable" width="100%">
				<?php  $_smarty_tpl->tpl_vars['form_field'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['form_field']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['form_fields_info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['form_field']->key => $_smarty_tpl->tpl_vars['form_field']->value){
$_smarty_tpl->tpl_vars['form_field']->_loop = true;
?>
					<?php if ($_smarty_tpl->tpl_vars['form_field']->value['id']=='short_description'){?>
						<tr class="<?php echo smarty_function_cycle(array('values'=>'evenrow,oddrow'),$_smarty_tpl);?>
">
							<td><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('metadata'=>$_smarty_tpl->tpl_vars['METADATA']->value['form_field']['caption'])); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array('metadata'=>$_smarty_tpl->tpl_vars['METADATA']->value['form_field']['caption']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['form_field']->value['caption'];?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array('metadata'=>$_smarty_tpl->tpl_vars['METADATA']->value['form_field']['caption']), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</td>
							<td class="productInputReq"><?php if ($_smarty_tpl->tpl_vars['form_field']->value['is_required']){?>*<?php }?></td>
							<td><div  class="productInputField"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['input'][0][0]->tpl_input(array('property'=>$_smarty_tpl->tpl_vars['form_field']->value['id'],'template'=>"textarea.tpl"),$_smarty_tpl);?>
</div><?php if ($_smarty_tpl->tpl_vars['form_field']->value['comment']){?><br/><small><?php echo $_smarty_tpl->tpl_vars['form_field']->value['comment'];?>
</small><?php }?></td>
						</tr>
					<?php }elseif($_smarty_tpl->tpl_vars['form_field']->value['id']=='availability_from'){?>
						<tr class="<?php echo smarty_function_cycle(array('values'=>'evenrow,oddrow'),$_smarty_tpl);?>
">
							<td><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('metadata'=>$_smarty_tpl->tpl_vars['METADATA']->value['form_field']['caption'])); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array('metadata'=>$_smarty_tpl->tpl_vars['METADATA']->value['form_field']['caption']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['form_field']->value['caption'];?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array('metadata'=>$_smarty_tpl->tpl_vars['METADATA']->value['form_field']['caption']), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</td>
							<td class="productInputReq"><?php if ($_smarty_tpl->tpl_vars['form_field']->value['is_required']){?>*<?php }?></td>
							<td><div  class="productInputField"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
from<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
 <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['input'][0][0]->tpl_input(array('property'=>$_smarty_tpl->tpl_vars['form_field']->value['id']),$_smarty_tpl);?>
 <?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
to<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
 <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['input'][0][0]->tpl_input(array('property'=>'availability_to'),$_smarty_tpl);?>
</div><?php if ($_smarty_tpl->tpl_vars['form_field']->value['comment']){?><br/><small><?php echo $_smarty_tpl->tpl_vars['form_field']->value['comment'];?>
</small><?php }?></td>
						</tr>
					<?php }elseif($_smarty_tpl->tpl_vars['form_field']->value['id']=='availability_to'||(($_smarty_tpl->tpl_vars['product_type']->value=='access_listings'||$_smarty_tpl->tpl_vars['product_type']->value=='featured_user'||$_smarty_tpl->tpl_vars['product_type']->value=='banners')&&$_smarty_tpl->tpl_vars['form_field']->value['id']=='pricing_type')){?>
					
					<?php }elseif($_smarty_tpl->tpl_vars['form_field']->value['id']=='expiration_period'){?>
						<tr class="<?php echo smarty_function_cycle(array('values'=>'evenrow,oddrow'),$_smarty_tpl);?>
">
							<td>Expire after <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['input'][0][0]->tpl_input(array('property'=>$_smarty_tpl->tpl_vars['form_field']->value['id']),$_smarty_tpl);?>
 days<?php if ($_smarty_tpl->tpl_vars['form_field']->value['comment']){?><br/><small><?php echo $_smarty_tpl->tpl_vars['form_field']->value['comment'];?>
</small><?php }?></td>
						</tr>
					<?php }elseif($_smarty_tpl->tpl_vars['product_type']->value=='post_listings'&&$_smarty_tpl->tpl_vars['form_field']->value['id']=='pricing_type'){?>
						<tr class="<?php echo smarty_function_cycle(array('values'=>'evenrow,oddrow'),$_smarty_tpl);?>
">
							<td><input type="radio" name="pricing_type" value="fixed" onChange="showHideFields('fixed_pricing', 'volume_based_pricing')" <?php if ($_smarty_tpl->tpl_vars['product_info']->value['pricing_type']=='fixed'||!$_smarty_tpl->tpl_vars['product_info']->value['pricing_type']){?>checked="checked"<?php }?> />&nbsp;Fixed Pricing</td>
							<td class="productInputReq"><?php if ($_smarty_tpl->tpl_vars['form_field']->value['is_required']){?>*<?php }?></td>
							<td>
								<table id="fixed_pricing">
					<?php }elseif($_smarty_tpl->tpl_vars['form_field']->value['id']=='volume_based_pricing'){?>
						<tr class="<?php echo smarty_function_cycle(array('values'=>'evenrow,oddrow'),$_smarty_tpl);?>
">
							<td><input type="radio" name="pricing_type" value="volume_based" onChange="showHideFields('volume_based_pricing', 'fixed_pricing')" <?php if ($_smarty_tpl->tpl_vars['product_info']->value['pricing_type']=='volume_based'){?>checked="checked"<?php }?> />&nbsp;<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('metadata'=>$_smarty_tpl->tpl_vars['METADATA']->value['form_field']['caption'])); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array('metadata'=>$_smarty_tpl->tpl_vars['METADATA']->value['form_field']['caption']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['form_field']->value['caption'];?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array('metadata'=>$_smarty_tpl->tpl_vars['METADATA']->value['form_field']['caption']), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</td>
							<td class="productInputReq"><?php if ($_smarty_tpl->tpl_vars['form_field']->value['is_required']){?>*<?php }?></td>
							<td>
								<table id="volume_based_pricing">
									<tr>
										<td><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['input'][0][0]->tpl_input(array('property'=>$_smarty_tpl->tpl_vars['form_field']->value['id'],'template'=>"volume_complex.tpl"),$_smarty_tpl);?>
</td>
									</tr>
								</table>
								<div id="volume_based_pricing_div" style="display: none;"></div>
                                <?php if ($_smarty_tpl->tpl_vars['product_info']->value['pricing_type']=='fixed'||!$_smarty_tpl->tpl_vars['product_info']->value['pricing_type']){?>
                                    <script>showHideFields('fixed_pricing', 'volume_based_pricing')</script>
                                <?php }elseif($_smarty_tpl->tpl_vars['product_info']->value['pricing_type']=='volume_based'){?>
                                    <script>showHideFields('volume_based_pricing', 'fixed_pricing')</script>
                                <?php }?>
							</td>
						</tr>
					<?php }elseif($_smarty_tpl->tpl_vars['product_type']->value=='post_listings'&&$_smarty_tpl->tpl_vars['form_field']->value['id']=='renewal_price'){?>
						<tr class="<?php echo smarty_function_cycle(array('values'=>'evenrow,oddrow'),$_smarty_tpl);?>
">
							<td><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('metadata'=>$_smarty_tpl->tpl_vars['METADATA']->value['form_field']['caption'])); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array('metadata'=>$_smarty_tpl->tpl_vars['METADATA']->value['form_field']['caption']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['form_field']->value['caption'];?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array('metadata'=>$_smarty_tpl->tpl_vars['METADATA']->value['form_field']['caption']), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</td>
							<td class="productInputReq"><?php if ($_smarty_tpl->tpl_vars['form_field']->value['is_required']){?>*<?php }?></td>
							<td><div  class="productInputField"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['input'][0][0]->tpl_input(array('property'=>$_smarty_tpl->tpl_vars['form_field']->value['id']),$_smarty_tpl);?>
</div><?php if ($_smarty_tpl->tpl_vars['form_field']->value['comment']){?><br/><small><?php echo $_smarty_tpl->tpl_vars['form_field']->value['comment'];?>
</small><?php }?></td>
						</tr>
						</table>
						<div id="fixed_pricing_div" style="display: none;"></div>
						</td>
						</tr>
					<?php }elseif($_smarty_tpl->tpl_vars['form_field']->value['id']=='recurring'){?>
						<tr class="<?php echo smarty_function_cycle(array('values'=>'evenrow,oddrow'),$_smarty_tpl);?>
">
							<td colspan="3"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['input'][0][0]->tpl_input(array('property'=>$_smarty_tpl->tpl_vars['form_field']->value['id'],'template'=>"radiobuttons.tpl"),$_smarty_tpl);?>
</td>
						</tr>
					<?php }elseif($_smarty_tpl->tpl_vars['form_field']->value['id']=='period'){?>
						<tr class="<?php echo smarty_function_cycle(array('values'=>'evenrow,oddrow'),$_smarty_tpl);?>
">
							<td><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('metadata'=>$_smarty_tpl->tpl_vars['METADATA']->value['form_field']['caption'])); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array('metadata'=>$_smarty_tpl->tpl_vars['METADATA']->value['form_field']['caption']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['form_field']->value['caption'];?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array('metadata'=>$_smarty_tpl->tpl_vars['METADATA']->value['form_field']['caption']), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</td>
							<td class="productInputReq"><?php  $_smarty_tpl->tpl_vars['formFieldReq'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['formFieldReq']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['form_fields_info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['formFieldReq']->key => $_smarty_tpl->tpl_vars['formFieldReq']->value){
$_smarty_tpl->tpl_vars['formFieldReq']->_loop = true;
?><?php if ($_smarty_tpl->tpl_vars['formFieldReq']->value['id']=='period_name'&&$_smarty_tpl->tpl_vars['formFieldReq']->value['is_required']){?>*<?php }?><?php } ?></td>
							<td><div  class="productInputField"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['input'][0][0]->tpl_input(array('property'=>$_smarty_tpl->tpl_vars['form_field']->value['id']),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['input'][0][0]->tpl_input(array('property'=>'period_name','template'=>"list_period.tpl"),$_smarty_tpl);?>
</div></td>
						</tr>
					<?php }elseif($_smarty_tpl->tpl_vars['form_field']->value['id']=='period_name'||$_smarty_tpl->tpl_vars['form_field']->value['id']=='featured_period'||$_smarty_tpl->tpl_vars['form_field']->value['id']=='priority_period'){?>
					<?php }elseif($_smarty_tpl->tpl_vars['form_field']->value['id']=='featured'){?>
						<tr class="<?php echo smarty_function_cycle(array('values'=>'evenrow,oddrow'),$_smarty_tpl);?>
">
							<td><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('metadata'=>$_smarty_tpl->tpl_vars['METADATA']->value['form_field']['caption'])); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array('metadata'=>$_smarty_tpl->tpl_vars['METADATA']->value['form_field']['caption']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['form_field']->value['caption'];?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array('metadata'=>$_smarty_tpl->tpl_vars['METADATA']->value['form_field']['caption']), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</td>
							<td class="productInputReq"><?php if ($_smarty_tpl->tpl_vars['form_field']->value['is_required']){?>*<?php }?></td>
							<td><div  class="productInputField"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['input'][0][0]->tpl_input(array('property'=>$_smarty_tpl->tpl_vars['form_field']->value['id']),$_smarty_tpl);?>
 <span style="padding-left: 50px;"> for&nbsp;&nbsp;&nbsp;<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['input'][0][0]->tpl_input(array('property'=>'featured_period'),$_smarty_tpl);?>
&nbsp;&nbsp;&nbsp;days</span> <small style="padding-left: 50px;">* Leave empty or zero for unlimited period</small></td>
						</tr>
					<?php }elseif($_smarty_tpl->tpl_vars['form_field']->value['id']=='priority'){?>
						<tr class="<?php echo smarty_function_cycle(array('values'=>'evenrow,oddrow'),$_smarty_tpl);?>
">
							<td><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('metadata'=>$_smarty_tpl->tpl_vars['METADATA']->value['form_field']['caption'])); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array('metadata'=>$_smarty_tpl->tpl_vars['METADATA']->value['form_field']['caption']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['form_field']->value['caption'];?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array('metadata'=>$_smarty_tpl->tpl_vars['METADATA']->value['form_field']['caption']), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</td>
							<td class="productInputReq"><?php if ($_smarty_tpl->tpl_vars['form_field']->value['is_required']){?>*<?php }?></td>
							<td><div  class="productInputField"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['input'][0][0]->tpl_input(array('property'=>$_smarty_tpl->tpl_vars['form_field']->value['id']),$_smarty_tpl);?>
 <span style="padding-left: 50px;"> for&nbsp;&nbsp;&nbsp;<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['input'][0][0]->tpl_input(array('property'=>'priority_period'),$_smarty_tpl);?>
&nbsp;&nbsp;&nbsp;days</span> <small style="padding-left: 50px;">* Leave empty or zero for unlimited period</small></td>
						</tr>
					<?php }elseif($_smarty_tpl->tpl_vars['form_field']->value['id']=='listing_duration'){?>
						<tr class="<?php echo smarty_function_cycle(array('values'=>'evenrow,oddrow'),$_smarty_tpl);?>
">
							<td><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('metadata'=>$_smarty_tpl->tpl_vars['METADATA']->value['form_field']['caption'])); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array('metadata'=>$_smarty_tpl->tpl_vars['METADATA']->value['form_field']['caption']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['form_field']->value['caption'];?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array('metadata'=>$_smarty_tpl->tpl_vars['METADATA']->value['form_field']['caption']), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</td>
							<td class="productInputReq"><?php if ($_smarty_tpl->tpl_vars['form_field']->value['is_required']){?>*<?php }?></td>
							<td><div  class="productInputField"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['input'][0][0]->tpl_input(array('property'=>$_smarty_tpl->tpl_vars['form_field']->value['id']),$_smarty_tpl);?>
 <small style="padding-left: 40px;">* <?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Leave empty or zero for unlimited period<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</small></td>
						</tr>
					<?php }else{ ?>
						<tr class="<?php echo smarty_function_cycle(array('values'=>'evenrow,oddrow'),$_smarty_tpl);?>
">
							<td><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('metadata'=>$_smarty_tpl->tpl_vars['METADATA']->value['form_field']['caption'])); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array('metadata'=>$_smarty_tpl->tpl_vars['METADATA']->value['form_field']['caption']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['form_field']->value['caption'];?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array('metadata'=>$_smarty_tpl->tpl_vars['METADATA']->value['form_field']['caption']), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</td>
							<td class="productInputReq"><?php if ($_smarty_tpl->tpl_vars['form_field']->value['is_required']){?>*<?php }?></td>
							<td><div  class="productInputField"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['input'][0][0]->tpl_input(array('property'=>$_smarty_tpl->tpl_vars['form_field']->value['id']),$_smarty_tpl);?>
 <?php if ($_smarty_tpl->tpl_vars['form_field']->value['id']=='width'||$_smarty_tpl->tpl_vars['form_field']->value['id']=='height'){?> pixels<?php }?><?php if ($_smarty_tpl->tpl_vars['form_field']->value['comment']){?><br/><small><?php echo $_smarty_tpl->tpl_vars['form_field']->value['comment'];?>
</small><?php }?></td>
						</tr>
					<?php }?>
				<?php } ?>
				</table>
			</div>
		<?php } ?>
        <div class="clr"><br/></div>
		<div style="width: 920px;">
            <div class="floatRight" style="text-align: right;">
                <strong>Apply changes to all users currently subscribed to this product</strong> <input type="radio" name="update_users" value="1" checked="checked"  /><br/>
                <strong>Changes will be applied to newly subscribed users only</strong> <input type="radio" name="update_users" value="0"/><br /><br />
                <input id="apply" type="submit" class="grayButton" value="Apply" /> <input type="submit" class="grayButton" value="Save" id="saveProduct" />
            </div>
		</div>
	</div>
</form>
</div>
<div id="periodMessage" style="display: none"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
If you want to set up and unlimited period please leave the 'Period' field blank and select 'Unlimited'<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</div>


<script type="text/javascript">
	var total_pages=<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['pages']['total'];?>
;
	var user_group_sid = <?php if ($_smarty_tpl->tpl_vars['product_info']->value['user_group_sid']){?><?php echo $_smarty_tpl->tpl_vars['product_info']->value['user_group_sid'];?>
<?php }else{ ?>0<?php }?>;
	var access_settins = false;
	<?php  $_smarty_tpl->tpl_vars['page'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['page']->_loop = false;
 $_smarty_tpl->tpl_vars['page_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['pages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['page']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["pages"]['total'] = $_smarty_tpl->tpl_vars['page']->total;
foreach ($_from as $_smarty_tpl->tpl_vars['page']->key => $_smarty_tpl->tpl_vars['page']->value){
$_smarty_tpl->tpl_vars['page']->_loop = true;
 $_smarty_tpl->tpl_vars['page_id']->value = $_smarty_tpl->tpl_vars['page']->key;
?>
		<?php if ($_smarty_tpl->tpl_vars['page_id']->value=="listings_access_settings"){?>
			access_settins = 1;
		<?php }?>
	<?php } ?>
	
	$(document).ready(function(){
		$("#addProduct").tabs({
			select: function(event, ui) {
				currentPage = $('#page').val();
	        	if (currentPage == '#pricing') {
	        		var redirectPage = false; 
	                $('*[name=pricing_type]').each(function(){
	                    if (this.checked && this.value == 'volume_based')
	                    	redirectPage = validateVolumeBasedFields();
	                });
	                if (redirectPage) 
						return false;
	        	}
	        	$('#page').val($(ui.tab).attr('href'));
		    }
	    });
        for (var i=1; i<=total_pages; i++) 
    		$("#addProduct").tabs('disable', i);
	    if (user_group_sid)
	    	changePermissions(user_group_sid);
	});
    $('#apply').click(
         function(){
             $('#action').attr('value', 'apply_product');
             return validatePeriod();
         }
     );
	
    var page = '<?php echo $_smarty_tpl->tpl_vars['pageTab']->value;?>
';
    if (page) {
        $("#addProduct ul li").each(function(){
            if ($('a', this).attr('href') == page) {
                var cl = $(this).attr('class') + ' ui-tabs-selected';
                $(this).attr('class', cl);
            } else {
                $(this).attr('class', 'ui-tabs-unselect');
            }
        });
    }

    function validateVolumeBasedFields()
    {
        var pricing = [];
        var counter = 1;
        var line = 1;
		$('#complexFieldsVolume input').each(function(){
			if (counter == 1)
				pricing[line] = [];
			pricing[line][counter] = parseInt(this.value);
			if (counter == 4) {
				counter = 1;
				line++;
			}
			else
				counter++;
		});
		var fieldError = false;
		
		for (var i = 1; i < pricing.length; i++) {
			if (pricing[i][1] == '' || pricing[i][2] == '') {
				windowMessage('All the Qty fields in Volume Based Pricing should be filled');
				return '#pricing';
			}
			else if (pricing[i][1] > pricing[i][2]) {
				windowMessage('The Qty fields should be filled From: min To: max but not vice versa');
				return '#pricing';
			}
		}
    }
    function changePermissions(user_group_sid)
    {
        if (user_group_sid != 0) {
	        for (var i=1; i<=total_pages; i++) 
	    		$("#addProduct").tabs('enable', i);

	    	url = '<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/product-permissions/'
			$.post(url, {'user_group_sid': user_group_sid, 'product_type': '<?php echo $_smarty_tpl->tpl_vars['product_type']->value;?>
', 'permissions_type': 'additional', 'role': '<?php echo $_smarty_tpl->tpl_vars['product_info']->value['sid'];?>
', 'params': '<?php echo $_smarty_tpl->tpl_vars['params']->value;?>
'},  function(data){
				$("#additional_permissions").html(data);
			});
			if (access_settins == 1) {
				$.post(url, {'user_group_sid': user_group_sid, 'product_type': '<?php echo $_smarty_tpl->tpl_vars['product_type']->value;?>
', 'permissions_type': 'access', 'role': '<?php echo $_smarty_tpl->tpl_vars['product_info']->value['sid'];?>
', 'params': '<?php echo $_smarty_tpl->tpl_vars['params']->value;?>
'},  function(data){
						$("#listings_access_settings").html(data);
				});
			}
        }
        else {
	        for (var i=1; i<=total_pages; i++) 
	    		$("#addProduct").tabs('disable', i);
        }
    }
	$(function() {
		$("#saveProduct").click(function(){
			return validatePeriod();
		});
	});

	function validatePeriod() 
	{
		var period_name = $("#period_name").val();
		if (period_name == 'unlimited') {
			$("#period").attr('disabled', false);
			$("#period").val('');
		}
		return true;
	}
    
</script><?php }} ?>