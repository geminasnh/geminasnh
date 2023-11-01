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
      <h3>danh sach o to</h3>
      <form action="" method="POST" enctype="multipart/form-data">
        <table>
          <tr>
            <td>STT: </td>
            <td><input type="number" name="stt" placeholder="số thứ tự" required></td>
          </tr>
          <tr>
            <td>name: </td>
            <td><input type="text" name="ten" placeholder="ten" required></td>
          </tr>
          <tr>
            <td>image</td>
            <td><input type="file" name="upfile"></td>
          </tr>
          <tr>
            <td>categpry</td>
            <td><input type="text" name="loai" placeholder="category" required></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td><input type="submit" name="add" value="them moi"></td>
          </tr>
        </table>
      </form>
    </div>
  </div>
</body>

</html>