# Image Processing Web Project

Этот проект представляет собой веб-приложение для работы с изображениями, разработанное на языке PHP. Оно позволяет загружать, просматривать и удалять изображения.

## Структура проекта

* **uploads/** — содержит загруженные изображения.
* **assets/** — включает файлы стилей и скриптов:
  * **css/** — стили проекта (`style.css`).
  * **js/** — скрипты (`script.js`).
* **index.php** — главная страница с формой загрузки и галереей изображений.
* **upload.php** — обработчик загрузки изображений с проверкой типа и размера файла.
* **delete.php** — удаление изображений из галереи.
* **README.md** — описание проекта и инструкция по установке.

## Требования

* PHP 8.3.3
* Веб-сервер (Apache, Nginx или встроенный PHP-сервер)
* Права на запись в папку `uploads/`

## Установка и запуск

1. **Клонировать репозиторий:**

   ```bash
   git clone [https://github.com/YourUsername/your-repository.git](https://github.com/NezoXMir/images-team-work.git)
   ```
   
2. **Настроить права доступа:**

   ```bash
   chmod 0777 uploads/
   ```

   *(Обеспечивает корректную запись загружаемых файлов.)*
3. **Запустить локальный сервер (если нет Apache/Nginx):**

   ```bash
   php -S localhost:8000
   ```

   *(После чего можно открыть `http://localhost:8000/index.php` в браузере.)*

## Использование проекта

* **Загрузка изображений:** Используйте форму на `index.php`, файлы проходят проверку перед сохранением.
* **Просмотр галереи:** Загруженные изображения отображаются на главной странице.
* **Удаление изображений:** Можно удалить изображение, используя `delete.php`.

## Дополнительная информация

* Для безопасности рекомендуется проверять MIME-типы и ограничивать допустимые расширения файлов.
* Возможны улучшения, такие как добавление обработки изображений (ресайзинг, водяные знаки и фильтры).


