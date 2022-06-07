@extends('main')

@section('title', 'Drivers')

@section('content')
  <div>
    <a class="nav-link" href="{{ route('driver.create') }}"><i class="fa-solid fa-plus"></i> Add Driver</a>
    @if (count($drivers) > 0)
      <ul>
        @foreach ($drivers as $driver)
          <li>
            <a class="nav-link" href="{{ route('driver.show', ['driver' => $driver['id']]) }}">{{ $driver['first_name'] . ' ' . $driver['last_name'] }}</a>
          </li>
        @endforeach
      </ul>
    @else
      <h2>There are no drivers to display</h2>
    @endif
  </div>
@endsection

@section('scripts')
  <script>
    console.log('drivers page');
  </script>
@endsection
