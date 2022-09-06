<h2>User Name: {{ $user->name }}</h2>
<p>ID: {{ $user->id}}</p>
<p>Accountant: {{$user->accountant->name}}</p>

<h3>{{ $user->name }} has invested in:</h3>

<ul>
    @foreach($user->investments as $share)
        <li>{{ $share->share_name }}</li>
    @endforeach
</ul>

<p> Favourite team: {{$user->team->name}}</p>
