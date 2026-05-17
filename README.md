# Mini MVC-framework

- PHP 8.3
- Веб-сервер Apache (так же добавлена конфигурация .osp/project.ini для OSPanel v6^)

## Запуск
### Вариант 1:
1. Склонируйте репозиторий
2. Откройте терминал в корневой папке проекта
3. Запустите встроенный веб-сервер PHP командой
    ```bash 
      php -S localhost:8000 -t public/index.php
    ```
4. Откройте в браузере адрес http://localhost:8000

### Вариант 2:
1. Склонируйте репозиторий в папку, на которую настроено сканирование проектов OSPanel
2. Перезапустите OSPanel
3. Откройте в браузере адрес http://mini-framework

## Эндпоинты
- GET / - главная страница (IndexController@index)
- GET /posts - список всех постов (PostsContoller@index)
- GET /posts/{id} - конкретный пост (PostsController@show)

Данные постов хранятся в виде массива, в модели PostModel.