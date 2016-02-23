<form id="edit" data-table="<?= $mod ?>" class="form-horizontal">
    <?
    $id=$_REQUEST['id'];
    $get=sql(1, $mod, "where id='$id'");
    $row=$get[0];
    foreach ($table[$mod]['rows'] as $key=>$value){
        switch ($value['type']){
            case 'hidden'://якщо скрите поле
                $name = $key;
                $value = $row[$key];
                require '../admin/template/hidden.tpl';
                break;

            case 'input':
                $name=$key;
                $label=$value['name'];
                $class=$value['class'];
                $value=$row[$key];
                require '../admin/template/input.tpl';
                break;

            case 'select':
                $name=$key;
                $label=$value['name'];
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
                $img=json_decode($row[$key]);
                foreach ($img as $file){
                    $data=array(
                        "name"=>$file,
                        "url"=>"/source/".$mod."/".$file,
                        "input"=>$key
                    );
                    $files.=$index->setTemplate('file_button', $data);
                }
                $path='/source/'.$mod.'/';
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
        }
    }
    ?>
    <div class="form-group">
        <div class="col-md-4 col-md-offset-3">
            <a href="<?= $puth ?>/<?= $mod ?>/" class="btn btn-default"><?= $index->getWords(13); ?></a>
            <button class="btn btn-success"><?= $index->getWords(14); ?></button>
        </div>
    </div>
</form>