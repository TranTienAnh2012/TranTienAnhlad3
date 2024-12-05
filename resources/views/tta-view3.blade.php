<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cấu trúc lăp [foreach, foreles, while...]</title>
</head>
<body>
    <h1>#Loop: Cấu trúc lăp [foreach, foreles, while...]</h1>
    <hr>
    @for ($i = 0; $i < 5; $i++)
        <p> The current value is {{$i}}</p>
    @endfor
    <hr>
    @foreach ($name as $item)
        <p>This is item: <b>{{$item}}</b></p>
    @endforeach   
    <hr>
    @forelse ($users as $user)
        <li>{{$user}}</li>
    @empty
        <p>no users</p>
    @endforelse
    @php
       $i=0; 
    @endphp
    @while ($i < 5)
        <p> current @$i = {{$i}}</p>
    @php
        $i++   
    @endphp
    @endwhile
    <hr>
    @foreach ($arr as $item)
        @if($loop->first)
            @continue
        @endif
    @if($loop->last)
        <p>This is the last iteration:</p>
    @endif
    <li>{{$item}}</li>
    @endforeach
</body>
</html>