@extends('main')

@section('title', 'Team ' . $team['name'])

@section('content')
  <div>
    <a class="nav-link" href="{{ route('team.index') }}"><i class="fa-solid fa-angle-left"></i> Go back</a>
    <ul>
      @foreach (array_keys($team) as $property)
        <li>
          <b>{{ $property }}:</b>
          <span>{{ $team[$property] }}</span>
        </li>
      @endforeach
    </ul>
  </div>
@endsection

@section('scripts')
  <script>
    console.log('teams page');
  </script>
@endsection
