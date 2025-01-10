<?php
/* Smarty version 4.2.1, created on 2025-01-10 20:09:10
  from 'C:\xampp\htdocs\conferenceroom\app\views\AboutUs.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_678170564fc2e5_72679523',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'af7ee80f46b1cc11dbe716dee3472591aa18ad2c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\conferenceroom\\app\\views\\AboutUs.tpl',
      1 => 1732901925,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_678170564fc2e5_72679523 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1269950248678170564f7952_39587235', 'footer');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1854971929678170564f8681_74747957', 'top');
?>


<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'footer'} */
class Block_1269950248678170564f7952_39587235 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_1269950248678170564f7952_39587235',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Jakub Painta<?php
}
}
/* {/block 'footer'} */
/* {block 'top'} */
class Block_1854971929678170564f8681_74747957 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'top' => 
  array (
    0 => 'Block_1854971929678170564f8681_74747957',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<section id="one" class="wrapper spotlight style1">
	<div class="inner">
		<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
reservation" class="image"><img src="images/salka1.png" alt="" /></a>
		<div class="content">
			<h2 class="major">Wynajęcie sali konferencyjnej</h2>
			<p>Potrzebujesz sali z rzutnikiem, kamerą, miejscem do omówienia spraw biznesowych?</p>
			<p></p>
			<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
reservation" class="special">Zarezerwuj teraz!</a>
		</div>
	</div>
</section>
<!-- Two -->
<section id="two" class="wrapper alt spotlight style2">
	<div class="inner">
		<a href="#" class="image"><img src="images/check.png" alt="" /></a>
		<div class="content">
			<h2 class="major">Wybór sali</h2>
			<p>Nie jesteś pewny, którą salę chcesz wybrać?</p>
			<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
roomsPortfolio" class="special">Podgląd sali</a>
		</div>
	</div>
</section>
<!-- Three -->
<section id="three" class="wrapper spotlight style3">
	<div class="inner">
		<a href="#" class="image"><img src="images/onas.png" alt="" /></a>
			<div class="content">
				<h2 class="major">O nas</h2>
				<p>Tworzymy przestrzenie, w których Twoje pomysły nabierają mocy! Nowoczesne sale z projektorami, kamerami i szybkim internetem to idealne miejsce na spotkania, szkolenia czy prezentacje. Zadbamy o każdy szczegół, byś mógł skupić się na tym, co naprawdę ważne – osiąganiu swoich celów.</p>
			</div>
</div>
</section>
<?php
}
}
/* {/block 'top'} */
}
