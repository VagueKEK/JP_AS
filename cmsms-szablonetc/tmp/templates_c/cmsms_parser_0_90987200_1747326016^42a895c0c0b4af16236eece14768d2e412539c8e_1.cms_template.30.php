<?php
/* Smarty version 3.1.31, created on 2025-05-15 18:20:16
  from "cms_template:30" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_68261440e2e5b6_53957435',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '42a895c0c0b4af16236eece14768d2e412539c8e' => 
    array (
      0 => 'cms_template:30',
      1 => '1747326006',
      2 => 'cms_template',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_68261440e2e5b6_53957435 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_title')) require_once 'C:\\xampp\\htdocs\\cmsms\\lib\\plugins\\function.title.php';
if (!is_callable('smarty_function_sitename')) require_once 'C:\\xampp\\htdocs\\cmsms\\lib\\plugins\\function.sitename.php';
if (!is_callable('smarty_function_metadata')) require_once 'C:\\xampp\\htdocs\\cmsms\\lib\\plugins\\function.metadata.php';
if (!is_callable('smarty_function_cms_stylesheet')) require_once 'C:\\xampp\\htdocs\\cmsms\\lib\\plugins\\function.cms_stylesheet.php';
if (!is_callable('smarty_function_root_url')) require_once 'C:\\xampp\\htdocs\\cmsms\\lib\\plugins\\function.root_url.php';
?>
<!DOCTYPE HTML>
<html>
<head>
  <title><?php echo smarty_function_title(array(),$_smarty_tpl);?>
 - <?php echo smarty_function_sitename(array(),$_smarty_tpl);?>
</title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="uploads/landed/assets/css/main.css" />
  <?php echo smarty_function_metadata(array(),$_smarty_tpl);?>

  <?php echo smarty_function_cms_stylesheet(array(),$_smarty_tpl);?>

</head>

<body class="is-preload landing">
  <div id="page-wrapper">

    <!-- Header -->
    <header id="header">
      <h1 id="logo"><a href="<?php echo smarty_function_root_url(array(),$_smarty_tpl);?>
"><?php echo smarty_function_sitename(array(),$_smarty_tpl);?>
</a></h1>
      <nav id="nav">
        <ul>
          <li><a href="<?php echo smarty_function_root_url(array(),$_smarty_tpl);?>
">Home</a></li>
          <li><a href="#">O nas</a></li>
          <li><a href="#">Kontakt</a></li>
        </ul>
      </nav>
    </header>

    <!-- Banner -->
    <section id="banner">
      <div class="content">
        <header>
          <h2><?php echo smarty_function_title(array(),$_smarty_tpl);?>
</h2>
          <p>Witamy na stronie <?php echo smarty_function_sitename(array(),$_smarty_tpl);?>
!</p>
        </header>
        <span class="image"><img src="uploads/landed/images/pic01.jpg" alt="" /></span>
      </div>
    </section>

    <!-- Content -->
    <section id="main" class="container">
      
    </section>

    <!-- Footer -->
    <footer id="footer">
      <p>&copy; <?php echo smarty_function_sitename(array(),$_smarty_tpl);?>
 .</p>
    </footer>

  </div>

  <!-- Scripts -->
<?php echo '<script'; ?>
 src="uploads/mine//js/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="uuploads/mine//js/jquery.dropotron.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="uploads/mine/js/jquery.scrollex.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="uploads/mine//js/browser.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="uploads/mine//js/breakpoints.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="uploads/mine//js/util.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="uploads/mine//js/main.js"><?php echo '</script'; ?>
>
</body>
</html><?php }
}
