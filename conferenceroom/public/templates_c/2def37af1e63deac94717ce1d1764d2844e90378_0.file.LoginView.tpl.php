<?php
/* Smarty version 4.2.1, created on 2025-01-10 20:09:14
  from 'C:\xampp\htdocs\conferenceroom\app\views\LoginView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6781705a3be7f6_50487529',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2def37af1e63deac94717ce1d1764d2844e90378' => 
    array (
      0 => 'C:\\xampp\\htdocs\\conferenceroom\\app\\views\\LoginView.tpl',
      1 => 1732901276,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6781705a3be7f6_50487529 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17337043456781705a3b9fb6_07990871', 'footer');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17407399516781705a3ba828_12184019', 'p_description');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_121149696781705a3bade6_43968444', 'top');
?>


<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'footer'} */
class Block_17337043456781705a3b9fb6_07990871 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_17337043456781705a3b9fb6_07990871',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Jakub Painta<?php
}
}
/* {/block 'footer'} */
/* {block 'p_description'} */
class Block_17407399516781705a3ba828_12184019 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'p_description' => 
  array (
    0 => 'Block_17407399516781705a3ba828_12184019',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<p>Logowanie</p><?php
}
}
/* {/block 'p_description'} */
/* {block 'top'} */
class Block_121149696781705a3bade6_43968444 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'top' => 
  array (
    0 => 'Block_121149696781705a3bade6_43968444',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div style="width:90%; margin: 2em auto;">
	<section>
        <h3>Podaj dane do logowania</h3>
        <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
login" method="post">
            <div class="row gtr-uniform gtr-50">
                <div class="col-6 col-12-xsmall">
                    <input id="login" type="text" name="login" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->login;?>
" placeholder="Email"/>
                </div>
                <div class="col-6 col-12-xsmall">
                    <input id="password" type="password" name="password" placeholder="Hasło"/>
                </div>
                <div class="col-12">
                    <ul class="actions">
                        <li><input type="submit" value="Zaloguj" class="primary" /></li>
                    </ul>
                </div>
                <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
register" class="special">Nie masz konta? <b style="color: green;">Zarejestruj się</b></a>
            </div>
        </form>
	</section>
</div>
<?php
}
}
/* {/block 'top'} */
}
