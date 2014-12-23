<?php /* Smarty version Smarty-3.1.13, created on 2014-12-22 20:24:48
         compiled from "template_intelligentview_user:templates/_system/classifieds/../builder/bf_searchform_fieldset.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3235154981ba02ed964-35828547%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c3fef0c72414d93f7996d168c43d441ba1b56908' => 
    array (
      0 => 'template_intelligentview_user:templates/_system/classifieds/../builder/bf_searchform_fieldset.tpl',
      1 => 1379497652,
      2 => 'template_intelligentview_user',
    ),
  ),
  'nocache_hash' => '3235154981ba02ed964-35828547',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'holderType' => 0,
    'fieldsHolderID' => 0,
    'holderTitle' => 0,
    'fields_active' => 0,
    'theField' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_54981ba061e0a8_89906423',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54981ba061e0a8_89906423')) {function content_54981ba061e0a8_89906423($_smarty_tpl) {?><div class="builder-col-<?php echo $_smarty_tpl->tpl_vars['holderType']->value;?>
">
	<fieldset id="<?php echo $_smarty_tpl->tpl_vars['fieldsHolderID']->value;?>
" class="active-fields sortable-column">
		<legend class="fh-legend"><?php echo $_smarty_tpl->tpl_vars['holderTitle']->value;?>
&nbsp;</legend>
		<span class="fh-status">&nbsp;</span>
		<?php  $_smarty_tpl->tpl_vars['theField'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['theField']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['fields_active']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['theField']->key => $_smarty_tpl->tpl_vars['theField']->value){
$_smarty_tpl->tpl_vars['theField']->_loop = true;
?>
			<?php if (!($_smarty_tpl->tpl_vars['theField']->value['type']=='complex')){?>
				<?php echo $_smarty_tpl->getSubTemplate ("../builder/bf_searchform_fieldsblocks.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

			<?php }?>
		<?php } ?>
	</fieldset>
</div>
<?php }} ?>