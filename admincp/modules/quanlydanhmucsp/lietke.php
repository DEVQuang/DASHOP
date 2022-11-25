<?php 
    $sql_lietke_danhmucsp = "SELECT * FROM tb_danhmuc ORDER BY thutu DESC";
    $query_lietke_danhmucsp =   mysqli_query($mysqli,$sql_lietke_danhmucsp);
?>
<div class="product_form">
<a href="index.php?action=quanlydanhmucsanpham&query=them" class="btn_form">Thêm danh mục</a>
<table class="list_product_portfolio " border="1" width="50%" style="border-collapse: collapse;" >
  <tr>
    <th>Id</th>
    <th>Tên danh mục sản phẩm</th> 
    <th>Quản lý</th>

  </tr>
  <?php 
   $i = 0;
   while($row = mysqli_fetch_array($query_lietke_danhmucsp)){ 
    $i++;
  ?>
  <tr>
    <td><?php echo $i ?></td>
    <td><?php echo $row['tendanhmuc'] ?></td>
    <td>
        <a href="modules/quanlydanhmucsp/xuly.php?iddanhmuc=<?php echo $row['id_danhmuc'] ?>">Xóa</a> <span>|</span> <a href="?action=quanlydanhmucsanpham&query=sua&iddanhmuc=<?php echo $row['id_danhmuc'] ?>">Sửa</a>
    </td>
  </tr>
  <?php 
   } 
  ?>
</table>
</div>
