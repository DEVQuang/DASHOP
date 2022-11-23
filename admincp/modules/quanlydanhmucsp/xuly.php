
<?php 
    include("../../config/config.php");
    $thutu = $_POST['thutu'];
    $tenloaisp = $_POST['tendanhmuc'];
    if(isset($_POST['themdanhmuc'])){
        // ADD
        $sql_them = "INSERT INTO tb_danhmuc(thutu,tendanhmuc) VALUE('".$thutu."','".$tenloaisp."')";
        mysqli_query($mysqli,$sql_them);
        header('Location:../../index.php?action=quanlydanhmucsanpham&query=them ');
    }elseif(isset($_POST['suadanhmuc'])){
        // EDIT
        $sql_sua = "UPDATE tb_danhmuc SET  thutu='".$thutu."' ,tendanhmuc='".$tenloaisp."' WHERE id_danhmuc= '$_GET[iddanhmuc]' ";
        mysqli_query($mysqli,$sql_sua);
        header('Location:../../index.php?action=quanlydanhmucsanpham&query=them ');

    }else{
        $id = $_GET['iddanhmuc'];
        $sql_xoa = "DELETE FROM tb_danhmuc WHERE id_danhmuc='".$id."'";
        mysqli_query($mysqli,$sql_xoa);
        header('Location:../../index.php?action=quanlydanhmucsanpham&query=them');
    }
?>