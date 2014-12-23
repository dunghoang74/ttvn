<?php /* Smarty version Smarty-3.1.13, created on 2014-12-22 19:59:30
         compiled from "template_tuyendungvn_user:templates/_system/classifieds/search_form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11974549815b25b4519-56563249%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e0cfb3164464b6651e11b815d18ac3ac6c83c05f' => 
    array (
      0 => 'template_tuyendungvn_user:templates/_system/classifieds/search_form.tpl',
      1 => 1379065788,
      2 => 'template_tuyendungvn_user',
    ),
  ),
  'nocache_hash' => '11974549815b25b4519-56563249',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'acl' => 0,
    'GLOBALS' => 0,
    'id_saved' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_549815b305d468_46633282',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_549815b305d468_46633282')) {function content_549815b305d468_46633282($_smarty_tpl) {?><h1><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Find Jobs<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php if ($_smarty_tpl->tpl_vars['acl']->value->isAllowed('open_search_by_company_form')){?><span class="RightLink"><a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/browse-by-company/"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Search by Company<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a></span><?php }?></h1>
<div class="clr"></div>
<?php if ($_smarty_tpl->tpl_vars['id_saved']->value){?>
	<form action="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/saved-searches/" method="get" id="search_form">
		<input type="hidden" name="action" value="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" />
		<input type="hidden" name="id_saved" value="<?php echo $_smarty_tpl->tpl_vars['id_saved']->value;?>
" />
<?php }else{ ?>
	<form action="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/search-results-jobs/" method="get" id="search_form">
		<input type="hidden" name="action" value="search" />
<?php }?>
	<input type="hidden" name="listing_type[equal]" value="Job" />
	<div id="adMargin">
		<?php if ($_smarty_tpl->tpl_vars['id_saved']->value){?>
			<fieldset>
				<div class="inputName"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Search Name<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</div>
				<div class="inputField"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['search'][0][0]->tpl_search(array('property'=>'name','template'=>'string.tpl'),$_smarty_tpl);?>
</div>
			</fieldset>
		<?php }?>

		<?php echo $_smarty_tpl->getSubTemplate ("../builder/bf_searchform_fieldsholders.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


		<fieldset>
			<div class="inputName">&nbsp;</div>
			<div class="inputField">
				<?php if ($_smarty_tpl->tpl_vars['id_saved']->value){?>
					<input class="button" type="submit" name="submit" value="<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Save<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
"  id="search_button" />
				<?php }else{ ?>
					<input class="button" type="submit" value="<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Search<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
"  id="search_button" />
				<?php }?>
			</div>
		</fieldset>
	</div>
</form>
<div id="adSpace"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['module'][0][0]->module(array('name'=>"static_content",'function'=>"show_static_content",'pageid'=>"FindJobsAdSpace"),$_smarty_tpl);?>
</div>
<?php }} ?>