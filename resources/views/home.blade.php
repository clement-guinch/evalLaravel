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
          <a href="/newview">Modifications</a>
          <table>
            <tr>
            <th>Salles</th>
            <th>Positions</th>
            <th>Reservation</th>
            <th>Delete</th>
            <th>Update</th>
            </tr>
          @foreach ($halls as $hall)
          <tr>
          <td>{{ $hall->name }}</td>
          <td>{{ $hall->positions['name'] }}</td>
          <td>{{ $hall->statuses['name'] }}</td>
          <td>
            <form class="" action="/deletehall" method="post">
              @csrf
                  <input type="hidden"   name="id" value="{{ $hall->id }}">
                  <input type="submit"  name="" value="X">
            </form>
          </td>
          <td>
          <form class="" action="/updatehall" method="post">
            @csrf
                <input type="hidden"   name="id" value="{{ $hall->id }}">
                <input type="submit"  name="" value="U">
          </form>
          </td>
          </tr>
          @endforeach
          </table>
        </div>
    </div>
</div>
@endsection
