<?php /* Smarty version Smarty-3.1.13, created on 2014-12-22 22:27:09
         compiled from "template__system/admin_admin:d:\xampp\htdocs\tuyendungvn\templates\_system\admin\news\categories_list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:107095498384d400341-31029958%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b55d9fee3942c5d4470d0174ce72e52f22076845' => 
    array (
      0 => 'template__system/admin_admin:d:\\xampp\\htdocs\\tuyendungvn\\templates\\_system\\admin\\news\\categories_list.tpl',
      1 => 1370224368,
      2 => 'template__system/admin_admin',
    ),
  ),
  'nocache_hash' => '107095498384d400341-31029958',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'messages' => 0,
    'message' => 0,
    'GLOBALS' => 0,
    'archive_category' => 0,
    'show_news_on_main_page' => 0,
    'number_news_on_main_page' => 0,
    'main_page_news_display_mode' => 0,
    'categories' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5498384ef33c78_67262966',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5498384ef33c78_67262966')) {function content_5498384ef33c78_67262966($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cycle')) include 'D:\\xampp\\htdocs\\tuyendungvn\\system\\ext\\Smarty\\libs\\plugins\\function.cycle.php';
?><?php $_smarty_tpl->smarty->_tag_stack[] = array('breadcrumbs', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['breadcrumbs'][0][0]->_tpl_breadcrumbs(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
News Categories<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['breadcrumbs'][0][0]->_tpl_breadcrumbs(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<h1><img src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['image'][0][0]->getImageURL(array(),$_smarty_tpl);?>
/icons/linedpaper32.png" border="0" alt="" class="titleicon"/>News Categories</h1>
<?php echo $_smarty_tpl->getSubTemplate ('../classifieds/field_errors.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php if ($_smarty_tpl->tpl_vars['messages']->value){?>
	<?php  $_smarty_tpl->tpl_vars['message'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['message']->_loop = false;
 $_smarty_tpl->tpl_vars['number'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['messages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['message']->key => $_smarty_tpl->tpl_vars['message']->value){
$_smarty_tpl->tpl_vars['message']->_loop = true;
 $_smarty_tpl->tpl_vars['number']->value = $_smarty_tpl->tpl_vars['message']->key;
?>
		<?php if ($_smarty_tpl->tpl_vars['message']->value=='NEWS_CATEGORY_SUCCESSFULLY_ADDED'){?><p class="message"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
You have successfully added the news category<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</p><?php }?>
		<?php if ($_smarty_tpl->tpl_vars['message']->value=='NEWS_SETTINGS_SUCCESSFULLY_SAVED'){?><p class="message"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Your changes were successfully saved<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</p><?php }?>
		<?php if ($_smarty_tpl->tpl_vars['message']->value=='NEWS_CATEGORY_SUCCESSFULLY_DELETED'){?><p class="message"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
You have successfully deleted the news category<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</p><?php }?>
	<?php } ?>
<?php }?>
<p><a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/news-categories/?action=edit&category_sid=<?php echo $_smarty_tpl->tpl_vars['archive_category']->value['sid'];?>
" class="grayButton">View Archive</a></p>
<form action="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/news-categories/">
	<input type="hidden" name="action" value="save_display_setting" />
	<table>
        <thead>
            <tr>
                <td colspan="2">
                    <b>News Display</b>
                </td>
            </tr>
        </thead>
        <tbody>
            <tr class="<?php echo smarty_function_cycle(array('values'=>'evenrow,oddrow'),$_smarty_tpl);?>
 id="clearTable">
                    <td>Display News Block</td>
                    <td align=center>
                        <select name="settings[show_news_on_main_page]">
                            <option value="0"<?php if ($_smarty_tpl->tpl_vars['show_news_on_main_page']->value==0){?> selected="selected"<?php }?>>disable</option>
                            <option value="1"<?php if ($_smarty_tpl->tpl_vars['show_news_on_main_page']->value==1){?> selected="selected"<?php }?>>enable</option>
                        </select>
                    </td>
            </tr>
            <tr class="<?php echo smarty_function_cycle(array('values'=>'evenrow,oddrow'),$_smarty_tpl);?>
 id="clearTable">
                <td>Number of News to Display on Homepage</td>
                <td><input type="text" name="settings[number_news_on_main_page]" value="<?php echo $_smarty_tpl->tpl_vars['number_news_on_main_page']->value;?>
" /></td>
            </tr>
            <tr class="<?php echo smarty_function_cycle(array('values'=>'evenrow,oddrow'),$_smarty_tpl);?>
">
                <td>Display Mode</td>
                <td>
                    <select name="settings[main_page_news_display_mode]">
                        <option <?php if ($_smarty_tpl->tpl_vars['main_page_news_display_mode']->value=='rotation'){?>selected="selected"<?php }?> value="rotation">rotation</option>
                        <option <?php if ($_smarty_tpl->tpl_vars['main_page_news_display_mode']->value=='latest'){?>selected="selected"<?php }?> value="latest">latest news</option>
                    </select>
                </td>
            </tr>
            <tr class="<?php echo smarty_function_cycle(array('values'=>'evenrow,oddrow'),$_smarty_tpl);?>
">
                <td colspan="2" style="text-align: right;">
                    <span class="greenButtonEnd"><input type="submit" name="news_switch" value="Apply" class="greenButton" /></span>
                </td>
            </tr>
        </tbody>
	</table>
</form>

<div class="clr"><br /></div>

<form action="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/news-categories/" method=post>
	<fieldset>
		<legend>Add a New Category</legend>
		<input type= "hidden" name="action" value= "add">
		<table class="fieldset">
			<tr class="">
				<td>Category Name</td>
				<td><input type="text" name="category_name" value=""> <input type="submit" value="Add" class="grayButton" /></td>
			</tr>
		</table>
	</fieldset>
</form>

<div class="clr"><br /></div>

<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/news-categories/" name="resultsForm">
	<input type="hidden" name="action" id="action" value="">
	<table>
		<thead>
			<tr>
				<th>Category Name</th>
				<th>Number of News</th>
				<th colspan="2" class="actions">Actions</th>
				<th></th>
				<th></th>
			</tr>
		</thead>
		<tbodY>
			<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['item']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['categories']['total'] = $_smarty_tpl->tpl_vars['item']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['categories']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['categories']['iteration']++;
?>
				<?php if ($_smarty_tpl->tpl_vars['item']->value['name']!='archive'&&$_smarty_tpl->tpl_vars['item']->value['name']!='Archive'){?>
				<tr class="<?php echo smarty_function_cycle(array('values'=>'evenrow,oddrow','advance'=>false),$_smarty_tpl);?>
" onmouseover="this.className='highlightrow'" onmouseout="this.className='<?php echo smarty_function_cycle(array('values'=>'evenrow,oddrow'),$_smarty_tpl);?>
'">
					<td><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['item']->value['count'];?>
</td>
					<td><a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/news-categories/?action=edit&category_sid=<?php echo $_smarty_tpl->tpl_vars['item']->value['sid'];?>
" title="Edit" class="editbutton">Edit</a></td>
					<td><a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/news-categories/?action=delete&category_sid=<?php echo $_smarty_tpl->tpl_vars['item']->value['sid'];?>
" onclick="return confirm('All News of this Category will be deleted as well. Delete this Category?')" title="Delete" class="deletebutton">Delete</a></td>
					<td>
						<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['categories']['iteration']<$_smarty_tpl->getVariable('smarty')->value['foreach']['categories']['total']){?>
							<a href="?category_sid=<?php echo $_smarty_tpl->tpl_vars['item']->value['sid'];?>
&amp;action=move_down"><img src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['image'][0][0]->getImageURL(array(),$_smarty_tpl);?>
b_down_arrow.gif" border="0" alt=""/></a>
						<?php }?> 
					</td>
					<td>
						<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['categories']['iteration']>1){?>
							<a href="?category_sid=<?php echo $_smarty_tpl->tpl_vars['item']->value['sid'];?>
&amp;action=move_up"><img src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['image'][0][0]->getImageURL(array(),$_smarty_tpl);?>
b_up_arrow.gif" border="0" alt=""/></a>
						<?php }?> 
					</td>
				</tr>
				<?php }?>
			<?php } ?>
		</tbodY>
	</table>
</form>

<script>
	
		function submitForm(action) {
			document.getElementById('action').value = action;
			var form = document.resultsForm;
			form.submit();
		}
	
</script><?php }} ?>