<?php 
include 'model/pdo.php';

if(isset($_GET['controller'])){
  $controller = $_GET['controller'];
}else{
  $controller = '';
}
switch($controller){
  case 'danh-sach':{
    require_once('Controller/index.php');
    break;
  }
}
?>
