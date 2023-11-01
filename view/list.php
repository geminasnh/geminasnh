
<div class="danhsach">
  <h3>danh sach quan ly o to</h3>
  <a href="index.php?controller=danh-sach&action=add">them o to</a>
  <table border="1" width=100%>

    <tr>
      <th>stt</th>
      <th>name</th>
      <th>image</th>
      <th>catrgory</th>
      <th colspan="2">action</th>
    </tr>
<?php  
foreach ($listdanhmuc as $danhmuc){
  extract($danhmuc);
  $suadm="index.php?controller=danh-sach&action=suadm&id=".$id;
  $xoadm="index.php?controller=danh-sach&action=xoadm&id=".$id;
  echo ' <tr>
  <td>'.$id.'</td>
  <td>'.$name.'</td>
  <td><img src="images/'.$image.'" width=80 alt=""></td>
  <td>'.$categoryId.'</td>
  <td><a href="'.$suadm.'"><input type="button" value="sua"></a></td>
  <td><a onclick = "return confirm("ban co muon xoa ko")" href="'.$xoadm.'"><input type="button" value="xoa"></a></td>
</tr>';
}
?>
   

  </table>
</div>