<?

spl_autoload_register(function($classname){

    $dir = "class";
    $filename = str_replace ("\\", "/", $dir . DIRECTORY_SEPARATOR . $classname . ".php");

    if (file_exists($filename)) {
        require_once($filename);
    }

});

?>