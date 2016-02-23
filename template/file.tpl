<div class="form-group">
    <label class="col-md-3"><?= $label ?></label>
    <div class="col-md-9">
        <div class="hpanel">
            <div class="panel-heading">
                <div class="panel-tools">
                    <a class="showhide"><i class="fa fa-chevron-up"></i></a>
                </div>
                <?= $label_file ?>
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table cellpadding="1" cellspacing="1" class="table" data-input="<?= $name ?>" data-path="<?= $path ?>">
                        <thead>
                        <tr>
                            <th></th>
                            <th><?= $name_file ?></th>
                            <th><?= $progress ?></th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                            <?= $files ?>
                        </tbody>
                    </table>
                </div>

            </div>
            <div class="panel-footer clearfix">
                <?= $count ?> - <span data-toggle="fullSize">0</span>
                <input type="file" multiple  data-toggle="LoadUserFile" id="files_<?= $name ?>" style="display: none">
                <button class="btn btn-info pull-right btn-sm" onclick="$('#files_<?= $name ?>').click();" type="button"><i class="fa fa-check"></i> Выбрать</button>
                <button type="button" style="margin-right: 10px" disabled class="btn btn-success pull-right btn-sm" data-toggle="startLoad"><i class="fa fa-cloud-upload"></i> <?= $label_upload ?></button>
            </div>
        </div>
    </div>
</div>