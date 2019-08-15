<?php

if(! function_exists('title_set')){
function title_set($title){
    $base_title='Laracarte WebSite ';
    if($title==='') {
        return $base_title;
    }else{
        return $title .' | '.$base_title;
    }
}}
?>
