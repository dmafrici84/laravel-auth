@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                   Edit Employee
                </div>
                <div class="card-body">
                  <div class="alert alert-success" role="alert">
                    <form action="" method="post">
                        @csrf
                        @method('POST')

                        <div class="form-group">
                            <label for="firstname">FIRSTNAME</label>
                            <br>
                            <input type="text" name="firstname" value="{{$employee -> firstname}}">
                        </div><br>
                        <div class="form-group">
                            <label for="lastname">LASTNAME</label>
                            <br>
                            <input type="text" name="lastname" value="{{$employee -> lastname}}">
                        </div><br>
                        <div class="form-group">
                            <label for="date_of_birth">DATE OF BIRTH</label>
                            <br>
                            <input type="date" name="date_of_birth" value="{{$employee -> date_of_birth}}">
                        </div><br>
                        <div class="form-group">
                            <label for="private_code">PRIVATE CODE</label>
                            <br>
                            <input type="text" name="private_code" value="{{$employee -> private_code}}">
                        </div><br>
                        <div class="form-group">
                            <label for="location_id">LOCATION</label>
                            <br>
                            <select name="location_id">
                              @foreach ($locations as $location)
                                <option value="{{$location -> id}}"
                                  @if ($location -> id === $employee -> location -> id)
                                    selected
                                  @endif
                                  >{{$location -> name}} ({{$location -> city}})
                                </option>
                              @endforeach
                            </select>
                        </div>
                        <br><br>
                        <button type="submit">SAVE</button>
                        <br><br>
                    </form>
                    <br><br>
                    <div>
                      <a class="btn" href="{{route('employees.index')}}">
                        INDEX EMPLOYEES
                      </a>
                      <a class="btn" href="{{route('home')}}">
                        HOME
                      </a>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
