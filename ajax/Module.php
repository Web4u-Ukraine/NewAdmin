<?
session_start();
require '../Config.php';
require '../db.php';
require '../class/Sql.php';
require '../class/Index.php';

switch ($_REQUEST['flag']){
    case 'json':
        $tb=$_REQUEST['table'];
        $res=sql(1, "$tb", "order by id");
        foreach ($res as $row){
            for ($i=0;$i<count($row);$i++){
                unset($row[$i]);
            }
            foreach ($table[$tb]['rows'] as $key=>$value){
                if ($value['display']===false){
                    unset($row[$key]);
                } else if ($value['type'] == 'select') {
                    $temp_val = $value['table']['value'];
                    $temp_now = $row[$key];
                    $temp = sql(1, $value['table']['name'], "where $temp_val='$temp_now'");
                    $row[$key] = $temp[0][$value['table']['text']];
                }
            }
            if ($_SESSION['access']==2){
                $row['action'] = '
                <a href="edit/?id=' . $row['id'] . '" class="btn btn-info"><i class="fa fa-pencil"></i></a>';
            } else {
                $row['action'] = '
                <a href="edit/?id=' . $row['id'] . '" class="btn btn-info"><i class="fa fa-pencil"></i></a>
                <button data-toggle="delete" data-id="' . $row['id'] . '" data-table="' . $tb . '" class="btn btn-danger"><i class="fa fa-trash"></i></button>';
            }
            $array['data'][]=array_values($row);
        }

        echo json_encode($array);
        break;

    case 'delete':
        $tb=$_POST['table'];
        $id=$_POST['id'];
        sql(4, "$tb", "where id='$id'");
        break;

    case 'add':
        $index=new Index('rus');
        $res=new Sql($_POST);
        $not=['flag', 'table'];
        $more='';
        $query=$res->addSql($more, $not);
        sql(2, $_POST['table'], $query);
        $info[0]=array("sms"=>$index->getWords(15), "status"=>"success");
        echo json_encode($info);
        break;

    case 'edit':
        $index=new Index('rus');
        $res=new Sql($_POST);
        $not=['flag', 'table'];
        $more='';
        $query=$res->editSql($more, $not);
        $id=$_POST['id'];
        sql(3, $_POST['table'], "$query where id='$id'");
        $info[0]=array("sms"=>$index->getWords(16), "status"=>"info");
        echo json_encode($info);
        break;
}