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
            <th>email</th>
            <th>number</th>
            <th>address</th>
            <th>Add</th>

        </tr>
        <tr>
            <td>
                {{$contact->id}}

            </td>
            <td>
                       <input type="text" name="email"
                       class="block w-full @error('email') border-red-500 @enderror mt-1 rounded-md"
                       placeholder="{{old('email',$contact->email)}}" value="{{old('email',$contact->email)}}" />
                @error('email')
                <div>{{ $message }}</div>
                @enderror
            </td>
            <td>
                <input type="text" name="number"
                       class="block w-full @error('number ') border-red-500 @enderror mt-1 rounded-md"
                       placeholder="{{old('number',$contact->number)}}" value="{{old('number',$contact->number)}}" />
                @error('number')
                <div>{{ $message }}</div>
                @enderror
            </td>
            <td>
                <input type="text" name="address"
                       class="block w-full @error('address') border-red-500 @enderror mt-1 rounded-md"
                       placeholder="{{old('address',$contact->address )}}" value="{{old('address',$contact->address )}}"/>
                @error('address ')
                <div>{{ $message }}</div>
                @enderror
            </td>
            <td>
                <button type="submit" class="btn btn-success">update</button>
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
