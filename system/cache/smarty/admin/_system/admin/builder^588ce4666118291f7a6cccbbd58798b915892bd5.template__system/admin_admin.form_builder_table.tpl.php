<?php /* Smarty version Smarty-3.1.13, created on 2014-12-23 22:01:41
         compiled from "template__system/admin_admin:form_builder_table.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9680549983d5dc8e07-35526964%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '588ce4666118291f7a6cccbbd58798b915892bd5' => 
    array (
      0 => 'template__system/admin_admin:form_builder_table.tpl',
      1 => 1363938074,
      2 => 'template__system/admin_admin',
    ),
  ),
  'nocache_hash' => '9680549983d5dc8e07-35526964',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'listingTypesInfo' => 0,
    'listingTypeInfo' => 0,
    'GLOBALS' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_549983d6894fe7_66468531',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_549983d6894fe7_66468531')) {function content_549983d6894fe7_66468531($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars["listingTypeInfo"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["listingTypeInfo"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['listingTypesInfo']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["listingTypeInfo"]->key => $_smarty_tpl->tpl_vars["listingTypeInfo"]->value){
$_smarty_tpl->tpl_vars["listingTypeInfo"]->_loop = true;
?>
    <?php $_smarty_tpl->tpl_vars["listingTypeSID"] = new Smarty_variable($_smarty_tpl->tpl_vars['listingTypeInfo']->value['sid'], null, 0);?>
	<div class="listing-type-form">
		<table border="1">
			<colgroup span="2">
				<col width="70%"/>
				<col width="10%"/>
			</colgroup>
			<thead>
				<tr>
					<th colspan="3"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['listingTypeInfo']->value['name'];?>
 Listings<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Search <?php echo $_smarty_tpl->tpl_vars['listingTypeInfo']->value['name'];?>
 Form<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</td>
					<td>
						<span class="editbutton" title="Edit <?php echo $_smarty_tpl->tpl_vars['listingTypeInfo']->value['name'];?>
 Search" id="search-<?php echo $_smarty_tpl->tpl_vars['listingTypeInfo']->value['id'];?>
"
							  href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/builder/search-form/<?php echo $_smarty_tpl->tpl_vars['listingTypeInfo']->value['id'];?>
/"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Edit<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</span>
					</td>
				</tr>
				<tr>
					<td><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Display <?php echo $_smarty_tpl->tpl_vars['listingTypeInfo']->value['name'];?>
 Page<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</td>
					<td>
						<span class="editbutton" title="Edit <?php echo $_smarty_tpl->tpl_vars['listingTypeInfo']->value['name'];?>
 Display" id="display-<?php echo $_smarty_tpl->tpl_vars['listingTypeInfo']->value['id'];?>
"
							  href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/builder/display-listing/<?php echo $_smarty_tpl->tpl_vars['listingTypeInfo']->value['id'];?>
/"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Edit<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</span>
					</td>
				</tr>
			</tbody>
		</table>
	</div>
<?php } ?>


    <script type="text/javascript">
        $("document").ready(function(){
            $(".editbutton").each(function(){
                var curElem = $(this);
                curElem.click(function() {
                    var elemHref = curElem.attr("href");
                    var elemID = curElem.attr("id").replace("-", "_");
                    window.open (elemHref,elemID,"status=0,toolbar=0,scrollbars=1,resizable=1,width=1200,height=800");
                });
            });
        });
    </script>
<?php }} ?>