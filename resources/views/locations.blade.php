@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Locations:</div>

                <div class="card-body">
                  <div class="alert alert-success" role="alert">
                    <ul>
                      
                        @foreach ($locations as $location)
                          <li>
                            <a href="{{-- {{route('location.show', $location -> id)}} --}}">
                              {{ $location -> name }}
                            </a>
                          </li>
                        @endforeach

                    </ul>
                    <br><br>

                    <div>
                      @auth
                        <a class="btn btn-primary" href="{{-- {{route('location.create')}}--}}">
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
