<?php /* Smarty version Smarty-3.1.13, created on 2014-12-22 20:00:18
         compiled from "template_tuyendungvn_user:d:\xampp\htdocs\tuyendungvn\templates\tuyendungvn\miscellaneous\mailchimp_subscribe.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2754549815e27d4f12-89068029%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f337c3026f3c31bbbc1dcf2e3269b3377be01f9f' => 
    array (
      0 => 'template_tuyendungvn_user:d:\\xampp\\htdocs\\tuyendungvn\\templates\\tuyendungvn\\miscellaneous\\mailchimp_subscribe.tpl',
      1 => 1418396454,
      2 => 'template_tuyendungvn_user',
    ),
  ),
  'nocache_hash' => '2754549815e27d4f12-89068029',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'error' => 0,
    'message' => 0,
    'GLOBALS' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_549815e342f7e3_99023827',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_549815e342f7e3_99023827')) {function content_549815e342f7e3_99023827($_smarty_tpl) {?><div id="mailchimp-newsletter">
	<div id="mailchimp-nl-cont">
		<?php if ($_smarty_tpl->tpl_vars['error']->value){?>
			<p class="error">
				<?php if ($_smarty_tpl->tpl_vars['error']->value=='EMPTY_FIELD'){?>
					<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
All fields are required!<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

				<?php }else{ ?>
					<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['error']->value;?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

				<?php }?>
			</p>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['message']->value){?>
			<p class="message"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['message']->value;?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</p>
		<?php }?>
		<form action="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/system/miscellaneous/mailchimp/" method="get" id="mailchimp-form">
			<p class="mailchimp-nl-desc"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Fill the form to subscribe<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</p>
			<fieldset><label for="mch_name"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Your name<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
:</label><input type="text" name="mch_name" id="mch_name"/></fieldset>
			<fieldset><label for="mch_email"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Email<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
:</label><input type="text" name="mch_email" id="mch_email"/></fieldset>
			<fieldset><input type="submit" name="subscribe" value="<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Subscribe<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
" id="mch_subscribe"/></fieldset>
		</form>
	</div>
</div>

<script type="text/javascript">
	
	$(document).ready(function(){
		$("#mch_subscribe").live("click", function(){
			var oEmail = $("#mch_email");
			var oName = $("#mch_name");
			var email = oEmail.val();
			var name = oName.val();
			var error = false;
			if (!email || !name){
				error = true;
			}
			if (!error) {
				var content = $("#mailchimp-nl-cont");
				content.html("<img src=\"<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/templates/_system/main/images/ajax_preloader_circular_32.gif\" />")
					.css("text-align", "center");
				$.ajax({
					url: '<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/system/miscellaneous/mailchimp/',
					type: "GET",
					data: "mch_name="+name+"&mch_email="+email+"&subscribe=1",
					success: function(data) {
						content.html($(data).find("#mailchimp-nl-cont"));
					}
				});
			}
			return false;
		});
	});
	
</script>

<?php }} ?>