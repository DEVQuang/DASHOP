<div class="clear"></div>
<div class="main">
<?php
             if(isset($_GET['action'])&&$_GET['query']){
                $temp = $_GET["action"];
                $query = $_GET["query"];
             }else{
                $temp = '';
                $query ='';
             }
             if($temp == 'quanlydanhmucsanpham' && $query =='them'){
                include("modules/quanlydanhmucsp/them.php");
                include("modules/quanlydanhmucsp/lietke.php");
             }elseif($temp == 'quanlydanhmucsanpham' && $query =='sua'){
           
               include("modules/quanlydanhmucsp/sua.php");
             }
             else{
                include("modules/dashboard.php");
             }
            ?> 
</div>
