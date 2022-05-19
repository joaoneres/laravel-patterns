<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cars - Show</title>

    <style>
        table,
        th,
        td {
            border: 1px solid black;
            text-align: left;
        }
    </style>
</head>

<body>
    <h3>Car: {{ $car->name }}!</h3>

    <a href="{{ route('cars.index') }}">Index</a>

    <p></p>

    <table>
        <tr>
            <th>Name</th>
            <th>Year</th>
            <th>Price</th>
            <th>Fee</th>
        </tr>
        <tr>
            <td>{{ $car->name }}</td>
            <td>{{ $car->year }}</td>
            <td>{{ $car->price }}</td>
            <td>{{ $car->fee }}</td>
        </tr>
    </table>
</body>

</html>
