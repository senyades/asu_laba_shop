<!DOCTYPE html>
<html>
<head>
    <title>Контакты</title>
</head>
<body>
    <h1>Контакты</h1>

    @if(session('message'))
        <p style="color: green;">{{ session('message') }}</p>
    @endif

    <form method="post" action="{{ route('contact.submit') }}">
        @csrf

        <label for="message">Сообщение:</label><br>
        <textarea name="message" id="message" rows="4" cols="50"></textarea><br>

        <label for="phone">Номер телефона:</label><br>
        <input type="text" name="phone" id="phone"><br>

        <button type="submit">Отправить</button>
    </form>
</body>
</html>