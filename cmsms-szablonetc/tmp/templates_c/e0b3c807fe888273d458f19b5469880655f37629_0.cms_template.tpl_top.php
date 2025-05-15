<?php
/* Smarty version 3.1.31, created on 2025-05-15 19:32:19
  from "cms_template:tpl_top" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_6826252371b810_03444196',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e0b3c807fe888273d458f19b5469880655f37629' => 
    array (
      0 => 'cms_template:tpl_top',
      1 => '1747330338',
      2 => 'cms_template',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6826252371b810_03444196 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_root_url')) require_once 'C:\\xampp\\htdocs\\cmsms\\lib\\plugins\\function.root_url.php';
?>
<header id="header">
  <div class="header-inner">
    <h1 id="logo"><a href="<?php echo smarty_function_root_url(array(),$_smarty_tpl);?>
">HealthyTeeth</a></h1>
    <nav id="nav">
      <?php echo Navigator::function_plugin(array(),$_smarty_tpl);?>

    </nav>
  </div>
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
</section><?php }
}
