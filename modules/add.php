<form id="add" data-table="<?= $arg2 ?>" class="form-horizontal">
    <?
    foreach ($table[$arg2]['rows'] as $key=>$value){
        switch ($value['type']){
            case 'hidden'://якщо скрите поле
                $name = $key;
                $value = '';
                require '../admin/template/hidden.tpl';
                break;

            case 'input':
                $name=$key;
                $label=$value['name'];
                $value='';
                require '../admin/template/input.tpl';
                break;

            case 'select':
                $name=$key;
                $label=$value['name'];
                $option=$module->getOption("category", "id", "name", "");
                include '../admin/template/select.tpl';
                break;
        }
    }
    ?>
    <div class="form-group">
        <div class="col-md-4 col-md-offset-3">
            <a href="<?= $puth ?>/<?= $arg2 ?>/" class="btn btn-default"><?= $index->getWords(13); ?></a>
            <button class="btn btn-success"><?= $index->getWords(14); ?></button>
        </div>
    </div>
</form>