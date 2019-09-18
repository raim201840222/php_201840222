<?php
    //함수선언
    function hello($name="**",int $a,int $b):int
    {
        $sum = $a + $b;
        echo "반가워요 ".$name."=".$sum;
        return $sum;
    }
    //함수 호출
    $user = "대남이";
    $s = hello($user,1,2);
    echo "\n"."합계는 = ",$s;