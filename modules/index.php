<div class="normalheader transition animated fadeIn">
    <div class="hpanel">
        <div class="panel-body">
            <a class="small-header-action" href="">
                <div class="clip-header">
                    <i class="fa fa-arrow-up"></i>
                </div>
            </a>

            <h2 class="font-light m-b-xs">
                <?
                if ($arg3==''){
                    echo $table[$arg2]['title']['index'];
                } else {
                    echo $arg3=='add'?$table[$arg2]['title']['add']:$table[$arg2]['title']['edit'];
                }
                ?>
                <? if ($arg3==''){ ?>
                <a href="add/" class="btn btn-success pull-right"><i class="fa fa-plus"></i> <?= $index->getWords(12) ?></a>
                <? } ?>
            </h2>
        </div>
    </div>
</div>

<div class="content animate-panel">


    <div class="row">
        <div class="col-lg-12">
            <div class="hpanel">
                <div class="panel-body">
                    <? if ($arg3==''){ ?>
                    <table id="index" data-toggle="ajax" data-table="category" class="display table table-bordered">
                        <thead>
                        <tr>
                            <?
                            foreach ($table[$arg2]['rows'] as $row) {
                                if ($row['display'] === true) { ?>
                                    <th><?= $row['name'] ?></th>
                                <? }
                            } ?>
                            <th></th>
                        </tr>
                        </thead>
                    </table>
                    <? } else {
                        require $arg3.'.php';
                    } ?>
                </div>
            </div>
        </div>

    </div>
</div>