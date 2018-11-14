@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
          @if (session('status'))
          <div class="alert alert-success" role="alert">
            {{ session('status') }}
              </div>
          @endif
          <form class="" action="insertHall" method="post">
              @csrf
              <label for="name">Add Hall :</label>
              <input required placeholder="name" type="text" name="name" value="">
              <input type="submit" name="" value="Insert">
          </form>
          <form class="" action="deleteHall" method="post">
            <label for="name">Delete hall :</label>
            <select>
              @foreach ($halls as $hall)
                <option value="{{ $hall->id }}">
                  {{ $hall->name }}
                </option>
              @endforeach
            </select>
            <input type="submit" name="" value="Delete">
          </form>
        </div>
    </div>
</div>
@endsection
