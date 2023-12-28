<?php
// session_start();
//     echo $username;
    // session_start();
?>
<div class="menu">
    <div class="menu-content-left">
        <ul class="menu-list">
            <li class="menu-item"><a class="menu-link" href="./index.php"><i class="menu-icon fa-solid fa-house"></i>Trang chủ</a></li>
            <li class="menu-item">
                <form class="menu-search" action="./index.php?action=search" method="POST">
                    <input class="search" type="text" name="text" value="
                    <?php $value=isset($_POST['text'])?$_POST['text']:"";
                    echo $value?>">
                    <button class="btn-search" type="submit" name="search">
                        <i class="menu-icon fa-solid fa-magnifying-glass"></i>
                    </button>
                </form>
            </li>
        </ul>
    </div>
    <div class="menu-content-right">
        <ul class="menu-list">
            <!-- <li class="menu-item"><a class="menu-link" href="./index.php?action=xemkhuyenmai"><i class="menu-icon fa-solid fa-star"></i>Tin khuyến mãi</a></li> -->
            <li class="menu-item"><a class="menu-link" href="./index.php?action=xemdonhang"><i class="menu-icon fa-solid fa-table-list"></i>Đơn hàng</a></li>
            <li class="menu-item"><a class="menu-link" href="./index.php?action=xemgiohang"><i class="menu-icon fa-solid fa-cart-shopping"></i>Giỏ hàng</a></li>
        <?php
            include'./../db/connect.php';
            session_start();
            if(isset($_SESSION['dangnhap'])){
                $username=$_SESSION['dangnhap'];
                $sql="SELECT hoTen from taikhoan where userName like '$username'";
                $result=mysqli_query($conn,$sql);
                $row=mysqli_fetch_array($result);
            ?>
                <li class="menu-item info" >Xin chào <?php echo $row['hoTen']?>
                    <div class="menu-sub">
                        <ul class="menu-sub-list">
                            <li class="menu-sub-item">
                                <a class="menu-sub-title" href="./index.php?action=chinhsuathongtin">Chỉnh sửa thông tin</a>
                            </li>
                            <li class="menu-sub-item">
                                <a class="menu-sub-title" href="./index.php?action=doimatkhau">Đổi mật khẩu</a>
                            </li>
                        </ul>   
                    </div>
                </li>
                <li class="menu-item"><a class="menu-link" href="./modules/quanlythongtin/dangxuat?action=dangxuat"><i class="menu-icon fa-solid fa-right-from-bracket"></i>Đăng xuất </a></li>
            <?php 
            }
            else
            { ?>
                <li class="menu-item"><a class="menu-link" href="./index.php?action=register"><i class="menu-icon fa-solid fa-pen-to-square"></i>Đăng ký</a></li>
                <li class="menu-item"><a class="menu-link" href="./index.php?action=login"><i class="menu-icon fa-solid fa-user"></i>Đăng nhập</a></li>
            <?php
            }
        ?>
            
        </ul>
    </div>
</div>