@foreach($items as $item)
    <li @if($item->hasChildren())class ="dropdown"@endif>
        @if($item->link) <a @if($item->hasChildren()) class="dropdown-toggle" data-toggle="dropdown" @endif href="{{ $item->url() }}">
            <span>{!! $item->title !!}</span>
            @if($item->hasChildren()) @endif
        </a>
        @else
            {{$item->title}}
        @endif
        @if($item->hasChildren())
            <ul class="dropdown-menu">
                @foreach($item->children() as $child)
                    <li><a href="{{ $child->url() }}">{{ $child->title }}</a></li>
                @endforeach
            </ul>
        @endif
    </li>
    @if($item->divider)
        <li{{\HTML::attributes($item->divider)}}></li>
    @endif
@endforeach