<h2>All Tweets</h2>
<ul>
    @foreach($tweets as $tweet)
        {{-- {{dd($tweet)}} --}}
        <li style="margin-bottom: 30px;">
            {{ $tweet['body'] }}
            <div>Action: <a href={{url("/tweets/{$tweet['id']}/edit")}}>Edit</a> <a href={{url("/tweets/{$tweet['id']}/delete")}}>Delete</a></div>
        </li>
    @endforeach
</ul>
<p>
    <a href={{ url('/tweets/create') }}>Create Tweet</a>
</p>