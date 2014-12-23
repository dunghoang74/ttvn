<?php /* Smarty version Smarty-3.1.13, created on 2014-12-22 20:24:47
         compiled from "template_intelligentview_user:templates/_system/classifieds/search_form_resumes.tpl" */ ?>
<?php /*%%SmartyHeaderCode:69754981b9f12c1e3-70443770%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3d4946d52482b8bdb43d07976a54ad24477d9aed' => 
    array (
      0 => 'template_intelligentview_user:templates/_system/classifieds/search_form_resumes.tpl',
      1 => 1361864298,
      2 => 'template_intelligentview_user',
    ),
  ),
  'nocache_hash' => '69754981b9f12c1e3-70443770',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'id_saved' => 0,
    'GLOBALS' => 0,
    'action' => 0,
    'listing' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_54981b9fb712d3_80838659',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54981b9fb712d3_80838659')) {function content_54981b9fb712d3_80838659($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['id_saved']->value){?><h1><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Edit Saved Search<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</h1><?php }else{ ?><h1><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Search Resumes<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</h1><?php }?>
<?php if ($_smarty_tpl->tpl_vars['id_saved']->value){?>
	<form action="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/saved-searches/" method="get"  id="search_form">
		<input type="hidden" name="action" value="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" />
		<input type="hidden" name="id_saved" value="<?php echo $_smarty_tpl->tpl_vars['id_saved']->value;?>
" />
<?php }else{ ?>
	<form action="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/search-results-resumes/"  id="search_form">
		<input type="hidden" name="action" value="search" />
<?php }?>
	<input type="hidden" name="listing_type[equal]" value="Resume" />
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


		
		<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['module'][0][0]->module(array('name'=>"social",'function'=>"linkedin_people_search",'profileSID'=>$_smarty_tpl->tpl_vars['listing']->value['user']['id']),$_smarty_tpl);?>

		

		<fieldset>
			<div class="inputName">&nbsp;</div>
			<div class="inputField">
				<?php if ($_smarty_tpl->tpl_vars['id_saved']->value){?>
					<input class="button" type="submit" name="submit" value="<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Save<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
" id="search_button" />
				<?php }else{ ?>
					<input type="submit" value="<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Search<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
" class="button" id="search_button" />
				<?php }?>
			</div>
		</fieldset>
	</div>
</form>
<div id="adSpace"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['module'][0][0]->module(array('name'=>"static_content",'function'=>"show_static_content",'pageid'=>"SearchResumesAdSpace"),$_smarty_tpl);?>
</div>
<?php }} ?>