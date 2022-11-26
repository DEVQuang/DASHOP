<div class="product_add">
    
    <form class="product_portfolio" method="POST" action="modules/quanlysp/xuly.php" enctype="multipart/form-data">
        <h3 class="heading_product_portfolio">Thêm sản phẩm</h3>
        <div class="txt_filed">
        <lable class="lable_product_portfolio">Mã Sản Phẩm</lable>
        <input class="product_portfolio_input" type="number" name="masp">
        </div>
        <div class="txt_filed">
        <lable class="lable_product_portfolio">Tên Sản Phẩm</lable>
        <input class="product_portfolio_input" name="tensp" type="text">
        </div>
        <div class="txt_filed txt_filed_t">
        <lable class="lable_product_portfolio">Giá </lable>
        <input class="product_portfolio_input" name="giasp" type="text">
        </div>
        <div class="txt_filed">
        <lable class="lable_product_portfolio">Số lượng </lable>
        <input class="product_portfolio_input" name="soluongsp" type="text">
        </div>
        <div class=" txt_filed">
        <lable class="lable_product_portfolio">Nội dung </lable>
        <textarea style="resize: none;" name="noidungsp" id="" cols="50" rows="80" class="product_portfolio_textarea"></textarea>
        </div>
        <div class="txt_filed txt_filed_textarea">
        <lable class="lable_product_portfolio">Tóm tắt </lable>
        <textarea style="resize: none;" name="tomtatsp" id="" cols="10" rows="10" class="product_portfolio_textarea"></textarea>
        </div>
        <div class="txt_filed">
        <lable class="lable_product_portfolio">Danh Mục Sản Phẩm </lable>
            <select name="danhmucsp" id="" class="select_product">
               <?php 
               $sql_danhmuc = "SELECT * FROM tb_danhmuc ORDER BY id_danhmuc DESC ";
               $query_danhmuc = mysqli_query($mysqli,$sql_danhmuc);
               while($row_danhmuc = mysqli_fetch_array($query_danhmuc)){

               ?>
                <option value="<?php echo $row_danhmuc['id_danhmuc']?>" class="product_status"><?php echo $row_danhmuc['tendanhmuc']?></option>
               <?php 
               }
                ?>
            </select>
        </div>
        <div class="txt_filed">
        <lable class="lable_product_portfolio">Tình trạng </lable>
            <select name="tinhtrangsp" id="" class="select_product">
                <option value="1" class="product_status">Kích hoạt</option>
                <option value="0" class="product_status">Ẩn</option>
            </select>
        </div>
        <div class="txt_filed">
        <lable class="lable_product_portfolio">Hình Ảnh </lable>
        <input class="product_portfolio_input" name="hinhanhsp" type="file">
        </div>
        <input class="product_portfolio_submit"type="submit" value="Thêm Sản Phẩm" name="themsp">
    </form>
</div>
 
   
