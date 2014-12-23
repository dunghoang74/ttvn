<?php /* Smarty version Smarty-3.1.13, created on 2014-12-22 22:24:01
         compiled from "template__system/admin_admin:d:\xampp\htdocs\tuyendungvn\templates\_system\admin\template_manager\add_template.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2070754983791483f80-98347302%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'da15c77fd21753b41c4234f17ce068f4293940db' => 
    array (
      0 => 'template__system/admin_admin:d:\\xampp\\htdocs\\tuyendungvn\\templates\\_system\\admin\\template_manager\\add_template.tpl',
      1 => 1383553008,
      2 => 'template__system/admin_admin',
    ),
  ),
  'nocache_hash' => '2070754983791483f80-98347302',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tpl_error' => 0,
    'theError' => 0,
    'GLOBALS' => 0,
    'template_name' => 0,
    'module_list' => 0,
    'system_module_name' => 0,
    'module_name' => 0,
    'module_info' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5498379216b2e8_08916366',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5498379216b2e8_08916366')) {function content_5498379216b2e8_08916366($_smarty_tpl) {?><div class="clr"></div>
<?php  $_smarty_tpl->tpl_vars['theError'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['theError']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tpl_error']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['theError']->key => $_smarty_tpl->tpl_vars['theError']->value){
$_smarty_tpl->tpl_vars['theError']->_loop = true;
?>
    <?php if ($_smarty_tpl->tpl_vars['theError']->value=='FILE_EXISTS'){?>
        <p class="error">such template already exists</p>
    <?php }elseif($_smarty_tpl->tpl_vars['theError']->value=='MODULE_ERROR'){?>
        <p class="error">there is no such module in system</p>
    <?php }elseif($_smarty_tpl->tpl_vars['theError']->value=='NOT_VALID_FILENAME_FORMAT'){?>
        <p class="error">not valid filename format</p>
    <?php }?>
<?php } ?>
<div class="clr"></div>
<form class="add-template" action="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/edit-templates/" method="post" onsubmit="disableSubmitButton('submitAddTemplate');">
    <fieldset  style="max-width: <?php if ($_smarty_tpl->tpl_vars['template_name']->value){?>740px;<?php }else{ ?>660px;<?php }?>">
        <legend><?php if ($_smarty_tpl->tpl_vars['template_name']->value){?>Edit Template<?php }else{ ?>Add a New Template<?php }?></legend>
        <label for="templ_name">Template Name</label>
        <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['template_name']->value;?>
" name="templ_name" id="templ_name"/>
        <label for="templ_module">Module Name</label>
        <select name="templ_module" id="templ_module">
            <?php  $_smarty_tpl->tpl_vars["module_info"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["module_info"]->_loop = false;
 $_smarty_tpl->tpl_vars["system_module_name"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['module_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["module_info"]->key => $_smarty_tpl->tpl_vars["module_info"]->value){
$_smarty_tpl->tpl_vars["module_info"]->_loop = true;
 $_smarty_tpl->tpl_vars["system_module_name"]->value = $_smarty_tpl->tpl_vars["module_info"]->key;
?>
            <option <?php if ($_smarty_tpl->tpl_vars['system_module_name']->value==$_smarty_tpl->tpl_vars['module_name']->value){?>selected<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['system_module_name']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['module_info']->value['display_name'];?>
</option>
            <?php }
if (!$_smarty_tpl->tpl_vars["module_info"]->_loop) {
?>
            <option value=""><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
No module is available<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</option>
            <?php } ?>
        </select>
        <?php if ($_smarty_tpl->tpl_vars['template_name']->value){?>
	        <input type="hidden" name="action" value="edit"/>
	        <input type="hidden" name="templ_module_or" value="<?php echo $_smarty_tpl->tpl_vars['module_name']->value;?>
"/>
	        <input type="hidden" name="templ_name_or" value="<?php echo $_smarty_tpl->tpl_vars['template_name']->value;?>
"/>
            <input type="hidden" id="submit" name="submit" value="save_template">
            <input type="submit" id="apply_name" value="Apply" class="grayButton"/>
	        <input type="submit" value="Save" onclick="return confirm('Changing Template name may affect the front-end pages work. Are you sure you want to rename/move this Template?');" class="grayButton" />
        <?php }else{ ?>
	        <input type="hidden" name="action" value="add"/>
			<input type="submit" value="<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Add<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
" name="add_template" class="grayButton" id="submitAddTemplate" />
        <?php }?>
    </fieldset>
</form>


	<script>
        $('#apply_name').click(
            function(){
                $('#submit').attr('value', 'apply_template');
            }
        );
    </script>
<?php }} ?>