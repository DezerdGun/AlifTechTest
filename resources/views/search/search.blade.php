@extends('layouts.app-master')

@section('content')
    <table id="customers">
        <tr>
            <th>#</th>
            <th>Names</th>
            <th>email</th>
            <th>Number</th>
            <th>Address</th>
            <th>Created_at</th>
            <th>Updated_at</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        @if($posts->isNotEmpty())
            @foreach ($posts as $post)
            <tr>
                <td>  {{$post->id}}</td>
                <td>{{$post->username}},{{$post->surname}},{{$post->lastname}}</td>
                <td> {{$post->email}}</td>
                <td> {{$post->number}}</td>
                <td> {{$post->address}}</td>
                <td> {{$post->created_at}}</td>
                <td> {{$post->updated_at}}</td>
                <td> <a href="{{ route('contact.edit',$post->id) }}" class="btn btn-primary">Edit</a></td>
                <td>
                    <form action="{{ route('contact.destroy',$post->id) }}" method="POST"
                          onsubmit="return confirm('{{ trans('are You Sure ? ') }}');"
                          style="display: inline-block;">
                        <input type="hidden" name="_method" value="DELETE">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="submit" class="btn btn-danger"
                               value="Delete">
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@else
    <div>
        <h2>No posts found</h2>
    </div>
@endif

@endsection
