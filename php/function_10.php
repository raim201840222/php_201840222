<?php
   
    /*function daelim($name="학생이름",$studentNum="학번"){
        //return "대림대학교<br>".$name."<br>".$studentNum;
        $arr = [$name,$studentNum];
        return $arr;
    }
    $ret=daelim("대림이",123456);

    echo $ret[0], "=" . $ret[1];

    print_r($ret);*/

    include_once "function_11.php"; // 함수를 선언함
    daelim();
    include_once "function_11.php"; // 함수를 중복 처리함
    daelim();
    

    