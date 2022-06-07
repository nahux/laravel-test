@extends('main')

@section('title', 'Teams')

@section('content')
  <div>
    @if (count($teams) > 0)
      <ul>
        @foreach ($teams as $team)
          <li>
            <a class="nav-link" href="{{ route('team.show', ['team' => $team['id']]) }}" >{{ $team['name'] }}</a>
          </li>
        @endforeach
      </ul>
    @else
      <h2>There are no teams to display</h2>
    @endif
  </div>
@endsection

@section('scripts')
  <script>
    console.log('teams page');
  </script>
@endsection
