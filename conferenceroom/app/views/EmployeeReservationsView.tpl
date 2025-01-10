{extends file="main.tpl"}
{block name=footer}Jakub Painta{/block}
{block name=p_description}<p>Podgląd rezerwacji</p>{/block}
{block name=top}
<div style="width:90%; margin: 2em auto;">
    <section>
        <h1>Zarządzanie rezerwacjami</h1>
        <form action="{$conf->action_root}employeeReservations" method="post">
            <label for="date">Filtruj po dacie:</label>
            <input type="date" id="date" name="date" value="{$date_filter|default:''}">

            <label for="reservation_id">Filtruj po ID rezerwacji:</label>
            <input type="number" id="reservation_id" name="reservation_id" min="0" value="{$reservation_id_filter|default:''}">

            <label for="surname">Filtruj po nazwisku:</label>
            <input type="text" id="surname" name="surname" value="{$surname_filter|default:''}">

            <input type="submit" value="Filtruj">
        </form>
        {if $reservations|@count > 0}
        <table>
            <tr>
                <th>Nr rezerwacji</th>
                <th>Data złożenia</td>
                <th>Data rezerwacji</th>
                <th>Godzina</th>
                <th>Liczba osób</th>
                <th>Sala</th>
                <th>Status</th>
                <th>Użytkownik</th>
                <th>Akcja</th>
            </tr>
            {foreach $reservations as $reservation}
            <tr>
                <td>{$reservation.id}</td>
                <td>{$reservation.creation_date}</td>
                <td>{$reservation.date}</td>
                <td>{$reservation.time}</td>
                <td>{$reservation.number_of_people}</td>
                <td>{$reservation.room_name}</td>
                <td>{$reservation.status}</td>
                <td>{$reservation.user_name} {$reservation.user_surname}</td>
                <td>
                    <form action="{$conf->action_root}updateReservationStatus" method="post">
                        <input type="hidden" name="reservation_id" value="{$reservation.id}">
                        <select name="status">
                            <option value="Oczekujące" {if $reservation.status == 'Oczekujące'}selected{/if}>Oczekujące</option>
                            <option value="Potwierdzone" {if $reservation.status == 'Potwierdzone'}selected{/if}>Potwierdzone</option>
                            <option value="Zrealizowane" {if $reservation.status == 'Zrealizowane'}selected{/if}>Zrealizowane</option>
                            <option value="Anulowane" {if $reservation.status == 'Anulowane'}selected{/if}>Anulowane</option>
                        </select>
                            </div>
                        <input type="submit" value="Zaktualizuj">
                    </form>
                </td>
            </tr>
            {/foreach}
        </table>
        {else}
        <p>Brak rezerwacji do wyświetlenia.</p>
        {/if}
    </section>
</div>
{/block}