<h2>User Name: </h2>
<p>{{ $user->name }} || ID: {{ $user->id}}</p>

<h3>User has invested in:</h3>

<ul>
    @foreach($user->investments as $share)
        <li>{{ $share->share_name }}</li>
    @endforeach
</ul>
