<!DOCTPE html>
    <html>

    <head>
        <title>View Actors</title>
    </head>

    <body>
        <h1>PHP Movies</h1>
        <form action="">
            <input type="search" class="form-control" placeholder="Find actor " name="search" value="{{$search}}">
            <button> Search </button>
        </form>
        <table>
            <tr>
                <td>Name</td>
                <td>Movies</td>
            </tr>
            @forelse ($actors as $actor)
            <tr>
                <td>{{ $actor->name }}</td>
                <td>
                    @foreach ($actor->movies as $movie )
                    {{ $movie->name.' | ' }}
                    @endforeach
                </td>
            </tr>

            @empty
            <p>Actor Not Found.</p>
            @endforelse
        </table>
    </body>

    </html>