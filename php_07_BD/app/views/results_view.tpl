{extends file="main.tpl"}



{block name=content}

<header id="header">
<h1><a href="index.php"">Kalkulator kredytowy</a></h1>
<nav>
<ul class="actions small">
<li><a href="index.php" class="button small">Kalkulator</a></li>

<li><a href="{$conf->action_url}logout" class="button primary">Wyloguj użytkownika: <b>{$user->login}</b></a></li>
</ul>
</nav>
</div>


<div style="width:90%; margin: 2em auto; margin-top: 100px;">
<section>
	<table>
<thead>
	<tr>
		<th>Kwota</th>
		<th>Ile lat</th>
		<th>Oprocentowanie</th>
		<th>Wysokość miesięcznej raty</th>
                <th>Całkowita kwota do spłaty</th>
	</tr>
</thead>
<tbody>
{foreach $raty as $p}
{strip}
	<tr>
		<td>{$p["kwota"]} zł</td>
		<td>{$p["lat"]}</td>
		<td>{$p["procent"]} %</td>
                <td>{$p["rata"]} zł</td>
                <td>{$p["total"]} zł</td>
	</tr>
{/strip}
{/foreach}
</tbody>
</table>
</section>


{include file='messages.tpl'}
</div>
{/block}
{block name=footer}Jakub Painta{/block}
