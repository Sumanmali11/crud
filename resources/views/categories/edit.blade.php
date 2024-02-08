<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <fieldset>
        <legend>Edit a Category</legend>
        <form action="/categories/{{$category->id}}" method="post">
            @csrf
            @method('patch')
            <label for="name">Name</label>
            <input type="text" name="name" placeholder="Enter the category name" value="{{$category->name}}">

            <button type="submit">Submit</button>
        </form>
    </fieldset>
</body>

</html>
