{extends file="main.tpl"}
{block name=footer}Jakub Painta{/block}
{block name=p_description}<p>Historia rezerwacji</p>{/block}
{block name=top}
<div style="width:90%; margin: 2em auto;">
	<section>
    <h1>Historia Rezerwacji</h1>
    {if $reservations}
        <table>
            <tr>
                <th>Nr rezerwacji</th>
                <th>Data złożenia</td>
                <th>Data rezerwacji</th>
                <th>Godzina</th>
                <th>Liczba osób</th>
                <th>Status</th>
                <th>Sala</th>
            </tr>
            {foreach $reservations as $reservation}
                <tr>
                    <td>{$reservation.id}</td>
                    <td>{$reservation.creation_date}</td>
                    <td>{$reservation.date}</td>
                    <td>{$reservation.time}</td>
                    <td>{$reservation.number_of_people}</td>
                    <td>{$reservation.status}</td>
                    <td>{$reservation.room_name}</td>
                </tr>
            {/foreach}
        </table>

        <div class="pagination">
            {if $current_page > 1}
                <a href="{$conf->action_root}reservationHistory?page={$current_page-1}">&laquo; Poprzednia</a>
            {/if}
            {section name=page loop=$total_pages}
                <a href="{$conf->action_root}reservationHistory?page={$smarty.section.page.index+1}" class="{if $smarty.section.page.index+1 == $current_page}active{/if}">
                    {$smarty.section.page.index+1}
                </a>
            {/section}
            {if $current_page < $total_pages}
                <a href="{$conf->action_root}reservationHistory?page={$current_page+1}">Następna &raquo;</a>
            {/if}
        </div>

    {else}
        <p>Brak rezerwacji do wyświetlenia.</p>
    {/if}
	</section>
</div>
{/block}

