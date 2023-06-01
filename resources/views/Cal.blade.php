<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>

<form method="get" action="/Calculate">
    @csrf
    Enter First Number:
    <input type="number" name="number1" /><br><br>
    Enter Second Number:
    <input type="number" name="number2" /><br><br>

    <input type="submit" name="submit" value="Add">
    
    @if(isset($_GET['submit']))
    <h1>{{$arr['a']}} + {{$arr['b']}} = {{$arr['c']}}</h1>
    @endif
    
</form>


</html>
