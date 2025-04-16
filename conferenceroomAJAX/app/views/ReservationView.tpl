{extends file="main.tpl"}
{block name=footer}Jakub Painta{/block}
{block name=p_description}<p>Rezerwacja</p>{/block}
{block name=top}
<div style="width:90%; margin: 2em auto;">
    <section>
        <form action="{$conf->action_root}reservationShow" method="post">
        <div class="row gtr-uniform gtr-50">
            <div class="col-2 col-12-xsmall">
                <label for="date">Data:</label>
                <input class="data_rezerwacji" type="date" id="date" name="date" min="{$currentDate}" value="{$selectedDate|default:''}" onchange="this.form.submit()" value placeholder="Data"><br>
            </div>
        </div>
        </form>

        {if $selectedDate}
            <form action="{$conf->action_root}reservation" method="post" id="reservationForm">

                <div class="row gtr-uniform gtr-50">
                
                    <input type="hidden" name="date" value="{$selectedDate|default:''}">

                    <div class="col-4 col-12-medium">
                        <label for="room_id">Wybierz salę:</label>
                        <select id="room_id" name="room_id" onchange="updateTimes()">
                            <option value="">Wybierz salę</option>
                            {foreach $rooms as $room}
                                <option value="{$room.id}">{$room.name} - {$room.location}</option>
                            {/foreach}
                        </select><br>
                    </div>

                    <div class="col-4 col-12-medium">
                        <label for="time">Godzina:</label>
                        <select id="time" name="time">
                            <option value="">Wybierz godzinę</option>
                        </select><br>
                    </div>

                    <div class="col-4 col-12-medium">
                        <label for="number_of_people">Liczba osób:</label>
                        <input type="number" id="number_of_people" name="number_of_people" min="1" max="30"><br>
                    </div>

                    <div class="col-12">
                        <ul class="actions">
                        {if $isLoggedIn}
                            <li><input type="submit" value="Zarezerwuj" class="primary" /></li>
                        {else}
                            <li><a href="{$conf->action_root}loginShow" class="button primary">Musisz być zalogowany, aby dokonać rezerwacji. Zaloguj</a></li>
                        {/if}
                        </ul>
                    </div>
                    <header>
                        <p>Jednorazowa rezerwacja pozwala na <b>60 minutowe spotkanie</b></p>
                        <p>Dla większych rezerwacji lub dłuższy czas prosimy o <b>kontakt telefoniczny.</b></p>
                    </header>
                </div>
            </form>
        {/if}
    </section>
</div>

{literal}
<script>
    const times = {/literal}{$times|json_encode}{literal};

    function updateTimes() {
        const roomId = document.getElementById('room_id').value;
        const timeSelect = document.getElementById('time');
        timeSelect.innerHTML = '<option value="">Wybierz godzinę</option>';
        if (roomId && times[roomId]) {
            times[roomId].forEach(time => {
                const option = document.createElement('option');
                option.value = time;
                option.textContent = time;
                timeSelect.appendChild(option);
            });
        }
    }
</script>
{/literal}
{/block}
