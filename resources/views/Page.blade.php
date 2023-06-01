<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>

<body>
    @foreach($slide as $sl)
    <ul>
        <li>
        </li>
    </ul>
    @endforeach
    <h1>Tim thay {{ count($new_product) }} san pham</h1>

    @foreach($new_product as $new)
        <div class="row">
            <h2 style="color: Blue;">
                <a href="detail/{{$new ->id}}">
                    {{$new -> name}}
                </a>
            </h2>
            <p>{{$new -> unit_price}} Vnd</p>
            <p>{{$new -> promotion_price}} Vnd</p>

            @if ($new->promotion_price != 0)
                <p style="color:lightblue;">I love U (promotion_price != 0)</p>
            @endif
            <p>{{$new -> name}}</p>
        </div>
    @endforeach
</body>

</html>
