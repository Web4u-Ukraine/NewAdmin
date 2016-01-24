<?php
$table = array(
    /*** TODO акции ***/
    "akcia" => array(
        "title" => array(
            "index" => "Акция",
            //"add" => "Добавить категорию",
            "edit" => "Редактировать акцию"
        ),
        "rows" => array(
            "id" => array(
                "name" => "ID",
                "type" => "hidden",
                "display" => true
            ),
            "string_1" => array(
                "name" => "Строка 1",
                "type" => "textarea",
                "class"=>"editor",
                "display" => true
            ),
            "string_2" => array(
                "name" => "Строка 2",
                "type" => "textarea",
                "class"=>"editor",
                "display" => true
            ),
            "time" => array(
                "name" => "Время (секунд)",
                "type" => "input",
                "display" => false
            ),
            "text_before_button" => array(
                "name" => "Текс на кнопке (до окончания)",
                "type" => "input",
                "display" => false
            ),
            "text_after_button" => array(
                "name" => "Текс на кнопке (после окончания)",
                "type" => "input",
                "display" => false
            ),
            "active" => array(
                "name" => "Показывать",
                "type" => "radio",
                "display" => false,
                "list"=>array(
                    "0"=>"нет",
                    "1"=>"да"
                )
            )
        )
    ),
    /*** TODO категории портфолио ***/
    "portfolio_category" => array(
        "title" => array(
            "index" => "Категории портфолио",
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
    /*** TODO портфолио ***/
    "portfolio" => array(
        "title" => array(
            "index" => "Портфолио",
            "add" => "Добавить работу",
            "edit" => "Редактировать работу"
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
                "table"=>array(
                    "name"=>"portfolio_category",
                    "value"=>"id",
                    "text"=>"name"
                )
            ),
            "text" => array(
                "name" => "Описание",
                "type" => "textarea",
                "display" => true,
                "class"=>"editor"
            ),
            "img"=>array(
                "name"=>"Фото",
                "type"=>"file",
                "display"=>false
            )
        )
    ),
    /*** TODO вакансии ***/
    "vakancii" => array(
        "title" => array(
            "index" => "Вакансии",
            "add" => "Добавить вакансию",
            "edit" => "Редактировать вакансию"
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
                "name" => "Описание",
                "type" => "textarea",
                "display" => false,
                "class"=>"editor"
            ),
            "img"=>array(
                "name"=>"Фото",
                "type"=>"file",
                "display"=>false
            ),
            "email" => array(
                "name" => "Контакты",
                "type" => "input",
                "display" => false
            )
        )
    ),
    /*** TODO наши услуги ***/
    "service" => array(
        "title" => array(
            "index" => "Наши услуги",
            "add" => "Добавить услугу",
            "edit" => "Редактировать услугу"
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
                "name" => "Описание",
                "type" => "textarea",
                "display" => false,
                "class"=>"editor",
                "id"=>"editor1"
            ),
            "srt"=>array(
                "name"=>"Выводит под номером",
                "type"=>"input",
                "display"=>true
            )
        )
    ),
    /*** TODO выражения ***/
    "words" => array(
        "title" => array(
            "index" => "Выражения",
            "add" => "Добавить выражение",
            "edit" => "Редактировать выражение"
        ),
        "rows" => array(
            "id" => array(
                "name" => "ID",
                "type" => "hidden",
                "display" => true
            ),
            "rus" => array(
                "name" => "Выражение",
                "type" => "input",
                "display" => true
            )
        )
    ),
    /*** TODO тексты ***/
    "text" => array(
        "title" => array(
            "index" => "Тексты",
            //"add" => "Добавить текст",
            "edit" => "Редактировать текст"
        ),
        "rows" => array(
            "id" => array(
                "name" => "ID",
                "type" => "hidden",
                "display" => true
            ),
            "name" => array(
                "name" => "Выражение",
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
    /*** TODO карта ***/
    "points" => array(
        "title" => array(
            "index" => "Точки",
            "add" => "Добавить точку",
            "edit" => "Редактировать точку"
        ),
        "rows" => array(
            "id" => array(
                "name" => "ID",
                "type" => "hidden",
                "display" => true
            ),
            "lat" => array(
                "name" => "Координата Lat",
                "type" => "input",
                "display" => false
            ),
            "lng" => array(
                "name" => "Координата Lng",
                "type" => "input",
                "display" => false
            ),
            "address" => array(
                "name" => "Адрес",
                "type" => "input",
                "display" => true
            ),
            "img_a"=>array(
                "name"=>"Фото стороны А",
                "type"=>"file",
                "display"=>false
            ),
            "text_a"=>array(
                "name"=>"Текст стороны А",
                "type"=>"textarea",
                "class"=>"editor",
                "display"=>true,
                "id"=>"editor_1"
            ),
            "img_b"=>array(
                "name"=>"Фото стороны B",
                "type"=>"file",
                "display"=>false
            ),
            "text_b"=>array(
                "name"=>"Текст стороны B",
                "type"=>"textarea",
                "class"=>"editor",
                "display"=>true,
                "id"=>"editor_2"
            )
        )
    ),
    /*** TODO партнеры ***/
    "partners" => array(
        "title" => array(
            "index" => "Парнеры",
            "add" => "Добавить партнера",
            "edit" => "Редактировать партнера"
        ),
        "rows" => array(
            "id" => array(
                "name" => "ID",
                "type" => "hidden",
                "display" => true
            ),
            "name"=>array(
                "name"=>"Название",
                "type"=>"input",
                "display"=>true
            ),
            "img"=>array(
                "name"=>"Фото",
                "type"=>"file",
                "display"=>false
            ),
            "href"=>array(
                "name"=>"Ссылка",
                "type"=>"input",
                "display"=>true
            )
        )
    ),
    /*** TODO преимущества ***/
    "foreve" => array(
        "title" => array(
            "index" => "Преимущества",
            "add" => "Добавить преимущество",
            "edit" => "Редактировать преимущество"
        ),
        "rows" => array(
            "id" => array(
                "name" => "ID",
                "type" => "hidden",
                "display" => true
            ),
            "text"=>array(
                "name"=>"Текст",
                "type"=>"textarea",
                "display"=>true,
                "class"=>"editor"
            ),
            "img"=>array(
                "name"=>"Фото",
                "type"=>"file",
                "display"=>false
            ),
            "srt"=>array(
                "name"=>"Выводить под номером",
                "type"=>"input",
                "display"=>false
            )
        )
    )
);