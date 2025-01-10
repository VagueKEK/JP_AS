<?php
/* Smarty version 4.2.1, created on 2025-01-10 20:12:57
  from 'C:\xampp\htdocs\conferenceroom\app\views\templates\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_67817139f3a692_13389129',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '75a023b365d0790c611de851851cb11447a928d1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\conferenceroom\\app\\views\\templates\\main.tpl',
      1 => 1736536375,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67817139f3a692_13389129 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE HTML>
<!--
    Landed by HTML5 UP
    html5up.net | @ajlkn
    Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
    <head>
        <title><?php echo (($tmp = $_smarty_tpl->tpl_vars['page_title']->value ?? null)===null||$tmp==='' ? "The Conference Room" ?? null : $tmp);?>
 </title> 
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <meta name="description" content="<?php echo (($tmp = $_smarty_tpl->tpl_vars['page_description']->value ?? null)===null||$tmp==='' ? "Opis domyślny" ?? null : $tmp);?>
">
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/css/main.css" />
        <noscript><link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/css/noscript.css" /></noscript>
        <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/js/functions.js"><?php echo '</script'; ?>
>
    </head>
<!-- Page Wrapper -->
			<div id="page-wrapper">

				<!-- Header -->
					<header id="header">
						<h1><a href="index.html">The Conference Room</a></h1>
						<nav>
                        <?php if ((isset($_SESSION['user']))) {?>
                        <a>Zalogowano jako: 
							<?php if ((isset($_SESSION['user']->roles)) && !empty($_SESSION['user']->roles)) {?>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_SESSION['user']->roles, 'role');
$_smarty_tpl->tpl_vars['role']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['role']->value) {
$_smarty_tpl->tpl_vars['role']->do_else = false;
echo $_smarty_tpl->tpl_vars['role']->value;
if (!(isset($_smarty_tpl->tpl_vars['__smarty_foreach_roles']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_roles']->value['last'] : null)) {?> <?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            <?php }?>
                            <?php echo $_SESSION['user']->name;?>
 <?php echo $_SESSION['user']->surname;?>

                        </a>
                        <?php }?>
							<a href="#menu">Menu</a>
						</nav>
					</header>

				<!-- Menu -->
					<nav id="menu">
						<div class="inner">
							<h2>Menu</h2>
							<ul class="links">
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
aboutUs" >O nas</a></li>
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
roomsPortfolio">Sale</a></li>
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
reservation" >Rezerwacja</a></li>
                    <?php if ((isset($_SESSION['user']))) {?>
                    
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
reservationHistory" >Historia rezerwacji</a></li>
                           
                            <?php if ((isset($_SESSION['user']->roles)) && (in_array('admin',$_SESSION['user']->roles))) {?>
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
employeeUsers" >Panel użytkowników</a></li>
                            <?php }?>
                            <?php if ((isset($_SESSION['user']->roles)) && (in_array('Pracownik',$_SESSION['user']->roles))) {?>
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
employeeReservations" >Panel rezerwacji</a></li>
                            <?php }?>
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
logout" style="background-color:rgb(149, 0, 0);">Wyloguj</a></li>
                        
                    <?php } else { ?>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
loginShow" >Zaloguj</a></li>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
registerShow">Rejestracja</a></li>
                    <?php }?>
                </ul>
							<a href="#" class="close">Close</a>
						</div>
					</nav>

				<!-- Wrapper -->
					<section id="wrapper">
						<header>
							<div class="inner">
								<h2>The Conference Room</h2>
								<p>Miejsce spotkania dla Ciebie!</p>
							</div>
						</header>    
                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_169803499667817139f355d7_52310629', 'top');
?>

                    </section>
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_62909474667817139f35dc4_43302572', 'messages');
?>

        </div>

<!-- Footer -->
					<section id="footer">
                    	
						<div class="inner">
                                
							<ul class="copyright">
								<li>&copy; <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_203609531267817139f39d39_99222298', 'footer');
?>
. All rights reserved.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
							</ul>
                            <ul class="contact">
                                    <li class="icon solid fa-home">
                                        The Conference Room Sp. z o.o.<br />
                                        Warszawa, 12-345<br/>
                                        ul. Będzińska 12/34 <br/>
                                        Tel. 123-456-789 <br/>
                                        <p><a href="mailto:conference@room.pl">conference@room.pl</a></p>
                                        
                                    </li>
                                </ul>
						</div>
					</section>
</div>

<!-- Scripts -->
			<?php echo '<script'; ?>
 src="assets/js/jquery.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="assets/js/jquery.scrollex.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="assets/js/browser.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="assets/js/breakpoints.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="assets/js/util.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="assets/js/main.js"><?php echo '</script'; ?>
>
    </body>
</html>
<?php }
/* {block 'top'} */
class Block_169803499667817139f355d7_52310629 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'top' => 
  array (
    0 => 'Block_169803499667817139f355d7_52310629',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Domyślna treść zawartości..... <?php
}
}
/* {/block 'top'} */
/* {block 'messages'} */
class Block_62909474667817139f35dc4_43302572 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'messages' => 
  array (
    0 => 'Block_62909474667817139f35dc4_43302572',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <?php if ($_smarty_tpl->tpl_vars['msgs']->value->isMessage()) {?>
                        <div class="messages bottom-margin">
                            <ul>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getMessages(), 'msg');
$_smarty_tpl->tpl_vars['msg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->do_else = false;
?>
                                    <li class="msg <?php if ($_smarty_tpl->tpl_vars['msg']->value->isError()) {?>error<?php }
if ($_smarty_tpl->tpl_vars['msg']->value->isWarning()) {?>warning<?php }?> <?php if ($_smarty_tpl->tpl_vars['msg']->value->isInfo()) {?>info<?php }?>"><?php echo $_smarty_tpl->tpl_vars['msg']->value->text;?>
</li>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </ul>
                        </div>
                    <?php }?>
                <?php
}
}
/* {/block 'messages'} */
/* {block 'footer'} */
class Block_203609531267817139f39d39_99222298 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_203609531267817139f39d39_99222298',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść zawartości .... <?php
}
}
/* {/block 'footer'} */
}
