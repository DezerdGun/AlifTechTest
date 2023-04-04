@extends('layouts.app-master')
@section('content')
    @auth
    <div class="mt-4 mb-4">

    </div>
    <div class="rounded">
    <form method="POST" action="{{ route('user.update',$user->id) }}">
        @csrf
        @method('put')
    <table id="customers">
        <tr>
            <th>#</th>
            <th>Username</th>
            <th>Surname</th>
            <th>Lastname</th>
            <th>Date_of_birth</th>
            <th>Created_at</th>
            <th>Updated_at</th>
            <th>password</th>
            <th>Update</th>

        </tr>
        <tr>
            <td>
                {{$user->id}}

            </td>
            <td>
                <input type="text" name="username"
                       class="block w-full @error('username') border-red-500 @enderror mt-1 rounded-md"
                       placeholder="{{old('username',$user->username)}}" value="{{old('username',$user->username)}}" />
                @error('username')
                <div>{{ $message }}</div>
                @enderror
            </td>
            <td>
                <input type="text" name="surname"
                       class="block w-full @error('surname ') border-red-500 @enderror mt-1 rounded-md"
                       placeholder="{{old('surname',$user->surname)}}" value="{{old('surname',$user->surname)}}" />
                @error('surname')
                <div>{{ $message }}</div>
                @enderror
            </td>
            <td>
                <input type="text" name="lastname"
                       class="block w-full @error('lastname ') border-red-500 @enderror mt-1 rounded-md"
                       placeholder="{{old('lastname ',$user->lastname )}}" value="{{old('lastname ',$user->lastname )}}"/>
                @error('lastname ')
                <div>{{ $message }}</div>
                @enderror
            </td>
            <td>
                <input type="text" name="date_of_birth"
                       class="block w-full @error('date_of_birth ') border-red-500 @enderror mt-1 rounded-md"
                       placeholder="{{old('date_of_birth ',$user->date_of_birth)}}" value="{{old('date_of_birth ',$user->date_of_birth)}}"/>
                @error('date_of_birth')
                <div>{{ $message }}</div>
                @enderror
            </td>
            <td>
                <input type="text" name="created_at"
                       class="block w-full @error('created_at') border-red-500 @enderror mt-1 rounded-md"
                       placeholder="{{old('created_at ',$user->created_at )}}" value="{{old('created_at ',$user->created_at )}}"/>
                @error('lastname ')
                <div>{{ $message }}</div>
                @enderror
            </td>
            <td>
                <input type="text" name="updated_at"
                       class="block w-full @error('updated_at ') border-red-500 @enderror mt-1 rounded-md"
                       placeholder="{{old('updated_at ',$user->updated_at)}}" value="{{old('updated_at',$user->updated_at )}}"/>
                @error('updated_at')
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
