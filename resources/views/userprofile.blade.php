@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-default">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        <p><strong>username: </strong>{{$loggedUser->username}}</p>

                        <p><strong>name: </strong>{{$loggedUser->name}}</p>

                        <p><strong>email: </strong>{{$loggedUser->email}}</p>

                        <p><strong>age: </strong>{{$loggedUser->age}}</p>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
