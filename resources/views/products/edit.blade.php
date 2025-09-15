<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Edit a Product</h1>
    <form method="POST" action="{{route ('product.update', ['product'=> $product]) }}">
        @csrf
        @method('PUT')
        <div>
            <label for="name">name:</label>
            <input type="text" name="name"   value="{{ $product->name }}" >
        </div>
        <div>
            <label for="qyt">qty:</label>
            <input type="text" name="qty"   value="{{ $product->qty }}">
        </div>
        <div>
            <label for="price">price:</label>
            <input type="text" name="price"   value="{{ $product->price }}">
        </div>
        <div>
            <label for="description">description:</label>
            <input type="text" name="description"   value="{{ $product->description }}" >
        </div>
        <div>
            <input type="submit" value="update">
        </div>
    </form>
</body>
</html>
