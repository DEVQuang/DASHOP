
<?php 
    include("../../config/config.php");

    $masanpham = $_POST ['masp'];
    $tensanpham = $_POST ['tensp'];
    $gia = $_POST ['giasp'];
    $soluong = $_POST ['soluongsp'];
    $noidung = $_POST ['noidungsp'];
    $tomtat = $_POST ['tomtatsp'];
    $danhmuc = $_POST['danhmucsp'];
    $tinhtrang = $_POST ['tinhtrangsp'];
    // Xu ly hinh anh
    $hinhanh=$_FILES ['hinhanhsp']['name'];
    $hinhanh_tmp =$_FILES ['hinhanhsp']['tmp_name'];
    $hinhanh_time = time().'_'.$hinhanh;
    



    if(isset($_POST['themsp'])){
        // ADD
        $sql_them = "INSERT INTO tb_sanpham (masanpham,tensanpham,Gia,soluong,noidung,tomtat,id_danhmuc,tinhtrang,hinhanh) 
                     VALUE('".$masanpham."','".$tensanpham."','".$gia."','".$soluong."','".$noidung."','".$tomtat."','".$danhmuc."','".$tinhtrang."','".$hinhanh."')";
        mysqli_query($mysqli,$sql_them);
        move_uploaded_file($hinhanh_tmp,'uploads/'.$hinhanh);
        header('Location:../../index.php?action=quanlysanpham&query=quanlysp');
    }elseif(isset($_POST['suasanpham'])){
          // EDIT
        if($hinhanh != ""){
            move_uploaded_file($hinhanh_tmp,'uploads/'.$hinhanh);
           
            $sql_sua = "UPDATE tb_sanpham SET  masanpham='".$masanpham."' ,tensanpham='".$tensanpham."' ,Gia='".$gia."' ,soluong='".$soluong."'
            ,noidung='".$noidung."' ,tomtat='".$tomtat."' ,id_danhmuc='".$danhmuc."',tinhtrang='".$tinhtrang."',hinhanh='".$hinhanh."'
             WHERE id_sanpham= '$_GET[idsanpham]' ";
             
             $sql = "SELECT * From tb_sanpham WHERE id_sanpham = '$_GET[idsanpham]' LIMIT 1";
             $query = mysqli_query($mysqli,$sql);
             while ($row = mysqli_fetch_array($query)){
             unlink('uploads/'.$row['hinhanh']);
             }   
         
      
        }else{
            $sql_sua = "UPDATE tb_sanpham SET  masanpham='".$masanpham."' ,tensanpham='".$tensanpham."' ,Gia='".$gia."' ,soluong='".$soluong."'
            ,noidung='".$noidung."' ,tomtat='".$tomtat."',id_danhmuc='".$danhmuc."' ,tinhtrang='".$tinhtrang."'
             WHERE id_sanpham= '$_GET[idsanpham]' ";
        }
        mysqli_query($mysqli,$sql_sua);
        header('Location:../../index.php?action=quanlysanpham&query=quanlysp');
    }
    else{
        $id = $_GET['idsanpham'];
        $sql = "SELECT * From tb_sanpham WHERE id_sanpham = '$id' LIMIT 1";
        $query = mysqli_query($mysqli,$sql);
        while ($row = mysqli_fetch_array($query)){
            unlink('uploads/'.$row['hinhanh']);
        }
        $sql_xoa = "DELETE FROM tb_sanpham WHERE id_sanpham='".$id."'";
        mysqli_query($mysqli,$sql_xoa);
        header('Location:../../index.php?action=quanlysanpham&query=quanlysp');
    }
?>