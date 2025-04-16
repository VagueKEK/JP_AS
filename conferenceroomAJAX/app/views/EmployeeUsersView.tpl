{extends file="main.tpl"}
{block name=footer}Jakub Painta{/block}
{block name=p_description}<p>Użytkownicy</p>{/block}
{block name=top}
<div style="width:90%; margin: 2em auto;">
    <section>
        <h1>Dodaj Użytkownika</h1>
        <form id="addUserForm" onsubmit="submitAddUserForm(); return false;" method="post">

            <div class="row gtr-uniform gtr-50">
                <div class="col-4 col-12-xsmall">
                    <label for="name">Imię:</label>
                    <input type="text" id="name" name="name" required><br>
                </div>

                <div class="col-4 col-12-xsmall">
                    <label for="surname">Nazwisko:</label>
                    <input type="text" id="surname" name="surname" required><br>
                </div>

                <div class="col-4 col-12-xsmall">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required><br>
                </div>

                <div class="col-4 col-12-xsmall">
                    <label for="password">Hasło:</label>
                    <input type="password" id="password" name="password" required><br>
                </div>

                <div class="col-4 col-12-xsmall">
                    <label for="role">Rola:</label>
                    <select id="role" name="role" required>
                        <option value="3">Użytkownik</option>
                        <option value="4">Pracownik</option>
                    </select><br>
                </div>

                <div class="col-12">
                    <input type="submit" class="primary" value="Dodaj użytkownika">
                </div>
            </div>
            <br />
            <hr />
            <h1>Edycja użytkownika</h1>
        </form>
        <form id="filterForm" action="{$conf->action_root}employeeUsers" method="post" onsubmit="ajaxPostForm('filterForm', '{$conf->action_root}employeeUsers', 'userList'); return false;">
            <label for="filterSurname">Filtruj po nazwisku:</label>
            <input type="text" id="filterSurname" name="surname" value="{$surname_filter|default:''}"><br>
            <input type="submit" class="primary" value="Filtruj">
        </form>
        <div id="userList">
            {include file='EmployeeUsersTable.tpl'}
        </div>
    </section>
</div>
{literal}
<script>
function submitAddUserForm() {
    const form = document.getElementById('addUserForm');
    const formData = new FormData(form);

    fetch('addUser', {
        method: 'POST',
        headers: { 'X-Requested-With': 'XMLHttpRequest' },
        body: formData
    })
    .then(res => res.text())
    .then(() => {
        form.reset(); // wyczyść formularz
        ajaxPostForm('filterForm', 'employeeUsers', 'userList'); // przeładuj tabelę
    })
    .catch(err => console.error('Błąd przy dodawaniu użytkownika:', err));
}
</script>
{/literal}
{/block}
