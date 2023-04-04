@extends('layouts.app-master')
@section('content')
    @auth
<x-slot name="header">
    <h2 class="text-xl font-semibold leading-tight text-gray-800">
        {{ __('Category Create') }}
    </h2>
</x-slot>
<div class="mt-4 mb-4">

</div>

<form method="POST" action="{{ route('user.store') }}">
    @csrf
    <table  id="customers">
        <tr>
            <th>Username</th>
            <th>Surname</th>
            <th>Lastname</th>
            <th>Date</th>
            <th>Password</th>
            <th>Added</th>

        </tr>
        <tr>
            <td>
                <input   type="text" name="username"
                       class="block w-full @error('username') border-red-500 @enderror mt-1 rounded-md"
                       placeholder="Milter"  />
                @error('username')
                <div>{{ $message }}</div>
                @enderror
            </td>
            <td>
                <input type="text" name="surname"
                       class="block w-full @error('surname ') border-red-500 @enderror mt-1 rounded-md"
                       placeholder="Vaxo" />
                @error('surname')
                <div>{{ $message }}</div>
                @enderror
            </td>


            <td>
                <input type="text" name="lastname"
                       class="block w-full @error('lastname') border-red-500 @enderror mt-1 rounded-md"
                       placeholder="Baxa" />
                @error('lastname ')
                <div>{{ $message }}</div>
                @enderror
            </td>
            <td>
                <input type="text" name="date_of_birth"
                       class="block w-full @error('date_of_birth') border-red-500 @enderror mt-1 rounded-md"
                       placeholder="1998-01-01" value="" />
                @error('date_of_birth')
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
                <button type="submit" class="btn btn-success me-2">Create</button>
            </td>
        </tr>
    </table>
</form>
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
