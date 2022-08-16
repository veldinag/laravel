@foreach ($categoriesList as $key => $category)
    @if ($key != 0)
        <a href="{{ route('newslist.index', ['cat_id' => $key]) }}"> {{ $category }}</a><br>
    @endif
@endforeach
    <br>
    <a href="{{ route('newslist.index', ['cat_id' => 0, ]) }}"> {{  $categoriesList[0] }}</a><br>
