<li data-icon-cls="fa fa-inbox">{{ $category->title}}
    <button type="button" class="btn btn-sm btn-outline-danger delete" data-id="{{ $category->id }}">
        X
    </button>
    <a href="{{ route('categories.edit', $category->id) }}">
        <button type="button" class="btn btn-sm btn-outline-primary">E</button>
    </a>
    
    <ul>
        <x-categories :categories="$category->children" />
    </ul>
</li>
