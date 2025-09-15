<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Create a Product</h1>
    <form method="POST" action="{{route ('product.store') }}">
        @csrf
        <div>
            <label for="name">name:</label>
            <input type="text" name="name"  placeholder="name" >
        </div>
        <div>
            <label for="qyt">qty:</label>
            <input type="text" name="qyt"  placeholder="qyt" >
        </div>
        <div>
            <label for="price">price:</label>
            <input type="text" name="price"  placeholder="price" >
        </div>
        <div>
            <label for="description">description:</label>
            <input type="text" name="description"  placeholder="description" >
        </div>
        <div>
            <input type="submit" value="save">
        </div>
    </form>
</body>
</html>
