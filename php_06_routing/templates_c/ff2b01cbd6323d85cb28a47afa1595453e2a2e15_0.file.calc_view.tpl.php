<?php
/* Smarty version 4.2.1, created on 2024-11-26 18:44:28
  from 'C:\xampp\htdocs\php_06_routing\app\views\calc_view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_674608fc8c4e58_04776378',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ff2b01cbd6323d85cb28a47afa1595453e2a2e15' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php_06_routing\\app\\views\\calc_view.tpl',
      1 => 1732643067,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_674608fc8c4e58_04776378 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_646705228674608fc8be0f2_19987519', 'content');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1331274767674608fc8c49d5_37158067', 'footer');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_646705228674608fc8be0f2_19987519 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_646705228674608fc8be0f2_19987519',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

				<!-- Header -->
					<header id="header">
						<h1><a href="#top"">Kalkulator kredytowy</a></h1>
						<nav>
                                                    <ul class="actions small">
															<li><a href="#main" class="button small">Kalkulator</a></li>
                                                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
logout" class="button primary">Wyloguj użytkownika: <b><?php echo $_smarty_tpl->tpl_vars['user']->value->login;?>
</b></a></li>
                                                    </ul>
                                        </nav>
				</div>
<div class="wrapper">

<div id="niewidoczny-div" style="opacity: 0;">DIV niewidoczny, techniczny :)</div>
    <div class="inner">
            <section>
                    <h3 class="major">Wypełnij parametry kredytu</h3>
                    <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
calcCompute">
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

<?php $_smarty_tpl->_subTemplateRender('file:messages.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</div>

<?php
}
}
/* {/block 'content'} */
/* {block 'footer'} */
class Block_1331274767674608fc8c49d5_37158067 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_1331274767674608fc8c49d5_37158067',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Jakub Painta<?php
}
}
/* {/block 'footer'} */
}
