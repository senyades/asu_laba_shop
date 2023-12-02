
<!DOCTYPE html>
<html>
<head>
    <title>Создание нового продукта</title>
</head>
<body>
    <h1>Создание нового продукта</h1>

    <form method="post" action="{{ route('products.store') }}">
        @csrf

        <label for="name">Название:</label><br>
        <input type="text" name="name" id="name" required><br>

        <label for="price">Цена:</label><br>
        <input type="number" name="price" id="price" step="0.01" required><br>

        <label for="description">Описание:</label><br>
        <textarea name="description" id="description" rows="4" cols="50"></textarea><br>

        <button type="submit">Создать продукт</button>
    </form>
</body>
</html>
