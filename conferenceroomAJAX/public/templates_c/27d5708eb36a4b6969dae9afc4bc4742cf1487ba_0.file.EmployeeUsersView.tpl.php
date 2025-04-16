<?php
/* Smarty version 4.2.1, created on 2025-04-17 00:13:55
  from 'C:\xampp\htdocs\conferenceroom\app\views\EmployeeUsersView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_68002ba36870d5_51424857',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '27d5708eb36a4b6969dae9afc4bc4742cf1487ba' => 
    array (
      0 => 'C:\\xampp\\htdocs\\conferenceroom\\app\\views\\EmployeeUsersView.tpl',
      1 => 1744841633,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:EmployeeUsersTable.tpl' => 1,
  ),
),false)) {
function content_68002ba36870d5_51424857 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_58046075568002ba367ef15_10328093', 'footer');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_95266093368002ba367f827_80850753', 'p_description');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_212269768968002ba367fbf8_04008592', 'top');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'footer'} */
class Block_58046075568002ba367ef15_10328093 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_58046075568002ba367ef15_10328093',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Jakub Painta<?php
}
}
/* {/block 'footer'} */
/* {block 'p_description'} */
class Block_95266093368002ba367f827_80850753 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'p_description' => 
  array (
    0 => 'Block_95266093368002ba367f827_80850753',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<p>Użytkownicy</p><?php
}
}
/* {/block 'p_description'} */
/* {block 'top'} */
class Block_212269768968002ba367fbf8_04008592 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'top' => 
  array (
    0 => 'Block_212269768968002ba367fbf8_04008592',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div style="width:90%; margin: 2em auto;">
    <section>
        <h1>Dodaj Użytkownika</h1>
        <form id="addUserForm" onsubmit="submitAddUserForm(); return false;" method="post">

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
            <br />
            <hr />
            <h1>Edycja użytkownika</h1>
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

<?php echo '<script'; ?>
>
function submitAddUserForm() {
    const form = document.getElementById('addUserForm');
    const formData = new FormData(form);

    fetch('addUser', {
        method: 'POST',
        headers: { 'X-Requested-With': 'XMLHttpRequest' },
        body: formData
    })
    .then(res => res.text())
    .then(() => {
        form.reset(); // wyczyść formularz
        ajaxPostForm('filterForm', 'employeeUsers', 'userList'); // przeładuj tabelę
    })
    .catch(err => console.error('Błąd przy dodawaniu użytkownika:', err));
}
<?php echo '</script'; ?>
>

<?php
}
}
/* {/block 'top'} */
}
