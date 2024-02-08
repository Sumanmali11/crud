<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>{{ $category->name }}</h1>
    @if (count($category->products))
        <table>
            <thead>
                <th>Sn.</th>
                <th>Name</th>
                <th>Color</th>
                <th>Price</th>
                <th>Description</th>
            </thead>
            <tbody>
                @foreach ($category->products as $key => $item)
                    <tr>
                        <td>{{ ++$key }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->color }}</td>
                        <td>{{ $item->price }}</td>
                        <td>{{ $item->description }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</body>

</html>
