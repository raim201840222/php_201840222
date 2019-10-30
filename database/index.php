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
    $db ->getTable()->createTable(
        "member3",
        [
            'Last'=>"varchar(50)",
            'First'=>"varchar(50)",
            'Age'=>"varchar(50)",
        ]);

            $query = "SHOW TABLES";
            $result = $db-> queryExecute($query);

            $count = mysqli_num_rows($result);
            for($i=0;$i<$count;$i++){
                $row = mysqli_fetch_object($result);
                echo $row ->Tables_in_php."<br>";
            }
