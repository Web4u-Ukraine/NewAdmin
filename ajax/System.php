<?php
session_start();
require '../db.php';
require '../class/Index.php';

switch ($_POST['flag']){
    case 'login':
        $login=mysql_escape_string($_POST['username']);
        $pass=$_POST['password'];
        $index=new Index('rus');
        $res=sql(1, "wm_users", "where email='$login' and pass='$pass'");
        if (count($res)>0){
            $_SESSION['admin']=$login;
            $_SESSION['access']=$res[0]['access'];
            $info[0]=array("sms"=>$index->getWords(10), "status"=>"success");
            echo json_encode($info);
        } else {
            unset($_SESSION['admin']);
            unset($_SESSION['access']);
            $info[0]=array("sms"=>$index->getWords(11), "status"=>"error");
            echo json_encode($info);
        }
    break;
}