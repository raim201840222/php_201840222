<?php
class daelim{
    public function __construct(){
        echo __CLASS__."이 생성이 되었습니다.<br>";
    }
    final public function hello(){
        echo "학교가 너무 높아요..<br>";
    }
}
class food extends daelim{

    public function menu(){
        echo "맛이 없어요.<br>";
    }
    /*public function hello(){
        echo "학교가 너무 멀어요....<br>";
    }*/
}
$obj1 = new food;
$obj1->hello();
$obj1->menu();