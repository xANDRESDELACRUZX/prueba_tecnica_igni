<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>reserve</title>
    <link rel="stylesheet" href="{{asset('css/reserve.css')}}">
</head>

<body>
    <h2 style="text-align:center">Reserve book</h2>
    <div class="card">
        <form action="{{url('/Reserve/'.$book->id)}}" method="post">
            @csrf
            <img src="{{asset ('images/'.$book->img)}}" alt="Denim Jeans" style="width:100%">
            <h2> {{$book->name}}</h2>
            <p class="price">author: {{$book->author}}</p>
            <p>{{$book->description}}</p>
            <p> <label for="">days</label>
                <input type="number" min="1" max="30" name="reserve">
                <button>Reserve</button>
            </p>
    </div>


</body>

</html>