<?php /* Smarty version Smarty-3.1.13, created on 2014-12-22 22:24:32
         compiled from "template__system/admin_admin:d:\xampp\htdocs\tuyendungvn\templates\_system\admin\template_manager\edit_template.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20889549837b0b3d624-74817090%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7c196ab92220723036a4cdf96c5dc956c87e3370' => 
    array (
      0 => 'template__system/admin_admin:d:\\xampp\\htdocs\\tuyendungvn\\templates\\_system\\admin\\template_manager\\edit_template.tpl',
      1 => 1375065022,
      2 => 'template__system/admin_admin',
    ),
  ),
  'nocache_hash' => '20889549837b0b3d624-74817090',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'template_name' => 0,
    'GLOBALS' => 0,
    'LIST_FUNCTIONS' => 0,
    'KEY_MOD' => 0,
    'VALUE_ARRAY_FUNC' => 0,
    'KEY_FUNC' => 0,
    'VALUE_FUNC' => 0,
    'LIST_PARAMS' => 0,
    'VALUE_ARRAY_PARAM' => 0,
    'KEY_PARAM' => 0,
    'VALUE_PARAM' => 0,
    'ERROR' => 0,
    'show_insert_form' => 0,
    'LIST_MODULES' => 0,
    'VALUE_MOD' => 0,
    'user_page' => 0,
    'template_content' => 0,
    'module_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_549837b2de1a78_83644021',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_549837b2de1a78_83644021')) {function content_549837b2de1a78_83644021($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['template_name']->value=='display_resume.tpl'||$_smarty_tpl->tpl_vars['template_name']->value=='display_job.tpl'||$_smarty_tpl->tpl_vars['template_name']->value=='search_form_resumes.tpl'||$_smarty_tpl->tpl_vars['template_name']->value=='search_form.tpl'){?>
	<p class="note">Warning: If you want to change the layout of this form please use <a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/form-builders/">From Builder</a>. Direct changing of this template may lead to unpredictable results.</p>
<?php }?>
<script language="JavaScript" type="text/javascript">
<!--//

var ModulesFunctions = new Array();
<?php  $_smarty_tpl->tpl_vars['VALUE_ARRAY_FUNC'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['VALUE_ARRAY_FUNC']->_loop = false;
 $_smarty_tpl->tpl_vars['KEY_MOD'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['LIST_FUNCTIONS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['VALUE_ARRAY_FUNC']->key => $_smarty_tpl->tpl_vars['VALUE_ARRAY_FUNC']->value){
$_smarty_tpl->tpl_vars['VALUE_ARRAY_FUNC']->_loop = true;
 $_smarty_tpl->tpl_vars['KEY_MOD']->value = $_smarty_tpl->tpl_vars['VALUE_ARRAY_FUNC']->key;
?>  				    	
	ModulesFunctions["<?php echo $_smarty_tpl->tpl_vars['KEY_MOD']->value;?>
"]=[[-1,'Choose function:']<?php  $_smarty_tpl->tpl_vars['VALUE_FUNC'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['VALUE_FUNC']->_loop = false;
 $_smarty_tpl->tpl_vars['KEY_FUNC'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['VALUE_ARRAY_FUNC']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['VALUE_FUNC']->key => $_smarty_tpl->tpl_vars['VALUE_FUNC']->value){
$_smarty_tpl->tpl_vars['VALUE_FUNC']->_loop = true;
 $_smarty_tpl->tpl_vars['KEY_FUNC']->value = $_smarty_tpl->tpl_vars['VALUE_FUNC']->key;
?>,[<?php echo $_smarty_tpl->tpl_vars['KEY_FUNC']->value;?>
,'<?php echo $_smarty_tpl->tpl_vars['VALUE_FUNC']->value;?>
']<?php } ?>];
<?php } ?>

var Params = new Array();
<?php  $_smarty_tpl->tpl_vars['VALUE_ARRAY_FUNC'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['VALUE_ARRAY_FUNC']->_loop = false;
 $_smarty_tpl->tpl_vars['KEY_MOD'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['LIST_PARAMS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['VALUE_ARRAY_FUNC']->key => $_smarty_tpl->tpl_vars['VALUE_ARRAY_FUNC']->value){
$_smarty_tpl->tpl_vars['VALUE_ARRAY_FUNC']->_loop = true;
 $_smarty_tpl->tpl_vars['KEY_MOD']->value = $_smarty_tpl->tpl_vars['VALUE_ARRAY_FUNC']->key;
?>
  <?php  $_smarty_tpl->tpl_vars['VALUE_ARRAY_PARAM'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['VALUE_ARRAY_PARAM']->_loop = false;
 $_smarty_tpl->tpl_vars['KEY_FUNC'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['VALUE_ARRAY_FUNC']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['VALUE_ARRAY_PARAM']->key => $_smarty_tpl->tpl_vars['VALUE_ARRAY_PARAM']->value){
$_smarty_tpl->tpl_vars['VALUE_ARRAY_PARAM']->_loop = true;
 $_smarty_tpl->tpl_vars['KEY_FUNC']->value = $_smarty_tpl->tpl_vars['VALUE_ARRAY_PARAM']->key;
?>
     Params["<?php echo $_smarty_tpl->tpl_vars['KEY_MOD']->value;?>
", "<?php echo $_smarty_tpl->tpl_vars['KEY_FUNC']->value;?>
"]=[[-1,'reserved']<?php  $_smarty_tpl->tpl_vars['VALUE_PARAM'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['VALUE_PARAM']->_loop = false;
 $_smarty_tpl->tpl_vars['KEY_PARAM'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['VALUE_ARRAY_PARAM']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['VALUE_PARAM']->key => $_smarty_tpl->tpl_vars['VALUE_PARAM']->value){
$_smarty_tpl->tpl_vars['VALUE_PARAM']->_loop = true;
 $_smarty_tpl->tpl_vars['KEY_PARAM']->value = $_smarty_tpl->tpl_vars['VALUE_PARAM']->key;
?>,[<?php echo $_smarty_tpl->tpl_vars['KEY_PARAM']->value;?>
,'<?php echo $_smarty_tpl->tpl_vars['VALUE_PARAM']->value;?>
']<?php } ?>];
  <?php } ?>   
<?php } ?>



function loadFunctionsForModule(form) {	
    document.getElementById("table_params").innerHTML = '';	
    
	module_value = form.modules.options[form.modules.selectedIndex].text;
	form.functions.options.length=0;
	for (var i = 0; i < ModulesFunctions[module_value].length; i++) {
		newOpt = document.createElement("option");
		newOpt.text = ModulesFunctions[module_value][i][1];
		form.functions.options.add(newOpt);
	}	
}

function loadParamsForFunction() {
  document.getElementById("table_params").innerHTML = '<b>There are no parameters for this function</b>';
  cbModules=document.getElementById("modules");
  cbFunctions=document.getElementById("functions");	  
  module_value = cbModules[cbModules.selectedIndex].text;
  function_value = cbFunctions[cbFunctions.selectedIndex].text;  


  if ( (module_value != "Choose module:") && (function_value != "Choose function:") ) {
     strHTML = '';     
     for (var i = 1; i < Params[module_value,function_value].length; i++) {
        str_key = 'value_param' + (i-1);
        
        strHTML = strHTML + "<tr><td>"+ Params[module_value,function_value][i][1] +
         		  "</td><td>= <input type='text' name='"+ Params[module_value,function_value][i][1] +"' id='"+ str_key +"' value='' class='text' size=15> </td></tr>";   		   						           		  
     } //for
     if (strHTML != '') {
     	strHTML = '<table class="fieldset" name="table_parameters">'+ strHTML + '</table>';
     	document.getElementById("table_params").innerHTML = strHTML;     
     }     
  } //if
}

function insertStr() {
	editor.focus();
	var cbModules = document.getElementById("modules");
	var cbFunctions = document.getElementById("functions");
	var module_value = cbModules[cbModules.selectedIndex].text;
	var function_value = cbFunctions[cbFunctions.selectedIndex].text;

	if ((module_value != "Choose module:") && (function_value != "Choose function:")) {
		var str_param = '';
		var i = 0;
		while (1 == 1) {
			var param = document.getElementById("value_param" + i);
			if (param == null) {
				break;
			}
			var key_param = param.name;
			var value_param = trim(param.value);
			if (value_param != '') {
				if (str_param == '') {
					str_param = key_param + "=\"" + value_param + "\"";
				} else {
					str_param = str_param + " " + key_param + "=\"" + value_param + "\"";
				}
			}
			i++;
		}
		var editorCursor = editor.getCursor();
		var currentLine = editor.getLine(editorCursor.line);
		var scroll = editor.getScrollInfo();
		if (str_param != '') {
			str_param = " " + str_param;
		}
		var str_ins = "{module name=\"" + module_value + "\" function=\"" + function_value + "\"" + str_param + "}";
		currentLine = currentLine.substr(0, editorCursor.ch) + str_ins + currentLine.substr(editorCursor.ch);
		editor.setLine(editorCursor.line, currentLine);
		editor.scrollTo(scroll.x, scroll.y);
		editor.save();
	}
}


//-->
</script>
<?php if ($_smarty_tpl->tpl_vars['ERROR']->value){?>
	<?php if ($_smarty_tpl->tpl_vars['ERROR']->value=="MODULE_DOES_NOT_EXIST"){?>
		<p class="error">There is no such module.</p>
	<?php }elseif($_smarty_tpl->tpl_vars['ERROR']->value=="TEMPLATE_DOES_NOT_EXIST"){?>
		<p class="error">There is no such template.</p>
	<?php }elseif($_smarty_tpl->tpl_vars['ERROR']->value=="NOT_ALLOWED_IN_DEMO"){?>
		<p class="error">Template is not editable in demo.</p>
	<?php }elseif($_smarty_tpl->tpl_vars['ERROR']->value=="CANNOT_FETCH_TEMPLATE"){?>
		<p class="error">Cannot fetch template "<?php echo $_smarty_tpl->tpl_vars['template_name']->value;?>
"</p>
	<?php }elseif($_smarty_tpl->tpl_vars['ERROR']->value=="TEMPLATE_IS_NOT_WRITEABLE"){?>
		<p class="error">Template is not writeable.</p>
	<?php }else{ ?>
		<p class="error"><?php echo $_smarty_tpl->tpl_vars['ERROR']->value;?>
</p>
	<?php }?>
<?php }else{ ?>
	<?php if ($_smarty_tpl->tpl_vars['show_insert_form']->value==0){?>
		<div class="clr"><br/></div>
		<div class="setting_button" id="fullButton"><strong>Click to insert module function</strong><div class="setting_icon"><div id="accordeonClosed"></div></div></div>
		<div class="setting_block" id="fullSettingBlock" style="display: none">
	<?php }else{ ?>
		<div class="setting_block" id="fullSettingBlock">
	<?php }?>

    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['user_site_url'];?>
/system/ext/CodeMirror/lib/codemirror.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['user_site_url'];?>
/system/ext/CodeMirror/theme/default.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['user_site_url'];?>
/system/ext/CodeMirror/mode/smartyhtmlmixed/smartyhtmlmixed.css">

    <script src="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['user_site_url'];?>
/system/ext/CodeMirror/lib/util/match-highlighter.js"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['user_site_url'];?>
/system/ext/CodeMirror/lib/codemirror.js"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['user_site_url'];?>
/system/ext/CodeMirror/mode/javascript/javascript.js"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['user_site_url'];?>
/system/ext/CodeMirror/mode/xml/xml.js"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['user_site_url'];?>
/system/ext/CodeMirror/mode/css/css.js"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['user_site_url'];?>
/system/ext/CodeMirror/mode/smarty/smarty.js"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['user_site_url'];?>
/system/ext/CodeMirror/mode/smartyhtmlmixed/smartyhtmlmixed.js"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['user_site_url'];?>
/system/ext/CodeMirror/lib/util/search.js"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['user_site_url'];?>
/system/ext/CodeMirror/lib/util/searchcursor.js"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['user_site_url'];?>
/system/ext/CodeMirror/lib/util/dialog.js"></script>

    <script type="text/javascript">
		
            //first set up some variables
            var textarea = document.getElementById('template_content');
            var uiOptions = { path : 'js/', searchMode : 'popup' }
            var codeMirrorOptions = { mode: "javascript" }

            //then create the editor
            var editor = new CodeMirrorUI(textarea,uiOptions,codeMirrorOptions);
		
    </script>

	<form action="" method="POST" id="form1">
		<table width="100%" id="clearTable">
			<tr>
			<td valign="top">
				<table width="100%" id="clearTable">
					<tr>
						<td>Module</td>
						<td>
							<select size="1" name="module" id="modules" onchange="loadFunctionsForModule(this.form)" language="Javascript">
								<option selected>Choose module:</option>
							    <?php  $_smarty_tpl->tpl_vars['VALUE_MOD'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['VALUE_MOD']->_loop = false;
 $_smarty_tpl->tpl_vars['KEY_MOD'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['LIST_MODULES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['VALUE_MOD']->key => $_smarty_tpl->tpl_vars['VALUE_MOD']->value){
$_smarty_tpl->tpl_vars['VALUE_MOD']->_loop = true;
 $_smarty_tpl->tpl_vars['KEY_MOD']->value = $_smarty_tpl->tpl_vars['VALUE_MOD']->key;
?>
								    <option> <?php echo $_smarty_tpl->tpl_vars['VALUE_MOD']->value;?>
 </option>
							    <?php } ?>
							</select>

						</td>
					</tr>
					<tr>
						<td>Function</td>
						<td>
							<select size="1" name="function" id="functions" onchange="loadParamsForFunction()" language="Javascript">
								<option selected>Choose function:</option>
							    <?php  $_smarty_tpl->tpl_vars['VALUE_FUNC'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['VALUE_FUNC']->_loop = false;
 $_smarty_tpl->tpl_vars['KEY_FUNC'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['LIST_FUNCTIONS']->value[$_smarty_tpl->tpl_vars['user_page']->value['module']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['VALUE_FUNC']->key => $_smarty_tpl->tpl_vars['VALUE_FUNC']->value){
$_smarty_tpl->tpl_vars['VALUE_FUNC']->_loop = true;
 $_smarty_tpl->tpl_vars['KEY_FUNC']->value = $_smarty_tpl->tpl_vars['VALUE_FUNC']->key;
?>
								    <option> <?php echo $_smarty_tpl->tpl_vars['VALUE_FUNC']->value;?>
 </option>
							    <?php } ?>
							</select>
						</td>
					</tr>
				</table>
	        </td>
	        </tr>
	    </table>

	    <table width="100%" id="clearTable">
	        <tr>
	            <td>Parameters:</td>
	        </tr>
			<tr>
				<td><div id="table_params"></div></td>
			</tr>
			<tr>
				<td><input type="button" class="grayButton" name="btnInsStr" value=" Insert" size=5  onclick="insertStr(this.form)" LANGUAGE="Javascript"></td>
			</tr>
		</table>
	</div>

	<table width="100%">
		<tr>
			<td><textarea id="template_content" name="template_content" style="width:100%;height:400px"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['template_content']->value, ENT_QUOTES, 'UTF-8', true);?>
</textarea></td>
		</tr>
		<tr id="clearTable">
			<td>
                <div class="floatRight">
                    <input type="submit" id="apply_text" value="Apply" class="grayButton"/>
                    <input type="submit" value="Save" class="grayButton" />
                </div>
            </td>
		</tr>
	</table>
    <script type="text/javascript">
		
            var editor = CodeMirror.fromTextArea(document.getElementById("template_content"), {
                lineNumbers: true,
                matchBrackets: true,
                mode: "smartymixed",
                indentUnit: 5,
                indentWithTabs: true,
                enterMode: "keep",
                tabMode: "shift",
                theme: "default"
            });
		
    </script>

		<!--<input type="button" name="btnInsStr" value=" Insert" size=5  onclick="insertStr(this.form)" LANGUAGE="Javascript">-->

		<input type="hidden" name="template_name" value="<?php echo $_smarty_tpl->tpl_vars['template_name']->value;?>
">
		<input type="hidden" name="module_name" value="<?php echo $_smarty_tpl->tpl_vars['module_name']->value;?>
">
		<input type="hidden" id="action" name="action" value="save_template">
	</form>
<?php }?>

<script type="text/javascript">
	

	$( function() {

		$(".setting_button").click(function(){
			var butt = $(this);
			$(this).next(".setting_block").slideToggle("normal", function(){
					if ($(this).css("display") == "block") {
						butt.children(".setting_icon").html("<div id='accordeonOpen'></div>");
						butt.children("strong").text("Click to hide");
					} else {
						butt.children(".setting_icon").html("<div id='accordeonClosed'></div>");
						butt.children("strong").text("Click to insert module function");
					}
				});
		});

	    $('#apply_text').click(
	        function(){
	            $('#action').attr('value', 'apply_template');
	        }
	    );
	});

	
</script>
<?php }} ?>