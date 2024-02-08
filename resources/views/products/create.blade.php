<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Add Product</h1>
    <form action="/products" method="post">
        @csrf
        <input type="text" name="name" placeholder="Enter Product Name">
        <input type="text" name="color" placeholder="Enter Product color">
        <input type="text" name="price" placeholder="Enter Product price">
        <select name="category_id" id="">
            @foreach ($categories as $item)
                <option value="{{ $item->id }}">{{ $item->name }}</option>
            @endforeach
        </select>
        <textarea name="description" id="" cols="30" rows="5"></textarea>
        <button type="submit">Submit</button>
    </form>
</body>

</html>
