<?php
/* Smarty version 4.2.1, created on 2024-11-10 19:15:44
  from 'C:\xampp\htdocs\php_04_obiektowosc\templates\main.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6730f850483cb6_37348741',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '322b615460a64f223f0f8d7b0e8979992f49414c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php_04_obiektowosc\\templates\\main.html',
      1 => 1731262015,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6730f850483cb6_37348741 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title><?php echo (($tmp = $_smarty_tpl->tpl_vars['page_title']->value ?? null)===null||$tmp==='' ? "Tytuł domyślny" ?? null : $tmp);?>
</title> 
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
                <meta name="description" content="<?php echo (($tmp = $_smarty_tpl->tpl_vars['page_description']->value ?? null)===null||$tmp==='' ? "Opis domyślny" ?? null : $tmp);?>
">
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/css/main.css" />
		<noscript><link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">
		<!-- Page Wrapper -->
			<div id="page-wrapper">

				<!-- Header -->
					<header id="header">
						<h1><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/index.php">Kalkulator kredytowy</a></h1>
						<nav>
                                                    <ul class="actions small">
                                                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/index.php" class="button small">Strona główna</a></li>
                                                    </ul>
                                        </nav>
					</header>
				<!-- Wrapper -->
					<section id="wrapper">
						<header>
							<div class="inner">
								<h2>Kalkulator kredytowy</h2>
								<p>Oblicz swoją miesięczną ratę!</p>
							</div>
						</header>

						<!-- Content -->
						<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6888103846730f850480e57_10880043', 'content');
?>

					</section>

				<!-- Footer -->
					<section id="footer">
						<div class="inner">
							<ul class="copyright">
								<li>&copy; <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10693126146730f850481586_05305069', 'footer');
?>
. All rights reserved.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
							</ul>
						</div>
					</section>

			</div>

		<!-- Scripts -->
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
assets/js/jquery.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
assets/js/jquery.scrollex.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
assets/js/browser.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
assets/js/breakpoints.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
assets/js/util.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
assets/js/main.js"><?php echo '</script'; ?>
>

	</body>
</html><?php }
/* {block 'content'} */
class Block_6888103846730f850480e57_10880043 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_6888103846730f850480e57_10880043',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść zawartości .... <?php
}
}
/* {/block 'content'} */
/* {block 'footer'} */
class Block_10693126146730f850481586_05305069 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_10693126146730f850481586_05305069',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść zawartości .... <?php
}
}
/* {/block 'footer'} */
}
