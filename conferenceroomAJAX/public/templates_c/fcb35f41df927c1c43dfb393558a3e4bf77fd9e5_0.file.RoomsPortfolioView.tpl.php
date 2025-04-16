<?php
/* Smarty version 4.2.1, created on 2025-01-10 20:09:52
  from 'C:\xampp\htdocs\conferenceroom\app\views\RoomsPortfolioView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_67817080a8d8e2_98590729',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fcb35f41df927c1c43dfb393558a3e4bf77fd9e5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\conferenceroom\\app\\views\\RoomsPortfolioView.tpl',
      1 => 1732738635,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67817080a8d8e2_98590729 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_22504749067817080a844a8_63622143', 'footer');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_88771342667817080a84cf8_36365241', 'top');
?>


<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'footer'} */
class Block_22504749067817080a844a8_63622143 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_22504749067817080a844a8_63622143',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Jakub Painta<?php
}
}
/* {/block 'footer'} */
/* {block 'top'} */
class Block_88771342667817080a84cf8_36365241 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'top' => 
  array (
    0 => 'Block_88771342667817080a84cf8_36365241',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<section id="" class="wrapper alt style1">
								<div class="inner">
									<h2 class="major">Wybór sali</h2>
									<p>Znajdź idealną salę konferencyjną dopasowaną do Twoich potrzeb. Poniżej przedstawiamy różnorodne przestrzenie, które łączą nowoczesność, funkcjonalność i komfort, aby każde spotkanie było wyjątkowe.</p>
									<section class="features">
										<article>
											<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
reservation" class="image"><img src="images/room1.png" alt="" /></a>
											<h3 class="major">Executive Room</h3>
											<p>Nowoczesna sala dla spotkań zarządu. Wyposażona w wygodne fotele i przestronny stół.</p>
											<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
reservation" class="special">Zarezerwuj</a>
										</article>
                                        <article>
											<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
reservation" class="image"><img src="images/room2.png" alt="" /></a>
											<h3 class="major">Visionary Boardroom</h3>
											<p>Sala z systemem wideokonferencji, idealna dla spotkań zdalnych. Minimalistyczny wystrój ułatwia koncentrację.</p>
											<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
reservation" class="special">Zarezerwuj</a>
										</article>
                                        <article>
											<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
reservation" class="image"><img src="images/room3.png" alt="" /></a>
											<h3 class="major">Tech Hub</h3>
											<p>Przestrzeń z zaawansowanym sprzętem audiowizualnym. Doskonała do prezentacji i burzy mózgów.</p>
											<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
reservation" class="special">Zarezerwuj</a>
										</article>
                                        <article>
											<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
reservation" class="image"><img src="images/room4.png" alt="" /></a>
											<h3 class="major">Panorama Space</h3>
											<p>Jasna i przestronna sala z panoramicznym widokiem na miasto. Idealna dla kreatywnych zespołów, warsztatów i inspirujących spotkań.</p>
											<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
reservation" class="special">Zarezerwuj</a>
										</article>
                                        <article>
											<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
reservation" class="image"><img src="images/room5.png" alt="" /></a>
											<h3 class="major">Classic Lounge</h3>
											<p>Przytulna sala o eleganckim wystroju. Idealna na kameralne spotkania biznesowe.</p>
											<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
reservation" class="special">Zarezerwuj</a>
										</article>
                                        <article>
											<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
reservation" class="image"><img src="images/room6.png" alt="" /></a>
											<h3 class="major">Futuristic Hall</h3>
											<p>Duża, nowoczesna sala konferencyjna. Wyposażona w sprzęt najwyższej klasy dla dużych zespołów.</p>
											<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
reservation" class="special">Zarezerwuj</a>
										</article>
									</section>
								</div>
							</section>
<?php
}
}
/* {/block 'top'} */
}
