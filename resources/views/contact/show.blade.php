@auth
<div class="card">
    <div class="card-header">Contact Page</div>
    <div class="card-body">

        <div class="card-body">
           <p  class="card-text">{{$contact->id}}</p>
            <p class="card-text">{{$contact->username}},{{$contact->surname}},{{$contact->lastname}}</p>
            <p class="card-text">{{$contact->email}} </p>
           <p class="card-text"> {{$contact->number}}</p>
           <p class="card-text">{{$contact->address}}</p>
           <p class="card-text"> {{$contact->created_at}}</p>
           <p class="card-text">  {{$contact->updated_at}}</p>
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
