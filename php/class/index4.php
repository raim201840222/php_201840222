<?php

interface greeting{
    //이거는 꼭 만들어야함
    public function hello();
}

//인터페이스를 구현해서 클래스를 만들어...강제명령

class daelim implements greeting{
    public function hello(){
        echo "그냥해....";
    }
}

$obj = new daelim;
$obj->hello();