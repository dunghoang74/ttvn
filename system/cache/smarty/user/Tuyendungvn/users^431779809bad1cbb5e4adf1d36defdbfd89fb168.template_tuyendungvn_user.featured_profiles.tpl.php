<?php /* Smarty version Smarty-3.1.13, created on 2014-12-22 20:00:14
         compiled from "template_tuyendungvn_user:templates/_system/users/featured_profiles.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4406549815de8bea72-34488058%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '431779809bad1cbb5e4adf1d36defdbfd89fb168' => 
    array (
      0 => 'template_tuyendungvn_user:templates/_system/users/featured_profiles.tpl',
      1 => 1393400310,
      2 => 'template_tuyendungvn_user',
    ),
  ),
  'nocache_hash' => '4406549815de8bea72-34488058',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'profiles' => 0,
    'GLOBALS' => 0,
    'profile' => 0,
    'number_of_cols' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_549815df0527a7_67457507',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_549815df0527a7_67457507')) {function content_549815df0527a7_67457507($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_regex_replace')) include 'D:\\xampp\\htdocs\\tuyendungvn\\system\\ext\\Smarty\\libs\\plugins\\modifier.regex_replace.php';
?><?php  $_smarty_tpl->tpl_vars['profile'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['profile']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['profiles']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['profile_block']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['profile']->key => $_smarty_tpl->tpl_vars['profile']->value){
$_smarty_tpl->tpl_vars['profile']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['profile_block']['iteration']++;
?>
	<div class="FeaturedCompaniesLogo">
		<a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/company/<?php echo $_smarty_tpl->tpl_vars['profile']->value['id'];?>
/<?php echo rawurlencode(smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['profile']->value['CompanyName'],"/[\s\/\\\\]/","-"));?>
/"><img src="<?php echo $_smarty_tpl->tpl_vars['profile']->value['Logo']['thumb_file_url'];?>
" border="0" alt="<?php echo $_smarty_tpl->tpl_vars['profile']->value['WebSite'];?>
"/></a>
	</div>
	<?php if (!($_smarty_tpl->getVariable('smarty')->value['foreach']['profile_block']['iteration'] % $_smarty_tpl->tpl_vars['number_of_cols']->value)){?>
		<div class="clr"></div>
	<?php }?>
<?php } ?><?php }} ?>