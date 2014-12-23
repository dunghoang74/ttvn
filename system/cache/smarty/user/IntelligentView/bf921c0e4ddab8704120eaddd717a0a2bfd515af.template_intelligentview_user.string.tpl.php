<?php /* Smarty version Smarty-3.1.13, created on 2014-12-22 20:21:44
         compiled from "template_intelligentview_user:../field_types/search/string.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1231454981ae87f7255-31985776%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bf921c0e4ddab8704120eaddd717a0a2bfd515af' => 
    array (
      0 => 'template_intelligentview_user:../field_types/search/string.tpl',
      1 => 1389325698,
      2 => 'template_intelligentview_user',
    ),
  ),
  'nocache_hash' => '1231454981ae87f7255-31985776',
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
  'unifunc' => 'content_54981ae8c584e4_49195909',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54981ae8c584e4_49195909')) {function content_54981ae8c584e4_49195909($_smarty_tpl) {?><input type="text" name="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
[equal]" id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" class="searchString" value="<?php if ($_smarty_tpl->tpl_vars['value']->value['multi_like_and'][0]){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value['multi_like_and'][0], ENT_QUOTES, 'UTF-8', true);?>
<?php }else{ ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value['equal'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>"/>

<?php if ($_smarty_tpl->tpl_vars['useAutocomplete']->value==1){?>
	<?php echo $_smarty_tpl->getSubTemplate ('../field_types/search/autocomplete.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }?><?php }} ?>