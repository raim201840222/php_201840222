<?php
    for($i=1;$i<10;$i++){
        if($i%2 == 0){
            
            echo $i."은 짝수입니다.\n";
        }else {
            continue;
            echo $i."은 홀수입니다.\n";
        }
    }