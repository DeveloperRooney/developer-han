<?php

session_start();

// js 관련 함수
function jsAlert($msg, $location = null) {
    echo "<script>";
    echo "alert('$msg');";
    if($location) {
        echo "location.href='$location';";
    }
    echo "</script>";
}

// 권한 검사

function loginCk() {
    if(!isset($_SESSION['user'])) {
        jsAlert("로그인 후 이용해 주세요.");
    }
}

?>