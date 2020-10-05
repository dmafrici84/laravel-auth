@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"></div>

                <div class="card-body">
                  <div class="alert alert-success" role="alert">
                    <h3>
                      <a href="{{route('employees.index')}}">Employees</a>
                    </h3>
                    <h3>
                      <a href="{{route('locations.index')}}">Locations</a>
                    </h3>
                    <h3>
                      <a href="{{route('tasks.index')}}">Tasks</a>
                    </h3>

                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
