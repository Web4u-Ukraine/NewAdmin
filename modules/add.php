<<<<<<< HEAD
<form id="add" data-table="<?= $arg2 ?>" class="form-horizontal">
    <?
    foreach ($table[$arg2]['rows'] as $key=>$value){
=======
<form id="add" data-table="<?= $mod ?>" class="form-horizontal">
    <?
    foreach ($table[$mod]['rows'] as $key=>$value){
>>>>>>> editors
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
<<<<<<< HEAD
                $option=$module->getOption("category", "id", "name", "");
=======
                $option=$module->getOption($value['table']['name'], $value['table']['value'], $value['table']['text'], "");
>>>>>>> editors
                include '../admin/template/select.tpl';
                break;

            case 'textarea':
                $name=$key;
                $label=$value['name'];
                $class=$value['class'];
<<<<<<< HEAD
=======
                $id=$value['id'];
>>>>>>> editors
                $value='';
                include '../admin/template/textarea.tpl';
                break;

            case 'file':
                $label_file=$index->getWords(18);
                $name_file=$index->getWords(19);
                $size=$index->getWords(20);
                $progress=$index->getWords(21);
                $count=$index->getWords(22);
                $label_upload=$index->getWords(23);
                $name=$key;
                $label=$value['name'];
                $class=$value['class'];
                $value='';
<<<<<<< HEAD
                include '../admin/template/file.tpl';
                break;
=======
                $path='/contrast/source/'.$mod.'/';
                include '../admin/template/file.tpl';
                break;

            case 'radio':
                $x='';
                $name=$key;
                $label=$value['name'];
                foreach ($value['list'] as $k=>$v){
                    $check=$k==$row[$name]?'checked':'';
                    $x.='<div class="checkbox"><label> <input type="radio" class="i-checks" '.$check.' name="'.$name.'" value="'.$k.'"> '.$v.' </label></div>';
                }
                $radio=$x;
                include '../admin/template/radio.tpl';
                break;
>>>>>>> editors
        }
    }
    ?>
    <div class="form-group">
        <div class="col-md-4 col-md-offset-3">
<<<<<<< HEAD
            <a href="<?= $puth ?>/<?= $arg2 ?>/" class="btn btn-default"><?= $index->getWords(13); ?></a>
=======
            <a href="<?= $puth ?>/<?= $mod ?>/" class="btn btn-default"><?= $index->getWords(13); ?></a>
>>>>>>> editors
            <button class="btn btn-success"><?= $index->getWords(14); ?></button>
        </div>
    </div>
</form>