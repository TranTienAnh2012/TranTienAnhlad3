<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    
</head>
<body>
    <h1> Account-List</h1>
    <hr/>
    <table border="1px" cellspacing="0" cellpadding="5">
        <thead>
            <tr>
                <th>#</th>
                <th>id</th>
                <th>Username</th>
                <th>Password</th>
                <th>Fullname</th> 
            </tr>
        </thead>
        <tbody>
            @php
                $stt=0
            @endphp
            @php
                $stt++
            @endphp
            @foreach ($TTadata as $item)
            <tr>
                <td>{{$stt}}</td>
                <td>{{$item->id}}</td>
                <td>{{$item->usename}}</td>
                <td>{{$item->password}}</td>
                <td>{{$item->fullname}} </td> 
            </tr>
            @endforeach 
        </tbody>
       
    </table>
</body>
</html>