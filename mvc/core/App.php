<?php
class App {
    //http://localhost:8080/mvcwebphp/Home/SayHi/1/2/3
    protected $controller = "Home";
    protected $action = "SayHi"; 
    protected $params = [];


    function __construct(){
        $arr = $this->URLProcess();
        print_r($arr); 
    }

    function URLProcess(){
        // Home/SayHi/1/2/3
        // cat ra gan bien
        if(isset($_GET["url"])){
            return explode("/",filter_var(trim($_GET["url"],"/")));
        }
    }
}
?>