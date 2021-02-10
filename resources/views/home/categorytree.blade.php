@foreach($children as $subcategory)
    <ul class="dropdown">
        @if(count($subcategory->children))
            <li class="has-down" style="color: #1D00AF;font-size: 14px"> {{$subcategory->title}}</li>

                 @include('home.categorytree', ['children'=> $subcategory->children])

        @else
            <li style="width: auto" class="has-down"><a href="{{route('categoryduyurus', ['id'=>$subcategory->id, 'slug'=>$subcategory->slug])}}">{{ $subcategory->title}}</a></li>
        @endif
    </ul>
@endforeach
