<div class="wrapper">
    <div id="main">
        <?php
            include("slidebar/slidebar.php")
         ?>
        <div class="maincontent">
         <?php
             if(isset($_GET['quanly'])){
                $temp = $_GET["quanly"];
             }else{
                $temp = '';
             }
             if($temp == 'sanpham'){
                include("main/danhmuc.php");
             }elseif($temp == 'giohang'){
                include("main/giohang.php");
             }elseif($temp == 'gioithieu'){
                include("main/gioithieu.php");
             }else{
                include("main/index.php");
             }
            ?> 
        </div>
    </div>
    <div class="clear"></div>
</div>