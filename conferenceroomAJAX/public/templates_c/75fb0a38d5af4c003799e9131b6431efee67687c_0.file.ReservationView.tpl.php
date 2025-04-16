<?php
/* Smarty version 4.2.1, created on 2025-01-10 20:09:23
  from 'C:\xampp\htdocs\conferenceroom\app\views\ReservationView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_67817063da8002_55674230',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '75fb0a38d5af4c003799e9131b6431efee67687c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\conferenceroom\\app\\views\\ReservationView.tpl',
      1 => 1734190908,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67817063da8002_55674230 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_41607622467817063d957e3_30990810', 'footer');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_39234352267817063d95ff6_17923137', 'p_description');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_45517158067817063d96581_30544973', 'top');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'footer'} */
class Block_41607622467817063d957e3_30990810 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_41607622467817063d957e3_30990810',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Jakub Painta<?php
}
}
/* {/block 'footer'} */
/* {block 'p_description'} */
class Block_39234352267817063d95ff6_17923137 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'p_description' => 
  array (
    0 => 'Block_39234352267817063d95ff6_17923137',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<p>Rezerwacja</p><?php
}
}
/* {/block 'p_description'} */
/* {block 'top'} */
class Block_45517158067817063d96581_30544973 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'top' => 
  array (
    0 => 'Block_45517158067817063d96581_30544973',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div style="width:90%; margin: 2em auto;">
    <section>
        <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
reservationShow" method="post">
        <div class="row gtr-uniform gtr-50">
            <div class="col-2 col-12-xsmall">
                <label for="date">Data:</label>
                <input class="data_rezerwacji" type="date" id="date" name="date" min="<?php echo $_smarty_tpl->tpl_vars['currentDate']->value;?>
" value="<?php echo (($tmp = $_smarty_tpl->tpl_vars['selectedDate']->value ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
" onchange="this.form.submit()" value placeholder="Data"><br>
            </div>
        </div>
        </form>

        <?php if ($_smarty_tpl->tpl_vars['selectedDate']->value) {?>
            <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
reservation" method="post" id="reservationForm">

                <div class="row gtr-uniform gtr-50">
                
                    <input type="hidden" name="date" value="<?php echo (($tmp = $_smarty_tpl->tpl_vars['selectedDate']->value ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
">

                    <div class="col-4 col-12-medium">
                        <label for="room_id">Wybierz salę:</label>
                        <select id="room_id" name="room_id" onchange="updateTimes()">
                            <option value="">Wybierz salę</option>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rooms']->value, 'room');
$_smarty_tpl->tpl_vars['room']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['room']->value) {
$_smarty_tpl->tpl_vars['room']->do_else = false;
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['room']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['room']->value['name'];?>
 - <?php echo $_smarty_tpl->tpl_vars['room']->value['location'];?>
</option>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </select><br>
                    </div>

                    <div class="col-4 col-12-medium">
                        <label for="time">Godzina:</label>
                        <select id="time" name="time">
                            <option value="">Wybierz godzinę</option>
                        </select><br>
                    </div>

                    <div class="col-4 col-12-medium">
                        <label for="number_of_people">Liczba osób:</label>
                        <input type="number" id="number_of_people" name="number_of_people" min="1" max="30"><br>
                    </div>

                    <div class="col-12">
                        <ul class="actions">
                        <?php if ($_smarty_tpl->tpl_vars['isLoggedIn']->value) {?>
                            <li><input type="submit" value="Zarezerwuj" class="primary" /></li>
                        <?php } else { ?>
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
loginShow" class="button primary">Musisz być zalogowany, aby dokonać rezerwacji. Zaloguj</a></li>
                        <?php }?>
                        </ul>
                    </div>
                    <header>
                        <p>Jednorazowa rezerwacja pozwala na <b>60 minutowe spotkanie</b></p>
                        <p>Dla większych rezerwacji lub dłuższy czas prosimy o <b>kontakt telefoniczny.</b></p>
                    </header>
                </div>
            </form>
        <?php }?>
    </section>
</div>


<?php echo '<script'; ?>
>
    const times = <?php echo json_encode($_smarty_tpl->tpl_vars['times']->value);?>
;

    function updateTimes() {
        const roomId = document.getElementById('room_id').value;
        const timeSelect = document.getElementById('time');
        timeSelect.innerHTML = '<option value="">Wybierz godzinę</option>';
        if (roomId && times[roomId]) {
            times[roomId].forEach(time => {
                const option = document.createElement('option');
                option.value = time;
                option.textContent = time;
                timeSelect.appendChild(option);
            });
        }
    }
<?php echo '</script'; ?>
>

<?php
}
}
/* {/block 'top'} */
}
