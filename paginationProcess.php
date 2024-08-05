<?php

$pageNo = "0";

if ("0" != $_GET["p"]) {
    $pageNo = $_GET["p"];
} else {
    $pageNo = "1";
}

$con = new mysqli("localhost","root","Abi0021@","day27","3306");
$q= "SELECT * FROM `user`";

$user_rs = $con->query($q);
$user_num = $user_rs->num_rows;



?>