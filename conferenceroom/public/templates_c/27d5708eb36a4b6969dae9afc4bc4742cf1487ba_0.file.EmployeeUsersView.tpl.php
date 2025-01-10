<?php
/* Smarty version 4.2.1, created on 2025-01-10 20:12:10
  from 'C:\xampp\htdocs\conferenceroom\app\views\EmployeeUsersView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6781710a114ed7_98479682',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '27d5708eb36a4b6969dae9afc4bc4742cf1487ba' => 
    array (
      0 => 'C:\\xampp\\htdocs\\conferenceroom\\app\\views\\EmployeeUsersView.tpl',
      1 => 1732660755,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:EmployeeUsersTable.tpl' => 1,
  ),
),false)) {
function content_6781710a114ed7_98479682 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_977312566781710a074807_62386730', 'footer');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8289957196781710a075773_99933104', 'p_description');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8091655906781710a075e97_87306056', 'top');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'footer'} */
class Block_977312566781710a074807_62386730 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_977312566781710a074807_62386730',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Jakub Painta<?php
}
}
/* {/block 'footer'} */
/* {block 'p_description'} */
class Block_8289957196781710a075773_99933104 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'p_description' => 
  array (
    0 => 'Block_8289957196781710a075773_99933104',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<p>Użytkownicy</p><?php
}
}
/* {/block 'p_description'} */
/* {block 'top'} */
class Block_8091655906781710a075e97_87306056 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'top' => 
  array (
    0 => 'Block_8091655906781710a075e97_87306056',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div style="width:90%; margin: 2em auto;">
    <section>
        <h1>Dodaj Użytkownika</h1>
        <form id="addUserForm" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
addUser" method="post">
            <div class="row gtr-uniform gtr-50">
                <div class="col-4 col-12-xsmall">
                    <label for="name">Imię:</label>
                    <input type="text" id="name" name="name" required><br>
                </div>

                <div class="col-4 col-12-xsmall">
                    <label for="surname">Nazwisko:</label>
                    <input type="text" id="surname" name="surname" required><br>
                </div>

                <div class="col-4 col-12-xsmall">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required><br>
                </div>

                <div class="col-4 col-12-xsmall">
                    <label for="password">Hasło:</label>
                    <input type="password" id="password" name="password" required><br>
                </div>

                <div class="col-4 col-12-xsmall">
                    <label for="role">Rola:</label>
                    <select id="role" name="role" required>
                        <option value="3">Użytkownik</option>
                        <option value="4">Pracownik</option>
                    </select><br>
                </div>

                <div class="col-12">
                    <input type="submit" class="primary" value="Dodaj użytkownika">
                </div>

            </div>
        </form>
        <form id="filterForm" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
employeeUsers" method="post" onsubmit="ajaxPostForm('filterForm', '<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
employeeUsers', 'userList'); return false;">
            <label for="filterSurname">Filtruj po nazwisku:</label>
            <input type="text" id="filterSurname" name="surname" value="<?php echo (($tmp = $_smarty_tpl->tpl_vars['surname_filter']->value ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
"><br>
            <input type="submit" class="primary" value="Filtruj">
        </form>
        <div id="userList">
            <?php $_smarty_tpl->_subTemplateRender('file:EmployeeUsersTable.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        </div>
    </section>
</div>
<?php
}
}
/* {/block 'top'} */
}
