<?php

class clean
{
    function form_validation($d){
        $d = trim($d);
        $d = stripslashes($d);
        $d = htmlspecialchars($d);
        return($d);
    }
}