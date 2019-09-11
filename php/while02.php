<?php
    //$body =file_get_contents("for01.php");
    //echo $body;
    //for01의 소스코드를 출력

    $filename ="for01.php";
    $fp = fopen($filename,"r");//"r" : 읽기용

    $count = 0;
    while(!feof($fp)){//파일이 끝날때 까지
        $doller = fgetc($fp);
        if($doller == "$"){
            $count++;
        }
        
        //echo fgetc($fp);

    
    }
    fclose($fp); // 파일을 닫음

    echo "소스에 $ 기호가 ".$count." 있어요.";