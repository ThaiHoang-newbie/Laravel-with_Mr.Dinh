<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>Country</th>
                <th></th>
                <th>Total Confirmed</th>
                <th></th>
                <th>Total Deaths</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($countries as $country)
                <tr>
                    <td>{{ $country['Country'] }}</td>
                    <td></td>
                    <td>{{ $country['TotalConfirmed'] }}</td>
                    <td></td>
                    <td>{{ $country['TotalDeaths'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    
</body>
</html>