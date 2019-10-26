<?php
    include "Test.php";
    $obj1 = Test::make();
    $obj2 = Test::make();
    $obj3 = Test::make();

    $obj1->factory("Table1"); // new Table1;

    // 게임 : ""
    $obj1-> strage("칼");
    $obj1-> strage("총");