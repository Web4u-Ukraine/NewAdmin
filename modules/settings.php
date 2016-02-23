<? if (isset($_POST['save'])){
    $email=$_POST['email'];
    $dis=$_POST['disVak'];
    sql(3, "settings", "value='$email' where id=1");
    sql(3, "settings", "value='$dis' where id=2");
}
?>
<div class="normalheader transition animated fadeIn">
    <div class="hpanel">
        <div class="panel-body">
            <a class="small-header-action" href="">
                <div class="clip-header">
                    <i class="fa fa-arrow-up"></i>
                </div>
            </a>

            <h2 class="font-light m-b-xs">
                Настройки
            </h2>
        </div>
    </div>
</div>

<div class="content animate-panel">
    <?php
    foreach (sql(1, "settings", "order by id") as $q){
        $set[$q['id']]=$q['value'];
    }
    ?>
    <div class="row">
        <div class="col-lg-12">
            <div class="hpanel">
                <div class="panel-body tour-1">
                    <form action="" method="post" class="form-horizontal">
                        <input type="hidden" value="1" name="save">
                        <div class="form-group">
                            <label class="col-md-3">E-mail для отправки заявок</label>
                            <div class="col-md-9"><input type="text" class="form-control" name="email" value="<?= $set[1] ?>"></div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3">Показывать вакансии?</label>
                            <div class="col-md-9">
                                <div class="checkbox"><label> <input type="radio" class="i-checks" name="disVak" value="1" <? if ($set[2]==1) echo 'checked'; ?>> Да </label></div>
                                <div class="checkbox"><label> <input type="radio" class="i-checks" name="disVak" value="0" <? if ($set[2]==0) echo 'checked'; ?>> Нет </label></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-9 col-md-offset-3">
                                <button class="btn btn-success">Сохранить</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>