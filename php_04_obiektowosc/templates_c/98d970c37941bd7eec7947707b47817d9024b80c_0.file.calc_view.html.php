<?php
/* Smarty version 4.2.1, created on 2024-11-10 19:15:42
  from 'C:\xampp\htdocs\php_04_obiektowosc\app\calc_view.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6730f84e8d3931_92698210',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '98d970c37941bd7eec7947707b47817d9024b80c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php_04_obiektowosc\\app\\calc_view.html',
      1 => 1731262541,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6730f84e8d3931_92698210 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21299416176730f84e8c8aa5_38573064', 'footer');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9367587526730f84e8c92c4_67558952', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, ($_smarty_tpl->tpl_vars['conf']->value->root_path).("/templates/main.html"));
}
/* {block 'footer'} */
class Block_21299416176730f84e8c8aa5_38573064 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_21299416176730f84e8c8aa5_38573064',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Jakub Painta<?php
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_9367587526730f84e8c92c4_67558952 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_9367587526730f84e8c92c4_67558952',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<div class="wrapper">
    <div class="inner">
            <section>
                    <h3 class="major">Wypełnij parametry kredytu</h3>
                    <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/app/calc.php">
                        <div class="row gtr-uniform gtr-50">
                            <div class="col-6 col-12-xsmall">
                                <input id="id_amount" type="text" name="amount" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->amount;?>
" placeholder="Kwota kredytu" />
                            </div>
                            <div class="col-6 col-12-xsmall">
                                <input id="id_years" type="text" name="years" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->years;?>
" placeholder="Liczba lat" />
                            </div>
                            <div class="col-6 col-12-xsmall">
                                <input id="id_interest" type="text" name="interest" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->interest;?>
" placeholder="Oprocentowanie" />
                            </div>
                            <div class="col-12">
                                <ul class="actions">
                                        <li><input type="submit" value="Oblicz" class="primary" /></li>
                                </ul>
                            </div>
                        </div>
                    </form>
                </section>

	
<?php if ($_smarty_tpl->tpl_vars['msgs']->value->isError()) {?>
	
		<h4>Wystąpiły błędy: </h4>
		<ol class="error">
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getErrors(), 'msg');
$_smarty_tpl->tpl_vars['msg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->do_else = false;
?>
		<li><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</li>
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</ol>
	
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['msgs']->value->isInfo()) {?>

            <h4>Informacje: </h4>
            <ol class="info">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getInfos(), 'msg');
$_smarty_tpl->tpl_vars['msg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->do_else = false;
?>
            <li><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</li>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </ol>

<?php }?>

<?php if ((isset($_smarty_tpl->tpl_vars['res']->value->result))) {?>
	<h4>Wynik:</h4>
	<p class="res">
            Wysokość miesięcznej raty wynosi <?php echo $_smarty_tpl->tpl_vars['res']->value->result;?>
 zł.
        </p>
        <p class="total">
            Całkowita kwota do spłaty wynosi <?php echo $_smarty_tpl->tpl_vars['res']->value->total;?>
 zł.
        </p>
<?php }?>
        </div>
</div>
<?php
}
}
/* {/block 'content'} */
}
