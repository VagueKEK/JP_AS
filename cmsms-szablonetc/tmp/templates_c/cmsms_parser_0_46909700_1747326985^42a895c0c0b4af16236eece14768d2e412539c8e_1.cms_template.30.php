<?php
/* Smarty version 3.1.31, created on 2025-05-15 18:36:25
  from "cms_template:30" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_682618097850a2_17155416',
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
      1 => '1747326958',
      2 => 'cms_template',
    ),
    '9375a5d7c7eb6b0ca8f3924fc7202e44b19da477' => 
    array (
      0 => 'cms_template:tpl_mid',
      1 => '1747326240',
      2 => 'cms_template',
    ),
    'fa7fa4211727236204167f1d25a304f0eb007c7b' => 
    array (
      0 => 'cms_template:tpl_bottom',
      1 => '1747326235',
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
function content_682618097850a2_17155416 (Smarty_Internal_Template $_smarty_tpl) {
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
$_smarty_tpl->_subTemplateRender('cms_template:tpl_top', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false, 'e0b3c807fe888273d458f19b5469880655f37629', 'content_68261809767ab3_76534496');
?>

<?php
$_smarty_tpl->_subTemplateRender('cms_template:tpl_mid', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false, '9375a5d7c7eb6b0ca8f3924fc7202e44b19da477', 'content_68261809775c00_42295853');
?>

<?php
$_smarty_tpl->_subTemplateRender('cms_template:tpl_bottom', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false, 'fa7fa4211727236204167f1d25a304f0eb007c7b', 'content_68261809779592_85034269');
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
function content_68261809767ab3_76534496 ($_smarty_tpl) {
?>
<header id="header">
  <h1 id="logo"><a href="<?php echo smarty_function_root_url(array(),$_smarty_tpl);?>
"><?php echo smarty_function_sitename(array(),$_smarty_tpl);?>
</a></h1>
  <nav id="nav">
    
  </nav>
</header>

<section id="banner">
  <div class="content">
    <header>
      <h2><?php echo smarty_function_title(array(),$_smarty_tpl);?>
</h2>
      <p>Witamy na stronie <?php echo smarty_function_sitename(array(),$_smarty_tpl);?>
</p>
    </header>
    <span class="image"><img src="uploads/landed/images/pic01.jpg" alt="" /></span>
  </div>
</section><?php
}
/* End inline template "cms_template:30" =============================*/
/* Start inline template "cms_template:30" =============================*/
function content_68261809775c00_42295853 ($_smarty_tpl) {
?>
<section id="main" class="container">
  
</section><?php
}
/* End inline template "cms_template:30" =============================*/
/* Start inline template "cms_template:30" =============================*/
function content_68261809779592_85034269 ($_smarty_tpl) {
?>
<footer id="footer">
  <p>&copy; <?php echo smarty_function_sitename(array(),$_smarty_tpl);?>
 .</p>
</footer><?php
}
/* End inline template "cms_template:30" =============================*/
}
