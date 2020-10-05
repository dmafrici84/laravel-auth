@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                  Employee:<br>
                  {{ $employee -> firstname }} {{ $employee -> lastname }}
                </div>

                <div class="card-body">
                  <div class="alert alert-success" role="alert">
                    <ul>
                      <li>
                        Firstname: {{ $employee -> firstname }} <br>
                        Lastname: {{ $employee -> lastname }} <br>
                        Date of birth: {{ $employee -> date_of_birth}} <br>
                        @auth
                        Private code: {{ $employee -> private_code}}
                      </li>
                      <li>
                        Location:<br>
                        <ul>
                          <li>
                            Name: {{$employee -> location -> name}}<br>
                            Street: {{$employee -> location -> street}}<br>
                            City: {{$employee -> location -> city}}<br>
                            State: {{$employee -> location -> state}}
                          </li>
                        </ul>
                      </li>
                      <li>
                        Tasks:<br>
                        <ul>
                          @foreach ($employee -> tasks as $task)
                            <li>
                              Name: {{$task -> name}} <br>
                              Description: {{$task -> description}}<br>
                              Start date: {{$task -> start_date}}<br>
                              End date: {{$task -> end_date}}
                            </li>
                          @endforeach
                        </ul>
                      </li>
                    </ul>
                    <br><br>
                    <a class="btn btn-primary" href="{{route('employee.edit', $employee -> id)}}">
                      UPDATE
                    </a>
                    <a class="btn btn-danger" href="{{route('employee.delete', $employee -> id)}}">
                      DELETE
                    </a>
                    @else
                      <br><br>
                      <p>

                        For more information and to make changes you need to  <a href="{{url('/register')}}">register</a> or <a href="{{url('/login')}}">login</a>
                      </p>
                    @endauth
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
