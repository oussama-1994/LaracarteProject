<?php

if(! function_exists('title_set')){
function title_set($title){
    $base_title='Laracarte WebSite';

    //si inactive return base_title else return $title + base title
    return empty($title)? $base_title : $title .' | '.$base_title;

    /*
    if($title==='') {
        return $base_title;
    }else{
        return $title .' | '.$base_title;
    }*/
}}



if(! function_exists('active_route_set')){
    function active_route_set($route){
        return Route::is($route) ? 'active' : '';
    }
}
?>
