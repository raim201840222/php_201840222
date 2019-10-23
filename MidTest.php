<?php

    $loop = true;
    $i = 1;
    while($loop){
        echo "반복합니다.";
        if((true)){
            $loop = $i==6?false:$i++;
        }
    }
    /*$name = array('123'=>"aaa",'124'=>"bbb",'125'=>"ccc");
    define('a',1,s);
    

    function multi($num){
        for($i=1;$i<=9;$i++){
            echo $num."*".$i."=".$num*$i."\n";
        }
        
    }
    for($i=2;$i<=9;$i++){
            multi($i);
        }*/