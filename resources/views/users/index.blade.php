@extends('layout')

@section('content')
    <style>
        .uper {
            margin-top: 40px;
        }
    </style>
    <div class="uper">
        @if(session()->get('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div><br />
        @endif
        <table class="table table-striped">
            <thead>
            <tr>
                <td>ID</td>
                <td>Name</td>
                <td>Age</td>
                <td>Company</td>
                <td>Friends</td>
                <td>Add Friend</td>
                <td colspan="2">Update</td>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->age}}</td>
                    <td>{{$user->company}}</td>
                    <td>{{$user->friends}}</td>
                    <td>
                        <a href="{{ route('friends.create',$user->id)}}" class="btn btn-primary">{{$user->name}}: Add New Friend</a>
                    </td>
                    <td>
                        <a href="{{ route('users.edit',$user->id)}}" class="btn btn-primary">Edit</a>
                    </td>
                    <td>
                        <form action="{{ route('users.destroy', $user->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
            <a href="{{ route('users.create')}}" class="btn btn-primary">Add New User</a>
        <div>
@endsection
