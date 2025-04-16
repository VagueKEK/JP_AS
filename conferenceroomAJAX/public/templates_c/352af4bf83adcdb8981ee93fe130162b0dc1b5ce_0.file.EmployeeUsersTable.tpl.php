<?php
/* Smarty version 4.2.1, created on 2025-04-17 00:03:57
  from 'C:\xampp\htdocs\conferenceroom\app\views\EmployeeUsersTable.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6800294ddee148_95637986',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '352af4bf83adcdb8981ee93fe130162b0dc1b5ce' => 
    array (
      0 => 'C:\\xampp\\htdocs\\conferenceroom\\app\\views\\EmployeeUsersTable.tpl',
      1 => 1744841030,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6800294ddee148_95637986 (Smarty_Internal_Template $_smarty_tpl) {
if (count($_smarty_tpl->tpl_vars['users']->value) > 0) {?>
    <table>
        <tr>
            <th>ID</th>
            <th>Imię</th>
            <th>Nazwisko</th>
            <th>Email</th>
            <th>Rola</th>
            <th>Aktywny</th>
            <th>Akcje</th>
        </tr>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['users']->value, 'user');
$_smarty_tpl->tpl_vars['user']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['user']->value) {
$_smarty_tpl->tpl_vars['user']->do_else = false;
?>
            <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['user']->value['name'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['user']->value['surname'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['user']->value['email'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['user']->value['role_name'];?>
</td>
                <td><?php if ($_smarty_tpl->tpl_vars['user']->value['active'] == 1) {?>Tak<?php } else { ?>Nie<?php }?></td>
                <td>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
userEdit?id=<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
">Edytuj</a>
                </td>
            </tr>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </table>
    <?php if ($_smarty_tpl->tpl_vars['current_page']->value > 1) {?>
    <a href="#" onclick="ajaxUserPage(<?php echo $_smarty_tpl->tpl_vars['current_page']->value-1;?>
)">&laquo; Poprzednia</a>
<?php }?>

<?php
$__section_page_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['total_pages']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_page_0_total = $__section_page_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_page'] = new Smarty_Variable(array());
if ($__section_page_0_total !== 0) {
for ($__section_page_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_page']->value['index'] = 0; $__section_page_0_iteration <= $__section_page_0_total; $__section_page_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_page']->value['index']++){
?>
    <a href="#" onclick="ajaxUserPage(<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_page']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_page']->value['index'] : null)+1;?>
)"
       class="<?php if ((isset($_smarty_tpl->tpl_vars['__smarty_section_page']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_page']->value['index'] : null)+1 == $_smarty_tpl->tpl_vars['current_page']->value) {?>active<?php }?>">
        <?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_page']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_page']->value['index'] : null)+1;?>

    </a>
<?php
}
}
?>

<?php if ($_smarty_tpl->tpl_vars['current_page']->value < $_smarty_tpl->tpl_vars['total_pages']->value) {?>
    <a href="#" onclick="ajaxUserPage(<?php echo $_smarty_tpl->tpl_vars['current_page']->value+1;?>
)">Następna &raquo;</a>
<?php }?>

<?php } else { ?>
    <h1>Brak użytkowników do wyświetlenia.</h1>
<?php }?>

<?php echo '<script'; ?>
>
function ajaxUserPage(page) {
    const form = document.getElementById("filterForm");
    const formData = new FormData(form);
    formData.append("page", page);

    fetch("employeeUsers", {
        method: "POST",
        headers: { "X-Requested-With": "XMLHttpRequest" },
        body: formData
    })
    .then(res => res.text())
    .then(html => {
        document.getElementById("userList").innerHTML = html;
    });
}
<?php echo '</script'; ?>
>

<?php }
}
