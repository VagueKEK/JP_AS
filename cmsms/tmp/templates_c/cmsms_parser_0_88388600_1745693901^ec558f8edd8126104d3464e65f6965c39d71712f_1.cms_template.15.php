<?php
/* Smarty version 4.5.2, created on 2025-04-26 20:58:21
  from 'cms_template:15' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_680d2ccdd9d9b8_68857314',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ec558f8edd8126104d3464e65f6965c39d71712f' => 
    array (
      0 => 'cms_template:15',
      1 => '1745693743',
      2 => 'cms_template',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_680d2ccdd9d9b8_68857314 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\cmsms\\lib\\plugins\\function.global_content.php','function'=>'smarty_function_global_content',),1=>array('file'=>'C:\\xampp\\htdocs\\cmsms\\lib\\plugins\\function.title.php','function'=>'smarty_function_title',),));
echo smarty_function_global_content(array('name'=>'TOP'),$_smarty_tpl);?>


<section id="content">
    <h1><?php echo smarty_function_title(array(),$_smarty_tpl);?>
</h1>
    
</section>

<?php echo smarty_function_global_content(array('name'=>'BOTTOM'),$_smarty_tpl);
}
}
