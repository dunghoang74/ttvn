<?php /* Smarty version Smarty-3.1.13, created on 2014-12-22 20:57:57
         compiled from "template_generationx_user:d:\xampp\htdocs\tuyendungvn\templates\generationx\menu\top.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3365549823656b8809-86569746%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4f6c1f691ffea5fee7d32c730d30eef4b107745a' => 
    array (
      0 => 'template_generationx_user:d:\\xampp\\htdocs\\tuyendungvn\\templates\\generationx\\menu\\top.tpl',
      1 => 1388987944,
      2 => 'template_generationx_user',
    ),
  ),
  'nocache_hash' => '3365549823656b8809-86569746',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'GLOBALS' => 0,
    'acl' => 0,
    'listingTypesInfo' => 0,
    'listingTypeInfo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5498236807ec84_36945307',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5498236807ec84_36945307')) {function content_5498236807ec84_36945307($_smarty_tpl) {?><div id="topMenu">
	<div id="topmenu-left"></div>
		<ul>
			<li><a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Home<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a></li>
			<li class="sep">&nbsp;</li>
		<?php if ($_smarty_tpl->tpl_vars['GLOBALS']->value['current_user']['logged_in']){?>
			<li <?php if ($_smarty_tpl->tpl_vars['GLOBALS']->value['current_user']['logged_in']){?>id="dropDown"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/my-account/"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
My Account<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a>
				<?php if ($_smarty_tpl->tpl_vars['GLOBALS']->value['current_user']['group']['id']=="Employer"){?>
				<?php echo $_smarty_tpl->getSubTemplate ("drop_down_menu_employer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

					<?php }elseif($_smarty_tpl->tpl_vars['GLOBALS']->value['current_user']['group']['id']=="JobSeeker"){?>
				<?php echo $_smarty_tpl->getSubTemplate ("drop_down_menu_jobseeker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

				<?php }?>
			</li>
			<li class="sep">&nbsp;</li>
		<?php }?>
			<li <?php if (!$_smarty_tpl->tpl_vars['GLOBALS']->value['current_user']['logged_in']){?>id="dropDown"<?php }?>>
			<?php if ($_smarty_tpl->tpl_vars['GLOBALS']->value['current_user']['group']['id']=="JobSeeker"){?>
				<a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/jobseeker-products/"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Products<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a>
			<?php }elseif($_smarty_tpl->tpl_vars['GLOBALS']->value['current_user']['group']['id']=="Employer"){?>
				<a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/employer-products/"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Products<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a>
			<?php }elseif(!$_smarty_tpl->tpl_vars['GLOBALS']->value['current_user']['group']['id']){?>
				<a href="#"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Products<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a>
				<?php echo $_smarty_tpl->getSubTemplate ("drop_down_menu_products.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

			<?php }else{ ?>
				<a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/<?php echo mb_strtolower($_smarty_tpl->tpl_vars['GLOBALS']->value['current_user']['group']['id'], 'UTF-8');?>
-products/"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Products<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a>
			<?php }?>
			</li>
			<li class="sep">&nbsp;</li>
			<?php if ($_smarty_tpl->tpl_vars['GLOBALS']->value['current_user']['logged_in']){?>
				<?php if (($_smarty_tpl->tpl_vars['acl']->value->isAllowed('open_job_search_form'))||$_smarty_tpl->tpl_vars['GLOBALS']->value['current_user']['group']['id']=="JobSeeker"){?>
					<li><a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/find-jobs/" ><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Find Jobs<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a></li>
					<li class="sep">&nbsp;</li>
				<?php }?>
				<?php if (($_smarty_tpl->tpl_vars['acl']->value->isAllowed('open_resume_search_form'))||$_smarty_tpl->tpl_vars['GLOBALS']->value['current_user']['group']['id']=="Employer"){?>
					<li><a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/search-resumes/" ><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Search Resumes<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a></li>
					<li class="sep">&nbsp;</li>
				<?php }?>
				<?php  $_smarty_tpl->tpl_vars["listingTypeInfo"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["listingTypeInfo"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['listingTypesInfo']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["listingTypeInfo"]->key => $_smarty_tpl->tpl_vars["listingTypeInfo"]->value){
$_smarty_tpl->tpl_vars["listingTypeInfo"]->_loop = true;
?>
					<?php if (($_smarty_tpl->tpl_vars['acl']->value->isAllowed(('post_').($_smarty_tpl->tpl_vars['listingTypeInfo']->value['id'])))||$_smarty_tpl->tpl_vars['GLOBALS']->value['current_user']['group']['id']=="Employer"&&$_smarty_tpl->tpl_vars['listingTypeInfo']->value['id']=="Job"||$_smarty_tpl->tpl_vars['GLOBALS']->value['current_user']['group']['id']=="JobSeeker"&&$_smarty_tpl->tpl_vars['listingTypeInfo']->value['id']=="Resume"){?>
							<li>
								<a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/add-listing/?listing_type_id=<?php echo $_smarty_tpl->tpl_vars['listingTypeInfo']->value['id'];?>
" >
									<?php if (in_array($_smarty_tpl->tpl_vars['listingTypeInfo']->value['id'],array('Job','Resume'))){?><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Post <?php echo $_smarty_tpl->tpl_vars['listingTypeInfo']->value['name'];?>
s<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }else{ ?><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Post <?php echo $_smarty_tpl->tpl_vars['listingTypeInfo']->value['name'];?>
 Listings<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }?>
								</a>
							</li>
							<li class="sep">&nbsp;</li>
					<?php }?>
				<?php } ?>
			<?php }else{ ?>
				<?php if ($_smarty_tpl->tpl_vars['GLOBALS']->value['current_user']['group']['id']!="Employer"){?>
					<li><a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/find-jobs/" ><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Find Jobs<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a></li>
					<li class="sep">&nbsp;</li>
					<li><a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/add-listing/?listing_type_id=Resume" ><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Post Resumes<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a></li>
					<li class="sep">&nbsp;</li>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['GLOBALS']->value['current_user']['group']['id']!="JobSeeker"){?>
					<li><a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/search-resumes/" ><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Search Resumes<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a></li>
					<li class="sep">&nbsp;</li>
					<li><a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/add-listing/?listing_type_id=Job" ><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Post Jobs<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a></li>
					<li class="sep">&nbsp;</li>
				<?php }?>
			<?php }?>
			<li><a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/contact/" ><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Contact<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a></li>
		</ul>
	<div id="topmenu-right"></div>
</div><?php }} ?>