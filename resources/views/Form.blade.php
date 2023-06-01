<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
        <form action="{{url('validate/display')}}" method="POST">
            @csrf
            <div>
                <label for="username">Username:</label>
                <input type="text" name="username" id="username">
            </div>
        
            <div>
                <label for="email">Email:</label>
                <input type="email" name="email" id="email">
            </div>
        
            <div>
                <label for="password">Password:</label>
                <input type="password" name="password" id="password">
            </div>
        
            <div>
                <label for="password_confirmation">Confirm Password:</label>
                <input type="password" name="password_confirmation" id="password_confirmation">
            </div>

            {{-- <div>
                @include('Error');
            </div>
         --}}
         <div>
            {{isset($user["username"])}}
            {{isset($user["email"])}}
            {{isset($user["password"])}}
            {{isset($user["password_confirmation"])}}
         </div>
            <button type="submit">Register</button>
        </form>
</body>
</html>