<?php
/* Smarty version 4.2.1, created on 2025-01-10 20:09:22
  from 'C:\xampp\htdocs\conferenceroom\app\views\ReservationHistoryView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_678170625d1b56_11183452',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '58ec76a019da8bd3f0366e3a035feab1975ebedc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\conferenceroom\\app\\views\\ReservationHistoryView.tpl',
      1 => 1734193876,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_678170625d1b56_11183452 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1429985504678170625bb284_04794982', 'footer');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1612842703678170625bbb23_08651239', 'p_description');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_424784424678170625bc2a3_98185116', 'top');
?>


<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'footer'} */
class Block_1429985504678170625bb284_04794982 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_1429985504678170625bb284_04794982',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Jakub Painta<?php
}
}
/* {/block 'footer'} */
/* {block 'p_description'} */
class Block_1612842703678170625bbb23_08651239 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'p_description' => 
  array (
    0 => 'Block_1612842703678170625bbb23_08651239',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<p>Historia rezerwacji</p><?php
}
}
/* {/block 'p_description'} */
/* {block 'top'} */
class Block_424784424678170625bc2a3_98185116 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'top' => 
  array (
    0 => 'Block_424784424678170625bc2a3_98185116',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div style="width:90%; margin: 2em auto;">
	<section>
    <h1>Historia Rezerwacji</h1>
    <?php if ($_smarty_tpl->tpl_vars['reservations']->value) {?>
        <table>
            <tr>
                <th>Nr rezerwacji</th>
                <th>Data złożenia</td>
                <th>Data rezerwacji</th>
                <th>Godzina</th>
                <th>Liczba osób</th>
                <th>Status</th>
                <th>Sala</th>
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
                    <td><?php echo $_smarty_tpl->tpl_vars['reservation']->value['status'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['reservation']->value['room_name'];?>
</td>
                </tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </table>

        <div class="pagination">
            <?php if ($_smarty_tpl->tpl_vars['current_page']->value > 1) {?>
                <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
reservationHistory?page=<?php echo $_smarty_tpl->tpl_vars['current_page']->value-1;?>
">&laquo; Poprzednia</a>
            <?php }?>
            <?php
$__section_page_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['total_pages']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_page_0_total = $__section_page_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_page'] = new Smarty_Variable(array());
if ($__section_page_0_total !== 0) {
for ($__section_page_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_page']->value['index'] = 0; $__section_page_0_iteration <= $__section_page_0_total; $__section_page_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_page']->value['index']++){
?>
                <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
reservationHistory?page=<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_page']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_page']->value['index'] : null)+1;?>
" class="<?php if ((isset($_smarty_tpl->tpl_vars['__smarty_section_page']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_page']->value['index'] : null)+1 == $_smarty_tpl->tpl_vars['current_page']->value) {?>active<?php }?>">
                    <?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_page']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_page']->value['index'] : null)+1;?>

                </a>
            <?php
}
}
?>
            <?php if ($_smarty_tpl->tpl_vars['current_page']->value < $_smarty_tpl->tpl_vars['total_pages']->value) {?>
                <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
reservationHistory?page=<?php echo $_smarty_tpl->tpl_vars['current_page']->value+1;?>
">Następna &raquo;</a>
            <?php }?>
        </div>

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
