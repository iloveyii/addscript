<?php
function getValue($fieldName = ""){
    if(isset($_REQUEST[$fieldName])){
        if (is_string($_REQUEST[$fieldName])) {
            return trim($_REQUEST[$fieldName]);
        } else {
            return $_REQUEST[$fieldName];
        }
    }else{
        return "";
    }
}
