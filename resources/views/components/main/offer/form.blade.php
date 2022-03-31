<form method="post" class="pure-form" action="{{ route('offer.store') }}">

    @csrf

    <fieldset class="pure-group">
        <label for="userName">Имя</label>
        <input type="text" name="userName" class="pure-input-1" />

        <br>

        <label for="userPhone">Телефон</label>
        <input type="tel" name="userPhone" class="pure-input-1" />

        <br>

        <label for="userEmail">Почта</label>
        <input type="email" name="userEmail" class="pure-input-1" />

        <br>

        <label for="description">О чём бы вы хотели написать?</label>
        <textarea class="pure-input-1" name="description"></textarea>
    </fieldset>
    <div class="pure-button-right">
        <button type="submit" class="pure-button pure-input-1-5 pure-button-form">Отправить</button>
    </div>
</form>
