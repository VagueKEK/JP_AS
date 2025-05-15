<?php
/* Smarty version 3.1.31, created on 2025-05-15 22:01:35
  from "cms_template:news_summary_tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_6826481f8ab5f1_65340633',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'db685372ba46526c202a1028542659902a403a87' => 
    array (
      0 => 'cms_template:news_summary_tpl',
      1 => '1747339291',
      2 => 'cms_template',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6826481f8ab5f1_65340633 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_cms_escape')) require_once 'C:\\xampp\\htdocs\\cmsms\\lib\\plugins\\modifier.cms_escape.php';
if (!is_callable('smarty_modifier_cms_date_format')) require_once 'C:\\xampp\\htdocs\\cmsms\\lib\\plugins\\modifier.cms_date_format.php';
if (!is_callable('smarty_modifier_truncate')) require_once 'C:\\xampp\\htdocs\\cmsms\\lib\\smarty\\plugins\\modifier.truncate.php';
?>
<section class="news-list">
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['items']->value, 'entry');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['entry']->value) {
?>
    <article class="news-card">
      <h3 class="news-title">
        <a href="<?php echo $_smarty_tpl->tpl_vars['entry']->value->moreurl;?>
" title="<?php echo smarty_modifier_cms_escape($_smarty_tpl->tpl_vars['entry']->value->title,'htmlall');?>
">
          <?php echo smarty_modifier_cms_escape($_smarty_tpl->tpl_vars['entry']->value->title);?>

        </a>
      </h3>
      <p class="news-meta">
        <?php echo smarty_modifier_cms_date_format($_smarty_tpl->tpl_vars['entry']->value->postdate);?>
 — 
        <?php echo $_smarty_tpl->tpl_vars['entry']->value->author;?>

        <?php if ($_smarty_tpl->tpl_vars['entry']->value->category) {?> | <?php echo $_smarty_tpl->tpl_vars['entry']->value->category;?>
 <?php }?>
      </p>
      <?php if ($_smarty_tpl->tpl_vars['entry']->value->summary) {?>
        <p class="news-summary"><?php echo $_smarty_tpl->tpl_vars['entry']->value->summary;?>
</p>
        <a class="news-readmore" href="<?php echo $_smarty_tpl->tpl_vars['entry']->value->moreurl;?>
">Czytaj więcej →</a>
      <?php } elseif ($_smarty_tpl->tpl_vars['entry']->value->content) {?>
        <p class="news-summary"><?php echo smarty_modifier_truncate(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['entry']->value->content),300);?>
</p>
        <a class="news-readmore" href="<?php echo $_smarty_tpl->tpl_vars['entry']->value->moreurl;?>
">Czytaj więcej →</a>
      <?php }?>
    </article>
  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

</section><?php }
}
