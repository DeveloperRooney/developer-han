<?php

function jsAlert($msg, $location = null) {
    echo "<script>";
    echo "alert('$msg')";
    echo "</script>";
}

?>