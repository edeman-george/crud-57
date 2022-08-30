@extends('layout')

@section('content')
    <style>
        .uper {
            margin-top: 40px;
        }
    </style>
    <div class="card uper">
        <div class="card-header">
            Add Friend for {{$user->name}}
        </div>
        <div class="card-body">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div><br />
            @endif
            <form
{{--                method="post" --}}
{{--                action="{{ route('friends.store') }}"--}}
            >
                @method('PATCH')
                @csrf
                <div class="form-group">
                    <label for="name">Add new friend's User ID:</label>
                    <input type="number" class="form-control" name="new_friend_id"  />
                </div>
                <button type="submit" class="btn btn-primary">Add Friend</button>
            </form>
        </div>
    </div>
@endsection
