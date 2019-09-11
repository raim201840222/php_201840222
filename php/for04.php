<?php  
    $files =scandir("."); // 폴더의 정보를 출력함
    //print_r($files);

    foreach( $files as $f ){
        if($files[$i] == "."||$files[$i] =="..")
        continue;
        echo "파일명 = ".$f."\n"; 
    }