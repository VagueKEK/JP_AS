{extends file="main.tpl"}

{block name=footer}Jakub Painta{/block}

{block name=content}

<div style="width:90%; margin: 2em auto;">
<section>
        <!-- Wrapper -->
        <section id="wrapper">
        <header>
                <div class="inner">
                        <h2>Kalkulator kredytowy</h2>
                        <p>Oblicz swoją miesięczną ratę!</p>
        </div>
        </section>
        <h3>Podaj dane do logowania</h3>
        <form method="post" action="{$conf->action_url}login">
                <div class="row gtr-uniform gtr-50">
                        <div class="col-6 col-12-xsmall">
                            <input id="id_login" type="text" name="login" placeholder="Login" />
                        </div>
                        <div class="col-6 col-12-xsmall">
                               <input id="id_pass" type="password" name="pass" placeholder="Hasło" />
                        </div>
                        <div class="col-12">
                                <ul class="actions">
                                        <li><input type="submit" value="Zaloguj" class="primary" /></li>
                                </ul>
                        </div>
                </div>
        </form>
</section>


{include file='messages.tpl'}
</div>
<header>
        <section id="one" class="wrapper spotlight style1">
                <div class="inner">
                        <a href="#top" class="image"><img src="images/github_logo.png" alt="" /></a>
                        <div class="content">
                                <h2 class="major">Moja strona Github</h2>
                                <p>Na stronie Github umieszczam swoje małe projekty, w których wykorzystuję swoje umiejętności, aby tworzyć różne treści.</p>
                                <a href="https://github.com/vagueKEK" class="special">Sprawdź!</a>
                        </div>
                </div>
        </section>
</header>
{/block}
