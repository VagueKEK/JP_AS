{extends file="main.tpl"}
{block name=footer}Jakub Painta{/block}
{block name=p_description}<p>Edytuj</p>{/block}
{block name=top}

<div style="width:90%; margin: 2em auto;">
    <section>
        <h1>Edycja użytkownika</h1>
        <form action="{$conf->action_root}userSave" method="post">
            <input type="hidden" name="id" value="{$form->id}" />
            <label for="name">Imię:</label>
            <input type="text" id="name" name="name" value="{$form->name}" />
            <label for="surname">Nazwisko:</label>
            <input type="text" id="surname" name="surname" value="{$form->surname}" />
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="{$form->email}" />
            <label for="active">Aktywny:</label>
            <select id="active" name="active">
                <option value="1" {if $form->active == 1}selected{/if}>Tak</option>
                <option value="0" {if $form->active == 0}selected{/if}>Nie</option>
            </select>
            <label for="role">Rola:</label>
            <select id="role" name="role">
                <option value="3" {if $form->role == '3'}selected{/if}>Użytkownik</option>
                <option value="4" {if $form->role == '4'}selected{/if}>Pracownik</option>
                <option value="1" {if $form->role == '1'}selected{/if}>Admin</option>
            </select>
            <div class="col-12">
                <ul class="actions">
                    <li><input type="submit" value="Zapisz" class="primary" /></li>
                    <li><a href="{$conf->action_root}employeeUsers">Powrót</a></li>
                </ul>
            </div>
        </form>
    </section>	
</div>

{/block}