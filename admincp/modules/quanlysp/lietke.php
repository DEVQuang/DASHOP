<?php 
    $sql_lietke_sp = "SELECT * FROM tb_sanpham,tb_danhmuc WHERE tb_sanpham.id_danhmuc = tb_danhmuc.id_danhmuc ORDER BY id_sanpham DESC";
    $query_lietke_sp =   mysqli_query($mysqli,$sql_lietke_sp);
?>
<div class="product_form">
<a href="index.php?action=quanlysanpham&query=them" class="btn_form">Thêm sản phẩm</a>
  <table class="list_product_portfolio" border="1" width="50%" style="border-collapse: collapse;" >
   <tr>
    <th>Id</th>
    <th>Mã sản phẩm</th>
    <th>Tên sản phẩm</th> 
    <th>Giá</th>
    <th>Số Lượng</th>
    <th>Tóm tắt</th>
    <th>Danh Mục</th>
    <th>Tình Trạng</th>
    <th>Hình ảnh </th>
    <th></th>
  </tr>



  <?php 
   $i = 0;
   while($row = mysqli_fetch_array($query_lietke_sp)){ 
    $i++;
  ?>
  <tr>
    <td><?php echo $i ?></td>
    <td><?php echo $row['masanpham'] ?></td>
    <td><?php echo $row['tensanpham'] ?></td>
    <td><?php echo $row['Gia'] ?></td>
    <td><?php echo $row['soluong']?></td>
    <td><?php echo $row['tomtat'] ?></td>
    <td><?php echo $row['tendanhmuc'] ?></td>


    <td>
      <?php  
      if($row['tinhtrang']==1){
        echo 'Kích Hoạt';
      }else{
        echo 'Ẩn';
      }
      ?>
    </td>
    <td><img src="modules/quanlysp/uploads/<?php echo $row['hinhanh'] ?>" width="100px"></td>
    <td>
        <a href="modules/quanlysp/xuly.php?idsanpham=<?php echo $row['id_sanpham'] ?>">Xóa</a> <span>|</span> <a href="?action=quanlysanpham&query=sua&idsanpham=<?php echo $row['id_sanpham'] ?>">Sửa</a>
    </td>
  </tr>
  <?php 
   } 
  ?>
</table>
</div>