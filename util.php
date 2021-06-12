<?php

// 세션 사용
session_start();


// js 관련 함수
function jsAlert($msg) {
    echo "<script>";
    echo "alert('$msg');";
    echo "</script>";
}

function jsHistoryBack($msg = null) {
    if ($msg) {
        jsAlert($msg);
    }
    echo "<script>";
    echo "history.back();";
    echo "</script>";
}

function jsLocationReplace($url, $msg = null) {
    if ($msg) {
        jsAlert($msg);
    }
    echo "<script>";
    echo "location.replace('$url')";
    echo "</script>";
}

// 권한 검사

// 로그인 여부 확인
function loginCk() {
    if(!isset($_SESSION['user'])) {
        jsHistoryBack("로그인 후 이용해주세요.");
        exit;
    }
}

?>