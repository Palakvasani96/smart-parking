@extends('layouts.auth')

    @section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                         <p color="white">Hi there, User {{ session('status') }} </p>
                         <form action="{{route('logout')}}" method="POST">
                            @method('POST')
                            @csrf
                            <input type="submit" class="button" value="Logout"/>
                        </form>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
