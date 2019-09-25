<?php
//함수의 2단계 : 선언 -> 호출
//클래스의 3단계 : 선언 -> 생성 -> 호출

    //1단계 : 선언
    class foo{
        //변수 ,함수
        public $name; // 프로퍼티
        public static $daelim = "대림대학교";

        public function hello(){
            echo self::$daelim.">>";
            echo $this->name. " 짱이에요.<br>";
            return $this;
        }

        public function greeting(){
            echo "반가워요<br>";
            return $this;
        }
    }

    //2단계 : 생성
    $obj = new foo;
    $obj->name = "대림이"; //객체 프러퍼티 값을 저장
    $obj->hello();

    $obj2 = new foo;
    $obj2->name = "대숙이";
    $obj2->hello();

    foo::$daelim ="우주최강";
    $obj->hello();
    $obj2->hello();

    /*//3단계 : 호출

    $return = $obj->hello(); //this
    //$return == $this ==$obj
    $return -> hello()->greeting();

    echo "====<br>";

    $obj2 = new foo;
    $obj->name = "대숙이";
    $result = $obj->hello();

    // 1단계 : 선언
    class bar{
        public static $name;

        public static function username(){
            echo self::$name."입니다.";
        }
    }

    bar::$name = "고정값";
    bar::username();*/