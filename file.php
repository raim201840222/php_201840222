<?php  
    echo "파일 목록을 출력합니다.";
    $path ="./";
    files($path);
    
    function files($path){
        $_files = scandir($path);
        //print_r($_files);
        for($i=0;$i<count($_files);$i++){
            if($_files[$i]==".git"||$_files[$i]==".."){
                continue;
            }
            if(is_dir($_files[$i])){
                echo "<b>".$_files[$i]."</b>"."<br>";
            }else{
                echo $_files[$i]."<br>";
            }
            
        }
    }