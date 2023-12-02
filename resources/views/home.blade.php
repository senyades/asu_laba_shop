<!DOCTYPE html>
<html>
<head>
    <title>Главная страница</title>
</head>
<body>
    <h1>Добро пожаловать на главную страницу!</h1>
    
    <ul>
        @foreach ($pages as $url => $name)
            <li><a href="{{ url($url) }}">{{ $name }}</a></li>
        @endforeach
    </ul>

    @if(isset($message))
        <p style="color: green;">{{ $message }}</p>
    @endif

    <h2>Список продуктов</h2>

</body>
</html>