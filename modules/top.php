<body>
<!-- Simple splash screen-->
<div class="splash">
    <div class="color-line"></div>
    <div class="splash-title">
        <h1><?= $index->getWords(1) ?></h1>
        <p><?= $index->getWords(2) ?></p>
        <img src="<?= $puth ?>/images/loading-bars.svg" width="64" height="64" />
    </div>
</div>
<!--[if lt IE 7]>
<p class="alert alert-danger"><?= $index->getWords(3) ?></p>
<![endif]-->

<!-- Header -->
<div id="header">
    <div class="color-line">
    </div>
    <div id="logo" class="light-version">
        <span>
            <?= $index->getWords(4) ?>
        </span>
    </div>
    <nav role="navigation">
        <div class="header-link hide-menu"><i class="fa fa-bars"></i></div>
        <div class="small-logo">
            <span class="text-primary">WebMin CMS</span>
        </div>
<<<<<<< HEAD
        <form role="search" class="navbar-form-custom" method="post" action="#">
            <div class="form-group">
                <input type="text" placeholder="<?= $index->getWords(5) ?>" class="form-control" name="search">
            </div>
        </form>
        <div class="navbar-right">
            <ul class="nav navbar-nav no-borders">
                <li class="dropdown">
                    <a class="dropdown-toggle" href="#" data-toggle="dropdown">
                        <i class="pe-7s-speaker"></i>
                    </a>
                    <ul class="dropdown-menu hdropdown notification animated flipInX">
                        <li>
                            <a>
                                <span class="label label-success">NEW</span> Хороше повідомлення
                            </a>
                        </li>
                        <li>
                            <a>
                                <span class="label label-warning">WAR</span> Застереження
                            </a>
                        </li>
                        <li>
                            <a>
                                <span class="label label-danger">ERR</span> Помилка
                            </a>
                        </li>
                        <li class="summary"><a href="#">Переглянути всі сповіщення</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" href="#" data-toggle="dropdown">
                        <i class="pe-7s-keypad"></i>
                    </a>

                    <div class="dropdown-menu hdropdown bigmenu animated flipInX">
                        <table>
                            <tbody>
                            <tr>
                                <td>
                                    <a href="projects.html">
                                        <i class="pe pe-7s-portfolio text-info"></i>
                                        <h5>Проекти</h5>
                                    </a>
                                </td>
                                <td>
                                    <a href="mailbox.html">
                                        <i class="pe pe-7s-mail text-warning"></i>
                                        <h5>Пошта</h5>
                                    </a>
                                </td>
                                <td>
                                    <a href="contacts.html">
                                        <i class="pe pe-7s-users text-success"></i>
                                        <h5>Контакти</h5>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="forum.html">
                                        <i class="pe pe-7s-comment text-info"></i>
                                        <h5>Форум</h5>
                                    </a>
                                </td>
                                <td>
                                    <a href="analytics.html">
                                        <i class="pe pe-7s-graph1 text-danger"></i>
                                        <h5>Аналітика</h5>
                                    </a>
                                </td>
                                <td>
                                    <a href="file_manager.html">
                                        <i class="pe pe-7s-box1 text-success"></i>
                                        <h5>Файли</h5>
                                    </a>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle label-menu-corner" href="#" data-toggle="dropdown">
                        <i class="pe-7s-mail"></i>
                        <span class="label label-success">1</span>
                    </a>
                    <ul class="dropdown-menu hdropdown animated flipInX">
                        <div class="title">
                            У вас 1 нове повідомлення
                        </div>
                        <li>
                            <a>
                                Зміна інтерфейсу системи
                            </a>
                        </li>

                        <li class="summary"><a href="#">Переглянути всі повідомлення</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#" id="sidebar" class="right-sidebar-toggle">
                        <i class="pe-7s-upload pe-7s-news-paper"></i>
                    </a>
                </li>
                <li class="dropdown">
                    <a href="#">
                        <i class="pe-7s-upload pe-rotate-90"></i>
                    </a>
                </li>
            </ul>
        </div>
=======
<!--        <form role="search" class="navbar-form-custom" method="post" action="#">-->
<!--            <div class="form-group">-->
<!--                <input type="text" placeholder="--><?//= $index->getWords(5) ?><!--" class="form-control" name="search">-->
<!--            </div>-->
<!--        </form>-->
<!--        <div class="navbar-right">-->
<!--            <ul class="nav navbar-nav no-borders">-->
<!--                <li class="dropdown">-->
<!--                    <a class="dropdown-toggle" href="#" data-toggle="dropdown">-->
<!--                        <i class="pe-7s-speaker"></i>-->
<!--                    </a>-->
<!--                    <ul class="dropdown-menu hdropdown notification animated flipInX">-->
<!--                        <li>-->
<!--                            <a>-->
<!--                                <span class="label label-success">NEW</span> Хороше повідомлення-->
<!--                            </a>-->
<!--                        </li>-->
<!--                        <li>-->
<!--                            <a>-->
<!--                                <span class="label label-warning">WAR</span> Застереження-->
<!--                            </a>-->
<!--                        </li>-->
<!--                        <li>-->
<!--                            <a>-->
<!--                                <span class="label label-danger">ERR</span> Помилка-->
<!--                            </a>-->
<!--                        </li>-->
<!--                        <li class="summary"><a href="#">Переглянути всі сповіщення</a></li>-->
<!--                    </ul>-->
<!--                </li>-->
<!--                <li class="dropdown">-->
<!--                    <a class="dropdown-toggle" href="#" data-toggle="dropdown">-->
<!--                        <i class="pe-7s-keypad"></i>-->
<!--                    </a>-->
<!---->
<!--                    <div class="dropdown-menu hdropdown bigmenu animated flipInX">-->
<!--                        <table>-->
<!--                            <tbody>-->
<!--                            <tr>-->
<!--                                <td>-->
<!--                                    <a href="projects.html">-->
<!--                                        <i class="pe pe-7s-portfolio text-info"></i>-->
<!--                                        <h5>Проекти</h5>-->
<!--                                    </a>-->
<!--                                </td>-->
<!--                                <td>-->
<!--                                    <a href="mailbox.html">-->
<!--                                        <i class="pe pe-7s-mail text-warning"></i>-->
<!--                                        <h5>Пошта</h5>-->
<!--                                    </a>-->
<!--                                </td>-->
<!--                                <td>-->
<!--                                    <a href="contacts.html">-->
<!--                                        <i class="pe pe-7s-users text-success"></i>-->
<!--                                        <h5>Контакти</h5>-->
<!--                                    </a>-->
<!--                                </td>-->
<!--                            </tr>-->
<!--                            <tr>-->
<!--                                <td>-->
<!--                                    <a href="forum.html">-->
<!--                                        <i class="pe pe-7s-comment text-info"></i>-->
<!--                                        <h5>Форум</h5>-->
<!--                                    </a>-->
<!--                                </td>-->
<!--                                <td>-->
<!--                                    <a href="analytics.html">-->
<!--                                        <i class="pe pe-7s-graph1 text-danger"></i>-->
<!--                                        <h5>Аналітика</h5>-->
<!--                                    </a>-->
<!--                                </td>-->
<!--                                <td>-->
<!--                                    <a href="file_manager.html">-->
<!--                                        <i class="pe pe-7s-box1 text-success"></i>-->
<!--                                        <h5>Файли</h5>-->
<!--                                    </a>-->
<!--                                </td>-->
<!--                            </tr>-->
<!--                            </tbody>-->
<!--                        </table>-->
<!--                    </div>-->
<!--                </li>-->
<!--                <li class="dropdown">-->
<!--                    <a class="dropdown-toggle label-menu-corner" href="#" data-toggle="dropdown">-->
<!--                        <i class="pe-7s-mail"></i>-->
<!--                        <span class="label label-success">1</span>-->
<!--                    </a>-->
<!--                    <ul class="dropdown-menu hdropdown animated flipInX">-->
<!--                        <div class="title">-->
<!--                            У вас 1 нове повідомлення-->
<!--                        </div>-->
<!--                        <li>-->
<!--                            <a>-->
<!--                                Зміна інтерфейсу системи-->
<!--                            </a>-->
<!--                        </li>-->
<!---->
<!--                        <li class="summary"><a href="#">Переглянути всі повідомлення</a></li>-->
<!--                    </ul>-->
<!--                </li>-->
<!--                <li>-->
<!--                    <a href="#" id="sidebar" class="right-sidebar-toggle">-->
<!--                        <i class="pe-7s-upload pe-7s-news-paper"></i>-->
<!--                    </a>-->
<!--                </li>-->
<!--                <li class="dropdown">-->
<!--                    <a href="#">-->
<!--                        <i class="pe-7s-upload pe-rotate-90"></i>-->
<!--                    </a>-->
<!--                </li>-->
<!--            </ul>-->
<!--        </div>-->
>>>>>>> editors
    </nav>
</div>

<!-- Navigation -->
<aside id="menu">
    <div id="navigation">
        <div class="profile-picture">
            <a href="/admin/">
<<<<<<< HEAD
                <img src="/timthumb.php?src=<?= $puth ?>/images/logo.png&zc=2&w=100&h=100" class="img-circle m-b" alt="logo">
=======
                <img src="<?= $puth ?>/images/logo.png" style="width: 100%" class="m-b" alt="logo">
>>>>>>> editors
            </a>

            <div class="stats-label text-color">
                <span class="font-extra-bold font-uppercase"><?= $index->getUserInfo()['name'] ?></span>

                <div class="dropdown">
                    <a class="dropdown-toggle" href="#" data-toggle="dropdown">
                        <small class="text-muted"><?= $index->getUserStatus(); ?> <b class="caret"></b></small>
                    </a>
<!--                    <ul class="dropdown-menu animated fadeInRight m-t-xs">-->
<!--                        <li><a href="contacts.html">Контакти</a></li>-->
<!--                        <li><a href="profile.html">Профіль</a></li>-->
<!--                        <li><a href="analytics.html">Статистика</a></li>-->
<!--                        <li class="divider"></li>-->
<!--                        <li><a href="login.html">Вийти</a></li>-->
<!--                    </ul>-->
                </div>
            </div>
        </div>

        <ul class="nav" id="side-menu">
<<<<<<< HEAD
            <?= $index->getMenu($arg2); ?>
=======
            <?= $index->getMenu($mod); ?>
>>>>>>> editors
        </ul>
    </div>
</aside>
<!-- Main Wrapper -->
<div id="wrapper">