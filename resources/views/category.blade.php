
<ul>
@foreach($Category as $item)
    <li>
        <a href="{{$item->url}}">{{$item->category_name}}</a>
        @if ($item->subcategory->count()) 
            <ul>
            @foreach ($item->subcategory as $subitem)
                <li><a href="{{$subitem->url}}">{{$subitem->subcategory_name}}</a></li>
            @endforeach
            </ul>
        @endif
    </li>
@endforeach
</ul>