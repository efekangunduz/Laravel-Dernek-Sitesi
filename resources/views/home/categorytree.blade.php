@foreach($children as $subcategory)
    <ul class="dropdown">
        @if(count($subcategory->children))
            <li class="has-down" style="color: #1D00AF;font-size: 14px"> {{$subcategory->title}}</li>

                 @include('home.categorytree', ['children'=> $subcategory->children])

        @else
            <li style="font-size: 10px"><a href="#">{{$subcategory->title}}</a></li>
        @endif
    </ul>
@endforeach
