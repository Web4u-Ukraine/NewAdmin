<?php
/**
 * Created by PhpStorm.
 * User: taras
 * Date: 08.12.15
 * Time: 12:12
 */
?>
<div class="small-header">
    <div class="hpanel">
        <div class="panel-body">
            <div id="hbreadcrumb" class="pull-right">
                <ol class="hbreadcrumb breadcrumb">
                    <li><a href="/">CMS</a></li>
                    <li class="active">
                        <span>Встановлення</span>
                    </li>
                </ol>
            </div>
            <h2 class="font-light m-b-xs">
                Встановлення
            </h2>
            <small>Виконайте прості кроки для налаштування вашої системи управління.</small>
        </div>
    </div>
</div>

<div class="content">

    <div class="row">
        <div class="col-lg-12">
            <div class="hpanel">
                <div class="panel-heading">
                    <div class="panel-tools">
                        <a class="showhide"><i class="fa fa-chevron-up"></i></a>
                        <a class="closebox"><i class="fa fa-times"></i></a>
                    </div>
                    Введіть запитувані дані
                </div>
                <div class="panel-body">

                    <form name="simpleForm" novalidate id="simpleForm" action="#" method="post">

                        <div class="text-center m-b-md" id="wizardControl">

                            <a class="btn btn-primary" href="#step1" data-toggle="tab">Крок 1 - База данних</a>
                            <a class="btn btn-default" href="#step2" data-toggle="tab">Крок 2 - Користувач</a>
                            <a class="btn btn-default" href="#step3" data-toggle="tab">Крок 3 - Модулі</a>

                        </div>

                        <div class="tab-content">
                            <div id="step1" class="p-m tab-pane active">

                                <div class="row">
                                    <div class="col-lg-3 text-center">
                                        <i class="pe-7s-server fa-5x text-muted"></i>
                                        <p class="small m-t-md">
                                            База даних необхідна для зв'язку системи керування та сайту. Доступи до бази ви можете отримати в свого хостера
                                        </p>
                                    </div>
                                    <div class="col-lg-9">
                                        <div class="row">
                                            <div class="form-group col-lg-6">
                                                <label>Сервер</label>
                                                <input type="" value="" id="" class="form-control" name="username" placeholder="ip або url">
                                            </div>
                                            <div class="form-group col-lg-6">
                                                <label>Логін</label>
                                                <input type="value" value="" id="" class="form-control" name="" placeholder="ваш логін до бази" name="password">
                                            </div>
                                            <div class="form-group col-lg-6">
                                                <label>Пароль</label>
                                                <input type="password" value="" id="" class="form-control" name="" placeholder="******" name="company">
                                            </div>
                                            <div class="form-group col-lg-6">
                                                <label>Назва бази</label>
                                                <input type="" value="" id="" class="form-control" name="" placeholder="назва створеної бази" name="email">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="text-right m-t-xs">
                                    <a class="btn btn-default prev" href="#">Попередній крок</a>
                                    <a class="btn btn-default next" href="#">Наступний крок</a>
                                </div>

                            </div>

                            <div id="step2" class="p-m tab-pane">

                                <div class="row">
                                    <div class="col-lg-3 text-center">
                                        <i class="pe-7s-credit fa-5x text-muted"></i>
                                        <p class="small m-t-md">
                                            <strong>It is a long</strong> established fact that a reader will be distracted by the readable
                                            <br/><br/>Many desktop publishing packages and web page editors now use
                                        </p>
                                    </div>
                                    <div class="col-lg-9">
                                        <div class="row">
                                            <div class="form-group col-lg-12">
                                                <label>Name on Card</label>
                                                <input type="" value="" id="" class="form-control" name="card_name">
                                            </div>
                                            <div class="form-group col-lg-6">
                                                <label>Card Number</label>
                                                <input type="text" value="" id="" class="form-control" name="" name="card_number">
                                            </div>
                                            <div class="form-group col-lg-6">
                                                <label>Billing Address</label>
                                                <input type="text" value="" id="" class="form-control" name="" name="billing_address">
                                            </div>
                                            <div class="form-group col-lg-12">
                                                <div class="row">
                                                    <div class="col-xs-4 form-group">
                                                        <label>CVC</label>
                                                        <input class="form-control" placeholder="ex. 381"  type="text" name="cvc">
                                                    </div>
                                                    <div class="col-xs-4 form-group">
                                                        <label>Expiration</label>
                                                        <input class="form-control" placeholder="MM" type="text" name="expire_month">
                                                    </div>
                                                    <div class="col-xs-4 form-group">
                                                        <label></label>
                                                        <input class="form-control" placeholder="YYYY" type="text" name="expire_year">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-right m-t-xs">
                                    <a class="btn btn-default prev" href="#">Previous</a>
                                    <a class="btn btn-default next" href="#">Next</a>
                                </div>

                            </div>
                            <div id="step3" class="tab-pane">
                                <div class="row text-center m-t-lg m-b-lg">
                                    <div class="col-lg-12">
                                        <i class="pe-7s-check fa-5x text-muted"></i>
                                        <p class="small m-t-md">
                                            <strong>There are many</strong> variations of passages of Lorem Ipsum available, but the majority have suffered
                                        </p>
                                    </div>
                                    <div class="checkbox col-lg-12">
                                        <input type="checkbox" class="i-checks approveCheck" name="approve">
                                        Approve this form
                                    </div>
                                </div>
                                <div class="text-right m-t-xs">
                                    <a class="btn btn-default prev" href="#">Previous</a>
                                    <a class="btn btn-default next" href="#">Next</a>
                                    <a class="btn btn-success submitWizard" href="#">Submit</a>
                                </div>
                            </div>
                        </div>
                    </form>

                    <div class="m-t-md">

                        <p>
                            Вся введенна вами інформація являється конфеденційною і не може бути передана іншим особам або використана розробниками
                        </p>

                    </div>

                </div>
            </div>
        </div>

    </div>
</div>


