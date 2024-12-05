<div>
    <h1> implicity is the essence of happiness. - Cedric Bledsoe </h1> 
    <h2> Welcome to, {{ $name }} </h2>
    <h2> Fruits are: </h2>
    <ul>
        @foreach ($fruits as $item)
            <li> {{ $item }}</li>
        @endforeach
    </ul>
</div>