@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Employees:</div>

                <div class="card-body">
                  <div class="alert alert-success" role="alert">
                    <ul>
                      @foreach ($employees as $employee)
                          <li>
                            <a href="{{route('employee.show', $employee -> id)}}">
                              {{ $employee -> firstname }} {{ $employee -> lastname }}
                            </a>
                          </li>
                      @endforeach
                    </ul>
                    <br><br>

                    <div>
                      @auth
                        <a class="btn btn-primary" href="{{route('employee.create')}}">
                          CREATE
                        </a>
                      @else
                        <br><br>
                        <p>

                          For more information and to make changes you need to  <a href="{{url('/register')}}">register</a> or <a href="{{url('/login')}}">login</a>
                        </p>
                      @endauth
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
