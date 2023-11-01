<?php
if (is_array($dm)) {
  extract($dm);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <div class="content">
    <div class="danhsachxeoto">
      <a href="index.php?controller=danh-sach&action=list">danh sach</a>
      <h3>cap nhat o to</h3>
      <form action="index.php?controller=danh-sach&action=updatedm" method="POST" enctype="multipart/form-data">
        <table>
          <tr>
            <td>STT: </td>
            <td><input type="number" name="stt" placeholder="số thứ tự"
               ></td>
          </tr>
          <tr>
            <td>name: </td>
            <td><input type="text" name="ten" placeholder="ten"
                value="<?php if (isset($name) && ($name != ""))
                  echo $name; ?>"></td>
          </tr>
          <tr>
            <td>image</td>
            <td><input type="file" name="upfile"></td>
          </tr>
          <tr>
            <td>categpry</td>
            <td><input type="text" name="loai" placeholder="category"
                value="<?php if (isset($loai) && ($loai != ""))
                  echo $loai; ?>"></td>
          </tr>
          <tr>
            <input type="hidden" name="id" value="<?php if (isset($id) && ($id > 0))
              echo $id; ?>">
            <td>&nbsp;</td>
            <td><input type="submit" name="capnhat" value="cap nhat"></td>
          </tr>
        </table>
      </form>
    </div>
  </div>
</body>

</html>