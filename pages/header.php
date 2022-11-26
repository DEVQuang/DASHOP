<?php 
      $sql_danhmuc = "SELECT * FROM tb_danhmuc ORDER BY id_danhmuc DESC ";
      $query_danhmuc = mysqli_query($mysqli,$sql_danhmuc);
?>

<div class="header">
    <div class="navbar" id="Header"> 
        <div class="navbar_collapse">
            <a href="index.php" class="nav_brand"><img src="./img/logo_DA.png"></a>
                <a href="index.php" class="nav_brand">DASHOP</a>
            <ul class="navbar_nav">
                
                <li class="nav_item"><a href="index.php" class="nav_link">Trang chủ</a></li>
                <li class="nav_item product"><a href="index.php" class="nav_link">Sản phẩm</a>
                    <ul class="nav_item_product_list">
                        <?php 
                          while($row_danhmuc = mysqli_fetch_array($query_danhmuc)){
                        ?>
                        <li class="nav_item"><a href="index.php?quanly=sanpham&id=<?php echo $row_danhmuc['id_danhmuc']?>"><?php echo $row_danhmuc['tendanhmuc']?></a></li>
                        <?php
                          }
                        ?>
                    </ul>
                </li>

                <li class="nav_item introduce"><a href="index.php?quanly=gioithieu" class="nav_link">Giới thiệu về DASHOP</a></li>
            </ul>
        </div>
        <div class="navbar_collapse">
            <li class="nav_item cart">
                <a href="index.php?quanly=giohang" class="nav_link"><i class=" footer_icon fa-solid fa-cart-shopping"></i></a> 
            </li>
            <div class="search_container">
                <form action="">
                    <input type="search" placeholder="Nhập sản phẩm" aria-label="Search">
                    <button class=" btn btn_search" type="submit"><a href=""></a><i class=" footer_icon fa-solid fa-magnifying-glass"></i></button>
                </form>
                <button class="btn btn-outline-success"><a href="" ></a>Đăng nhập</button>
                <button class="btn btn-outline-success"><a href="" ></a>Đăng ký</button>
               
              
            </div>
               
        </div>
    </div>
</div>
  