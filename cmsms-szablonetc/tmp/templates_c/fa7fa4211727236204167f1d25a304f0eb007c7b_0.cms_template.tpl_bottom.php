<?php
/* Smarty version 3.1.31, created on 2025-05-15 19:33:38
  from "cms_template:tpl_bottom" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_6826257289df58_53674220',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fa7fa4211727236204167f1d25a304f0eb007c7b' => 
    array (
      0 => 'cms_template:tpl_bottom',
      1 => '1747330416',
      2 => 'cms_template',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6826257289df58_53674220 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_cms_function_current_date')) require_once 'C:\\xampp\\htdocs\\cmsms\\lib\\plugins\\function.current_date.php';
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
    &copy; HealthyTeeth <?php echo smarty_cms_function_current_date(array('format'=>"%Y"),$_smarty_tpl);?>
. Wszystkie prawa zastrzeżone.
  </div>
  
  <div style="margin-top: 0.5em; font-size: 0.8em; opacity: 0.4;">
    Made with ♥ by Jakub
  </div>
</footer><?php }
}
