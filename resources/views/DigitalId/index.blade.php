<h1>Fake Digital Ids for your fake drive license</h1>
<ul>
  @foreach ($DigitalId as $singleId)
    <li>
      {{$singleId->name}}
      - <a href="{{route('digitalid.show', $singleId->id)}}">Details</a>
    </li>
  @endforeach
</ul>
