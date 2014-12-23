<?php /* Smarty version Smarty-3.1.13, created on 2014-12-18 13:31:22
         compiled from "template__system/admin_admin:../field_types/input/video_profile.tpl" */ ?>
<?php /*%%SmartyHeaderCode:32433549274ba3e5742-46262807%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bad7107d6552ff49299ccab4df260c1f28b7d171' => 
    array (
      0 => 'template__system/admin_admin:../field_types/input/video_profile.tpl',
      1 => 1378267314,
      2 => 'template__system/admin_admin',
    ),
  ),
  'nocache_hash' => '32433549274ba3e5742-46262807',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'GLOBALS' => 0,
    'errors' => 0,
    'key' => 0,
    'id' => 0,
    'complexField' => 0,
    'complexStep' => 0,
    'value' => 0,
    'listing' => 0,
    'user_info' => 0,
    'uploadMaxFilesize' => 0,
    'params' => 0,
    'form_token' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_549274bd31ee53_70053836',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_549274bd31ee53_70053836')) {function content_549274bd31ee53_70053836($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['GLOBALS']->value['is_ajax']||$_GET['ajax_submit']){?>
	<?php  $_smarty_tpl->tpl_vars['error'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['error']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['errors']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['error']->key => $_smarty_tpl->tpl_vars['error']->value){
$_smarty_tpl->tpl_vars['error']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['error']->key;
?>
		<?php if ($_smarty_tpl->tpl_vars['key']->value=='NOT_SUPPORTED_VIDEO_FORMAT'||$_smarty_tpl->tpl_vars['key']->value=='NOT_ACCEPTABLE_FILE_FORMAT'){?>
			<p class="error"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Not supported video format<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</p>
		<?php }elseif($_smarty_tpl->tpl_vars['key']->value==='UPLOAD_ERR_INI_SIZE'){?>
			<p class="error"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
File size exceeds system limit. Please check the file size limits on your hosting or upload another file.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</p>
		<?php }else{ ?>
			<p class="error"><?php echo $_smarty_tpl->tpl_vars['key']->value;?>
</p>
		<?php }?>
	<?php } ?>

	<input id="autoloadFileSelect_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"
			field_id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"
			field_action="upload_profile_video"
			field_target="video_field_content_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"
			type="file"
			name="<?php if ($_smarty_tpl->tpl_vars['complexField']->value){?><?php echo $_smarty_tpl->tpl_vars['complexField']->value;?>
[<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
][<?php echo $_smarty_tpl->tpl_vars['complexStep']->value;?>
]<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['id']->value;?>
<?php }?>"
			class="inputVideo autouploadField <?php if ($_smarty_tpl->tpl_vars['complexField']->value){?>complexField<?php }?>"
			<?php if ($_smarty_tpl->tpl_vars['value']->value['file_url']){?>style="display:none;"<?php }?> />

	<?php if ($_smarty_tpl->tpl_vars['value']->value['file_url']){?>
		<div id="user_video_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" style="float:left;">
			<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['user_site_url'];?>
/files/video/flowplayer-3.2.12.min.js"></script>
			<a href="<?php echo rawurlencode($_smarty_tpl->tpl_vars['value']->value['file_url']);?>
" id="player_<?php echo $_smarty_tpl->tpl_vars['value']->value['file_id'];?>
" class="player"></a>
			<div>
				<script language="JavaScript">
					$f("player_<?php echo $_smarty_tpl->tpl_vars['value']->value['file_id'];?>
", "<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['user_site_url'];?>
/files/video/flowplayer-3.2.16.swf",  {
						clip: {
							url: "<?php echo rawurlencode($_smarty_tpl->tpl_vars['listing']->value['video']['file_url']);?>
",
							autoPlay: false,
							autoBuffering: true,
							scaling: "fit"
						},
						plugins: {
							// default controls with the same background color as the page background
							controls:  {
								backgroundColor: '#1c1c1c',
								backgroundGradient: 'none',
								all:false,
								scrubber:true,
								fullscreen:true,
								play:true,
								volume:true,
								mute:true,
								height:30,
								progressColor: '#6d9e6b',
								bufferColor: '#333333',
								autoHide: false
							},
							// time display positioned into upper right corner
							time: {
								url: "<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['user_site_url'];?>
/files/video/flowplayer.controls-3.2.15.swf",
								top:0,
								backgroundGradient: 'none',
								backgroundColor: 'transparent',
								buttonColor: '#ffffff',
								all: false,
								time: true,
								height:20,
								right:0,
								width:100,
								autoHide: false
							}
						},
						// canvas coloring and custom gradient setting
						canvas: {
							backgroundColor:'#000000',
							backgroundGradient: [0.1, 0]
						}
					});
				</script>
				<br />
				<a class="delete_profile_video"
					field_id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"
					file_id="<?php echo $_smarty_tpl->tpl_vars['value']->value['file_id'];?>
"
					user_sid="<?php echo $_smarty_tpl->tpl_vars['user_info']->value['sid'];?>
"
					href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/users/delete-uploaded-file/?field_id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Remove<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a>
			</div>
			<br />
		</div>
		<span id="extra_field_info_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" style="display:none;"><small>(<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
max.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
 <?php echo $_smarty_tpl->tpl_vars['uploadMaxFilesize']->value;?>
 M)</small></span>
	<?php }else{ ?>
		<small>(<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
max.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
 <?php echo $_smarty_tpl->tpl_vars['uploadMaxFilesize']->value;?>
 M)</small>
	<?php }?>

	<input type="hidden" name="user_group_id" value="<?php if (isset($_smarty_tpl->tpl_vars['GLOBALS']->value['current_user']['group']['id'])){?><?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['current_user']['group']['id'];?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['params']->value['user_group_id'];?>
<?php }?>" />
<?php }else{ ?>
	<div id="video_field_content_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
		<input id="autoloadFileSelect_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"
				field_id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"
				field_action="upload_profile_video"
				field_target="video_field_content_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"
				type="file"
				name="<?php if ($_smarty_tpl->tpl_vars['complexField']->value){?><?php echo $_smarty_tpl->tpl_vars['complexField']->value;?>
[<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
][<?php echo $_smarty_tpl->tpl_vars['complexStep']->value;?>
]<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['id']->value;?>
<?php }?>"
				class="inputVideo autouploadField <?php if ($_smarty_tpl->tpl_vars['complexField']->value){?>complexField<?php }?>"
				<?php if ($_smarty_tpl->tpl_vars['value']->value['file_url']){?>style="display:none;"<?php }?> />

		<input type="hidden" name="user_group_id" value="<?php if (isset($_smarty_tpl->tpl_vars['GLOBALS']->value['current_user']['group']['id'])){?><?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['current_user']['group']['id'];?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['params']->value['user_group_id'];?>
<?php }?>" />

		<?php if ($_smarty_tpl->tpl_vars['value']->value['file_url']){?>
			<div id="user_video_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" style="float:left;">
				<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['user_site_url'];?>
/files/video/flowplayer-3.2.12.min.js"></script>
				<a href="<?php echo rawurlencode($_smarty_tpl->tpl_vars['value']->value['file_url']);?>
" id="player_<?php echo $_smarty_tpl->tpl_vars['value']->value['file_id'];?>
" class="player"></a>
				<div>
					<script language="JavaScript">
						$f("player_<?php echo $_smarty_tpl->tpl_vars['value']->value['file_id'];?>
", "<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['user_site_url'];?>
/files/video/flowplayer-3.2.16.swf",  {
							clip: {
								url: "<?php echo rawurlencode($_smarty_tpl->tpl_vars['listing']->value['video']['file_url']);?>
",
								autoPlay: false,
								autoBuffering: true,
								scaling: "fit"
							},
							plugins: {
								// default controls with the same background color as the page background
								controls:  {
									backgroundColor: '#1c1c1c',
									backgroundGradient: 'none',
									all:false,
									scrubber:true,
									fullscreen:true,
									play:true,
									volume:true,
									mute:true,
									height:30,
									progressColor: '#6d9e6b',
									bufferColor: '#333333',
									autoHide: false
								},
								// time display positioned into upper right corner
								time: {
									url: "<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['user_site_url'];?>
/files/video/flowplayer.controls-3.2.15.swf",
									top:0,
									backgroundGradient: 'none',
									backgroundColor: 'transparent',
									buttonColor: '#ffffff',
									all: false,
									time: true,
									height:20,
									right:0,
									width:100,
									autoHide: false
								}
							},
							// canvas coloring and custom gradient setting
							canvas: {
								backgroundColor:'#000000',
								backgroundGradient: [0.1, 0]
							}
						});
					</script>
					<br />
					<a class="delete_profile_video"
						field_id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"
						file_id="<?php echo $_smarty_tpl->tpl_vars['value']->value['file_id'];?>
"
						user_sid="<?php echo $_smarty_tpl->tpl_vars['user_info']->value['sid'];?>
"
						href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/users/delete-uploaded-file/?field_id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
&form_token=<?php echo $_smarty_tpl->tpl_vars['form_token']->value;?>
"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Remove<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a>
				</div>
				<br />
			</div>
			<span id="extra_field_info_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" style="display:none;"><small>(<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
max.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
 <?php echo $_smarty_tpl->tpl_vars['uploadMaxFilesize']->value;?>
 M)</small></span>
		<?php }else{ ?>
			<small>(<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
max.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
 <?php echo $_smarty_tpl->tpl_vars['uploadMaxFilesize']->value;?>
 M)</small>
		<?php }?>
	</div>
<?php }?><?php }} ?>