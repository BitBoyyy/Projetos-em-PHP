<?php
if(isset($_GET['p'])){
    $page = $_GET['p'];
}else{
    $page = "calculadora";
} 

switch($page){
case "calculadora":
    require_once("./pages/calculadora.php");
break;
case "cadastro":
    require_once("./pages/cadastro.php");
break;
default:
require_once("./pages/aula_error404.php");
}
?>