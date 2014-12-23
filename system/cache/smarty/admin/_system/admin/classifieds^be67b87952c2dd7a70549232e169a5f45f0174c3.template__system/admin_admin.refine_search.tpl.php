<?php /* Smarty version Smarty-3.1.13, created on 2014-12-18 13:19:10
         compiled from "template__system/admin_admin:d:\xampp\htdocs\tuyendungvn\templates\_system\admin\classifieds\refine_search.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1870549271de279490-74726546%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'be67b87952c2dd7a70549232e169a5f45f0174c3' => 
    array (
      0 => 'template__system/admin_admin:d:\\xampp\\htdocs\\tuyendungvn\\templates\\_system\\admin\\classifieds\\refine_search.tpl',
      1 => 1375069644,
      2 => 'template__system/admin_admin',
    ),
  ),
  'nocache_hash' => '1870549271de279490-74726546',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'refine_search_items_limit' => 0,
    'listingTypes' => 0,
    'listingType' => 0,
    'fields' => 0,
    'saved_fields' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_549271df7386c9_17619724',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_549271df7386c9_17619724')) {function content_549271df7386c9_17619724($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cycle')) include 'D:\\xampp\\htdocs\\tuyendungvn\\system\\ext\\Smarty\\libs\\plugins\\function.cycle.php';
?><?php $_smarty_tpl->smarty->_tag_stack[] = array('breadcrumbs', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['breadcrumbs'][0][0]->_tpl_breadcrumbs(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Refine Search Settings<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['breadcrumbs'][0][0]->_tpl_breadcrumbs(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<h1><img src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['image'][0][0]->getImageURL(array(),$_smarty_tpl);?>
/icons/search32.png" border="0" alt="" class="titleicon"/>Refine Search Settings</h1>

<form method="post" action="">
	<input type="hidden" name="action" value="save_setting" />
	<p>Items Limit: <input type="text" name="refine_search_items_limit" value="<?php echo $_smarty_tpl->tpl_vars['refine_search_items_limit']->value;?>
" /> <input type="submit" value="Save" class="greenButton"/>
	<br /><small>Specify the limit for the number of items to be displayed in Refine Search blocks</small></p>
</form>

<?php  $_smarty_tpl->tpl_vars['listingType'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['listingType']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['listingTypes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['listingType']->key => $_smarty_tpl->tpl_vars['listingType']->value){
$_smarty_tpl->tpl_vars['listingType']->_loop = true;
?>
    <fieldset>
        <legend><?php echo $_smarty_tpl->tpl_vars['listingType']->value['id'];?>
 Search</legend>
        <form method="post" action="">
            <input type="hidden" name="action" value="save_setting" />
            <input type="hidden" name="listing_type_id" value="<?php echo $_smarty_tpl->tpl_vars['listingType']->value['id'];?>
" />
            <input type="hidden" name="turn_on_refine_search_<?php echo $_smarty_tpl->tpl_vars['listingType']->value['id'];?>
" value="0">
            <input type="checkbox" name="turn_on_refine_search_<?php echo $_smarty_tpl->tpl_vars['listingType']->value['id'];?>
"  value="1" <?php if ($_smarty_tpl->tpl_vars['listingType']->value['setting']){?>checked<?php }?> onchange='form.submit();' /> Turn on Refine Search
        </form>
        <form method="post" action="">
            <input type="hidden" name="action" value="save" />
            <input type="hidden" name="listing_type_sid" value="<?php echo $_smarty_tpl->tpl_vars['listingType']->value['sid'];?>
" />
            <select name='field_id' style="float: left;">
                <?php  $_smarty_tpl->tpl_vars['fields'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['fields']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['listingType']->value['fields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['fields']->key => $_smarty_tpl->tpl_vars['fields']->value){
$_smarty_tpl->tpl_vars['fields']->_loop = true;
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['fields']->value['sid'];?>
"><?php echo $_smarty_tpl->tpl_vars['fields']->value['caption'];?>
</option>
                <?php } ?>
                <?php if ($_smarty_tpl->tpl_vars['listingType']->value['user_fields']['id']){?>
                    <option value="user_<?php echo $_smarty_tpl->tpl_vars['listingType']->value['user_fields']['sid'];?>
"><?php echo $_smarty_tpl->tpl_vars['listingType']->value['user_fields']['id'];?>
</option>
                <?php }?>
            </select><span class="greenButtonInEnd"><input type="submit" value="Add" class="grayButton" style="margin: 0 0 10px 10px;"/></span>
        </form>
        <br/>
        <table>
            <thead>
                <tr>
                    <th>Field Name</th>
                    <th colspan="3" width="1%" class="actions">Actions</th>
                </tr>
            </thead>
            <?php  $_smarty_tpl->tpl_vars['saved_fields'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['saved_fields']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['listingType']->value['saved_fields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['saved_fields']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['items_block']['total'] = $_smarty_tpl->tpl_vars['saved_fields']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['items_block']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['saved_fields']->key => $_smarty_tpl->tpl_vars['saved_fields']->value){
$_smarty_tpl->tpl_vars['saved_fields']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['items_block']['iteration']++;
?>
            <tr class="<?php echo smarty_function_cycle(array('values'=>'evenrow,oddrow'),$_smarty_tpl);?>
">
                <td width="100%"><?php echo $_smarty_tpl->tpl_vars['saved_fields']->value['caption'];?>
</td>
                <td nowrap="nowrap"><a href="?field_id=<?php echo $_smarty_tpl->tpl_vars['saved_fields']->value['id'];?>
&action=delete" onclick='return confirm("Are you sure you want to delete this field?")' title="Delete" class="deletebutton">Delete</a></td>
                <td nowrap="nowrap">
                    <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['items_block']['iteration']<$_smarty_tpl->getVariable('smarty')->value['foreach']['items_block']['total']){?>
                        <a href="?field_id=<?php echo $_smarty_tpl->tpl_vars['saved_fields']->value['id'];?>
&amp;listing_type_sid=<?php echo $_smarty_tpl->tpl_vars['listingType']->value['sid'];?>
&amp;action=move_down"><img src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['image'][0][0]->getImageURL(array(),$_smarty_tpl);?>
b_down_arrow.gif" border="0" alt=""/></a>
                    <?php }?>
                </td>
                <td nowrap="nowrap">
                    <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['items_block']['iteration']>1){?>
                        <a href="?field_id=<?php echo $_smarty_tpl->tpl_vars['saved_fields']->value['id'];?>
&amp;listing_type_sid=<?php echo $_smarty_tpl->tpl_vars['listingType']->value['sid'];?>
&amp;action=move_up"><img src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['image'][0][0]->getImageURL(array(),$_smarty_tpl);?>
b_up_arrow.gif" border="0" alt=""/></a>
                    <?php }?>
                </td>
            </tr>
            <?php } ?>
        </table>
    </fieldset>
    <br/>
<?php } ?><?php }} ?>