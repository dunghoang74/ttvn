<?php /* Smarty version Smarty-3.1.13, created on 2014-12-22 20:30:08
         compiled from "template_intelligentview_user:search_results_refine_block.tpl" */ ?>
<?php /*%%SmartyHeaderCode:311354981ce0616163-89398878%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b1ed6d91c136de9926fbdedf1347905118f70bf3' => 
    array (
      0 => 'template_intelligentview_user:search_results_refine_block.tpl',
      1 => 1392701106,
      2 => 'template_intelligentview_user',
    ),
  ),
  'nocache_hash' => '311354981ce0616163-89398878',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'currentSearch' => 0,
    'searchId' => 0,
    'show_brief_or_detailed' => 0,
    'view' => 0,
    'fieldInfo' => 0,
    'fieldType' => 0,
    'fieldValue' => 0,
    'fieldID' => 0,
    'realVal' => 0,
    'val' => 0,
    'refineFields' => 0,
    'refineField' => 0,
    'GLOBALS' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_54981ce3b048c5_43406329',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54981ce3b048c5_43406329')) {function content_54981ce3b048c5_43406329($_smarty_tpl) {?><?php if (!empty($_smarty_tpl->tpl_vars['currentSearch']->value)){?>
	<table cellpadding="0" cellspacing="0" id="currentSearch">
		<thead>
			<tr>
				<th class="tableLeft">&nbsp;</th>
				<th>&nbsp;<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Current Search<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
:</th>
				<th class="tableRight">&nbsp;</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td colspan="3">
					<?php $_smarty_tpl->_capture_stack[0][] = array("urlParams", null, null); ob_start(); ?>searchId=<?php echo $_smarty_tpl->tpl_vars['searchId']->value;?>
&amp;action=undo<?php if ($_smarty_tpl->tpl_vars['show_brief_or_detailed']->value){?>&amp;show_brief_or_detailed=<?php echo $_smarty_tpl->tpl_vars['show_brief_or_detailed']->value;?>
<?php }?>&amp;view=<?php echo $_smarty_tpl->tpl_vars['view']->value;?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
					<?php  $_smarty_tpl->tpl_vars["fieldInfo"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["fieldInfo"]->_loop = false;
 $_smarty_tpl->tpl_vars["fieldID"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['currentSearch']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["fieldInfo"]->key => $_smarty_tpl->tpl_vars["fieldInfo"]->value){
$_smarty_tpl->tpl_vars["fieldInfo"]->_loop = true;
 $_smarty_tpl->tpl_vars["fieldID"]->value = $_smarty_tpl->tpl_vars["fieldInfo"]->key;
?>
						<div class="currentSearch"><span class="strong"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['fieldInfo']->value['name'];?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</span></div>
						<?php  $_smarty_tpl->tpl_vars["fieldValue"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["fieldValue"]->_loop = false;
 $_smarty_tpl->tpl_vars["fieldType"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['fieldInfo']->value['field']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["fieldValue"]->key => $_smarty_tpl->tpl_vars["fieldValue"]->value){
$_smarty_tpl->tpl_vars["fieldValue"]->_loop = true;
 $_smarty_tpl->tpl_vars["fieldType"]->value = $_smarty_tpl->tpl_vars["fieldValue"]->key;
?>
							<?php if ($_smarty_tpl->tpl_vars['fieldType']->value=='monetary'){?>
								<?php  $_smarty_tpl->tpl_vars["val"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["val"]->_loop = false;
 $_smarty_tpl->tpl_vars["realVal"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['fieldValue']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["loopVal"]['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars["val"]->key => $_smarty_tpl->tpl_vars["val"]->value){
$_smarty_tpl->tpl_vars["val"]->_loop = true;
 $_smarty_tpl->tpl_vars["realVal"]->value = $_smarty_tpl->tpl_vars["val"]->key;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["loopVal"]['iteration']++;
?>
									<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['loopVal']['iteration']%2==0){?>
										<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
to<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

									<?php }?>
									<span class="curSearchItem">
										<a href="?<?php echo Smarty::$_smarty_vars['capture']['urlParams'];?>
&amp;param=<?php echo $_smarty_tpl->tpl_vars['fieldID']->value;?>
&amp;type=<?php echo $_smarty_tpl->tpl_vars['fieldType']->value;?>
&amp;value=<?php echo rawurlencode($_smarty_tpl->tpl_vars['realVal']->value);?>
"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
(undo)<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a>
										&nbsp;<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['val']->value;?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; ob_start();  echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); echo htmlspecialchars(ob_get_clean(), ENT_QUOTES, 'UTF-8', true);} array_pop($_smarty_tpl->smarty->_tag_stack);?>

									</span>
								<?php } ?>
							<?php }else{ ?>
								<?php  $_smarty_tpl->tpl_vars["val"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["val"]->_loop = false;
 $_smarty_tpl->tpl_vars["realVal"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['fieldValue']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["val"]->key => $_smarty_tpl->tpl_vars["val"]->value){
$_smarty_tpl->tpl_vars["val"]->_loop = true;
 $_smarty_tpl->tpl_vars["realVal"]->value = $_smarty_tpl->tpl_vars["val"]->key;
?>
									<span class="curSearchItem">
										<a href="?<?php echo Smarty::$_smarty_vars['capture']['urlParams'];?>
&amp;param=<?php echo $_smarty_tpl->tpl_vars['fieldID']->value;?>
&amp;type=<?php echo $_smarty_tpl->tpl_vars['fieldType']->value;?>
&amp;value=<?php echo rawurlencode($_smarty_tpl->tpl_vars['realVal']->value);?>
"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
(undo)<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a>
										&nbsp;<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['val']->value;?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; ob_start();  echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); echo htmlspecialchars(ob_get_clean(), ENT_QUOTES, 'UTF-8', true);} array_pop($_smarty_tpl->smarty->_tag_stack);?>

									</span><br/>
								<?php } ?>
							<?php }?>
						<?php } ?>
					<?php } ?>
					<br/>
				</td>
			</tr>
		</tbody>
	</table>
	<br/>
<?php }?>

<?php if (!empty($_smarty_tpl->tpl_vars['refineFields']->value)){?>
	<script language="JavaScript" type="text/javascript" src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['common_js'][0][0]->getCommonJsURL(array(),$_smarty_tpl);?>
/refine_search.js"></script>

	<?php $_smarty_tpl->_capture_stack[0][] = array("trLess", null, null); ob_start(); ?>&nbsp;&nbsp;&#171;&nbsp;<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
less<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
	<?php $_smarty_tpl->_capture_stack[0][] = array("trMore", null, null); ob_start(); ?>&nbsp;&nbsp;&#187;&nbsp;<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
more<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

	<table cellpadding="0" cellspacing="0" width="100%" id="refineResults">
		<thead>
		<tr>
			<th class="tableLeft">&nbsp;</th>
			<th><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Refine Results<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
:</th>
			<th class="tableRight">&nbsp;</th>
		</tr>
		</thead>
		<tbody>
		<tr>
			<td colspan="3">
				<?php $_smarty_tpl->_capture_stack[0][] = array("urlParams", null, null); ob_start(); ?>searchId=<?php echo $_smarty_tpl->tpl_vars['searchId']->value;?>
&amp;action=refine<?php if ($_smarty_tpl->tpl_vars['show_brief_or_detailed']->value){?>&amp;show_brief_or_detailed=<?php echo $_smarty_tpl->tpl_vars['show_brief_or_detailed']->value;?>
<?php }?>&amp;view=<?php echo $_smarty_tpl->tpl_vars['view']->value;?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
				<?php  $_smarty_tpl->tpl_vars['refineField'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['refineField']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['refineFields']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['refineField']->key => $_smarty_tpl->tpl_vars['refineField']->value){
$_smarty_tpl->tpl_vars['refineField']->_loop = true;
?>
					<?php if ($_smarty_tpl->tpl_vars['refineField']->value['show']&&$_smarty_tpl->tpl_vars['refineField']->value['count_results']){?>
						<div class="refine_button" id="<?php echo $_smarty_tpl->tpl_vars['refineField']->value['field_name'];?>
"><div class="refine_icon">[+]</div><span class="strong"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['refineField']->value['caption'];?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</span></div>
						<div class="refine_block" style="display: none">
							<?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['refineField']->value['search_result']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['val']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['fieldValue']['total'] = $_smarty_tpl->tpl_vars['val']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['fieldValue']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value){
$_smarty_tpl->tpl_vars['val']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['fieldValue']['iteration']++;
?>
								<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['fieldValue']['iteration']==6){?>
									<div class="block_values" style="display: none">
								<?php }?>
								<?php $_smarty_tpl->_capture_stack[0][] = array("refineFieldCriteria", null, null); ob_start(); ?><?php echo $_smarty_tpl->tpl_vars['refineField']->value['field_name'];?>
<?php if (in_array($_smarty_tpl->tpl_vars['refineField']->value['type'],array('string'))){?>[multi_like_and]<?php }else{ ?>[multi_like]<?php }?>[]=<?php if ($_smarty_tpl->tpl_vars['val']->value['sid']){?><?php echo $_smarty_tpl->tpl_vars['val']->value['sid'];?>
<?php }else{ ?><?php echo rawurlencode($_smarty_tpl->tpl_vars['val']->value['value']);?>
<?php }?><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
								<div class="refineItem">
									<a href="?<?php echo Smarty::$_smarty_vars['capture']['urlParams'];?>
&amp;<?php echo Smarty::$_smarty_vars['capture']['refineFieldCriteria'];?>
"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['val']->value['value'];?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; ob_start();  echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); echo htmlspecialchars(ob_get_clean(), ENT_QUOTES, 'UTF-8', true);} array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a><?php if (empty($_smarty_tpl->tpl_vars['refineField']->value['criteria'])){?>&nbsp;(<?php echo $_smarty_tpl->tpl_vars['val']->value['count'];?>
)<?php }?>
								</div>
							<?php } ?>
							<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['fieldValue']['total']>=6){?>
								</div><div class="block_values_button"><?php echo Smarty::$_smarty_vars['capture']['trMore'];?>
</div>
							<?php }?>
						</div>
						<script type="text/javascript">RefineSearchBlock.restore('<?php echo $_smarty_tpl->tpl_vars['refineField']->value['field_name'];?>
', true); </script>
					<?php }?>
				<?php } ?>
				<br/>
			</td>
		</tr>
		</tbody>
	</table>
	<script type="text/javascript" language="JavaScript">
		refineBlockBinder("<?php echo preg_replace("%(?<!\\\\)'%", "\'",Smarty::$_smarty_vars['capture']['trLess']);?>
", "<?php echo preg_replace("%(?<!\\\\)'%", "\'",Smarty::$_smarty_vars['capture']['trMore']);?>
");
	</script>
<?php }?>
<?php if (!$_smarty_tpl->tpl_vars['GLOBALS']->value['is_ajax']){?>
	<!-- preloader row here -->
	<div id="refine-block-preloader"></div>
<?php }?>

<?php }} ?>