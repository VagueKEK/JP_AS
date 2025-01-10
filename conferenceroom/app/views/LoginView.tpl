{extends file="main.tpl"}
{block name=footer}Jakub Painta{/block}
{block name=p_description}<p>Logowanie</p>{/block}
{block name=top}
<div style="width:90%; margin: 2em auto;">
	<section>
        <h3>Podaj dane do logowania</h3>
        <form action="{$conf->action_root}login" method="post">
            <div class="row gtr-uniform gtr-50">
                <div class="col-6 col-12-xsmall">
                    <input id="login" type="text" name="login" value="{$form->login}" placeholder="Email"/>
                </div>
                <div class="col-6 col-12-xsmall">
                    <input id="password" type="password" name="password" placeholder="Hasło"/>
                </div>
                <div class="col-12">
                    <ul class="actions">
                        <li><input type="submit" value="Zaloguj" class="primary" /></li>
                    </ul>
                </div>
                <a href="{$conf->action_root}register" class="special">Nie masz konta? <b style="color: green;">Zarejestruj się</b></a>
            </div>
        </form>
	</section>
</div>
{/block}

