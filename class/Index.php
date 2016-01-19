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
        $menu = array(
            array(
                "name" => "Главная",
                "pref" => "home",
                "icon" => "fa-home"
            ),
            array(
                "name" => "Категории",
                "pref" => "category",
                "icon" => "fa-list"
            ),
            array(
                "name" => "Товары",
                "pref" => "items",
                "icon" => "fa-shopping-basket"
            )
        );

        foreach ($menu as $row) {
            $active = $now == $row['pref'] ? 'class="active"' : '';
            $x .= '<li ' . $active . '>
                <a href="/admin/' . $row['pref'] . '/"><i class="fa ' . $row['icon'] . '"></i> <span class="nav-label">' . $row['name'] . '</span></a>
            </li>';
        }

        return $x;

    }
}