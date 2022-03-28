<form method="POST" action="{{ route('admin.news.store') }}" class="pure-form">

    @csrf

    <fieldset class="pure-group">
        <label for="title">Наименование</label>
        <input
            type="text"
            name="title"
            class="pure-input-1"
            value="{{ old('title') }}"
        />

        <label for="author">Автор</label>
        <input
            type="text"
            name="author"
            class="pure-input-1"
            value="{{ old('author') }}"
        />

        <label for="status-news">Статус</label>
        <select id="status-news" class="pure-input-1">
            <option>DRAFT</option>
            <option>ACTIVE</option>
            <option>BLOCKED</option>
        </select>
        <br>
        <br>
        <label for="description">Описание</label>
        <textarea
            class="pure-input-1"
            name="description"
        >{!! old('description') !!}</textarea>
    </fieldset>
    <button type="submit" class="pure-button pure-input-1 pure-button-primary">Создать категорию</button>
</form>

