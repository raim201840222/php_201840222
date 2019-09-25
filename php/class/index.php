<?php
    include "class_01.php";
    include "class_02.php";
    include "autoload.php";

    $obj1 = new left;
    $obj2 = new right;
    
    $obj1->grreting();
    $obj1->daelim();


    $obj1->name = "대림이";
    echo "<br>";
    var_dump($obj1);
    echo "<br>";
    $proerty = "name";
    echo $obj1->$proerty . "입니다.<br>";
    echo "영어 코드는 = ".$obj1 :: ENGLISH."<br>";
    
    $obj2->name = "대숙이";
    $result = $obj2->grreting();
    var_dump($result);
    echo "<br>";
    $obj2->daelim();
    $result->daelim();

    //메소드 체인...
    echo "---<br>";
    $obj2->grreting()->daelim()->foo()->bar();

    echo "---<br>";
    echo foo::$aaa;

    foo::hello();