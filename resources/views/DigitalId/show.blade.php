<h1>See {{ $singleId->name}}'s Details </h1>
<ul>
  <li>Place of Birth:{{ $singleId->birthPlace}}</li>
  <li>Date of Birth:{{ $singleId->birthDate}}</li>
  <li>Sex:{{ $singleId->sex}}</li>
  <li>National Insurance Number:{{ $singleId->nationalNumber}}</li>
</ul>

<a href="{{route('digitalid.index')}}">Back to index</a>
