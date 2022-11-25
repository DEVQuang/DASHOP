
   <div id="main" >
      <?php
                  if(isset($_GET['action']) && $_GET['query']){
                     $temp = $_GET["action"];
                     $query = $_GET["query"];
                  }else{
                     $temp = '';
                     $query ='';
                  }
                  if($temp == 'quanlydanhmucsanpham' && $query =='quanlydm' ){
                     include("modules/quanlydanhmucsp/lietke.php");
                  }elseif($temp == 'quanlydanhmucsanpham'&& $query =='them' ){
                       include("modules/quanlydanhmucsp/them.php");
                  
                  }elseif($temp == 'quanlydanhmucsanpham' && $query =='sua'){
                     include("modules/quanlydanhmucsp/sua.php");
                  }elseif($temp == 'quanlysanpham' && $query =='quanlysp'){
                     // include("modules/quanlysp/them.php");
                     include("modules/quanlysp/lietke.php");
                  }elseif($temp == 'quanlysanpham'&& $query =='them' ){
                        include("modules/quanlysp/them.php");
                   
                   
                  }elseif($temp == 'quanlysanpham' && $query =='sua'){
                     include("modules/quanlysp/sua.php");
                  }
                  else{
                     include("modules/dashboard.php");
                  }
                  ?> 
      
       </div>
   <div class="clear"></div>
   <!-- -->