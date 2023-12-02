<!DOCTYPE html>
<html>
<head>
    <title>Список продуктов</title>
</head>
<body>
    <h1>Список продуктов</h1>

    @foreach ($products as $product)
        <p>{{ $product->name }} - {{ $product->price }} - {{ $product->description }}</p>
    @endforeach
</body>
</html>