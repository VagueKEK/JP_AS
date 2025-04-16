<!DOCTYPE HTML>
<!--
    Landed by HTML5 UP
    html5up.net | @ajlkn
    Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
    <head>
        <title>{$page_title|default:"The Conference Room"} </title> 
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <meta name="description" content="{$page_description|default:"Opis domyślny"}">
        <link rel="stylesheet" href="{$conf->app_url}/assets/css/main.css" />
        <noscript><link rel="stylesheet" href="{$conf->app_url}/assets/css/noscript.css" /></noscript>
        <script type="text/javascript" src="{$conf->app_url}/js/functions.js"></script>
    </head>
<!-- Page Wrapper -->
			<div id="page-wrapper">

				<!-- Header -->
					<header id="header">
						<h1><a href="index.html">The Conference Room</a></h1>
						<nav>
                        {if isset($smarty.session.user)}
                        <a>Zalogowano jako: 
							{if isset($smarty.session.user->roles) && !empty($smarty.session.user->roles)}
                                {foreach from=$smarty.session.user->roles item=role}{$role}{if !$smarty.foreach.roles.last} {/if}{/foreach}
                            {/if}
                            {$smarty.session.user->name} {$smarty.session.user->surname}
                        </a>
                        {/if}
							<a href="#menu">Menu</a>
						</nav>
					</header>

				<!-- Menu -->
					<nav id="menu">
						<div class="inner">
							<h2>Menu</h2>
							<ul class="links">
                    <li><a href="{$conf->action_root}aboutUs" >O nas</a></li>
                    <li><a href="{$conf->action_root}roomsPortfolio">Sale</a></li>
                    <li><a href="{$conf->action_root}reservation" >Rezerwacja</a></li>
                    {if isset($smarty.session.user)}
                    
                        <li><a href="{$conf->action_root}reservationHistory" >Historia rezerwacji</a></li>
                           
                            {if isset($smarty.session.user->roles) && (in_array('admin', $smarty.session.user->roles))}
                                <li><a href="{$conf->action_root}employeeUsers" >Panel użytkowników</a></li>
                            {/if}
                            {if isset($smarty.session.user->roles) && (in_array('Pracownik', $smarty.session.user->roles))}
                                <li><a href="{$conf->action_root}employeeReservations" >Panel rezerwacji</a></li>
                            {/if}
                            <li><a href="{$conf->action_root}logout" style="background-color:rgb(149, 0, 0);">Wyloguj</a></li>
                        
                    {else}
                        <li><a href="{$conf->action_root}loginShow" >Zaloguj</a></li>
                        <li><a href="{$conf->action_root}registerShow">Rejestracja</a></li>
                    {/if}
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
                        {block name=top}Domyślna treść zawartości..... {/block}
                    </section>
                {block name=messages}
                    {if $msgs->isMessage()}
                        <div class="messages bottom-margin">
                            <ul>
                                {foreach $msgs->getMessages() as $msg}
                                    {strip}
                                        <li class="msg {if $msg->isError()}error{/if}{if $msg->isWarning()}warning{/if} {if $msg->isInfo()}info{/if}">{$msg->text}</li>
                                    {/strip}
                                {/foreach}
                            </ul>
                        </div>
                    {/if}
                {/block}
        </div>

<!-- Footer -->
					<section id="footer">
                    	
						<div class="inner">
                                
							<ul class="copyright">
								<li>&copy; {block name=footer} Domyślna treść zawartości .... {/block}. All rights reserved.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
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
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
            {literal}
<script>
function ajaxPostForm(formId, url, targetId) {
    const form = document.getElementById(formId);
    const formData = new FormData(form);

    fetch(url, {
        method: 'POST',
        headers: { 'X-Requested-With': 'XMLHttpRequest' },
        body: formData
    })
    .then(response => response.text())
    .then(html => {
        document.getElementById(targetId).innerHTML = html;
    })
    .catch(error => console.error('AJAX error:', error));
}
</script>
{/literal}

    </body>
</html>
