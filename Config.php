<?php
$table = array(
    /*** TODO категории ***/
    "category" => array(
        "title" => array(
            "index" => "Категории",
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
            "sub" => array(
                "name" => "Родительска категория",
                "type" => "select",
                "display" => false,
                "table" => array(
                    "name" => "category",
                    "value" => "id",
                    "text" => "name"
                )
            )
        )
    ),
    /*** TODO товары ***/
    "items" => array(
        "title" => array(
            "index" => "Товары",
            "add" => "Добавить товар",
            "edit" => "Редактировать Товар"
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
                "display" => false,
                "table" => array(
                    "name" => "category",
                    "value" => "id",
                    "text" => "name"
                )
            ),
            "name" => array(
                "name" => "Название",
                "type" => "input",
                "display" => true
            ),
            "text" => array(
                "name" => "Описание",
                "type" => "textarea",
                "class" => "editor",
                "display" => true
            ),
            "price" => array(
                "name" => "Цена",
                "type" => "input",
                "display" => true
            ),
            "img" => array(
                "name" => "Фото",
                "type" => "file",
                "display" => false
            )
        )
    )
);