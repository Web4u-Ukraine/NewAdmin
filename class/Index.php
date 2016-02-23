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

    public function getMenu($now, $access)
    {

        $menu = array(
            array(
                "name" => "Главная",
                "pref" => "home",
                "icon" => "fa-home",
                "access"=>array(1, 2, 3)
            ),
            array(
                "name" => "Категории новостей",
                "pref" => "category_news",
                "icon" => "fa-bell",
                "access"=>array(1)
            ),
            array(
                "name" => "Новости",
                "pref" => "news",
                "icon" => "fa-bars",
                "access"=>array(1, 2)
            ),
            array(
                "name" => "Категории форума",
                "pref" => "category_forum",
                "icon" => "fa-pencil",
                "access"=>array(1, 3)
            ),
            array(
                "name" => "Темы форума",
                "pref" => "theme_forum",
                "icon" => "fa-header",
                "access"=>array(1, 3)
            ),
            array(
                "name" => "Сообщения форума",
                "pref" => "message_forum",
                "icon" => "fa-comment",
                "access"=>array(1, 3)
            ),
            array(
                "name" => "Фото дня",
                "pref" => "media",
                "icon" => "fa-image",
                "access"=>array(1)
            ),
            array(
                "name" => "Пользователи",
                "pref" => "users",
                "icon" => "fa-user",
                "access"=>array(1)
            ),
            array(
                "name" => "Баннеры",
                "pref" => "banners",
                "icon" => "fa-desktop",
                "access"=>array(1)
            ),
            array(
                "name" => "Текстовые страницы",
                "pref" => "text",
                "icon" => "fa-align-justify",
                "access"=>array(1)
            ),
            array(
                "name" => "Системные пользователи",
                "pref" => "wm_users",
                "icon" => "fa-group",
                "access"=>array(1)
            ),
        );

        foreach ($menu as $row) {
            $active = $now == $row['pref'] ? 'class="active"' : '';
            if (in_array($access, $row['access'])) {
                $x .= '<li ' . $active . '>
                <a href="/admin/' . $row['pref'] . '/"><i class="fa ' . $row['icon'] . '"></i> <span class="nav-label">' . $row['name'] . '</span></a>
            </li>';
            }
        }

        return $x;

    }

    public function setTemplate($template, $data)
    {
        $str = file_get_contents($_SERVER['DOCUMENT_ROOT'] . '/admin/template/' . $template . '.tpl');
        foreach ($data as $key => $value) {
            $str = str_replace('{$' . $key . '}', $value, $str);
        }
        return $str;
    }
}