{extends file="main.tpl"}


{block name=content}
				<!-- Header -->
					<header id="header">
						<h1><a href="#top"">Kalkulator kredytowy</a></h1>
						<nav>
                                                    <ul class="actions small">
															<li><a href="#main" class="button small">Kalkulator</a></li>
                                                            <li><a href="{$conf->action_url}logout" class="button primary">Wyloguj użytkownika: <b>{$user->login}</b></a></li>
                                                    </ul>
                                        </nav>
				</div>
<div class="wrapper">

<div id="niewidoczny-div" style="opacity: 0;">DIV niewidoczny, techniczny :)</div>
    <div class="inner">
            <section>
                    <h3 class="major">Wypełnij parametry kredytu</h3>
                    <form method="post" action="{$conf->action_root}calcCompute">
                        <div class="row gtr-uniform gtr-50">
                            <div class="col-6 col-12-xsmall">
                                <input id="id_amount" type="text" name="amount" value="{$form->amount}" placeholder="Kwota kredytu" />
                            </div>
                            <div class="col-6 col-12-xsmall">
                                <input id="id_years" type="text" name="years" value="{$form->years}" placeholder="Liczba lat" />
                            </div>
                            <div class="col-6 col-12-xsmall">
                                <input id="id_interest" type="text" name="interest" value="{$form->interest}" placeholder="Oprocentowanie" />
                            </div>
                            <div class="col-12">
                                <ul class="actions">
                                        <li><input type="submit" value="Oblicz" class="primary" /></li>
                                </ul>
                            </div>
                        </div>
                    </form>
                </section>

{include file='messages.tpl'}
</div>

{/block}
{block name=footer}Jakub Painta{/block}