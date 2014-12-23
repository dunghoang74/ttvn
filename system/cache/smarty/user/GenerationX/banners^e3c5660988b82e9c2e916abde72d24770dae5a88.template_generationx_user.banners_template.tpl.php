<?php /* Smarty version Smarty-3.1.13, created on 2014-12-22 20:58:09
         compiled from "template_generationx_user:templates/_system/banners/banners_template.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3085554982371238473-70427949%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e3c5660988b82e9c2e916abde72d24770dae5a88' => 
    array (
      0 => 'template_generationx_user:templates/_system/banners/banners_template.tpl',
      1 => 1303973442,
      2 => 'template_generationx_user',
    ),
  ),
  'nocache_hash' => '3085554982371238473-70427949',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'current_banners' => 0,
    'current_banner' => 0,
    'GLOBALS' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5498237227e9a1_87796099',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5498237227e9a1_87796099')) {function content_5498237227e9a1_87796099($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['current_banner'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['current_banner']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['current_banners']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['current_banner']->key => $_smarty_tpl->tpl_vars['current_banner']->value){
$_smarty_tpl->tpl_vars['current_banner']->_loop = true;
?>
<?php if ($_smarty_tpl->tpl_vars['current_banner']->value['type']=='application/x-shockwave-flash'){?>

<div style="width: 100%; text-align: center;">
	<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://active.macromedia.com/flash2/cabs/swflash.cab#version=4,0,0,0" ID="banner"" WIDTH="<?php echo $_smarty_tpl->tpl_vars['current_banner']->value['width'];?>
" HEIGHT="<?php echo $_smarty_tpl->tpl_vars['current_banner']->value['height'];?>
">
	<param name="movie" value="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
<?php echo $_smarty_tpl->tpl_vars['current_banner']->value['image_path'];?>
">
	<param name="quality" value="high">
	<param name="loop" value="true">
	<embed FlashVars="sjb_banner_link=<?php $_smarty_tpl->_capture_stack[0][] = array("banner_link", null, null); ob_start(); ?><?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/go-link/?bannerId=<?php echo $_smarty_tpl->tpl_vars['current_banner']->value['id'];?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php echo rawurlencode(Smarty::$_smarty_vars['capture']['banner_link']);?>
&sjb_banner_window=<?php echo $_smarty_tpl->tpl_vars['current_banner']->value['openBannerIn'];?>
" src="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
<?php echo $_smarty_tpl->tpl_vars['current_banner']->value['image_path'];?>
" loop="true" quality="high" WIDTH="<?php echo $_smarty_tpl->tpl_vars['current_banner']->value['width'];?>
" HEIGHT="<?php echo $_smarty_tpl->tpl_vars['current_banner']->value['height'];?>
" TYPE="application/x-shockwave-flash"  PLUGINSPAGE="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash">
	</embed>
	</object>
</div>

<?php }else{ ?>
<div class="banner">
	<?php if ($_smarty_tpl->tpl_vars['current_banner']->value['bannerType']=='file'){?>
	<a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/go-link/?bannerId=<?php echo $_smarty_tpl->tpl_vars['current_banner']->value['id'];?>
" target="<?php echo $_smarty_tpl->tpl_vars['current_banner']->value['openBannerIn'];?>
">
		<img src="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
<?php echo $_smarty_tpl->tpl_vars['current_banner']->value['image_path'];?>
" width="<?php echo $_smarty_tpl->tpl_vars['current_banner']->value['width'];?>
" height="<?php echo $_smarty_tpl->tpl_vars['current_banner']->value['height'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['current_banner']->value['title'];?>
" border="0"/>
	</a>
	<?php }else{ ?>
		<a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/go-link/?bannerId=<?php echo $_smarty_tpl->tpl_vars['current_banner']->value['id'];?>
" target="<?php echo $_smarty_tpl->tpl_vars['current_banner']->value['openBannerIn'];?>
">
			<?php echo $_smarty_tpl->tpl_vars['current_banner']->value['code'];?>

		</a>
	<?php }?>
</div>
<?php }?>
<?php } ?><?php }} ?>