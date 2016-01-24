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
                if ($arg4==''){
                    echo $table[$arg3]['title']['index'];
                } else {
                    echo $arg4=='add'?$table[$arg3]['title']['add']:$table[$arg3]['title']['edit'];
                }
                ?>
                <? if ($arg4==''){
                    if ($table[$mod]['title']['add']!=''){
                    ?>
                        <a href="add/" class="btn btn-success pull-right tour-final"><i class="fa fa-plus"></i> <?= $index->getWords(12) ?></a>

                        <? } ?>
                    <button class="btn btn-primary run-tour pull-right" style="margin-right: 10px"><i class="fa fa-question"></i> <?= $index->getWords(17) ?></button>
                <? } ?>
            </h2>
        </div>
    </div>
</div>

<div class="content animate-panel">


    <div class="row">
        <div class="col-lg-12">
            <div class="hpanel">
                <div class="panel-body tour-1">
                    <? if ($arg4==''){ ?>
                    <table id="index" data-toggle="ajax" data-table="<?= $mod ?>" class="display table table-bordered mainIndexTable">
                        <thead>
                        <tr>
                            <?
                            foreach ($table[$arg3]['rows'] as $row) {
                                if ($row['display'] === true) { ?>
                                    <th><?= $row['name'] ?></th>
                                <? }
                            } ?>
                            <th></th>
                        </tr>
                        </thead>
                    </table>
                    <? } else {
                        require $arg4.'.php';
                    } ?>
                </div>
            </div>
        </div>

    </div>
</div>