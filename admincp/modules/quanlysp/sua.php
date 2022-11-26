<?php 
    $sql_sua_sp = "SELECT * FROM tb_sanpham WHERE id_sanpham ='$_GET[idsanpham]' LIMIT 1";
    $query_sua_sp =   mysqli_query($mysqli,$sql_sua_sp);
?>
<?php 
    while($row = mysqli_fetch_array($query_sua_sp)){
?>
<div class="product_form">
    <form class="product_portfolio position_form" method="POST" action="modules/quanlysp/xuly.php?idsanpham=<?php echo $row['id_sanpham']?>" enctype="multipart/form-data">
        <h3 class="heading_product_portfolio">Sửa sản phẩm</h3>
        <div class="txt_filed">
        <lable class="lable_product_portfolio">Mã Sản Phẩm</lable>
        <input class="product_portfolio_input" type="number" name="masp" value="<?php echo $row['masanpham']?>" >
        </div>
        <div class="txt_filed">
        <lable class="lable_product_portfolio">Tên Sản Phẩm</lable>
        <input class="product_portfolio_input" name="tensp" type="text" value="<?php echo $row['tensanpham'] ?>">
        </div>
        <div class="txt_filed txt_filed_t">
        <lable class="lable_product_portfolio">Giá </lable>
        <input class="product_portfolio_input" name="giasp" type="text" value="<?php echo $row['Gia'] ?>">
        </div>
        <div class="txt_filed">
        <lable class="lable_product_portfolio">Số lượng </lable>
        <input class="product_portfolio_input" name="soluongsp" type="text" value="<?php echo $row['soluong'] ?>">
        </div>
        <div class=" txt_filed">
        <lable class="lable_product_portfolio">Nội dung </lable>
        <textarea style="resize: none;" name="noidungsp" id="" cols="50" rows="80" class="product_portfolio_textarea" value="<?php echo $row['noidung'] ?>"></textarea>
        </div>
        <div class="txt_filed txt_filed_textarea">
        <lable class="lable_product_portfolio">Tóm tắt </lable>
        <textarea style="resize: none;" name="tomtatsp" id="" cols="10" rows="10" class="product_portfolio_textarea" value="<?php echo $row['tomtat'] ?>"></textarea>
        </div>
        <div class="txt_filed">
        <lable class="lable_product_portfolio">Danh Mục Sản Phẩm </lable>
            <select name="danhmucsp" id="" class="select_product">
            <?php 
               $sql_danhmuc = "SELECT * FROM tb_danhmuc ORDER BY id_danhmuc DESC ";
               $query_danhmuc = mysqli_query($mysqli,$sql_danhmuc);
               while($row_danhmuc = mysqli_fetch_array($query_danhmuc)){
                if($row_danhmuc['id_danhmuc']==$row['id_danhmuc']){
            ?>
                <option selected value="<?php echo $row_danhmuc['id_danhmuc']?>" class="product_status"><?php echo $row_danhmuc['tendanhmuc']?></option>
            <?php 
                }else{
            ?>
             <option value="<?php echo $row_danhmuc['id_danhmuc']?>" class="product_status"><?php echo $row_danhmuc['tendanhmuc']?></option>
            <?php     
                }
               }
            ?>     

            </select>
        </div>
        <div class="txt_filed">
        <lable class="lable_product_portfolio">Tình trạng </lable>
            <select name="tinhtrangsp" id="" class="select_product">
                <?php
                if($row['tinhtrang']==1){
                ?>
                <option value="1" class="product_status" selected>Kích hoạt</option>
                <option value="0" class="product_status">Ẩn</option>
                <?php 
                }else{
                ?>
                <option value="1" class="product_status">Kích hoạt</option>
                <option value="0" class="product_status" selected>Ẩn</option>
                <?php 
                     }
                ?>
               
              
            </select>
        </div>
        <div class="txt_filed">
        <lable class="lable_product_portfolio">Hình Ảnh </lable>
        <div class="txt_file_btn_img">
        <input class="product_portfolio_input" name="hinhanhsp" type="file">
        <img src="modules/quanlysp/uploads/<?php echo $row['hinhanh'] ?>" width="100px">
        </div>
        <br>
        </div>
       <div class="txt_filed"></div>
        <input class="product_portfolio_submit"type="submit" value="Sửa Sản Phẩm" name="suasanpham">
    </form>
</div>
<?php
    }
?>