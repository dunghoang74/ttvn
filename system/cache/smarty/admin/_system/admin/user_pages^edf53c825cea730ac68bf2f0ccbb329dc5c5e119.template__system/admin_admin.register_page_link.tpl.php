<?php /* Smarty version Smarty-3.1.13, created on 2014-12-22 21:28:24
         compiled from "template__system/admin_admin:d:\xampp\htdocs\tuyendungvn\templates\_system\admin\user_pages\register_page_link.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1896454982a88b723a2-35632227%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'edf53c825cea730ac68bf2f0ccbb329dc5c5e119' => 
    array (
      0 => 'template__system/admin_admin:d:\\xampp\\htdocs\\tuyendungvn\\templates\\_system\\admin\\user_pages\\register_page_link.tpl',
      1 => 1339483572,
      2 => 'template__system/admin_admin',
    ),
  ),
  'nocache_hash' => '1896454982a88b723a2-35632227',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'GLOBALS' => 0,
    'pageInfo' => 0,
    'caption' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_54982a88ddb736_92046941',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54982a88ddb736_92046941')) {function content_54982a88ddb736_92046941($_smarty_tpl) {?><p><a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/user-pages/?module=<?php echo $_smarty_tpl->tpl_vars['pageInfo']->value['module'];?>
&amp;function=<?php echo $_smarty_tpl->tpl_vars['pageInfo']->value['function'];?>
&amp;access_type=user&amp;parameters=<?php echo $_smarty_tpl->tpl_vars['pageInfo']->value['parameters'];?>
&amp;action=new_page">
Create a page for this <?php echo $_smarty_tpl->tpl_vars['caption']->value;?>

</a></p><?php }} ?>