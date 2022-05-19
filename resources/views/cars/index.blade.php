<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Customers - Index</title>

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
    <h3>Customers!</h3>

    <a href="{{ route('cars.create') }}">Add car</a>

    <p>
        @if(Session::has('car') && Session::has('operation'))
            {{ Session::get('car')->name }} has been {{ Session::get('operation') }}
        @endif
    </p>

    <table>
        <tr>
            <th>Name</th>
            <th>Year</th>
            <th>Price</th>
            <th>Fee</th>
            <th>Actions</th>
        </tr>
        @foreach($cars as $car)
        <tr>
            <td>{{ $car->name }}</td>
            <td>{{ $car->year }}</td>
            <td>{{ $car->price }}</td>
            <td>{{ $car->fee }}</td>
            <td>
                <a href="{{ route('cars.show', ['id' => $car->id]) }}">Show</a>
                <a href="{{ route('cars.edit', ['id' => $car->id]) }}">Edit</a>

                <form action="{{ route('cars.delete', ['id' => $car->id]) }}" method="post">
                    @csrf
                    @method('DELETE')

                    <button type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</body>

</html>
