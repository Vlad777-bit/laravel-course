<p class="post-meta">
    Автор <a href="#" class="post-author">{{ $author }}1</a>
    Статус
    @switch($status)
        @case('ACTIVE')
        <a class="post-category post-category-active" href="#">{{ $status }}</a>
        @break

        @case('BLOCKED')
        <a class="post-category post-category-block" href="#">{{ $status }}</a>
        @break

        @case('DRAFT')
        <a class="post-category post-category-draft" href="#">{{ $status }}</a>
        @break
    @endswitch
</p>
