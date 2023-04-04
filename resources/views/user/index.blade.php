@extends('layouts.app-master')
@section('content')
    @auth

<div class="mt-4 mb-4">

</div>

<table id="customers">
    <tr>
        <th>#</th>
        <th>Names</th>
        <th>Date_of_birth</th>
        <th>Created_at</th>
        <th>Updated_at</th>
        <th>Edit</th>
        <th>Delete</th>

        <th>Email</th>
        <th>Telephone</th>
        <th>Address</th>
        <th>Created_at</th>
        <th>Updated_at</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>
    @foreach ($user as $category)
    <tr>
        <td>  {{$category->id}}</td>
        <td>{{$category->username}},{{$category->surname}},{{$category->lastname}}</td>
        <td> {{$category->date_of_birth}}</td>
        <td> {{$category->created_at}}</td>
        <td> {{$category->updated_at}}</td>
        <td> <a href="{{ route('user.edit',$category->id) }}" class=" btn btn-primary">Edit</a></td>
        <td>
            <form action="{{ route('user.destroy',$category->id) }}" method="POST"
                  onsubmit="return confirm('{{ trans('are You Sure ? ') }}');"
                  style="display: inline-block;">
                <input type="hidden" name="_method" value="DELETE">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="submit" class=" p-0 btn btn-danger"
                       value="Delete">
            </form>
        </td>
        @foreach($category->contact as $student)

            <td>  {{$student->email}}</td>
            <td>  {{$student->number}}</td>
            <td>  {{$student->address}}</td>
            <td>  {{$student->created_at}}</td>
            <td>  {{$student->updated_at}}</td>
        @endforeach

        <td> <a href="{{ route('contact.edit',$category->id) }}" class=" btn btn-primary">Edit</a></td>
        <td>
            <form action="{{ route('contact.destroy',$category->id) }}" method="POST"
                  onsubmit="return confirm('{{ trans('are You Sure ? ') }}');"
                  style="display: inline-block;">
                <input type="hidden" name="_method" value="DELETE">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="submit" class="p-0 btn btn-danger"
                       value="Delete">
            </form>
        </td>
    </tr>
    @endforeach
</table>

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
