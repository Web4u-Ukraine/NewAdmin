<<<<<<< HEAD
<form id="edit" data-table="<?= $arg2 ?>" class="form-horizontal">
    <?
    $id=$_REQUEST['id'];
    $get=sql(1, $arg2, "where id='$id'");
    $row=$get[0];
    foreach ($table[$arg2]['rows'] as $key=>$value){
=======
<form id="edit" data-table="<?= $mod ?>" class="form-horizontal">
    <?
    $id=$_REQUEST['id'];
    $get=sql(1, $mod, "where id='$id'");
    $row=$get[0];
    foreach ($table[$mod]['rows'] as $key=>$value){
>>>>>>> editors
        switch ($value['type']){
            case 'hidden'://якщо скрите поле
                $name = $key;
                $value = $row[$key];
                require '../admin/template/hidden.tpl';
                break;

            case 'input':
                $name=$key;
                $label=$value['name'];
                $value=$row[$key];
                require '../admin/template/input.tpl';
                break;

            case 'select':
                $name=$key;
                $label=$value['name'];
<<<<<<< HEAD
                $option=$module->getOption("category", "id", "name", $row[$key]);
                include '../admin/template/select.tpl';
                break;
=======
                $option=$module->getOption($value['table']['name'], $value['table']['value'], $value['table']['text'], $row[$key]);
                include '../admin/template/select.tpl';
                break;

            case 'textarea':
                $name=$key;
                $label=$value['name'];
                $class=$value['class'];
                $value=$row[$name];
                $id=$value['id'];
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
                $files='';
                $img=explode('&', $row[$key]);
                foreach ($img as $file){
                    $data=array(
                        "name"=>$file,
                        "url"=>"/contrast/source/".$mod."/".$file,
                        "input"=>$key
                    );
                    $files.=$index->setTemplate('file_button', $data);
                }
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