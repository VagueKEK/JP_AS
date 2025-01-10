<?php
/* Smarty version 4.2.1, created on 2025-01-10 20:19:46
  from 'C:\xampp\htdocs\conferenceroom\app\views\RegisterView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_678172d27c9181_31001336',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7c7f29e0cb09e7d74e3ffbd6185311e301c8b7a1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\conferenceroom\\app\\views\\RegisterView.tpl',
      1 => 1732901128,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_678172d27c9181_31001336 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1550532724678172d27c5768_40839361', 'footer');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_448455735678172d27c5fa9_77936860', 'top');
?>


<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'footer'} */
class Block_1550532724678172d27c5768_40839361 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_1550532724678172d27c5768_40839361',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Jakub Painta<?php
}
}
/* {/block 'footer'} */
/* {block 'top'} */
class Block_448455735678172d27c5fa9_77936860 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'top' => 
  array (
    0 => 'Block_448455735678172d27c5fa9_77936860',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div style="width:90%; margin: 2em auto;">
	<section>
        <h2>Rejestracja</h2>
        <h3>Podaj dane do rejestracji</h3>
        <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
register" method="post">
            <div class="row gtr-uniform gtr-50">
                <div class="col-4 col-12-xsmall">
                    <label for="name">Imię:</label>
                    <input id="name" type="text" name="name" placeholder="Imię">
                </div></br>
                <div class="col-4 col-12-xsmall">
                    <label for="surname">Nazwisko:</label>
                    <input id="surname" type="text" name="surname" placeholder="Nazwisko" />
                </div>
                <div class="col-4 col-12-xsmall">
                    <label for="email">Email:</label>
                    <input id="email" type="email" name="email" placeholder="Email" />
                </div>
                <div class="col-4 col-12-xsmall">
                    <label for="password">Hasło:</label>
                    <input id="password" type="password" name="password" placeholder="Hasło" />
                </div>
                <div class="col-4 col-12-xsmall">
                    <label for="confirm_password">Potwierdź hasło:</label>
                    <input id="confirm_password" type="password" name="confirm_password" placeholder="Potwierdź hasło"/>
                </div>
                <div class="col-12">
                    <ul class="actions">
                        <li><input type="submit" value="Zarejestruj" class="primary" /></li>
                    </ul>
                </div>
            </div>
        </form>
	</section>
</div>
<?php
}
}
/* {/block 'top'} */
}
