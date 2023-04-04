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
    <table  id="customers">
        <tr>

            <th>Email</th>
            <th>Telephone</th>
            <th>Address</th>
            <th>Added</th>

        </tr>
        <tr>

                <input   type="hidden" name="user_id"
                         class="block w-full @error('user_id') border-red-500 @enderror mt-1 rounded-md"
                         placeholder="Milter" value="{{Auth::user()->id}}" />
                @error('user_id')
                <div>{{ $message }}</div>
                @enderror

            <td>
                <input   type="text" name="email"
                       class="block w-full @error('email') border-red-500 @enderror mt-1 rounded-md"
                       placeholder="Milter@gmail.com"  />
                @error('email')
                <div>{{ $message }}</div>
                @enderror
            </td>
            <td>
                <input type="text" name="number"
                       class="block w-full @error('number') border-red-500 @enderror mt-1 rounded-md"
                       placeholder="99899" />
                @error('number')
                <div>{{ $message }}</div>
                @enderror
            </td>


            <td>
                <input type="text" name="address"
                       class="block w-full @error('address') border-red-500 @enderror mt-1 rounded-md"
                       placeholder="tashkent city" />
                @error('address ')
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
