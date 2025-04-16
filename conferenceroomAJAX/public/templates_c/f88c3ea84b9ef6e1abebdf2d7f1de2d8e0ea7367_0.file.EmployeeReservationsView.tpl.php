<?php
/* Smarty version 4.2.1, created on 2025-01-10 20:16:54
  from 'C:\xampp\htdocs\conferenceroom\app\views\EmployeeReservationsView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_678172265478d0_79872191',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f88c3ea84b9ef6e1abebdf2d7f1de2d8e0ea7367' => 
    array (
      0 => 'C:\\xampp\\htdocs\\conferenceroom\\app\\views\\EmployeeReservationsView.tpl',
      1 => 1736536520,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_678172265478d0_79872191 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21238819167817226531117_90310638', 'footer');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_78044054667817226531f32_85395904', 'p_description');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_46768502967817226532640_07494504', 'top');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'footer'} */
class Block_21238819167817226531117_90310638 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_21238819167817226531117_90310638',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Jakub Painta<?php
}
}
/* {/block 'footer'} */
/* {block 'p_description'} */
class Block_78044054667817226531f32_85395904 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'p_description' => 
  array (
    0 => 'Block_78044054667817226531f32_85395904',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<p>Podgląd rezerwacji</p><?php
}
}
/* {/block 'p_description'} */
/* {block 'top'} */
class Block_46768502967817226532640_07494504 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'top' => 
  array (
    0 => 'Block_46768502967817226532640_07494504',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div style="width:90%; margin: 2em auto;">
    <section>
        <h1>Zarządzanie rezerwacjami</h1>
        <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
employeeReservations" method="post">
            <label for="date">Filtruj po dacie:</label>
            <input type="date" id="date" name="date" value="<?php echo (($tmp = $_smarty_tpl->tpl_vars['date_filter']->value ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
">

            <label for="reservation_id">Filtruj po ID rezerwacji:</label>
            <input type="number" id="reservation_id" name="reservation_id" min="0" value="<?php echo (($tmp = $_smarty_tpl->tpl_vars['reservation_id_filter']->value ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
">

            <label for="surname">Filtruj po nazwisku:</label>
            <input type="text" id="surname" name="surname" value="<?php echo (($tmp = $_smarty_tpl->tpl_vars['surname_filter']->value ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
">

            <input type="submit" value="Filtruj">
        </form>
        <?php if (count($_smarty_tpl->tpl_vars['reservations']->value) > 0) {?>
        <table>
            <tr>
                <th>Nr rezerwacji</th>
                <th>Data złożenia</td>
                <th>Data rezerwacji</th>
                <th>Godzina</th>
                <th>Liczba osób</th>
                <th>Sala</th>
                <th>Status</th>
                <th>Użytkownik</th>
                <th>Akcja</th>
            </tr>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['reservations']->value, 'reservation');
$_smarty_tpl->tpl_vars['reservation']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['reservation']->value) {
$_smarty_tpl->tpl_vars['reservation']->do_else = false;
?>
            <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['reservation']->value['id'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['reservation']->value['creation_date'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['reservation']->value['date'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['reservation']->value['time'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['reservation']->value['number_of_people'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['reservation']->value['room_name'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['reservation']->value['status'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['reservation']->value['user_name'];?>
 <?php echo $_smarty_tpl->tpl_vars['reservation']->value['user_surname'];?>
</td>
                <td>
                    <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
updateReservationStatus" method="post">
                        <input type="hidden" name="reservation_id" value="<?php echo $_smarty_tpl->tpl_vars['reservation']->value['id'];?>
">
                        <select name="status">
                            <option value="Oczekujące" <?php if ($_smarty_tpl->tpl_vars['reservation']->value['status'] == 'Oczekujące') {?>selected<?php }?>>Oczekujące</option>
                            <option value="Potwierdzone" <?php if ($_smarty_tpl->tpl_vars['reservation']->value['status'] == 'Potwierdzone') {?>selected<?php }?>>Potwierdzone</option>
                            <option value="Zrealizowane" <?php if ($_smarty_tpl->tpl_vars['reservation']->value['status'] == 'Zrealizowane') {?>selected<?php }?>>Zrealizowane</option>
                            <option value="Anulowane" <?php if ($_smarty_tpl->tpl_vars['reservation']->value['status'] == 'Anulowane') {?>selected<?php }?>>Anulowane</option>
                        </select>
                            </div>
                        <input type="submit" value="Zaktualizuj">
                    </form>
                </td>
            </tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </table>
        <?php } else { ?>
        <p>Brak rezerwacji do wyświetlenia.</p>
        <?php }?>
    </section>
</div>
<?php
}
}
/* {/block 'top'} */
}
