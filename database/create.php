<?php
    // 윈도우 운영체제 : 파일명 대소문자 구분 없음
    // 리눅스 운영체제 : 파일명 대소문자 구분
    include "dbconf.php";
    require "database.php"; // 1개
    require "Table.php"; // 2개
    $config =  ["host"=>$host,
                "user"=> $user,
                "password"=> $password,
                "database"=> $database];
    $db = new Database($config);
    $table = new Table($db);
    //$db ->setTable(new Table); // 테이블 객체를 생성해서 연결
    //$db ->getTable()->createTable(); // 연결된 객체를 읽음
    //$db ->setTable($table)->getTable()->createTable();
    $db ->getTable()->createTable(
        "member3",
        [
            'Last'=>"varchar(50)",
            'First'=>"varchar(50)",
            'Age'=>"varchar(50)",
        ]);
    if($db->isTable("members")){
        echo "테이블이 존재합니다.<br>";
    }else{
        echo "테이블이 없습니다.<br>";
    }





















    /*$query = "SHOW TABLES";
    $result = $db-> queryExecute($query);

    $count = mysqli_num_rows($result);
    echo "테이블의 갯수는 = ".$count;
    echo "</br>";

    for($i=0;$i<$count;$i++){
        $row = mysqli_fetch_object($result);
        echo "테이블 = ". $row->Tables_in_php."<br>";
        //print_r($rows);
    }*/

    

    /*echo "databse";
    //phpinfo();
    // 서버정보

    

    // mysql 접속
    $connect = new mysqli($host, $user, $password, $database);
    //성공 : connect_errno = 0 .. ! 1
    //실패 : connect_errno = 1 .. ! 0
    if(!$connect->connect_errno){
        echo "DB 접속성공";
    }else{
        echo "접속실패";
    }

    $query = "
    CREATE TABLE `members` (
        `id` int(11) NOT NULL AUTO_INCREMENT,
        `LastName` varchar(255),
        `FirstName` varchar(255),
        PRIMARY KEY(`id`)
        )ENGINE = innodb default charset=utf8;";

        if(mysqli_query($connect,$query)){
            echo "테이블 생성 성공";
        }else{
            print "테이블 못만들었어요.";
        }

    mysqli_close($connect);
    */