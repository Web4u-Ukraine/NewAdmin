<?php
class Module{

    public function getOption($table, $value, $text, $now){
        $res=sql(1, $table, "");
        foreach ($res as $row){
            $active=$now==$row[$value]?'selected':'';
            $x.='<option value="'.$row[$value].'" '.$active.'>'.$row[$text].'</option>';
        }

        return $x;
    }
}