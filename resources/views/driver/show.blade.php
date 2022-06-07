@extends('main')

@section('title', 'Driver ' . ($driver['first_name'] ?? '') . ' ' . ($driver['last_name'] ?? ''))

@section('content')
  <div>
    <a class="nav-link" href="{{ route('driver.index') }}"><i class="fa-solid fa-angle-left"></i> Go back</a>
    <div>
      <a class="nav-link" href="{{ route('driver.edit', ['driver' => $driver->id]) }}"><i class="fa-solid fa-pencil"></i></i> Edit Driver</a>
    </div>
    <ul>
      <li>
        <strong>First Name:</strong>
        <span>{{ $driver['first_name'] }}</span>
      </li>
      <li>
        <strong>Last Name:</strong>
        <span>{{ $driver['last_name'] }}</span>
      </li>
      <li>
        <strong>Birth Date:</strong>
        <span>{{ $driver['birth_date'] }}</span>
      </li>
    </ul>
  </div>
@endsection

@section('scripts')
  <script>
    console.log('driver page');
  </script>
@endsection
