<ul>
    @foreach($boxes as $box)
    <li>
        ID: {{$box->id}} Bananas in box: {{$box->bananas}}
        <a href="{{route('box.edit', $box)}}">EDIT</a>
    </li>
    @endforeach
</ul>
