<?php
/* Smarty version 3.1.31, created on 2025-05-15 22:09:15
  from "cms_template:news_detail_tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_682649eba06543_34206508',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '61361704df2d6c488389294adaf504ba4501b865' => 
    array (
      0 => 'cms_template:news_detail_tpl',
      1 => '1747339752',
      2 => 'cms_template',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_682649eba06543_34206508 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_cms_escape')) require_once 'C:\\xampp\\htdocs\\cmsms\\lib\\plugins\\modifier.cms_escape.php';
if (!is_callable('smarty_modifier_cms_date_format')) require_once 'C:\\xampp\\htdocs\\cmsms\\lib\\plugins\\modifier.cms_date_format.php';
if (!is_callable('smarty_function_file_url')) require_once 'C:\\xampp\\htdocs\\cmsms\\lib\\plugins\\function.file_url.php';
if (!is_callable('smarty_function_root_url')) require_once 'C:\\xampp\\htdocs\\cmsms\\lib\\plugins\\function.root_url.php';
if (isset($_smarty_tpl->tpl_vars['entry']->value->canonical)) {?>
  <?php $_smarty_tpl->_assignInScope('canonical', $_smarty_tpl->tpl_vars['entry']->value->canonical ,false ,32);
}?>

<article class="news-detail-card" style="max-width: 900px; margin: 0 auto; padding: 2rem; background-color: #1b1c22; border-radius: 1rem; box-shadow: 0 0 15px rgba(0,0,0,0.5); color: #eee;">
  <header style="margin-bottom: 1rem;">
    <h1 style="font-size: 2.5rem; margin-bottom: 0.5rem;"><?php echo smarty_modifier_cms_escape($_smarty_tpl->tpl_vars['entry']->value->title,'htmlall');?>
</h1>
    <?php if ($_smarty_tpl->tpl_vars['entry']->value->postdate) {?>
      <p style="color: #999; font-size: 0.9rem;">
        <?php echo smarty_modifier_cms_date_format($_smarty_tpl->tpl_vars['entry']->value->postdate);?>
 — 
        <?php if ($_smarty_tpl->tpl_vars['entry']->value->author) {
echo $_smarty_tpl->tpl_vars['entry']->value->author;
}?>
        <?php if ($_smarty_tpl->tpl_vars['entry']->value->category) {?> | <span><?php echo $_smarty_tpl->tpl_vars['entry']->value->category;?>
</span><?php }?>
      </p>
    <?php }?>
  </header>

  <?php if ($_smarty_tpl->tpl_vars['entry']->value->summary) {?>
    <section style="margin-bottom: 1rem;">
      <strong><?php echo $_smarty_tpl->tpl_vars['entry']->value->summary;?>
</strong>
    </section>
  <?php }?>

  <section style="line-height: 1.6;">
    <?php echo $_smarty_tpl->tpl_vars['entry']->value->content;?>

  </section>

  <?php if (isset($_smarty_tpl->tpl_vars['entry']->value->fields)) {?>
    <section style="margin-top: 2rem;">
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['entry']->value->fields, 'field');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['field']->value) {
?>
        <?php if ($_smarty_tpl->tpl_vars['field']->value->type == 'file' && $_smarty_tpl->tpl_vars['field']->value->value) {?>
          <div style="margin: 1rem 0;">
            <img src="<?php echo $_smarty_tpl->tpl_vars['entry']->value->file_location;?>
/<?php echo $_smarty_tpl->tpl_vars['field']->value->value;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['field']->value->value;?>
" style="max-width: 100%; border-radius: 0.5rem;">
          </div>
        <?php } elseif ($_smarty_tpl->tpl_vars['field']->value->type == 'linkedfile' && $_smarty_tpl->tpl_vars['field']->value->value) {?>
          <div style="margin: 1rem 0;">
            <img src="<?php echo smarty_function_file_url(array('file'=>$_smarty_tpl->tpl_vars['field']->value->value),$_smarty_tpl);?>
" alt="<?php echo $_smarty_tpl->tpl_vars['field']->value->value;?>
" style="max-width: 100%; border-radius: 0.5rem;">
          </div>
        <?php } elseif ($_smarty_tpl->tpl_vars['field']->value->value) {?>
          <p><strong><?php echo $_smarty_tpl->tpl_vars['field']->value->name;?>
:</strong> <?php echo $_smarty_tpl->tpl_vars['field']->value->value;?>
</p>
        <?php }?>
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

    </section>
  <?php }?>

  <footer style="margin-top: 2rem;">
    <a href="<?php echo smarty_function_root_url(array(),$_smarty_tpl);?>
/index.php?page=aktualności" style="color: #e74c3c; text-decoration: underline;">← Wróć do aktualności</a>
  </footer>
</article><?php }
}
