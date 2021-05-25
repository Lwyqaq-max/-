        <?php       
        //形参
        // function add($num1,$num2){ //传参
        //     return $num1 + $num2;
        // }
        // $a = 10;     //定义变量
        // $b = 20;    
        // $c = add($a,$b); //实参
        // //使用 单引号字符串原样输出
        // echo '$a + $b ='.+$c ;
        // echo "\n";
        // echo "$a + $b = $c";
   
         //使用 双引号字符串解析变量 
        // 字符串拼接使用. 
        //调用time函数  unix时间戳
        // echo time(); //1970年到现在的秒数
        // echo "\n";      //换行
        // echo __FILE__;  //当前文件绝对路径
        // echo __LINE__; //当前行号
        // cmd里面cls清屏
        // 双引号定义可以解析变量
        // 单引号定义原谅输出
        // .代表当前目录
        // ..代表上层目录
        // substr() 截取字符串
        $str="      abcdefgh       ";
        // echo substr($str,4,1);
        // echo md5($str);
        // echo ltrim($str);
        // echo trim($str);
        // echo rtrim($str);
        // echo strrev($str);
        // $a = "";
        // if($a){
        //     echo "真";
        // }else{
        //     echo "假";
        // }
        $arr = ["a","b","c","d"];
        // echo implode($arr);
        // echo strpos($str);
        // echo str_shuffle($str);
        // echo str_split($str);
        // var_dump(str_split($str)); //将字符串转为数组
        var_dump(implode($arr))