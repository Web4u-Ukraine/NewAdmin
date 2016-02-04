<?php

class Index
{

    public $lang;
    public $login;

    public function __construct($lang, $login)
    {
        $this->lang = $lang;
        $this->login = $login;
    }

    public function getWords($id)
    {
        $res = sql(1, "wm_words", "where id='$id'");
        return $res[0][$this->lang];
    }

    public function getUserInfo()
    {
        $res = sql(1, "wm_users", "where email='$this->login'");
        return $res[0];
    }

    public function getUserStatus()
    {
        $res = sql(1, "wm_user_status", "where id in (select access from wm_users where email='$this->login')");
        return $res[0][$this->lang];
    }

    public function getMenu($now)
    {
<<<<<<< HEAD
        $menu = [
            [
                "name" => "Главная",
                "pref" => "home",
                "icon" => "fa-home"
            ],
            [
                "name" => "Категории",
                "pref" => "category",
                "icon" => "fa-list"
            ],
            [
                "name" => "Товары",
                "pref" => "items",
                "icon" => "fa-shopping-basket"
            ]
        ];
=======
        $menu = array(
            array(
                "name" => "Главная",
                "pref" => "home",
                "icon" => "fa-home"
            ),
            array(
                "name" => "Акции",
                "pref" => "akcia",
                "icon" => "fa-bell"
            ),
            array(
                "name" => "Категории портфолио",
                "pref" => "portfolio_category",
                "icon" => "fa-bars"
            ),
            array(
                "name" => "Портфолио",
                "pref" => "portfolio",
                "icon" => "fa-desktop"
            ),
            array(
                "name" => "Вакансии",
                "pref" => "vakancii",
                "icon" => "fa-user"
            ),
            array(
                "name" => "Наши услуги",
                "pref" => "service",
                "icon" => "fa-copyright"
            ),
            array(
                "name" => "Выражения",
                "pref" => "words",
                "icon" => "fa-edit"
            ),
            array(
                "name" => "Тексты",
                "pref" => "text",
                "icon" => "fa-header"
            ),
            array(
                "name" => "Карта",
                "pref" => "points",
                "icon" => "fa-map"
            ),
            array(
                "name" => "Партнеры",
                "pref" => "partners",
                "icon" => "fa-briefcase"
            ),
            array(
                "name" => "Преимущества",
                "pref" => "foreve",
                "icon" => "fa-bomb"
            ),
            array(
                "name" => "Настройки",
                "pref" => "settings",
                "icon" => "fa-cog"
            )
        );
>>>>>>> editors

        foreach ($menu as $row) {
            $active = $now == $row['pref'] ? 'class="active"' : '';
            $x .= '<li ' . $active . '>
                <a href="/admin/' . $row['pref'] . '/"><i class="fa ' . $row['icon'] . '"></i> <span class="nav-label">' . $row['name'] . '</span></a>
            </li>';
        }

        return $x;

    }
<<<<<<< HEAD
=======

    public function setTemplate($template, $data)
    {
        $str = file_get_contents($_SERVER['DOCUMENT_ROOT'] . '/admin/template/' . $template . '.tpl');
        foreach ($data as $key => $value) {
            $str = str_replace('{$' . $key . '}', $value, $str);
        }
        return $str;
    }
>>>>>>> editors
}