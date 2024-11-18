{extends file=$conf->root_path|cat:"/app/views/templates/main.tpl"}


{block name=content}

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

	
{* wyświeltenie listy błędów, jeśli istnieją *}
{if $msgs->isError()}
	
		<h4>Wystąpiły błędy: </h4>
		<ol class="error">
		{foreach  $msgs->getErrors() as $msg}
		{strip}
			<li>{$msg}</li>
		{/strip}
		{/foreach}
		</ol>
	
{/if}

{* wyświeltenie listy informacji, jeśli istnieją *}
{if $msgs->isInfo()}

            <h4>Informacje: </h4>
            <ol class="info">
            {foreach  $msgs->getInfos() as $msg}
            {strip}
                    <li>{$msg}</li>
            {/strip}
            {/foreach}
            </ol>

{/if}

{if isset($res->result)}
	<h4>Wynik:</h4>
	<p class="res">
            Wysokość miesięcznej raty wynosi {$res->result} zł.
        </p>
        <p class="total">
            Całkowita kwota do spłaty wynosi {$res->total} zł.
        </p>
{/if}
</div>
{/block}

{block name=footer}Jakub Painta{/block}