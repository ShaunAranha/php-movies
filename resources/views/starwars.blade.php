<html>

<body>
    <h1>Star Wars Characters</h1>

    <form action="">
        <input type="search" class="form-control" placeholder="Find your star wars character " name="search" value="{{$search}}">
        <button> Search </button>
    </form>
    <div>
        <h1> Search Results</h1>
        @if($responseBody == "")
        <p>Character does not exist.</p>
        @else
        <p>{{'Name: '.$responseBody->name}}</p>
        <p>{{'Date of Birth: ' .$responseBody->birth_year }}</p>
        <p>{{'Eye Color: ' .$responseBody->eye_color }}</p>
        <p>{{'Gender: '.$responseBody->gender}}</p>
        <p>{{'Hair Color: ' .$responseBody->hair_color }}
        <p>{{'Height: ' .$responseBody->height}}</p>
        <p>{{ 'Mass: ' .$responseBody->mass }} </p>
        @endif

    </div>
</body>

</html>