<?php
//선언
function korean(){
    //함수의 내용
    echo "안녕하세요.\n";
}
function english(){
    echo "hello";
}
$lang = "ko";
if($lang == "ko"){
    $fff = "korean";
}else{
    $fff = "english";
}
$fff();