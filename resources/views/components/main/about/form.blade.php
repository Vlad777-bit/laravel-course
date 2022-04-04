<form method="get" class="pure-form">

    @csrf

    <fieldset class="pure-group">
        <label for="userName">Имя</label>
        <input type="text" name="userName" class="pure-input-1" />
        <br>
        <label for="description">Комментарий</label>
        <textarea class="pure-input-1" name="description"></textarea>
    </fieldset>
    <div class="pure-button-right">
        <button type="submit" class="pure-button pure-input-1-5 pure-button-form">Отправить</button>
    </div>
</form>
