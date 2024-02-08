<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Categories</h1>
    <ol>
        @foreach ($categories as $item)
            <li>{{ $item->name }} &nbsp;&nbsp;&nbsp; <a href="/categories/{{ $item->id }}">Edit</a>&nbsp;|&nbsp;
                <a href="/categories/{{ $item->id }}/show">Show</a>
                <form action="/categories/{{ $item->id }}" method="post">
                    @csrf
                    @method('delete')
                    <button type="submit">Delete</button>
                </form>
            </li>
        @endforeach
    </ol>

    <a href="/categories/create">Add Categories</a>
</body>

</html>
