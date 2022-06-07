@extends('main')

@section('title', 'Add Driver')

@section('content')
<div id="driverForm">
  <a class="nav-link" href="{{ $edit ? route('driver.show', ['driver' => $driver->id]) : route('driver.index') }}"><i class="fa-solid fa-angle-left"></i> Go back</a>
  <form action="{{ $edit ? route('driver.update', ['driver' => $driver->id]) : route('driver.store') }}" method="POST">
    @csrf
    @if ($edit)
      @method('PUT')
    @endif
    <div>
      <label for="firstName">First Name</label>
      <input type="text" id="firstName" value="{{ $edit ? $driver->first_name : old('first_name') }}" name="first_name">
      @error('firstName')
          <div class="form-error">
            {{ $message }}
          </div>
      @enderror
    </div>
    <div>
      <label for="lastName">Last Name</label>
      <input type="text" id="lastName" value="{{ $edit ? $driver->last_name : old('last_name') }}" name="last_name">
      @error('lastName')
          <div class="form-error">
            {{ $message }}
          </div>
      @enderror
    </div>
    <div>
      <label for="birthDate">Birth Date</label>
      <input type="date" id="birthDate" value="{{ $edit ? $driver->birth_date : old('birth_date') }}" name="birth_date">
      @error('birthDate')
          <div class="form-error">
            {{ $message }}
          </div>
      @enderror
    </div>
    <div>
      <button type="submit">Submit</button>
    </div>
  </form>
</div>
@endsection

@section('scripts')
  <script>
    console.log('drivers page');
  </script>
@endsection
