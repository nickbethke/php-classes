<?php
spl_autoload_register(function ($class_name) {
    $class_name = join("/",explode("\\",$class_name));
    if(file_exists("./classes/" . $class_name . '.php')){
        include "./classes/" . $class_name . '.php';
    }else{
        throw new Exception("class: ",$class_name." could not be loaded");
    }
});
