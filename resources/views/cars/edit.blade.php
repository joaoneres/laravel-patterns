<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Customers - Create</title>
</head>

<body>
    <h3>Edit car: {{ $car->name }}</h3>

    <a href="{{ route('cars.index') }}">Index</a>

    <p></p>

    @if(Session::has('car'))
        <p>{{ Session::get('car')->name }} was edited on the list.</p>
    @endif

    <form action="{{ route('cars.update', ['id' => $car->id]) }}" method="post">
        @csrf
        @method('PUT')

        <input required type="text" name="name" placeholder="Name" value="{{ old('name') ?? $car->name }}">
        <input required type="text" name="year" placeholder="Year" value="{{ old('year') ?? $car->year }}">
        <input required type="number" name="price" placeholder="Price" value="{{ old('price') ?? $car->price }}">
        <input required type="number" name="fee" placeholder="Fee" value="{{ old('fee') ?? $car->fee }}">

        <button type="submit">Edit</button>
    </form>
</body>

</html>
