<?php
    include'C:\wamp64\www\thltweb\webbandienthoai\src\db\connect.php';
    if(isset($_GET['this_id'])){
        $id = $_GET['this_id'];
        $sql = "SELECT * FROM sanpham WHERE maNSX='$id'";
        $result=mysqli_query($conn,$sql);
        $row=mysqli_fetch_array($result);
        if(empty($row)){
            $sql1 = "DELETE FROM nhasanxuat WHERE maNhaSanXuat='$id'";
            mysqli_query($conn,$sql1);
            header('location:index.php?action=quanlynhasanxuat&&query=no');
        }
        else{?>
            <script language="javascript">
            alert("Có sản phẩm tồn tại! Không thể xóa");
            window.location = "index.php?action=quanlynhasanxuat&&query=no";
            </script>;
            <?php
        }
        mysqli_close($conn);
    }
    else 
        echo 'Xoa khong thanh cong';
?>