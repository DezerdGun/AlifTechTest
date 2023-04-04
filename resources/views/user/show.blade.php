@auth
<div class="card">
    <div class="card-header">Contact Page</div>
    <div class="card-body">

        <div class="card-body">
           <p  class="card-text">{{$user->id}}</p>
            <p class="card-text">{{$user->username}},{{$user->surname}},{{$user->lastname}}</p>
           <p class="card-text"> {{$user->created_at}}</p>
           <p class="card-text">  {{$user->updated_at}}</p>
        </div>
        </hr>

    </div>
</div>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
@endauth
@guest
    <h1>Please Sign-up and ReadMe file or ask from Alif</h1>
@endguest
