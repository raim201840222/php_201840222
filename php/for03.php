<?php 
    $files = scandir(".");//현재 디렉토리 출력
    //print_r($files);
    
    for($i=0;$i<count($files);$i++){
        //count() : 파일의 갯수를 뽑아옴
        //if($files[$i] == ".")continue;
        //if($files[$i] =="..") continue;
        if($files[$i] == "."||$files[$i] =="..")
        continue;
        echo "파일명 = ".$files[$i]."\n";
    }