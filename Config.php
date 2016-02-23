<?php
$table = array(
    /*** TODO категории ***/
    "news" => array(
        "title" => array(
            "index" => "Новости",
            "add" => "Добавить новость",
            "edit" => "Редактировать новость"
        ),
        "rows" => array(
            "id" => array(
                "name" => "ID",
                "type" => "hidden",
                "display" => true
            ),
            "title" => array(
                "name" => "Название",
                "type" => "input",
                "display" => true
            ),
            "intro" => array(
                "name" => "Интро",
                "type" => "textarea",
                "display" => true,
                "class" => "editor"
            ),
            "text" => array(
                "name" => "Текст",
                "type" => "textarea",
                "display" => false,
                "class" => "editor"
            ),
            "category_news" => array(
                "name" => "Категория",
                "type" => "select",
                "display" => false,
                "table" => array(
                    "name" => "category_news",
                    "value" => "id",
                    "text" => "name"
                )
            ),
            "data" => array(
                "name" => "Дата",
                "type" => "none",
                "display" => false
            ),
            "img" => array(
                "name" => "Фото",
                "type" => "file",
                "display" => false
            )
        )
    ),
    /*** TODO категории новостей ***/
    "category_news" => array(
        "title" => array(
            "index" => "Категории новостей",
            "add" => "Добавить категорию",
            "edit" => "Редактировать категорию"
        ),
        "rows" => array(
            "id" => array(
                "name" => "ID",
                "type" => "hidden",
                "display" => true
            ),

            "name" => array(
                "name" => "Название",
                "type" => "input",
                "display" => true
            ),

            "img" => array(
                "name" => "Фото (для раздела Туристам)",
                "type" => "file",
                "display" => false
            )
        )
    ),
    /*** TODO категории форума ***/
    "category_forum" => array(
        "title" => array(
            "index" => "Категории форума",
            "add" => "Добавить категорию",
            "edit" => "Редактировать категорию"
        ),
        "rows" => array(
            "id" => array(
                "name" => "ID",
                "type" => "hidden",
                "display" => true
            ),

            "name" => array(
                "name" => "Название",
                "type" => "input",
                "display" => true
            )
        )
    ),
    /*** TODO темы форума ***/
    "theme_forum" => array(
        "title" => array(
            "index" => "Темы форума",
            "add" => "Добавить тему",
            "edit" => "Редактировать тему"
        ),
        "rows" => array(
            "id" => array(
                "name" => "ID",
                "type" => "hidden",
                "display" => true
            ),
            "category" => array(
                "name" => "Категория",
                "type" => "select",
                "display" => true,
                "table" => array(
                    "name" => "category_forum",
                    "value" => "id",
                    "text" => "name"
                )
            ),
            "name" => array(
                "name" => "Название",
                "type" => "input",
                "display" => true
            ),
            "user_id" => array(
                "name" => "Пользователь",
                "type" => "select",
                "display" => true,
                "table" => array(
                    "name" => "users",
                    "value" => "id",
                    "text" => "fio"
                )
            ),
            "text" => array(
                "name" => "Сообщение",
                "type" => "textarea",
                "display" => false,
                "class"=>"editor"
            ),
        )
    ),
    /*** TODO сообщения форума ***/
    "message_forum" => array(
        "title" => array(
            "index" => "Сообщения форума",
            "add" => "Добавить сообщение",
            "edit" => "Редактировать сообщение"
        ),
        "rows" => array(
            "id" => array(
                "name" => "ID",
                "type" => "hidden",
                "display" => true
            ),
            "user_id" => array(
                "name" => "Пользователь",
                "type" => "select",
                "display" => true,
                "table" => array(
                    "name" => "users",
                    "value" => "id",
                    "text" => "fio"
                )
            ),
            "theme_id" => array(
                "name" => "Тема",
                "type" => "select",
                "display" => true,
                "table" => array(
                    "name" => "theme_forum",
                    "value" => "id",
                    "text" => "name"
                )
            ),
            "text" => array(
                "name" => "Сообщение",
                "type" => "textarea",
                "display" => false,
                "class" => "editor"
            ),
            "data" => array(
                "name" => "Дата",
                "type" => "input",
                "display" => true,
                "value" => "now"
            )
        )
    ),
    /*** TODO пользователи ***/
    "users" => array(
        "title" => array(
            "index" => "Пользователи",
            "add" => "Добавить пользователя",
            "edit" => "Редактировать пользователя"
        ),
        "rows" => array(
            "id" => array(
                "name" => "ID",
                "type" => "hidden",
                "display" => true
            ),
            "login" => array(
                "name" => "Логин",
                "type" => "input",
                "display" => true
            ),
            "fio" => array(
                "name" => "Имя и фамилия",
                "type" => "input",
                "display" => true
            ),
            "email" => array(
                "name" => "E-mail",
                "type" => "input",
                "display" => true
            ),
            "photo" => array(
                "name" => "Фото",
                "type" => "file",
                "display" => false
            ),
            "active" => array(
                "name" => "Заблокировать?",
                "type" => "radio",
                "display" => false,
                "list" => array(
                    "0" => "да",
                    "1" => "нет"
                )
            )
        )
    ),
    /*** TODO пользователи ***/
    "media" => array(
        "title" => array(
            "index" => "Фото дня",
            "add" => "Добавить фото",
            "edit" => "Редактировать фото"
        ),
        "rows" => array(
            "id" => array(
                "name" => "ID",
                "type" => "hidden",
                "display" => true
            ),
            "photo" => array(
                "name" => "Фото",
                "type" => "file",
                "display" => false
            ),
            "data" => array(
                "name" => "Дата",
                "type" => "input",
                "display" => true,
                "class"=>"datepicker"
            )
        )
    ),
    /*** TODO текст ***/
    "text" => array(
        "title" => array(
            "index" => "Текстовые страницы",
            //"add" => "Добавить фото",
            "edit" => "Редактировать страницу"
        ),
        "rows" => array(
            "id" => array(
                "name" => "ID",
                "type" => "hidden",
                "display" => true
            ),
            "name" => array(
                "name" => "Название",
                "type" => "input",
                "display" => true
            ),
            "text" => array(
                "name" => "Текст",
                "type" => "textarea",
                "display" => false,
                "class"=>"editor"
            )
        )
    ),
    /*** TODO админы ***/
    "wm_users" => array(
        "title" => array(
            "index" => "Системные пользователи",
            "add" => "Добавить пользователя",
            "edit" => "Редактировать пользователя"
        ),
        "rows" => array(
            "id" => array(
                "name" => "ID",
                "type" => "hidden",
                "display" => true
            ),
            "name" => array(
                "name" => "Название",
                "type" => "input",
                "display" => true
            ),
            "email" => array(
                "name" => "E-mail",
                "type" => "input",
                "display" => true
            ),
            "pass" => array(
                "name" => "Пароль",
                "type" => "input",
                "display" => false
            ),
            "access" => array(
                "name" => "Доступ",
                "type" => "select",
                "display" => true,
                "table"=>array(
                    "name"=>"wm_user_status",
                    "value"=>"id",
                    "text"=>"rus"
                )
            )
        )
    ),
    /*** TODO пользователи ***/
    "banners" => array(
        "title" => array(
            "index" => "Баннеры",
            "add" => "Добавить баннер",
            "edit" => "Редактировать баннер"
        ),
        "rows" => array(
            "id" => array(
                "name" => "ID",
                "type" => "hidden",
                "display" => true
            ),
            "pref" => array(
                "name" => "Страница",
                "type" => "select",
                "display" => true,
                "table" => array(
                    "name" => "pages",
                    "value" => "pref",
                    "text" => "name"
                )
            ),
            "position" => array(
                "name" => "Положение",
                "type" => "select",
                "display" => true,
                "table" => array(
                    "name" => "position",
                    "value" => "id",
                    "text" => "name"
                )
            ),
            "img" => array(
                "name" => "Картинка",
                "type" => "file",
                "display" => false
            ),
            "url" => array(
                "name" => "Ссылка",
                "type" => "input",
                "display" => true,
            )
        )
    )
);