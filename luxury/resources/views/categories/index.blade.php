@foreach ($categories as $category)
    <div class="test">{{ $category->id }}{{ $category->name }}</div>
@endforeach