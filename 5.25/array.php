<?php
    $arr1 = [11,22,33,44,55,66,77,88,99,'a','hello','php'];
    foreach($arr1 as $k=>$v){
        // echo "$v =".$k ."\n";           //第一次遍历  $k=0,$v = 11
        // die;  //死
        if($k==3){
            // die;
            // break;
            // continue;  //跳出本次遍历

        }
        echo $k."\n";

    // }
    // $lenght = count($arr1);
    // // echo $lenght;
    // for($i=0;$i<$lenght;$i++){
    //     echo "第".$i."次".$arr1[$i]."\n";
    // }

    // echo $arr1[2];
    // $arr2 = array(
    //     "name" =>"张三",
    //     "age"  =>14,
    //     "sex"  =>"男",
    // );
    // // var_dump($arr2);
    // $arr3 =array('head','body','leg','foot');
    // // var_dump($arr3);

    // $arr4 = array(
    //         'a',
    //         'b',
    //     6=> 'c',
    //         'd',
    // );
    // var_dump($arr4);