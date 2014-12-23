<?php /* Smarty version Smarty-3.1.13, created on 2014-12-22 20:07:16
         compiled from "template_smartjobboard_user:../field_types/search/string.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1939254981784a86372-59130072%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '110886c7d499b3e0401574b734bf780c814a92f8' => 
    array (
      0 => 'template_smartjobboard_user:../field_types/search/string.tpl',
      1 => 1389325698,
      2 => 'template_smartjobboard_user',
    ),
  ),
  'nocache_hash' => '1939254981784a86372-59130072',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'id' => 0,
    'value' => 0,
    'useAutocomplete' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_54981784f12487_97185395',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54981784f12487_97185395')) {function content_54981784f12487_97185395($_smarty_tpl) {?><input type="text" name="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
[equal]" id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" class="searchString" value="<?php if ($_smarty_tpl->tpl_vars['value']->value['multi_like_and'][0]){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value['multi_like_and'][0], ENT_QUOTES, 'UTF-8', true);?>
<?php }else{ ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value['equal'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>"/>

<?php if ($_smarty_tpl->tpl_vars['useAutocomplete']->value==1){?>
	<?php echo $_smarty_tpl->getSubTemplate ('../field_types/search/autocomplete.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }?><?php }} ?>