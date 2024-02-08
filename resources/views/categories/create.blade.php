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
        <legend>Add a Category</legend>
        <form action="/categories" method="post">
            @csrf
            <label for="name">Name</label>
            <input type="text" name="name" placeholder="Enter the category name">

            <button type="submit">Submit</button>
        </form>
    </fieldset>
</body>

</html>
