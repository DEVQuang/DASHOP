<?php 
    $sql_sua_danhmucsp = "SELECT * FROM tb_danhmuc WHERE id_danhmuc ='$_GET[iddanhmuc]' LIMIT 1";
    $query_sua_danhmucsp =   mysqli_query($mysqli,$sql_sua_danhmucsp);
?>
<div class="product_form">
<form class="product_portfolio" method="POST" action="modules/quanlydanhmucsp/xuly.php?iddanhmuc=<?php echo $_GET['iddanhmuc']?>">

        <h3 class="heading_product_portfolio">Sửa danh mục sản phẩm</h3>
        <?php 
        while($giong = mysqli_fetch_array($query_sua_danhmucsp)){
        ?>
        <div class="txt_filed">
      
        <lable class="lable_product_portfolio">Thứ tự</lable>
        <input class="produc_portfolio_input" type="number" name="thutu" value="<?php echo $giong['thutu'] ?>" >
        </div>
        <div class="txt_filed">
        <lable class="lable_product_portfolio">Tên danh mục</lable>
        <input class="produc_portfolio_input" name="tendanhmuc" type="text" value="<?php echo $giong['tendanhmuc'] ?>">
        </div>
        <input class="product_portfolio_submit"type="submit" value="Sửa danh mục" name="suadanhmuc">
        <?php
        } 
        ?>
</form>
</div>