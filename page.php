<?php
    $body = file_get_contents("page.html");
    $first = $_GET['first'];
    $body = str_replace("{{first}}",$first,$body);

    $last = $_GET['last'];
    $body = str_replace("{{last}}",$last,$body);
    echo $body;