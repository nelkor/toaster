# Тостер

Заготовка для разработки приложения
на [микрофреймворке HLEB](https://github.com/phphleb/hleb)
(приготовления хлеба)

[Сайт](https://phphleb.ru) хлеба
и [инструкция](https://phphleb.ru/ru/v1/) по приготовлению

## Для запуска потребуется

- [Docker](https://www.docker.com)
- этот репозиторий
- `docker-compose up -d`

## Вы получите

<details>
  <summary>Свежий хлеб</summary>

  После запуска контейнеров в корне проекта будет создана директория `hleb`
  со свежим проектом [phphleb](https://packagist.org/packages/phphleb/hleb)
</details>

<details>
  <summary>Локальный сервер</summary>

  По умолчанию [localhost:5125](http://localhost:5125).
  Если не устраивает порт, отредактируйте файл `.env`
</details>

<details>
  <summary>MariaDB</summary>

  [Что это?](https://mariadb.org/)  
  В свежем проекте `hleb` автоматически будет создан файл
  `./database/dbase.config.php` с конфигурацией подключения к СУБД.
  Можно сразу пользоваться!
</details>

<details>
  <summary>phpMyAdmin</summary>

  [Что это?](https://www.phpmyadmin.net/)  
  По умолчанию [localhost:8080](http://localhost:8080).
  Авторизация автоматическая.
  Если не устраивает порт, отредактируйте файл `.env`
</details>

<details>
  <summary>Xdebug</summary>

  [Что это?](https://xdebug.org/)  
  Конфигурационный файл — `docker/xdebug.ini`.
  По умолчанию порт `9003`. В `docker-compose.yml` задаём `serverName`.
  По умолчанию `serverName=toaster`
</details>

<details>
  <summary>PHP Coding Standards Fixer</summary>

  [Что это?](https://cs.symfony.com/)  
  [Конфигурация](https://cs.symfony.com/doc/config.html)
  из `docker/.php-cs-fixer.php` копируется в `/hleb`.
  Шпаргалка по правилам
  [здесь](https://mlocati.github.io/php-cs-fixer-configurator/#version:3.7).
  После создания свежего проекта автоматически редактирует файлы
  с применением правил (поджаривает хлеб)
</details>

## HLOGIN
[Что это?](https://phphleb.ru/ru/v1/authorization/)

Не установлен по умолчанию, но можно легко добавить в свой проект.
Подключитесь к контейнеру сервиса `php` и выполните `./add-hlogin.sh`.
По ходу установки придётся ответить на три вопроса от системы:

1. Предпочитаемый стиль интерфейса
2. Email администратора
3. Пароль администратора
