<?php
/* Smarty version 3.1.31, created on 2025-05-15 19:25:51
  from "cms_template:30" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_6826239f2351f9_52203068',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '42a895c0c0b4af16236eece14768d2e412539c8e' => 
    array (
      0 => 'cms_template:30',
      1 => '1747326876',
      2 => 'cms_template',
    ),
    'e0b3c807fe888273d458f19b5469880655f37629' => 
    array (
      0 => 'cms_template:tpl_top',
      1 => '1747327429',
      2 => 'cms_template',
    ),
    '9375a5d7c7eb6b0ca8f3924fc7202e44b19da477' => 
    array (
      0 => 'cms_template:tpl_mid',
      1 => '1747329684',
      2 => 'cms_template',
    ),
    'fa7fa4211727236204167f1d25a304f0eb007c7b' => 
    array (
      0 => 'cms_template:tpl_bottom',
      1 => '1747329605',
      2 => 'cms_template',
    ),
  ),
  'includes' => 
  array (
    'cms_template:tpl_top' => 1,
    'cms_template:tpl_mid' => 1,
    'cms_template:tpl_bottom' => 1,
  ),
),false)) {
function content_6826239f2351f9_52203068 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_title')) require_once 'C:\\xampp\\htdocs\\cmsms\\lib\\plugins\\function.title.php';
if (!is_callable('smarty_function_sitename')) require_once 'C:\\xampp\\htdocs\\cmsms\\lib\\plugins\\function.sitename.php';
if (!is_callable('smarty_function_metadata')) require_once 'C:\\xampp\\htdocs\\cmsms\\lib\\plugins\\function.metadata.php';
if (!is_callable('smarty_function_cms_stylesheet')) require_once 'C:\\xampp\\htdocs\\cmsms\\lib\\plugins\\function.cms_stylesheet.php';
if (!is_callable('smarty_function_root_url')) require_once 'C:\\xampp\\htdocs\\cmsms\\lib\\plugins\\function.root_url.php';
?>
<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <title><?php echo smarty_function_title(array(),$_smarty_tpl);?>
 - <?php echo smarty_function_sitename(array(),$_smarty_tpl);?>
</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="uploads/landed/assets/css/main.css" />
  <?php echo smarty_function_metadata(array(),$_smarty_tpl);?>

  <?php echo smarty_function_cms_stylesheet(array(),$_smarty_tpl);?>

</head>

<body class="is-preload landing">
  <div id="page-wrapper">
<?php
$_smarty_tpl->_subTemplateRender('cms_template:tpl_top', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false, 'e0b3c807fe888273d458f19b5469880655f37629', 'content_6826239f218653_76928137');
?>

<?php
$_smarty_tpl->_subTemplateRender('cms_template:tpl_mid', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false, '9375a5d7c7eb6b0ca8f3924fc7202e44b19da477', 'content_6826239f224763_54611168');
?>

<?php
$_smarty_tpl->_subTemplateRender('cms_template:tpl_bottom', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false, 'fa7fa4211727236204167f1d25a304f0eb007c7b', 'content_6826239f227402_07096344');
?>


  </div>

<!-- Scripts -->
<?php echo '<script'; ?>
 src="uploads/mine/js/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="uploads/mine/js/jquery.scrolly.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="uploads/mine/js/jquery.dropotron.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="uploads/mine/js/jquery.scrollex.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="uploads/mine/js/browser.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="uploads/mine/js/breakpoints.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="uploads/mine/js/util.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="uploads/mine/js/main.js"><?php echo '</script'; ?>
><?php }
/* Start inline template "cms_template:30" =============================*/
function content_6826239f218653_76928137 ($_smarty_tpl) {
?>
<header id="header">
  <h1 id="logo"><a href="<?php echo smarty_function_root_url(array(),$_smarty_tpl);?>
">HealthyTeeth</a></h1>
  <nav id="nav">
    
  </nav>
</header>

<section id="banner">
  <div class="content">
    <header>
      <h2>HealthyTeeth</h2>
      <p>Witamy w najzdrowszym zakątku internetu.<br />
      Profesjonalna opieka dentystyczna, której możesz zaufać.</p>
    </header>
    <span class="image"><img src="uploads/images/dent-top.png" alt="dentysta" /></span>
  </div>
  <a href="#one" class="goto-next scrolly">Next</a>
</section><?php
}
/* End inline template "cms_template:30" =============================*/
/* Start inline template "cms_template:30" =============================*/
function content_6826239f224763_54611168 ($_smarty_tpl) {
?>
<section id="main" class="container" style="padding-top: 4em; padding-bottom: 4em;">
  
</section><?php
}
/* End inline template "cms_template:30" =============================*/
/* Start inline template "cms_template:30" =============================*/
function content_6826239f227402_07096344 ($_smarty_tpl) {
?>
<footer id="footer" style="padding: 3em 0; text-align: center; font-size: 0.9em; color: #999;">
  <div style="margin-bottom: 1em;">
    <a href="https://www.facebook.com" target="_blank" style="margin: 0 0.5em; color: inherit; text-decoration: none;">Facebook</a>
    |
    <a href="https://www.instagram.com" target="_blank" style="margin: 0 0.5em; color: inherit; text-decoration: none;">Instagram</a>
    |
    <a href="mailto:kontakt@healthyteeth.pl" style="margin: 0 0.5em; color: inherit; text-decoration: none;">Email</a>
  </div>
  
  <div style="opacity: 0.6;">
    &copy; <?php echo smarty_function_sitename(array(),$_smarty_tpl);?>
 . Wszystkie prawa zastrzeżone.
  </div>
  
  <div style="margin-top: 0.5em; font-size: 0.8em; opacity: 0.4;">
    Made with ♥ by Jakub
  </div>
</footer><?php
}
/* End inline template "cms_template:30" =============================*/
}
