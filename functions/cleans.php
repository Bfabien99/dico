<?php

    function cleans($value){
        $value = strip_tags($value);
        $value = trim($value);
        return $value;
    }