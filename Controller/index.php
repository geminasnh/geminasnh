<?php
include 'model/danhmuc.php';

if (isset($_GET['action'])) {
  $action = $_GET['action'];
} else {
  $action = '';
}
switch ($action) {
  case 'add': {
    $loi = [];
      if (isset($_POST['add'])) {
        $stt = $_POST['stt'];
        $ten = $_POST['ten'];
        $files = basename($_FILES['upfile']['name']);
        $loai = $_POST['loai'];
if(empty($stt)){
  $loi['stt'] = "truong hop nay bat buoc nhap";
}else if($stt<0){
 $loi['stt'] = "ID phai la so uong";
}
 if(empty($ten)){
  $loi['ten']= "truong hop nay bat buoc nhap";
 }

   if(empty($loai)){
    $loi['loai']="truong hop ";
  }


        $target_dir = "images/";
        $target_file = $target_dir . $files;
        insert_danhmuc($ten, $files, $loai);
        if (move_uploaded_file($_FILES['upfile']['tmp_name'], $target_file)) {
          echo "upload thanh cong";
        } else {
          echo "upload that bai";
        }
      }
      require_once('view/add.php');
      break;
    }
  case 'list': {
     $listdanhmuc = loadall();
      require_once('view/list.php');
      break;
    }
  case 'xoadm': {
      if (isset($_GET['id']) && ($_GET['id'] > 0)) {
        $id = $_GET['id'];
        delete_danhmuc($_GET['id']);
      }
      $listdanhmuc = loadall();
      require_once('view/list.php');
      break;
    }
  case 'suadm': {
      if (isset($_GET['id']) && ($_GET['id'] > 0)) {

        $dm = loadone($_GET['id']);
      }
      require_once('view/edit.php');
      break;
    }
    case 'updatedm':{
      if (isset($_POST['capnhat'])) {
        $stt = $_POST['stt'];
        $ten = $_POST['ten'];
        $id = $_POST['id'];
        $files = basename($_FILES['upfile']['name']);
        $loai = $_POST['loai'];
        if(empty($stt)){
          $loi['stt'] = "truong hop nay bat buoc nhap";
        }else if($stt<0){
         $loi['stt'] = "ID phai la so uong";
        }
         if(empty($ten)){
          $loi['ten']= "truong hop nay bat buoc nhap";
         }
         if(($files['error'] !=0)){
          $loi['anh'] = "trong hop nay bat buoc nhap";
        
         }
           if(empty($loai)){
            $loi['loai']="truong hop ";
          }
        
        $target_dir = "images/";
        $target_file = $target_dir . $files;
        update_danhmuc($id, $ten, $files, $loai);
        if (move_uploaded_file($_FILES['upfile']['tmp_name'], $target_file)) {
          echo "cap nhat thanh cong";
        } else {
          echo "cap nhat that bai";
        }
      }
      $listdanhmuc = loadall();
      require_once('view/list.php');
    }
  default: {
      require_once('view/list.php');
      break;
    }
}
?>