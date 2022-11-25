
<?php 
    include("../../config/config.php");

    $masanpham = $_POST ['masp'];
    $tensanpham = $_POST ['tensp'];
    $gia = $_POST ['giasp'];
    $soluong = $_POST ['soluongsp'];
    $noidung = $_POST ['noidungsp'];
    $tomtat = $_POST ['tomtatsp'];
    $tinhtrang = $_POST ['tinhtrangsp'];
    // Xu ly hinh anh
    $hinhanh=$_FILES ['hinhanhsp']['name'];
    $hinhanh_tmp =$_FILES ['hinhanhsp']['tmp_name'];
    $hinhanh_time = time().'_'.$hinhanh;



    if(isset($_POST['themsp'])){
        // ADD
        $sql_them = "INSERT INTO tb_sanpham (masanpham,tensanpham,Gia,soluong,noidung,tomtat,tinhtrang,hinhanh) 
                     VALUE('".$masanpham."','".$tensanpham."','".$gia."','".$soluong."','".$noidung."','".$tomtat."','".$tinhtrang."','".$hinhanh."')";
        mysqli_query($mysqli,$sql_them);
        move_uploaded_file($hinhanh_tmp,'uploads/'.$hinhanh);
        header('Location:../../index.php?action=quanlysanpham&query=them');
    }elseif(isset($_POST['suasanpham'])){
        if
        // EDIT
        $sql_sua = "UPDATE tb_sanpham SET  masp='".$masanpham."' ,tensp='".$tensanpham."' ,giasp='".$gia."' ,soluongsp='".$soluong."'
        ,noidungsp='".$noidung."' ,tomtatsp='".$tomtat."' ,tinhtrangsp='".$tinhtrang."'
         WHERE id_sanpham= '$_GET[idsanpham]' ";
        mysqli_query($mysqli,$sql_sua);
        // header('Location:../../index.php?action=quanlydanhmucsanpham&query=them ');

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
        header('Location:../../index.php?action=quanlysanpham&query=them');
    }
?>