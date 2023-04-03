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
<form method="POST" action="{{ route('contact.store') }}">
    @csrf
    <table id="customers">
        <tr>
            <th>Username</th>
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
                <input type="text" name="username"
                       class="block w-full @error('username') border-red-500 @enderror mt-1 rounded-md"
                       placeholder=""  />
                @error('username')
                <div>{{ $message }}</div>
                @enderror
            </td>
            <td>
                <input type="text" name="surname"
                       class="block w-full @error('surname ') border-red-500 @enderror mt-1 rounded-md"
                       placeholder="" />
                @error('surname')
                <div>{{ $message }}</div>
                @enderror
            </td>


            <td>
                <input type="text" name="lastname"
                       class="block w-full @error('lastname') border-red-500 @enderror mt-1 rounded-md"
                       placeholder="" />
                @error('lastname ')
                <div>{{ $message }}</div>
                @enderror
            </td>
            <td>
                <input type="text" name="email"
                       class="block w-full @error('email ') border-red-500 @enderror mt-1 rounded-md"
                       placeholder=""  />
                @error('email')
                <div>{{ $message }}</div>
                @enderror
            </td>
            <td>
                <input type="text" name="number"
                       class="block w-full @error('number ') border-red-500 @enderror mt-1 rounded-md"
                       placeholder=""  />
                @error('number')
                <div>{{ $message }}</div>
                @enderror
            </td>
            <td>
                <input type="text" name="address"
                       class="block w-full @error('address') border-red-500 @enderror mt-1 rounded-md"
                       placeholder="" />
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
