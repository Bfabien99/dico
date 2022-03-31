<?php
    function urldecoder($data){
        $newdata = urldecode($data);
        $newdata = str_replace(" ", "-", $newdata);
        return $newdata;
    }