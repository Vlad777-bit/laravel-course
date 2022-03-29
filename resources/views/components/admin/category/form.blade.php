<form method="post" class="pure-form" action="{{ route('admin.categories.store') }}">

    @csrf

    <fieldset class="pure-group">
        <label for="title">Наименование</label>
        <input type="text" name="title" class="pure-input-1" />
        <br>
        <label for="description">Описание</label>
        <textarea class="pure-input-1" name="description"></textarea>
    </fieldset>
    <button type="submit" class="pure-button pure-input-1 pure-button-primary">Создать категорию</button>
</form>
