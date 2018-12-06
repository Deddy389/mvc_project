<?php
require_once "application/config/init.php";

spl_autoload_register(function($class){
    require_once "core/".$class.".php";
});




for($i = 0; $i<count($init_load); $i++){
    if($init_load[$i] != 'init'){
        require_once "application/config/".$init_load[$i].".php";
        }
}

for($i=0 ; $i<count($autoload["library"]); $i++){

if(file_exists("system/library/".ucfirst($autoload["library"][$i]).".php")){
require_once ("library/".ucfirst($autoload["library"][$i]).".php");
} else {
echo "<b style='margin-top:200px;'><center>Error</center></div>";
echo "<div style=' width:50%; border:1px solid red; padding:20px 20px; margin:10px auto; text-align:center;'>Uncaught to load class ". ($autoload["library"][$i])."</div>";
die();
}

}

/*
$library;
foreach($autoload["library"] as $key ){
$library = $key;
}


if(class_exists($library)){
echo "db";
} else {
echo "no";
}
*/

