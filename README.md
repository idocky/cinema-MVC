Для запуска этого проекта вам понадобятся следующие команды:

Клонирование репозитория: Выполните команду git clone для клонирования репозитория:
git clone https://github.com/idocky/cinema-MVC.git

Переход в корневую папку проекта: Перейдите в каталог проекта, который был только что склонирован:
cd cinema-MVC

Запуск контейнеров Docker: Используйте docker-compose для запуска контейнеров Docker:
docker-compose up -d

Вход в контейнер приложения: После того, как контейнеры будут запущены, выполните следующую команду, чтобы войти в контейнер приложения:
docker exec -it project_app bash

Запуск миграции: В контейнере приложения запустите файл миграции, чтобы настроить базу данных:
php migrate.php


После выполнения этих шагов ваш проект будет запущен и готов к использованию. Вы можете получить доступ к нему по адресу http://localhost:8876/.