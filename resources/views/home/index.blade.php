@extends('layouts.app-master')

@section('content')
    <div class="bg-light m-5 p-5 rounded">
        @auth
            <h1>Thanks Alif for Your logged in! </h1>
            <p class="lead">Greate Alif You gonna check site! press blue Bottom to see contacts or above links -> ContactLists</p>
            <a class="btn btn-lg btn-primary" href="{{ url('contact') }}" role="button">Contacts&raquo;</a>
        @endauth
        @guest
            <h1>Hi Alif! Welcome to Guest Page</h1>
            <p class="lead">In order to see Contacts pls! make registeration or read README file thnks)!</p>

        @endguest
    </div>
@endsection
