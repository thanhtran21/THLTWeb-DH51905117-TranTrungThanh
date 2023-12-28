<?php 
    include'C:\wamp64\www\thltweb\webbandienthoai\src\db\connect.php';
    $nsx="";
    if(isset($_POST['submit'])){
        $ma = $_POST['ma'];
        $ten = $_POST['name'];
        $gia = $_POST['gia'];
        if(isset($_FILES['anh'])){
            $anh=$_FILES['anh']['name'];
        }
        $mota = $_POST['mota'];
        $nsx = $_POST['hang'];
        $errors=[];
        if(empty($ma)){
            $errors['ma']['required']='Mã không được bỏ trống';
        }
        else {
            $sql1="SELECT maSanPham from sanpham where maSanPham='$ma'";
            $result1=mysqli_query($conn,$sql1);
            $row1=mysqli_fetch_array($result1);
            if(!empty($row1)){
                $errors['ma']['trung']='Mã sản phẩm đã tồn tại';
            }
            // else{
            //     $errors['username']['trung']='';
            // }
        }
        if(empty($ten)){
            $errors['ten']['required']='Tên sản phẩm không được bỏ trống';
        }
        if(empty($gia)){
            $errors['gia']['required']='Giá không được bỏ trống';
        }
        else if(!is_numeric($gia)){
            $errors['gia']['invalid']='Giá phải là số';
        }
        if(empty($anh)){
            $errors['anh']['required']='Chưa chọn ảnh';
        }
        if(count($errors)==0){  
            $sql = "INSERT into sanpham(maSanPham,tenSanPham,gia,hinhAnh,moTa,maNSX)
            values('$ma','$ten',$gia,'$anh','$mota','$nsx')";
            mysqli_query($conn,$sql);
            header('location:./index.php?action=quanlysanpham&&query=no');
        }
    }
?>

<form class="form" action="./index.php?action=quanlysanpham&&query=them" method="POST" enctype="multipart/form-data">
    <div class="form-main">
        <div class="form-title">
            <h1>Thêm sản phẩm</h1>
        </div>
        <div class="form-content">
            <label class="label" >Mã sản phẩm</label>
            <input class="text" type="text" name="ma" value="<?php echo (!empty($ma)?$ma:"") ?>">
            <?php echo (!empty($errors['ma']['required']))?"<span
            class='message-error'>".$errors['ma']['required']."</span>":false?>
            <?php echo (!empty($errors['ma']['trung']))?"<span
            class='message-error'>".$errors['ma']['trung']."</span>":false ?>
            <label class="label" >Tên sản phẩm</label>
            <input class="text" type="text" name="name" value="<?php echo (!empty($ten)?$ten:"") ?>">
            <?php echo (!empty($errors['ten']['required']))?"<span
            class='message-error'>".$errors['ten']['required']."</span>":false?>
            <label class="label">Giá</label>
            <input class="text" type="text" name="gia" value="<?php echo (!empty($gia)?$gia:"") ?>">
            <?php echo (!empty($errors['gia']['required']))?"<span
            class='message-error'>".$errors['gia']['required']."</span>":false?>
            <?php echo (!empty($errors['gia']['invalid']))?"<span
            class='message-error'>".$errors['gia']['invalid']."</span>":false ?>
            <label class="label">Ảnh</label>
            <input class="text" type="file" name="anh">
            <?php echo (!empty($errors['anh']['required']))?"<span
            class='message-error'>".$errors['anh']['required']."</span>":false?>
            <label class="label">Mô tả</label>
            <input class="text" type="text" name="mota" value="<?php echo (!empty($mota)?$mota:"") ?>">
            <label class="label">Nhà sản xuất</label>
            <select class="text" name="hang" id="Hang">
            <?php
                $sql = "SELECT maNhaSanXuat as id,tenNhaSanXuat as ten from nhasanxuat";
                $result = mysqli_query($conn,$sql);
                while ($row = mysqli_fetch_array($result)) {
                ?>
                <option value="<?php echo $row['id'] ?>" <?php  if($row['id']==$nsx) echo'selected' ?>><?php echo $row['ten']?></option>
                
                <?php
                }
                ?>
            </select>
            <input class="submit" type="submit" name="submit" value="Thêm">
         </div>
    </div>
</form>
