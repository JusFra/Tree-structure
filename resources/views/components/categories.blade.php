@foreach ($categories->sortBy('title') as $category)
    <x-category :category="$category" /></li>     
@endforeach
