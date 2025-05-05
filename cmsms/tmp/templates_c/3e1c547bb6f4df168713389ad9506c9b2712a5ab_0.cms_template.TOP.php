<?php
/* Smarty version 4.5.2, created on 2025-04-26 21:36:36
  from 'cms_template:TOP' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_680d35c4a69631_93787631',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3e1c547bb6f4df168713389ad9506c9b2712a5ab' => 
    array (
      0 => 'cms_template:TOP',
      1 => '1745696191',
      2 => 'cms_template',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_680d35c4a69631_93787631 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\cmsms\\lib\\plugins\\function.title.php','function'=>'smarty_function_title',),));
?>
<div id="page-wrapper">

			<!-- Header -->
				<header id="header">
					<h1 id="logo"><?php echo smarty_function_title(array(),$_smarty_tpl);?>
</a></h1>
					<nav id="nav">
<?php echo Navigator::function_plugin(array(),$_smarty_tpl);?>

						<ul>

					</nav>
				</header>
</div id="page-wrapper"><?php }
}
