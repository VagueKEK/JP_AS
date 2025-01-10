{extends file="main.tpl"}
{block name=footer}Jakub Painta{/block}
{block name=top}
<div style="width:90%; margin: 2em auto;">
	<section>
        <h2>Rejestracja</h2>
        <h3>Podaj dane do rejestracji</h3>
        <form action="{$conf->action_root}register" method="post">
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
{/block}

