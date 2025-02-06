<!DOCTYPE html> <!-- Определяет тип документа как HTML5 -->
<html lang="ru"> <!-- Указывает, что язык страницы - русский -->
<head>
    <meta charset="UTF-8"> <!-- Устанавливает кодировку символов на UTF-8 для корректного отображения текста -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Настройки для адаптивного дизайна на мобильных устройствах -->
    <title>О нас</title> <!-- Заголовок страницы, отображаемый в вкладке браузера -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> <!-- Подключает CSS-файл Bootstrap для стилизации страницы -->
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light"> <!-- Создает навигационную панель с использованием классов Bootstrap -->
        <a class="navbar-brand" href="index.php">Музей радиоаппаратуры</a> <!-- Логотип или название сайта с ссылкой на главную страницу -->
        <div class="collapse navbar-collapse"> <!-- Контейнер для элементов навигации, который можно скрыть на малых экранах -->
            <ul class="navbar-nav mr-auto"> <!-- Начало ненумерованного списка для навигационных ссылок -->
                <li class="nav-item"><a class="nav-link" href="about_us.php">О нас</a></li> <!-- Ссылка на страницу "О нас" -->
                <li class="nav-item"><a class="nav-link" href="contacts.php">Контакты</a></li> <!-- Ссылка на страницу "Контакты" -->
                <li class="nav-item"><a class="nav-link" href="info.php">Информация</a></li> <!-- Ссылка на страницу "Информация" -->
                <li class="nav-item"><a class="nav-link" href="news.php">Новости</a></li> <!-- Ссылка на страницу "Новости" -->
                <li class="nav-item"><a class="nav-link" href="history.php">История</a></li> <!-- Ссылка на страницу "История" -->
                <li class="nav-item"><a class="nav-link" href="for_clients.php">Для клиентов</a></li> <!-- Ссылка на страницу "Для клиентов" -->
            </ul>
        </div>
    </nav>
    
    <div class="container"> <!-- Контейнер Bootstrap для центрирования содержимого и задания отступов -->
        <h1>О нас</h1> <!-- Заголовок первого уровня для раздела "О нас" -->
        <p>Музей радиоаппаратуры был основан в 2020 году...</p> <!-- Параграф с текстом о музее -->
        <img src="assets/img/about_us.jpg" alt="О нас" class="img-fluid"> <!-- Изображение с классом Bootstrap для адаптивности (изображение будет масштабироваться) -->
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script> <!-- Подключает библиотеку jQuery (облегченная версия) -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script> <!-- Подключает Popper.js для управления всплывающими элементами (например, подсказками) -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> <!-- Подключает JavaScript-файл Bootstrap для интерактивных компонентов -->
</body>
</html>
