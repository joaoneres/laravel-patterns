<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cars - Create</title>
</head>

<body>
    <h3>Create a car!</h3>

    <a href="{{ route('cars.index') }}">Index</a>

    <p></p>

    @if(Session::has('car'))
        <p>{{ Session::get('car')->name }} was added to the list.</p>
    @endif

    <form action="{{ route('cars.store') }}" method="post">
        @csrf

        <input required type="text" name="name" placeholder="Name">
        <input required type="text" name="year" placeholder="Year">
        <input required type="number" name="price" placeholder="Price">
        <input required type="number" name="fee" placeholder="Fee">

        <button type="submit">Add</button>
    </form>
</body>

</html>
