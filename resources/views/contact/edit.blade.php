@extends('layouts.app-master')
@section('content')
    @auth
    <div class="mt-4 mb-4">

    </div>
    <div class="rounded">
    <form method="POST" action="{{ route('contact.update',$contact->id) }}">
        @csrf
        @method('put')
    <table id="customers">
        <tr>
            <th>#</th>
            <th>Usernames</th>
            <th>Surname</th>
            <th>Lastname</th>
            <th>email</th>
            <th>TelNumber</th>
            <th>Address</th>
            <th>Password</th>
            <th>Update</th>

        </tr>
        <tr>
            <td>
                {{$contact->id}}

            </td>
            <td>
                <input type="text" name="username"
                       class="block w-full @error('username') border-red-500 @enderror mt-1 rounded-md"
                       placeholder="{{old('username',$contact->username)}}" value="{{old('username',$contact->username)}}" />
                @error('username')
                <div>{{ $message }}</div>
                @enderror
            </td>
            <td>
                <input type="text" name="surname"
                       class="block w-full @error('surname ') border-red-500 @enderror mt-1 rounded-md"
                       placeholder="{{old('surname',$contact->surname)}}" value="{{old('surname',$contact->surname)}}" />
                @error('surname')
                <div>{{ $message }}</div>
                @enderror
            </td>
            <td>
                <input type="text" name="lastname"
                       class="block w-full @error('lastname ') border-red-500 @enderror mt-1 rounded-md"
                       placeholder="{{old('lastname ',$contact->lastname )}}" value="{{old('lastname ',$contact->lastname )}}"/>
                @error('lastname ')
                <div>{{ $message }}</div>
                @enderror
            </td>
            <td>
                <input type="text" name="email"
                       class="block w-full @error('email ') border-red-500 @enderror mt-1 rounded-md"
                       placeholder="{{old('email ',$contact->email)}}" value="{{old('email ',$contact->email)}}" />
                @error('email ')
                <div>{{ $message }}</div>
                @enderror
            </td>
            <td>
                <input type="text" name="number"
                       class="block w-full @error('number ') border-red-500 @enderror mt-1 rounded-md"
                       placeholder="{{old('number',$contact->number)}}" value="{{old('number',$contact->number)}}" />
                @error('number ')
                <div>{{ $message }}</div>
                @enderror
            </td>
            <td>
                <input type="text" name="address"
                       class="block w-full @error('address') border-red-500 @enderror mt-1 rounded-md"
                       placeholder="{{old('address',$contact->address)}}" value="{{old('address',$contact->address)}}" />
                @error('address')
                <div>{{ $message }}</div>
                @enderror
            </td>
            <td>
                <input type="text" name="password"
                       class="block w-full @error('password') border-red-500 @enderror mt-1 rounded-md"
                       placeholder="password" />
                @error('password')
                <div>{{ $message }}</div>
                @enderror
            </td>
            <td>
                <button type="submit" class="btn btn-success">Submit</button>
            </td>
        </tr>
    </table>
    </form>
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
@endsection
