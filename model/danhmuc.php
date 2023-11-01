<?php 
function insert_danhmuc ($ten, $files, $loai){
  $sql = "INSERT INTO cars (name, image, categoryId) VALUES ('$ten','$files','$loai')";
  pdo_execute($sql);
}
function delete_danhmuc($id){
  $sql = "DELETE FROM cars WHERE id=" .$id;
        pdo_execute($sql);
}
function loadall (){
  $sql = "SELECT * FROM cars ORDER BY id desc ";
  $listdanhmuc = pdo_query($sql);
  return $listdanhmuc;
}
function loadone($id){
  $sql = "SELECT * FROM cars WHERE id=".$id;
  $dm = pdo_query_one($sql);
  return $dm;
}
function update_danhmuc($id, $ten, $files, $loai){
  $sql = "UPDATE cars SET NAME = '$ten, $files, $loai' WHERE id=".$id;
  pdo_execute($sql);
}
?>