<?php
/* Smarty version 4.2.1, created on 2025-01-10 20:32:20
  from 'C:\xampp\htdocs\conferenceroom\app\views\UserEditView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_678175c448ecf8_95957166',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c82d5379057520be62059d65d66b6d681f67d028' => 
    array (
      0 => 'C:\\xampp\\htdocs\\conferenceroom\\app\\views\\UserEditView.tpl',
      1 => 1736537535,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_678175c448ecf8_95957166 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1369048503678175c4483aa1_36524732', 'footer');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2126821646678175c44843a6_09975767', 'p_description');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1111008924678175c4484920_26978923', 'top');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'footer'} */
class Block_1369048503678175c4483aa1_36524732 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_1369048503678175c4483aa1_36524732',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Jakub Painta<?php
}
}
/* {/block 'footer'} */
/* {block 'p_description'} */
class Block_2126821646678175c44843a6_09975767 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'p_description' => 
  array (
    0 => 'Block_2126821646678175c44843a6_09975767',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<p>Edytuj</p><?php
}
}
/* {/block 'p_description'} */
/* {block 'top'} */
class Block_1111008924678175c4484920_26978923 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'top' => 
  array (
    0 => 'Block_1111008924678175c4484920_26978923',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<div style="width:90%; margin: 2em auto;">
    <section>
        <h1>Edycja użytkownika</h1>
        <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
userSave" method="post">
            <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->id;?>
" />
            <label for="name">Imię:</label>
            <input type="text" id="name" name="name" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->name;?>
" />
            <label for="surname">Nazwisko:</label>
            <input type="text" id="surname" name="surname" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->surname;?>
" />
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->email;?>
" />
            <label for="active">Aktywny:</label>
            <select id="active" name="active">
                <option value="1" <?php if ($_smarty_tpl->tpl_vars['form']->value->active == 1) {?>selected<?php }?>>Tak</option>
                <option value="0" <?php if ($_smarty_tpl->tpl_vars['form']->value->active == 0) {?>selected<?php }?>>Nie</option>
            </select>
            <label for="role">Rola:</label>
            <select id="role" name="role">
                <option value="3" <?php if ($_smarty_tpl->tpl_vars['form']->value->role == '3') {?>selected<?php }?>>Użytkownik</option>
                <option value="4" <?php if ($_smarty_tpl->tpl_vars['form']->value->role == '4') {?>selected<?php }?>>Pracownik</option>
                <option value="1" <?php if ($_smarty_tpl->tpl_vars['form']->value->role == '1') {?>selected<?php }?>>Admin</option>
            </select>
            <div class="col-12">
                <ul class="actions">
                    <li><input type="submit" value="Zapisz" class="primary" /></li>
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
employeeUsers">Powrót</a></li>
                </ul>
            </div>
        </form>
    </section>	
</div>

<?php
}
}
/* {/block 'top'} */
}
