<?php 
          $sql_product = "SELECT * FROM tb_sanpham,tb_danhmuc WHERE tb_sanpham.id_danhmuc = tb_danhmuc.id_danhmuc
          AND tb_sanpham.id_danhmuc = '$_GET[id]' ORDER BY tb_sanpham.id_sanpham DESC ";
          $query_product = mysqli_query($mysqli,$sql_product);
        //   if($query_product){
        //     $row_title = mysqli_fetch_array($query_product);
        //   }else{
        //     $row_title = 'CHƯA CÓ SẢN PHẨM' ;
        //   }
          
     

?>
<h3><span>&#10148</span> Danh Mục Sản Phẩm: Tai Nghe </h3>
<ul class="cart_product">
    <?php 
        while($row_product =mysqli_fetch_array($query_product)){
    ?>
    <li>
        <a href="#" class="product_link">
            <img src="admincp/modules/quanlysp/uploads/<?php echo $row_product['hinhanh']?>" alt="">
            <h1 class="product_heading"><?php echo $row_product['tensanpham']?></h1>
            <p class="product_tile"><?php echo $row_product['tomtat']?></p>
        </a>
        <p class="product_price"><?php echo number_format($row_product['Gia'],'0',',','.').'đ' ?></p>
        <button class="product_btn--add">Thêm vào giỏ hàng</button>
    </li>
    <?php 
    }
    ?>
</ul>