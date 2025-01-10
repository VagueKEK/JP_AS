{if $users|@count > 0}
    <table>
        <tr>
            <th>ID</th>
            <th>Imię</th>
            <th>Nazwisko</th>
            <th>Email</th>
            <th>Rola</th>
            <th>Aktywny</th>
            <th>Akcje</th>
        </tr>
        {foreach $users as $user}
            <tr>
                <td>{$user.id}</td>
                <td>{$user.name}</td>
                <td>{$user.surname}</td>
                <td>{$user.email}</td>
                <td>{$user.role_name}</td>
                <td>{if $user.active == 1}Tak{else}Nie{/if}</td>
                <td>
                    <a href="{$conf->action_root}userEdit?id={$user.id}">Edytuj</a>
                </td>
            </tr>
        {/foreach}
    </table>
    <div class="pagination">
        {if $current_page > 1}
            <a href="{$conf->action_root}employeeUsers?page={$current_page-1}">&laquo; Poprzednia</a>
        {/if}
        {section name=page loop=$total_pages}
            <a href="{$conf->action_root}employeeUsers?page={$smarty.section.page.index+1}" class="{if $smarty.section.page.index+1 == $current_page}active{/if}">
                {$smarty.section.page.index+1}
            </a>
        {/section}
        {if $current_page < $total_pages}
            <a href="{$conf->action_root}employeeUsers?page={$current_page+1}">Następna &raquo;</a>
        {/if}
    </div>
{else}
    <h1>Brak użytkowników do wyświetlenia.</h1>
{/if}
