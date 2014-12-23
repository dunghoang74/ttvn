<?php /* Smarty version Smarty-3.1.13, created on 2014-12-22 22:23:59
         compiled from "template__system/admin_admin:d:\xampp\htdocs\tuyendungvn\templates\_system\admin\template_manager\navigation_menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:289465498378fb5d877-85948526%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b6d7dd4cbcd0595cec4a1f9379dd709fe0942e46' => 
    array (
      0 => 'template__system/admin_admin:d:\\xampp\\htdocs\\tuyendungvn\\templates\\_system\\admin\\template_manager\\navigation_menu.tpl',
      1 => 1366272372,
      2 => 'template__system/admin_admin',
    ),
  ),
  'nocache_hash' => '289465498378fb5d877-85948526',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'navigation' => 0,
    'item' => 0,
    'title' => 0,
    'errors' => 0,
    'file' => 0,
    'result' => 0,
    'error' => 0,
    'GLOBALS' => 0,
    'show_highlight_setting' => 0,
    'highlight_templates' => 0,
    'show_clear_cache_setting' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_54983790c86a52_64106826',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54983790c86a52_64106826')) {function content_54983790c86a52_64106826($_smarty_tpl) {?><?php $_smarty_tpl->smarty->_tag_stack[] = array('breadcrumbs', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['breadcrumbs'][0][0]->_tpl_breadcrumbs(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

	<?php  $_smarty_tpl->tpl_vars["item"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["item"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['navigation']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars["item"]->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars["item"]->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars["item"]->key => $_smarty_tpl->tpl_vars["item"]->value){
$_smarty_tpl->tpl_vars["item"]->_loop = true;
 $_smarty_tpl->tpl_vars["item"]->iteration++;
 $_smarty_tpl->tpl_vars["item"]->last = $_smarty_tpl->tpl_vars["item"]->iteration === $_smarty_tpl->tpl_vars["item"]->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["foreach"]['last'] = $_smarty_tpl->tpl_vars["item"]->last;
?>
		<?php if ($_smarty_tpl->tpl_vars['item']->value['reference']==''){?>
			<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>

		<?php }else{ ?>
			<a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['reference'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a>
		<?php }?>
		<?php if (!$_smarty_tpl->getVariable('smarty')->value['foreach']['foreach']['last']){?> &#187; <?php }?>
	<?php } ?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['breadcrumbs'][0][0]->_tpl_breadcrumbs(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<h1><img src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['image'][0][0]->getImageURL(array(),$_smarty_tpl);?>
/icons/article32.png" border="0" alt="" class="titleicon"/> <?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h1>

<?php if (!empty($_smarty_tpl->tpl_vars['errors']->value['CANT_DELETE_FILES'])){?>
	<p class="error">The following files could not be removed:</p>
	<p class="errorList">
	<?php  $_smarty_tpl->tpl_vars['file'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['file']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['errors']->value['CANT_DELETE_FILES']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['file']->key => $_smarty_tpl->tpl_vars['file']->value){
$_smarty_tpl->tpl_vars['file']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['file']->key;
?>
		-<?php echo $_smarty_tpl->tpl_vars['file']->value;?>
;<br />
	<?php } ?>
	</p>
<?php }elseif(!empty($_smarty_tpl->tpl_vars['result']->value)){?>
	<p class="message"><?php echo $_smarty_tpl->tpl_vars['result']->value;?>
</p>
<?php }?>

<?php  $_smarty_tpl->tpl_vars['error'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['error']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['errors']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['error']->key => $_smarty_tpl->tpl_vars['error']->value){
$_smarty_tpl->tpl_vars['error']->_loop = true;
?>
	<?php if ($_smarty_tpl->tpl_vars['error']->value=='NOT_ALLOWED_IN_DEMO'){?>
		<p class="error">This action is not allowed in Demo mode</p>
	<?php }else{ ?>
	<?php }?>
<?php } ?>

<p>Active theme: <b><?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['settings']['CURRENT_THEME'];?>
</b></p>
<?php if ($_smarty_tpl->tpl_vars['show_highlight_setting']->value){?>
	<div class="clr"></div>
	<form>
		<table>
			<thead>
				<tr>
					<th>Highlight Templates On Frontend&nbsp;</th>
					<th align=center>
						<select name="highlight_templates">
							<option value="0"<?php if ($_smarty_tpl->tpl_vars['highlight_templates']->value==0){?> selected="selected"<?php }?>>disable</option>
							<option value="1"<?php if ($_smarty_tpl->tpl_vars['highlight_templates']->value==1){?> selected="selected"<?php }?>>enable</option>
						</select>
					</th>
					<th><input type="submit" name="highlight_submit" value="Save" class="grayButton"/></th>
				</tr>
			</thead>
		</table>
	</form>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['show_clear_cache_setting']->value){?>
<div class="clr"></div>
<form>
	<table>
		<thead>
			<tr>
				<th colspan="2">Clear Smarty Cache&nbsp;</th>
				<th><input type="submit" name="clear_cache_submit" value="Go" class="grayButton" /></th>
			</tr>
		</thead>
	</table>
</form>
<?php }?><?php }} ?>