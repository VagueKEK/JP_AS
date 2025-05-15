<?php
/* Smarty version 3.1.31, created on 2025-05-15 21:53:24
  from "module_db_tpl:Gallery;Moj wlasny gallery" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_68264634684ff9_43009376',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1b1a6583f4b74f3f2386bcd6719d00f947224014' => 
    array (
      0 => 'module_db_tpl:Gallery;Moj wlasny gallery',
      1 => 1747338803,
      2 => 'module_db_tpl',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_68264634684ff9_43009376 (Smarty_Internal_Template $_smarty_tpl) {
?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css" />
<?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/glightbox/dist/js/glightbox.min.js"><?php echo '</script'; ?>
>

<h2 class="gallery-title">Nasza Galeria</h2>

<div class="custom-gallery">
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['images']->value, 'image');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['image']->value) {
?>
    <div class="gallery-box">
      <a href="<?php echo $_smarty_tpl->tpl_vars['image']->value->file;?>
" class="glightbox" data-gallery="galeria" data-title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value->title, ENT_QUOTES, 'UTF-8', true);?>
">
        <img src="<?php echo $_smarty_tpl->tpl_vars['image']->value->thumb;?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value->title, ENT_QUOTES, 'UTF-8', true);?>
" />
      </a>
    </div>
  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

</div>

<?php echo '<script'; ?>
>
  const lightbox = GLightbox({
    selector: '.glightbox'
  });
<?php echo '</script'; ?>
><?php }
}
